<?php

namespace SamIT\TransIP;

class WhoisContact
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $middleName
     */
    protected $middleName = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $companyName
     */
    protected $companyName = null;

    /**
     * @var string $companyKvk
     */
    protected $companyKvk = null;

    /**
     * @var string $companyType
     */
    protected $companyType = null;

    /**
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $number
     */
    protected $number = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var string $faxNumber
     */
    protected $faxNumber = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @param string $type
     * @param string $firstName
     * @param string $middleName
     * @param string $lastName
     * @param string $companyName
     * @param string $companyKvk
     * @param string $companyType
     * @param string $street
     * @param string $number
     * @param string $postalCode
     * @param string $city
     * @param string $phoneNumber
     * @param string $faxNumber
     * @param string $email
     * @param string $country
     */
    public function __construct($type, $firstName, $middleName, $lastName, $companyName, $companyKvk, $companyType, $street, $number, $postalCode, $city, $phoneNumber, $faxNumber, $email, $country)
    {
      $this->type = $type;
      $this->firstName = $firstName;
      $this->middleName = $middleName;
      $this->lastName = $lastName;
      $this->companyName = $companyName;
      $this->companyKvk = $companyKvk;
      $this->companyType = $companyType;
      $this->street = $street;
      $this->number = $number;
      $this->postalCode = $postalCode;
      $this->city = $city;
      $this->phoneNumber = $phoneNumber;
      $this->faxNumber = $faxNumber;
      $this->email = $email;
      $this->country = $country;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
      return $this->middleName;
    }

    /**
     * @param string $middleName
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setMiddleName($middleName)
    {
      $this->middleName = $middleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setCompanyName($companyName)
    {
      $this->companyName = $companyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyKvk()
    {
      return $this->companyKvk;
    }

    /**
     * @param string $companyKvk
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setCompanyKvk($companyKvk)
    {
      $this->companyKvk = $companyKvk;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyType()
    {
      return $this->companyType;
    }

    /**
     * @param string $companyType
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setCompanyType($companyType)
    {
      $this->companyType = $companyType;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->street;
    }

    /**
     * @param string $street
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setStreet($street)
    {
      $this->street = $street;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param string $number
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setPhoneNumber($phoneNumber)
    {
      $this->phoneNumber = $phoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
      return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setFaxNumber($faxNumber)
    {
      $this->faxNumber = $faxNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \SamIT\TransIP\WhoisContact
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

}
