<?php

namespace SamIT\TransIP;

class Vps
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $operatingSystem
     */
    protected $operatingSystem = null;

    /**
     * @var string $diskSize
     */
    protected $diskSize = null;

    /**
     * @var string $memorySize
     */
    protected $memorySize = null;

    /**
     * @var string $cpus
     */
    protected $cpus = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $ipAddress
     */
    protected $ipAddress = null;

    /**
     * @var string $macAddress
     */
    protected $macAddress = null;

    /**
     * @var string $vncHostname
     */
    protected $vncHostname = null;

    /**
     * @var string $vncPortNumber
     */
    protected $vncPortNumber = null;

    /**
     * @var string $vncPassword
     */
    protected $vncPassword = null;

    /**
     * @var boolean $isBlocked
     */
    protected $isBlocked = null;

    /**
     * @var boolean $isCustomerLocked
     */
    protected $isCustomerLocked = null;

    /**
     * @param string $name
     * @param string $description
     * @param string $operatingSystem
     * @param string $diskSize
     * @param string $memorySize
     * @param string $cpus
     * @param string $status
     * @param string $ipAddress
     * @param string $macAddress
     * @param string $vncHostname
     * @param string $vncPortNumber
     * @param string $vncPassword
     * @param boolean $isBlocked
     * @param boolean $isCustomerLocked
     */
    public function __construct($name, $description, $operatingSystem, $diskSize, $memorySize, $cpus, $status, $ipAddress, $macAddress, $vncHostname, $vncPortNumber, $vncPassword, $isBlocked, $isCustomerLocked)
    {
      $this->name = $name;
      $this->description = $description;
      $this->operatingSystem = $operatingSystem;
      $this->diskSize = $diskSize;
      $this->memorySize = $memorySize;
      $this->cpus = $cpus;
      $this->status = $status;
      $this->ipAddress = $ipAddress;
      $this->macAddress = $macAddress;
      $this->vncHostname = $vncHostname;
      $this->vncPortNumber = $vncPortNumber;
      $this->vncPassword = $vncPassword;
      $this->isBlocked = $isBlocked;
      $this->isCustomerLocked = $isCustomerLocked;
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
     * @return \SamIT\TransIP\Vps
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \SamIT\TransIP\Vps
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperatingSystem()
    {
      return $this->operatingSystem;
    }

    /**
     * @param string $operatingSystem
     * @return \SamIT\TransIP\Vps
     */
    public function setOperatingSystem($operatingSystem)
    {
      $this->operatingSystem = $operatingSystem;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiskSize()
    {
      return $this->diskSize;
    }

    /**
     * @param string $diskSize
     * @return \SamIT\TransIP\Vps
     */
    public function setDiskSize($diskSize)
    {
      $this->diskSize = $diskSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemorySize()
    {
      return $this->memorySize;
    }

    /**
     * @param string $memorySize
     * @return \SamIT\TransIP\Vps
     */
    public function setMemorySize($memorySize)
    {
      $this->memorySize = $memorySize;
      return $this;
    }

    /**
     * @return string
     */
    public function getCpus()
    {
      return $this->cpus;
    }

    /**
     * @param string $cpus
     * @return \SamIT\TransIP\Vps
     */
    public function setCpus($cpus)
    {
      $this->cpus = $cpus;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \SamIT\TransIP\Vps
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
      return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     * @return \SamIT\TransIP\Vps
     */
    public function setIpAddress($ipAddress)
    {
      $this->ipAddress = $ipAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getMacAddress()
    {
      return $this->macAddress;
    }

    /**
     * @param string $macAddress
     * @return \SamIT\TransIP\Vps
     */
    public function setMacAddress($macAddress)
    {
      $this->macAddress = $macAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getVncHostname()
    {
      return $this->vncHostname;
    }

    /**
     * @param string $vncHostname
     * @return \SamIT\TransIP\Vps
     */
    public function setVncHostname($vncHostname)
    {
      $this->vncHostname = $vncHostname;
      return $this;
    }

    /**
     * @return string
     */
    public function getVncPortNumber()
    {
      return $this->vncPortNumber;
    }

    /**
     * @param string $vncPortNumber
     * @return \SamIT\TransIP\Vps
     */
    public function setVncPortNumber($vncPortNumber)
    {
      $this->vncPortNumber = $vncPortNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getVncPassword()
    {
      return $this->vncPassword;
    }

    /**
     * @param string $vncPassword
     * @return \SamIT\TransIP\Vps
     */
    public function setVncPassword($vncPassword)
    {
      $this->vncPassword = $vncPassword;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBlocked()
    {
      return $this->isBlocked;
    }

    /**
     * @param boolean $isBlocked
     * @return \SamIT\TransIP\Vps
     */
    public function setIsBlocked($isBlocked)
    {
      $this->isBlocked = $isBlocked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCustomerLocked()
    {
      return $this->isCustomerLocked;
    }

    /**
     * @param boolean $isCustomerLocked
     * @return \SamIT\TransIP\Vps
     */
    public function setIsCustomerLocked($isCustomerLocked)
    {
      $this->isCustomerLocked = $isCustomerLocked;
      return $this;
    }

}
