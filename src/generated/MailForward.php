<?php

namespace SamIT\TransIP;

class MailForward
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $targetAddress
     */
    protected $targetAddress = null;

    /**
     * @param string $name
     * @param string $targetAddress
     */
    public function __construct($name, $targetAddress)
    {
      $this->name = $name;
      $this->targetAddress = $targetAddress;
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
     * @return \SamIT\TransIP\MailForward
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetAddress()
    {
      return $this->targetAddress;
    }

    /**
     * @param string $targetAddress
     * @return \SamIT\TransIP\MailForward
     */
    public function setTargetAddress($targetAddress)
    {
      $this->targetAddress = $targetAddress;
      return $this;
    }

}
