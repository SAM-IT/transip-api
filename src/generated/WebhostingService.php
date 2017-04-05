<?php

namespace SamIT\TransIP;

class WebhostingService extends \SamIT\TransIP\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfstring' => 'SamIT\\TransIP\\ArrayOfstring',
      'ArrayOfWebhostingPackage' => 'SamIT\\TransIP\\ArrayOfWebhostingPackage',
      'WebhostingPackage' => 'SamIT\\TransIP\\WebhostingPackage',
      'WebHost' => 'SamIT\\TransIP\\WebHost',
      'ArrayOfCronjob' => 'SamIT\\TransIP\\ArrayOfCronjob',
      'Cronjob' => 'SamIT\\TransIP\\Cronjob',
      'ArrayOfMailBox' => 'SamIT\\TransIP\\ArrayOfMailBox',
      'MailBox' => 'SamIT\\TransIP\\MailBox',
      'ArrayOfDb' => 'SamIT\\TransIP\\ArrayOfDb',
      'Db' => 'SamIT\\TransIP\\Db',
      'ArrayOfMailForward' => 'SamIT\\TransIP\\ArrayOfMailForward',
      'MailForward' => 'SamIT\\TransIP\\MailForward',
      'ArrayOfSubDomain' => 'SamIT\\TransIP\\ArrayOfSubDomain',
      'SubDomain' => 'SamIT\\TransIP\\SubDomain',
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
        $wsdl = 'https://api.transip.nl/wsdl/?service=WebhostingService';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @return ArrayOfstring
     */
    public function getWebhostingDomainNames()
    {
      return $this->__soapCall('getWebhostingDomainNames', array());
    }

    /**
     * @return ArrayOfWebhostingPackage
     */
    public function getAvailablePackages()
    {
      return $this->__soapCall('getAvailablePackages', array());
    }

    /**
     * @param string $domainName
     * @return WebHost
     */
    public function getInfo($domainName)
    {
      return $this->__soapCall('getInfo', array($domainName));
    }

    /**
     * @param string $domainName
     * @param WebhostingPackage $webhostingPackage
     * @return void
     */
    public function order($domainName, WebhostingPackage $webhostingPackage)
    {
      return $this->__soapCall('order', array($domainName, $webhostingPackage));
    }

    /**
     * @param string $domainName
     * @return ArrayOfWebhostingPackage
     */
    public function getAvailableUpgrades($domainName)
    {
      return $this->__soapCall('getAvailableUpgrades', array($domainName));
    }

    /**
     * @param string $domainName
     * @param string $newWebhostingPackage
     * @return void
     */
    public function upgrade($domainName, $newWebhostingPackage)
    {
      return $this->__soapCall('upgrade', array($domainName, $newWebhostingPackage));
    }

    /**
     * @param string $domainName
     * @param string $endTime
     * @return void
     */
    public function cancel($domainName, $endTime)
    {
      return $this->__soapCall('cancel', array($domainName, $endTime));
    }

    /**
     * @param string $domainName
     * @param string $newPassword
     * @return void
     */
    public function setFtpPassword($domainName, $newPassword)
    {
      return $this->__soapCall('setFtpPassword', array($domainName, $newPassword));
    }

    /**
     * @param string $domainName
     * @param Cronjob $cronjob
     * @return void
     */
    public function createCronjob($domainName, Cronjob $cronjob)
    {
      return $this->__soapCall('createCronjob', array($domainName, $cronjob));
    }

    /**
     * @param string $domainName
     * @param Cronjob $cronjob
     * @return void
     */
    public function deleteCronjob($domainName, Cronjob $cronjob)
    {
      return $this->__soapCall('deleteCronjob', array($domainName, $cronjob));
    }

    /**
     * @param string $domainName
     * @param MailBox $mailBox
     * @return void
     */
    public function createMailBox($domainName, MailBox $mailBox)
    {
      return $this->__soapCall('createMailBox', array($domainName, $mailBox));
    }

    /**
     * @param string $domainName
     * @param MailBox $mailBox
     * @return void
     */
    public function modifyMailBox($domainName, MailBox $mailBox)
    {
      return $this->__soapCall('modifyMailBox', array($domainName, $mailBox));
    }

    /**
     * @param string $domainName
     * @param MailBox $mailBox
     * @param string $newPassword
     * @return void
     */
    public function setMailBoxPassword($domainName, MailBox $mailBox, $newPassword)
    {
      return $this->__soapCall('setMailBoxPassword', array($domainName, $mailBox, $newPassword));
    }

    /**
     * @param string $domainName
     * @param MailBox $mailBox
     * @return void
     */
    public function deleteMailBox($domainName, MailBox $mailBox)
    {
      return $this->__soapCall('deleteMailBox', array($domainName, $mailBox));
    }

    /**
     * @param string $domainName
     * @param MailForward $mailForward
     * @return void
     */
    public function createMailForward($domainName, MailForward $mailForward)
    {
      return $this->__soapCall('createMailForward', array($domainName, $mailForward));
    }

    /**
     * @param string $domainName
     * @param MailForward $mailForward
     * @return void
     */
    public function modifyMailForward($domainName, MailForward $mailForward)
    {
      return $this->__soapCall('modifyMailForward', array($domainName, $mailForward));
    }

    /**
     * @param string $domainName
     * @param MailForward $mailForward
     * @return void
     */
    public function deleteMailForward($domainName, MailForward $mailForward)
    {
      return $this->__soapCall('deleteMailForward', array($domainName, $mailForward));
    }

    /**
     * @param string $domainName
     * @param Db $db
     * @return void
     */
    public function createDatabase($domainName, Db $db)
    {
      return $this->__soapCall('createDatabase', array($domainName, $db));
    }

    /**
     * @param string $domainName
     * @param Db $db
     * @return void
     */
    public function modifyDatabase($domainName, Db $db)
    {
      return $this->__soapCall('modifyDatabase', array($domainName, $db));
    }

    /**
     * @param string $domainName
     * @param Db $db
     * @param string $newPassword
     * @return void
     */
    public function setDatabasePassword($domainName, Db $db, $newPassword)
    {
      return $this->__soapCall('setDatabasePassword', array($domainName, $db, $newPassword));
    }

    /**
     * @param string $domainName
     * @param Db $db
     * @return void
     */
    public function deleteDatabase($domainName, Db $db)
    {
      return $this->__soapCall('deleteDatabase', array($domainName, $db));
    }

    /**
     * @param string $domainName
     * @param SubDomain $subDomain
     * @return void
     */
    public function createSubdomain($domainName, SubDomain $subDomain)
    {
      return $this->__soapCall('createSubdomain', array($domainName, $subDomain));
    }

    /**
     * @param string $domainName
     * @param SubDomain $subDomain
     * @return void
     */
    public function deleteSubdomain($domainName, SubDomain $subDomain)
    {
      return $this->__soapCall('deleteSubdomain', array($domainName, $subDomain));
    }

}
