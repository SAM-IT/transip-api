<?php

namespace SamIT\TransIP;

class OperatingSystem
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
     * @var boolean $isPreinstallableImage
     */
    protected $isPreinstallableImage = null;

    /**
     * @param string $name
     * @param string $description
     * @param string $dateTimeCreate
     * @param boolean $isPreinstallableImage
     */
    public function __construct($name, $description, $dateTimeCreate, $isPreinstallableImage)
    {
      $this->name = $name;
      $this->description = $description;
      $this->dateTimeCreate = $dateTimeCreate;
      $this->isPreinstallableImage = $isPreinstallableImage;
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
     * @return \SamIT\TransIP\OperatingSystem
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
     * @return \SamIT\TransIP\OperatingSystem
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
     * @return \SamIT\TransIP\OperatingSystem
     */
    public function setDateTimeCreate($dateTimeCreate)
    {
      $this->dateTimeCreate = $dateTimeCreate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPreinstallableImage()
    {
      return $this->isPreinstallableImage;
    }

    /**
     * @param boolean $isPreinstallableImage
     * @return \SamIT\TransIP\OperatingSystem
     */
    public function setIsPreinstallableImage($isPreinstallableImage)
    {
      $this->isPreinstallableImage = $isPreinstallableImage;
      return $this;
    }

}
