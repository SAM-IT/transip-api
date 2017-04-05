<?php

namespace SamIT\TransIP;

class DomainAction
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $hasFailed
     */
    protected $hasFailed = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @param string $name
     * @param boolean $hasFailed
     * @param string $message
     */
    public function __construct($name, $hasFailed, $message)
    {
      $this->name = $name;
      $this->hasFailed = $hasFailed;
      $this->message = $message;
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
     * @return \SamIT\TransIP\DomainAction
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasFailed()
    {
      return $this->hasFailed;
    }

    /**
     * @param boolean $hasFailed
     * @return \SamIT\TransIP\DomainAction
     */
    public function setHasFailed($hasFailed)
    {
      $this->hasFailed = $hasFailed;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \SamIT\TransIP\DomainAction
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
