<?php

namespace SamIT\TransIP;

class Snapshot
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
     * @var string $dateTimeCreate
     */
    protected $dateTimeCreate = null;

    /**
     * @param string $name
     * @param string $description
     * @param string $dateTimeCreate
     */
    public function __construct($name, $description, $dateTimeCreate)
    {
      $this->name = $name;
      $this->description = $description;
      $this->dateTimeCreate = $dateTimeCreate;
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
     * @return \SamIT\TransIP\Snapshot
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
     * @return \SamIT\TransIP\Snapshot
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \SamIT\TransIP\Snapshot
     */
    public function setDateTimeCreate($dateTimeCreate)
    {
      $this->dateTimeCreate = $dateTimeCreate;
      return $this;
    }

}
