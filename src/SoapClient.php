<?php


namespace SamIT\TransIP;

/**
 * Class SoapClient
 * SoapClient that implements the Transip request signing logic.
 * The encryption / encoding related functions have been taken from the API package available at https://www.transip.nl/transip/api/
 * @package SamIT\TransIP
 */
class SoapClient extends \SoapClient
{
    private $privateKey;
    private $endpoint;

    public function __construct($wsdl, array $options = null)
    {
        parent::__construct($wsdl, $options);
        $this->privateKey = $options['privateKey'];
        $this->endpoint = parse_url($wsdl, PHP_URL_HOST);
        $this->__setCookie('login', $options['userName']);
        $this->__setCookie('mode', $options['mode'] ?? 'readonly');
        $this->__setCookie('clientVersion', "sam-it/transip-api");
    }

    /**
     * Extended soap call that implements the TransIP request signing logic.
     * @param string $function_name
     * @param array $arguments
     * @param null $options
     * @param null $input_headers
     * @param null $output_headers
     * @return mixed
     */
    public function __soapCall(
        $function_name,
        $arguments,
        $options = null,
        $input_headers = null,
        &$output_headers = null
    ) {
        $class = get_class($this);


        $service = strtr(substr($class, strrpos($class, '\\') + 1), ['ServiceService' => 'Service']);
        $this->__setCookie('timestamp', $timestamp = time());
        $this->__setCookie('nonce', $nonce = uniqid('', true));
        $this->__setCookie('signature', $this->urlEncode($this->sign(array_merge($arguments, [
            '__method' => $function_name,
            '__service' => $service,
            '__hostname' => $this->endpoint,
            '__timestamp' => $timestamp,
            '__nonce' => $nonce,

        ]))));
        return parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
    }


    private function sign(array $params)
    {
        // Fixup our private key, copy-pasting the key might lead to whitespace faults
        if(!preg_match('/-----BEGIN (RSA )?PRIVATE KEY-----(.*)-----END (RSA )?PRIVATE KEY-----/si', $this->privateKey, $matches))
            die('<p>Could not find your private key, please supply your private key in the ApiSettings file. You can request a new private key in your TransIP Controlpanel.</p>');

        $key = $matches[2];
        $key = preg_replace('/\s*/s', '', $key);
        $key = chunk_split($key, 64, "\n");

        $key = "-----BEGIN PRIVATE KEY-----\n" . $key . "-----END PRIVATE KEY-----";

        $digest = $this->digestSha512Asn1($this->encodeParameters($params));
        if(!@openssl_private_encrypt($digest, $signature, $key))
            die('<p>Could not sign your request, please supply a valid private key. You can request a new private key in your TransIP Controlpanel.</p>');

        return base64_encode($signature);
    }

    /**
     * Encodes the given paramaters into a url encoded string based upon RFC 3986.
     *
     * @param  mixed   $parameters  The parameters to encode.
     * @param  string  $keyPrefix   Key prefix.
     * @return string               The given parameters encoded according to RFC 3986.
     */
    private function encodeParameters($parameters, $keyPrefix = null)
    {
        if(!is_array($parameters) && !is_object($parameters))
            return $this->urlEncode($parameters);

        $encodedData = [];

        foreach($parameters as $key => $value)
        {
            $encodedData[] = $this->encodeParam($key, $value, $keyPrefix);
        }

        // Also loop over getters.
        if (is_object($parameters) && empty($encodedData)) {
            foreach ((new \ReflectionClass($parameters))->getMethods(\ReflectionMethod::IS_PUBLIC) as $reflectionMethod) {
                if ($reflectionMethod->getNumberOfRequiredParameters() === 0 && strncmp($reflectionMethod->getName(), 'get', 3) === 0) {
                    $key = lcfirst(substr($reflectionMethod->getName(), 3));
                    $value = $reflectionMethod->invoke($parameters);
                    $encodedData[] = $this->encodeParam($key, $value, $keyPrefix);

                }
            }

        }

        return implode('&', $encodedData);
    }


    private function encodeParam($key, $value, $keyPrefix)
    {
        $encodedKey = is_null($keyPrefix)
            ? $this->urlEncode($key)
            : $keyPrefix . '[' . $this->urlEncode($key) . ']';

        if(is_array($value) || is_object($value))
        {
            return $this->encodeParameters($value, $encodedKey);
        }
        else
        {
            return $encodedKey . '=' . $this->urlEncode($value);
        }
    }
    /**
     * Our own function to encode a string according to RFC 3986 since.
     * PHP < 5.3.0 encodes the ~ character which is not allowed.
     *
     * @param string $string The string to encode.
     * @return string The encoded string according to RFC 3986.
     */
    protected function urlEncode($string)
    {
        $string = rawurlencode($string);
        return str_replace('%7E', '~', $string);
    }

    /**
     * Creates a digest of the given data, with an asn1 header.
     *
     * @param  string  $data  The data to create a digest of.
     * @return string         The digest of the data, with asn1 header.
     */
    protected function digestSha512Asn1($data)
    {
        $digest = hash('sha512', $data, true);

        // this ASN1 header is sha512 specific
        $asn1  = chr(0x30).chr(0x51);
        $asn1 .= chr(0x30).chr(0x0d);
        $asn1 .= chr(0x06).chr(0x09);
        $asn1 .= chr(0x60).chr(0x86).chr(0x48).chr(0x01).chr(0x65);
        $asn1 .= chr(0x03).chr(0x04);
        $asn1 .= chr(0x02).chr(0x03);
        $asn1 .= chr(0x05).chr(0x00);
        $asn1 .= chr(0x04).chr(0x40);
        $asn1 .= $digest;

        return $asn1;
    }
}