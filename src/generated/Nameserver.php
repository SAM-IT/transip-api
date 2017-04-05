<?php

namespace SamIT\TransIP;

class Nameserver
{

    /**
     * @var string $hostname
     */
    protected $hostname = null;

    /**
     * @var string $ipv4
     */
    protected $ipv4 = null;

    /**
     * @var string $ipv6
     */
    protected $ipv6 = null;

    /**
     * @param string $hostname
     * @param string $ipv4
     * @param string $ipv6
     */
    public function __construct($hostname, $ipv4, $ipv6)
    {
      $this->hostname = $hostname;
      $this->ipv4 = $ipv4;
      $this->ipv6 = $ipv6;
    }

    /**
     * @return string
     */
    public function getHostname()
    {
      return $this->hostname;
    }

    /**
     * @param string $hostname
     * @return \SamIT\TransIP\Nameserver
     */
    public function setHostname($hostname)
    {
      $this->hostname = $hostname;
      return $this;
    }

    /**
     * @return string
     */
    public function getIpv4()
    {
      return $this->ipv4;
    }

    /**
     * @param string $ipv4
     * @return \SamIT\TransIP\Nameserver
     */
    public function setIpv4($ipv4)
    {
      $this->ipv4 = $ipv4;
      return $this;
    }

    /**
     * @return string
     */
    public function getIpv6()
    {
      return $this->ipv6;
    }

    /**
     * @param string $ipv6
     * @return \SamIT\TransIP\Nameserver
     */
    public function setIpv6($ipv6)
    {
      $this->ipv6 = $ipv6;
      return $this;
    }

}
