<?php

namespace SamIT\TransIP;

class PrivateNetwork
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
      $this->name = $name;
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
     * @return \SamIT\TransIP\PrivateNetwork
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
