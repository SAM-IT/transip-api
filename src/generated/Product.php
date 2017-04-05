<?php

namespace SamIT\TransIP;

class Product
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
     * @var float $price
     */
    protected $price = null;

    /**
     * @var float $renewalPrice
     */
    protected $renewalPrice = null;

    /**
     * @param string $name
     * @param string $description
     * @param float $price
     * @param float $renewalPrice
     */
    public function __construct($name, $description, $price, $renewalPrice)
    {
      $this->name = $name;
      $this->description = $description;
      $this->price = $price;
      $this->renewalPrice = $renewalPrice;
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
     * @return \SamIT\TransIP\Product
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
     * @return \SamIT\TransIP\Product
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \SamIT\TransIP\Product
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
     * @return \SamIT\TransIP\Product
     */
    public function setRenewalPrice($renewalPrice)
    {
      $this->renewalPrice = $renewalPrice;
      return $this;
    }

}
