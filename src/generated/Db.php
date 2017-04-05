<?php

namespace SamIT\TransIP;

class Db
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var int $maxDiskUsage
     */
    protected $maxDiskUsage = null;

    /**
     * @param string $name
     * @param string $username
     * @param int $maxDiskUsage
     */
    public function __construct($name, $username, $maxDiskUsage)
    {
      $this->name = $name;
      $this->username = $username;
      $this->maxDiskUsage = $maxDiskUsage;
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
     * @return \SamIT\TransIP\Db
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \SamIT\TransIP\Db
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxDiskUsage()
    {
      return $this->maxDiskUsage;
    }

    /**
     * @param int $maxDiskUsage
     * @return \SamIT\TransIP\Db
     */
    public function setMaxDiskUsage($maxDiskUsage)
    {
      $this->maxDiskUsage = $maxDiskUsage;
      return $this;
    }

}
