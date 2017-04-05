<?php

namespace SamIT\TransIP;

class HaipService extends \SamIT\TransIP\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Haip' => 'SamIT\\TransIP\\Haip',
      'ArrayOfHaip' => 'SamIT\\TransIP\\ArrayOfHaip',
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
        $wsdl = 'https://api.transip.nl/wsdl/?service=HaipService';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param string $haipName
     * @return Haip
     */
    public function getHaip($haipName)
    {
      return $this->__soapCall('getHaip', array($haipName));
    }

    /**
     * @return ArrayOfHaip
     */
    public function getHaips()
    {
      return $this->__soapCall('getHaips', array());
    }

    /**
     * @param string $haipName
     * @param string $vpsName
     * @return void
     */
    public function changeHaipVps($haipName, $vpsName)
    {
      return $this->__soapCall('changeHaipVps', array($haipName, $vpsName));
    }

}
