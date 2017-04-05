<?php

namespace SamIT\TransIP;

class DataCenterVisitor
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $reservationNumber
     */
    protected $reservationNumber = null;

    /**
     * @var string $accessCode
     */
    protected $accessCode = null;

    /**
     * @var boolean $hasBeenRegisteredBefore
     */
    protected $hasBeenRegisteredBefore = null;

    /**
     * @param string $name
     * @param string $reservationNumber
     * @param string $accessCode
     * @param boolean $hasBeenRegisteredBefore
     */
    public function __construct($name, $reservationNumber, $accessCode, $hasBeenRegisteredBefore)
    {
      $this->name = $name;
      $this->reservationNumber = $reservationNumber;
      $this->accessCode = $accessCode;
      $this->hasBeenRegisteredBefore = $hasBeenRegisteredBefore;
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
     * @return \SamIT\TransIP\DataCenterVisitor
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getReservationNumber()
    {
      return $this->reservationNumber;
    }

    /**
     * @param string $reservationNumber
     * @return \SamIT\TransIP\DataCenterVisitor
     */
    public function setReservationNumber($reservationNumber)
    {
      $this->reservationNumber = $reservationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccessCode()
    {
      return $this->accessCode;
    }

    /**
     * @param string $accessCode
     * @return \SamIT\TransIP\DataCenterVisitor
     */
    public function setAccessCode($accessCode)
    {
      $this->accessCode = $accessCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasBeenRegisteredBefore()
    {
      return $this->hasBeenRegisteredBefore;
    }

    /**
     * @param boolean $hasBeenRegisteredBefore
     * @return \SamIT\TransIP\DataCenterVisitor
     */
    public function setHasBeenRegisteredBefore($hasBeenRegisteredBefore)
    {
      $this->hasBeenRegisteredBefore = $hasBeenRegisteredBefore;
      return $this;
    }

}
