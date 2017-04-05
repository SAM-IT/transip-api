<?php

namespace SamIT\TransIP;

class ColocationService extends \SamIT\TransIP\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfstring' => 'SamIT\\TransIP\\ArrayOfstring',
      'ArrayOfDataCenterVisitor' => 'SamIT\\TransIP\\ArrayOfDataCenterVisitor',
      'DataCenterVisitor' => 'SamIT\\TransIP\\DataCenterVisitor',
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
        $wsdl = 'https://api.transip.nl/wsdl/?service=ColocationService';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param string $when
     * @param int $duration
     * @param ArrayOfstring $visitors
     * @param string $phoneNumber
     * @return ArrayOfDataCenterVisitor
     */
    public function requestAccess($when, $duration, ArrayOfstring $visitors, $phoneNumber)
    {
      return $this->__soapCall('requestAccess', array($when, $duration, $visitors, $phoneNumber));
    }

    /**
     * @param string $coloName
     * @param string $contactName
     * @param string $phoneNumber
     * @param int $expectedDuration
     * @param string $instructions
     * @return void
     */
    public function requestRemoteHands($coloName, $contactName, $phoneNumber, $expectedDuration, $instructions)
    {
      return $this->__soapCall('requestRemoteHands', array($coloName, $contactName, $phoneNumber, $expectedDuration, $instructions));
    }

    /**
     * @return ArrayOfstring
     */
    public function getColoNames()
    {
      return $this->__soapCall('getColoNames', array());
    }

    /**
     * @param string $coloName
     * @return ArrayOfstring
     */
    public function getIpAddresses($coloName)
    {
      return $this->__soapCall('getIpAddresses', array($coloName));
    }

    /**
     * @param string $coloName
     * @return ArrayOfstring
     */
    public function getIpRanges($coloName)
    {
      return $this->__soapCall('getIpRanges', array($coloName));
    }

    /**
     * @param string $ipAddress
     * @param string $reverseDns
     * @return void
     */
    public function createIpAddress($ipAddress, $reverseDns)
    {
      return $this->__soapCall('createIpAddress', array($ipAddress, $reverseDns));
    }

    /**
     * @param string $ipAddress
     * @return void
     */
    public function deleteIpAddress($ipAddress)
    {
      return $this->__soapCall('deleteIpAddress', array($ipAddress));
    }

    /**
     * @param string $ipAddress
     * @return string
     */
    public function getReverseDns($ipAddress)
    {
      return $this->__soapCall('getReverseDns', array($ipAddress));
    }

    /**
     * @param string $ipAddress
     * @param string $reverseDns
     * @return void
     */
    public function setReverseDns($ipAddress, $reverseDns)
    {
      return $this->__soapCall('setReverseDns', array($ipAddress, $reverseDns));
    }

}
