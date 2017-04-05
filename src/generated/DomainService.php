<?php

namespace SamIT\TransIP;

class DomainService extends \SamIT\TransIP\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfstring' => 'SamIT\\TransIP\\ArrayOfstring',
      'ArrayOfDomainCheckResult' => 'SamIT\\TransIP\\ArrayOfDomainCheckResult',
      'DomainCheckResult' => 'SamIT\\TransIP\\DomainCheckResult',
      'Domain' => 'SamIT\\TransIP\\Domain',
      'ArrayOfNameserver' => 'SamIT\\TransIP\\ArrayOfNameserver',
      'Nameserver' => 'SamIT\\TransIP\\Nameserver',
      'ArrayOfWhoisContact' => 'SamIT\\TransIP\\ArrayOfWhoisContact',
      'WhoisContact' => 'SamIT\\TransIP\\WhoisContact',
      'ArrayOfDnsEntry' => 'SamIT\\TransIP\\ArrayOfDnsEntry',
      'DnsEntry' => 'SamIT\\TransIP\\DnsEntry',
      'DomainBranding' => 'SamIT\\TransIP\\DomainBranding',
      'ArrayOfDomain' => 'SamIT\\TransIP\\ArrayOfDomain',
      'ArrayOfTld' => 'SamIT\\TransIP\\ArrayOfTld',
      'Tld' => 'SamIT\\TransIP\\Tld',
      'DomainAction' => 'SamIT\\TransIP\\DomainAction',
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
        $wsdl = 'https://api.transip.nl/wsdl/?service=DomainService';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param ArrayOfstring $domainNames
     * @return ArrayOfDomainCheckResult
     */
    public function batchCheckAvailability(ArrayOfstring $domainNames)
    {
      return $this->__soapCall('batchCheckAvailability', array($domainNames));
    }

    /**
     * @param string $domainName
     * @return string
     */
    public function checkAvailability($domainName)
    {
      return $this->__soapCall('checkAvailability', array($domainName));
    }

    /**
     * @param string $domainName
     * @return string
     */
    public function getWhois($domainName)
    {
      return $this->__soapCall('getWhois', array($domainName));
    }

    /**
     * @return ArrayOfstring
     */
    public function getDomainNames()
    {
      return $this->__soapCall('getDomainNames', array());
    }

    /**
     * @param string $domainName
     * @return Domain
     */
    public function getInfo($domainName)
    {
      return $this->__soapCall('getInfo', array($domainName));
    }

    /**
     * @param ArrayOfstring $domainNames
     * @return ArrayOfDomain
     */
    public function batchGetInfo(ArrayOfstring $domainNames)
    {
      return $this->__soapCall('batchGetInfo', array($domainNames));
    }

    /**
     * @param string $domainName
     * @return string
     */
    public function getAuthCode($domainName)
    {
      return $this->__soapCall('getAuthCode', array($domainName));
    }

    /**
     * @param string $domainName
     * @return boolean
     */
    public function getIsLocked($domainName)
    {
      return $this->__soapCall('getIsLocked', array($domainName));
    }

    /**
     * @param Domain $domain
     * @return void
     */
    public function register(Domain $domain)
    {
      return $this->__soapCall('register', array($domain));
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
     * @param Domain $domain
     * @param string $authCode
     * @return void
     */
    public function transferWithOwnerChange(Domain $domain, $authCode)
    {
      return $this->__soapCall('transferWithOwnerChange', array($domain, $authCode));
    }

    /**
     * @param Domain $domain
     * @param string $authCode
     * @return void
     */
    public function transferWithoutOwnerChange(Domain $domain, $authCode)
    {
      return $this->__soapCall('transferWithoutOwnerChange', array($domain, $authCode));
    }

    /**
     * @param string $domainName
     * @param ArrayOfNameserver $nameservers
     * @return void
     */
    public function setNameservers($domainName, ArrayOfNameserver $nameservers)
    {
      return $this->__soapCall('setNameservers', array($domainName, $nameservers));
    }

    /**
     * @param string $domainName
     * @return void
     */
    public function setLock($domainName)
    {
      return $this->__soapCall('setLock', array($domainName));
    }

    /**
     * @param string $domainName
     * @return void
     */
    public function unsetLock($domainName)
    {
      return $this->__soapCall('unsetLock', array($domainName));
    }

    /**
     * @param string $domainName
     * @param ArrayOfDnsEntry $dnsEntries
     * @return void
     */
    public function setDnsEntries($domainName, ArrayOfDnsEntry $dnsEntries)
    {
      return $this->__soapCall('setDnsEntries', array($domainName, $dnsEntries));
    }

    /**
     * @param string $domainName
     * @param WhoisContact $registrantWhoisContact
     * @return void
     */
    public function setOwner($domainName, WhoisContact $registrantWhoisContact)
    {
      return $this->__soapCall('setOwner', array($domainName, $registrantWhoisContact));
    }

    /**
     * @param string $domainName
     * @param ArrayOfWhoisContact $contacts
     * @return void
     */
    public function setContacts($domainName, ArrayOfWhoisContact $contacts)
    {
      return $this->__soapCall('setContacts', array($domainName, $contacts));
    }

    /**
     * @return ArrayOfTld
     */
    public function getAllTldInfos()
    {
      return $this->__soapCall('getAllTldInfos', array());
    }

    /**
     * @param string $tldName
     * @return Tld
     */
    public function getTldInfo($tldName)
    {
      return $this->__soapCall('getTldInfo', array($tldName));
    }

    /**
     * @param string $domainName
     * @return DomainAction
     */
    public function getCurrentDomainAction($domainName)
    {
      return $this->__soapCall('getCurrentDomainAction', array($domainName));
    }

    /**
     * @param Domain $domain
     * @return void
     */
    public function retryCurrentDomainActionWithNewData(Domain $domain)
    {
      return $this->__soapCall('retryCurrentDomainActionWithNewData', array($domain));
    }

    /**
     * @param Domain $domain
     * @param string $newAuthCode
     * @return void
     */
    public function retryTransferWithDifferentAuthCode(Domain $domain, $newAuthCode)
    {
      return $this->__soapCall('retryTransferWithDifferentAuthCode', array($domain, $newAuthCode));
    }

    /**
     * @param Domain $domain
     * @return void
     */
    public function cancelDomainAction(Domain $domain)
    {
      return $this->__soapCall('cancelDomainAction', array($domain));
    }

}
