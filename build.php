<?php

include 'src/vendor/autoload.php';

// Get all services by scraping the documentation website.
$documentationRoot = 'https://api.transip.nl/docs/transip.nl/package-Transip.html';
$docs = file_get_contents('https://api.transip.nl/docs/transip.nl/package-Transip.html');
preg_match_all('/Transip_(.*?Service)/', $docs, $matches);
$services = array_unique($matches[1]);

/**
 * This code can determine the current API version, we do not use it since the TransIP
 * API does not validate the value we set.
 */
// Find the page for any service.
/*
if (preg_match('/href\=\"(.*?Transip_.*?Service\.html)\"/', $docs, $serviceDocs)) {
    $documentationRoot = dirname($documentationRoot) . '/' . $serviceDocs[1];

    preg_match('/API_VERSION.*code.*\'(.*)\'.*code.*API_VERSION/s', file_get_contents($documentationRoot), $match);
    $apiVersion = $match[1];
} else {
    $apiVersion = "unknown";
}
 */




$prefix = 'https://api.transip.nl/wsdl/?service={service}';
$generator = new \Wsdl2PhpGenerator\Generator();

passthru('rm -rf ' .  __DIR__ . '/src/generated/*');
$factory = new \Wsdl2PhpGenerator\PhpSource\PhpClass('ServiceFactory', false, 'BaseFactory');

foreach ($services as $service) {
    $generator->generate(new \Wsdl2PhpGenerator\Config([
        'inputFile' => strtr($prefix, ['{service}' => $service]),
        'outputDir' => __DIR__ . '/src/generated',
        'namespaceName' => 'SamIT\\TransIP',
        'soapClientClass' => '\\' . \SamIT\TransIP\SoapClient::class

    ]));
    $comment = new \Wsdl2PhpGenerator\PhpSource\PhpDocComment();
    $comment->addParam(new \Wsdl2PhpGenerator\PhpSource\PhpDocElement('param', 'array', 'options', 'The options for the SoapClient'));
    $comment->setReturn(new \Wsdl2PhpGenerator\PhpSource\PhpDocElement('return', $service, '', 'A SoapClient instance for the ' . $service));


    $getter = new \Wsdl2PhpGenerator\PhpSource\PhpFunction(
        'public',
        'get' . $service,
        'array $options = []',

        "    return \$this->constructService({$service}::class, \$options);",
        $comment
    );

    $factory->addFunction($getter);

}

$factoryFile = new \Wsdl2PhpGenerator\PhpSource\PhpFile('ServiceFactory');
$factoryFile->addNamespace('SamIT\\TransIP');
$factoryFile->addClass($factory);
$factoryFile->save(__DIR__ . '/src/generated');

passthru('chmod 666 ' .  __DIR__ . '/src/generated/*');