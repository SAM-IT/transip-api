<?php

namespace SamIT\TransIP;

class ForwardService extends \SamIT\TransIP\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfstring' => 'SamIT\\TransIP\\ArrayOfstring',
      'Forward' => 'SamIT\\TransIP\\Forward',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://api.transip.nl/wsdl/?service=ForwardService';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @return ArrayOfstring
     */
    public function getForwardDomainNames()
    {
      return $this->__soapCall('getForwardDomainNames', array());
    }

    /**
     * @param string $forwardDomainName
     * @return Forward
     */
    public function getInfo($forwardDomainName)
    {
      return $this->__soapCall('getInfo', array($forwardDomainName));
    }

    /**
     * @param Forward $forward
     * @return void
     */
    public function order(Forward $forward)
    {
      return $this->__soapCall('order', array($forward));
    }

    /**
     * @param string $forwardDomainName
     * @param string $endTime
     * @return void
     */
    public function cancel($forwardDomainName, $endTime)
    {
      return $this->__soapCall('cancel', array($forwardDomainName, $endTime));
    }

    /**
     * @param Forward $forward
     * @return void
     */
    public function modify(Forward $forward)
    {
      return $this->__soapCall('modify', array($forward));
    }

}
