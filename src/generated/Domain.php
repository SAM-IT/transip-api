<?php

namespace SamIT\TransIP;

class Domain
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var ArrayOfNameserver $nameservers
     */
    protected $nameservers = null;

    /**
     * @var ArrayOfWhoisContact $contacts
     */
    protected $contacts = null;

    /**
     * @var ArrayOfDnsEntry $dnsEntries
     */
    protected $dnsEntries = null;

    /**
     * @var DomainBranding $branding
     */
    protected $branding = null;

    /**
     * @var string $authCode
     */
    protected $authCode = null;

    /**
     * @var boolean $isLocked
     */
    protected $isLocked = null;

    /**
     * @var string $registrationDate
     */
    protected $registrationDate = null;

    /**
     * @var string $renewalDate
     */
    protected $renewalDate = null;

    /**
     * @param string $name
     * @param ArrayOfNameserver $nameservers
     * @param ArrayOfWhoisContact $contacts
     * @param ArrayOfDnsEntry $dnsEntries
     * @param DomainBranding $branding
     */
    public function __construct($name, $nameservers, $contacts, $dnsEntries, $branding)
    {
      $this->name = $name;
      $this->nameservers = $nameservers;
      $this->contacts = $contacts;
      $this->dnsEntries = $dnsEntries;
      $this->branding = $branding;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \SamIT\TransIP\Domain
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return ArrayOfNameserver
     */
    public function getNameservers()
    {
      return $this->nameservers;
    }

    /**
     * @param ArrayOfNameserver $nameservers
     * @return \SamIT\TransIP\Domain
     */
    public function setNameservers($nameservers)
    {
      $this->nameservers = $nameservers;
      return $this;
    }

    /**
     * @return ArrayOfWhoisContact
     */
    public function getContacts()
    {
      return $this->contacts;
    }

    /**
     * @param ArrayOfWhoisContact $contacts
     * @return \SamIT\TransIP\Domain
     */
    public function setContacts($contacts)
    {
      $this->contacts = $contacts;
      return $this;
    }

    /**
     * @return ArrayOfDnsEntry
     */
    public function getDnsEntries()
    {
      return $this->dnsEntries;
    }

    /**
     * @param ArrayOfDnsEntry $dnsEntries
     * @return \SamIT\TransIP\Domain
     */
    public function setDnsEntries($dnsEntries)
    {
      $this->dnsEntries = $dnsEntries;
      return $this;
    }

    /**
     * @return DomainBranding
     */
    public function getBranding()
    {
      return $this->branding;
    }

    /**
     * @param DomainBranding $branding
     * @return \SamIT\TransIP\Domain
     */
    public function setBranding($branding)
    {
      $this->branding = $branding;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
      return $this->authCode;
    }

    /**
     * @param string $authCode
     * @return \SamIT\TransIP\Domain
     */
    public function setAuthCode($authCode)
    {
      $this->authCode = $authCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLocked()
    {
      return $this->isLocked;
    }

    /**
     * @param boolean $isLocked
     * @return \SamIT\TransIP\Domain
     */
    public function setIsLocked($isLocked)
    {
      $this->isLocked = $isLocked;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationDate()
    {
      return $this->registrationDate;
    }

    /**
     * @param string $registrationDate
     * @return \SamIT\TransIP\Domain
     */
    public function setRegistrationDate($registrationDate)
    {
      $this->registrationDate = $registrationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getRenewalDate()
    {
      return $this->renewalDate;
    }

    /**
     * @param string $renewalDate
     * @return \SamIT\TransIP\Domain
     */
    public function setRenewalDate($renewalDate)
    {
      $this->renewalDate = $renewalDate;
      return $this;
    }

}
