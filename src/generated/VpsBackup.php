<?php

namespace SamIT\TransIP;

class VpsBackup
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $dateTimeCreate
     */
    protected $dateTimeCreate = null;

    /**
     * @var int $diskSize
     */
    protected $diskSize = null;

    /**
     * @var string $operatingSystem
     */
    protected $operatingSystem = null;

    /**
     * @param int $id
     * @param string $dateTimeCreate
     * @param int $diskSize
     * @param string $operatingSystem
     */
    public function __construct($id, $dateTimeCreate, $diskSize, $operatingSystem)
    {
      $this->id = $id;
      $this->dateTimeCreate = $dateTimeCreate;
      $this->diskSize = $diskSize;
      $this->operatingSystem = $operatingSystem;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \SamIT\TransIP\VpsBackup
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateTimeCreate()
    {
      return $this->dateTimeCreate;
    }

    /**
     * @param string $dateTimeCreate
     * @return \SamIT\TransIP\VpsBackup
     */
    public function setDateTimeCreate($dateTimeCreate)
    {
      $this->dateTimeCreate = $dateTimeCreate;
      return $this;
    }

    /**
     * @return int
     */
    public function getDiskSize()
    {
      return $this->diskSize;
    }

    /**
     * @param int $diskSize
     * @return \SamIT\TransIP\VpsBackup
     */
    public function setDiskSize($diskSize)
    {
      $this->diskSize = $diskSize;
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
     * @return \SamIT\TransIP\VpsBackup
     */
    public function setOperatingSystem($operatingSystem)
    {
      $this->operatingSystem = $operatingSystem;
      return $this;
    }

}
