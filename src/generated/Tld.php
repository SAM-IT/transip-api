<?php

namespace SamIT\TransIP;

class Tld
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var float $price
     */
    protected $price = null;

    /**
     * @var float $renewalPrice
     */
    protected $renewalPrice = null;

    /**
     * @var ArrayOfstring $capabilities
     */
    protected $capabilities = null;

    /**
     * @var int $registrationPeriodLength
     */
    protected $registrationPeriodLength = null;

    /**
     * @var int $cancelTimeFrame
     */
    protected $cancelTimeFrame = null;

    /**
     * @param string $name
     * @param float $price
     * @param float $renewalPrice
     * @param ArrayOfstring $capabilities
     * @param int $registrationPeriodLength
     * @param int $cancelTimeFrame
     */
    public function __construct($name, $price, $renewalPrice, $capabilities, $registrationPeriodLength, $cancelTimeFrame)
    {
      $this->name = $name;
      $this->price = $price;
      $this->renewalPrice = $renewalPrice;
      $this->capabilities = $capabilities;
      $this->registrationPeriodLength = $registrationPeriodLength;
      $this->cancelTimeFrame = $cancelTimeFrame;
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
     * @return \SamIT\TransIP\Tld
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return \SamIT\TransIP\Tld
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return float
     */
    public function getRenewalPrice()
    {
      return $this->renewalPrice;
    }

    /**
     * @param float $renewalPrice
     * @return \SamIT\TransIP\Tld
     */
    public function setRenewalPrice($renewalPrice)
    {
      $this->renewalPrice = $renewalPrice;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCapabilities()
    {
      return $this->capabilities;
    }

    /**
     * @param ArrayOfstring $capabilities
     * @return \SamIT\TransIP\Tld
     */
    public function setCapabilities($capabilities)
    {
      $this->capabilities = $capabilities;
      return $this;
    }

    /**
     * @return int
     */
    public function getRegistrationPeriodLength()
    {
      return $this->registrationPeriodLength;
    }

    /**
     * @param int $registrationPeriodLength
     * @return \SamIT\TransIP\Tld
     */
    public function setRegistrationPeriodLength($registrationPeriodLength)
    {
      $this->registrationPeriodLength = $registrationPeriodLength;
      return $this;
    }

    /**
     * @return int
     */
    public function getCancelTimeFrame()
    {
      return $this->cancelTimeFrame;
    }

    /**
     * @param int $cancelTimeFrame
     * @return \SamIT\TransIP\Tld
     */
    public function setCancelTimeFrame($cancelTimeFrame)
    {
      $this->cancelTimeFrame = $cancelTimeFrame;
      return $this;
    }

}
