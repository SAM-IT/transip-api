<?php

namespace SamIT\TransIP;

class Haip
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var boolean $isBlocked
     */
    protected $isBlocked = null;

    /**
     * @var string $ipv4Address
     */
    protected $ipv4Address = null;

    /**
     * @var string $ipv6Address
     */
    protected $ipv6Address = null;

    /**
     * @var string $vpsName
     */
    protected $vpsName = null;

    /**
     * @var string $vpsIpv4Address
     */
    protected $vpsIpv4Address = null;

    /**
     * @var string $vpsIpv6Address
     */
    protected $vpsIpv6Address = null;

    /**
     * @param string $name
     * @param string $status
     * @param boolean $isBlocked
     * @param string $ipv4Address
     * @param string $ipv6Address
     * @param string $vpsName
     * @param string $vpsIpv4Address
     * @param string $vpsIpv6Address
     */
    public function __construct($name, $status, $isBlocked, $ipv4Address, $ipv6Address, $vpsName, $vpsIpv4Address, $vpsIpv6Address)
    {
      $this->name = $name;
      $this->status = $status;
      $this->isBlocked = $isBlocked;
      $this->ipv4Address = $ipv4Address;
      $this->ipv6Address = $ipv6Address;
      $this->vpsName = $vpsName;
      $this->vpsIpv4Address = $vpsIpv4Address;
      $this->vpsIpv6Address = $vpsIpv6Address;
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
     * @return \SamIT\TransIP\Haip
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \SamIT\TransIP\Haip
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \SamIT\TransIP\Haip
     */
    public function setIsBlocked($isBlocked)
    {
      $this->isBlocked = $isBlocked;
      return $this;
    }

    /**
     * @return string
     */
    public function getIpv4Address()
    {
      return $this->ipv4Address;
    }

    /**
     * @param string $ipv4Address
     * @return \SamIT\TransIP\Haip
     */
    public function setIpv4Address($ipv4Address)
    {
      $this->ipv4Address = $ipv4Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getIpv6Address()
    {
      return $this->ipv6Address;
    }

    /**
     * @param string $ipv6Address
     * @return \SamIT\TransIP\Haip
     */
    public function setIpv6Address($ipv6Address)
    {
      $this->ipv6Address = $ipv6Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getVpsName()
    {
      return $this->vpsName;
    }

    /**
     * @param string $vpsName
     * @return \SamIT\TransIP\Haip
     */
    public function setVpsName($vpsName)
    {
      $this->vpsName = $vpsName;
      return $this;
    }

    /**
     * @return string
     */
    public function getVpsIpv4Address()
    {
      return $this->vpsIpv4Address;
    }

    /**
     * @param string $vpsIpv4Address
     * @return \SamIT\TransIP\Haip
     */
    public function setVpsIpv4Address($vpsIpv4Address)
    {
      $this->vpsIpv4Address = $vpsIpv4Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getVpsIpv6Address()
    {
      return $this->vpsIpv6Address;
    }

    /**
     * @param string $vpsIpv6Address
     * @return \SamIT\TransIP\Haip
     */
    public function setVpsIpv6Address($vpsIpv6Address)
    {
      $this->vpsIpv6Address = $vpsIpv6Address;
      return $this;
    }

}
