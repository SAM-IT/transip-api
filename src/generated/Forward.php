<?php

namespace SamIT\TransIP;

class Forward
{

    /**
     * @var string $domainName
     */
    protected $domainName = null;

    /**
     * @var string $forwardTo
     */
    protected $forwardTo = null;

    /**
     * @var string $forwardMethod
     */
    protected $forwardMethod = null;

    /**
     * @var string $frameTitle
     */
    protected $frameTitle = null;

    /**
     * @var string $frameIcon
     */
    protected $frameIcon = null;

    /**
     * @var boolean $forwardEverything
     */
    protected $forwardEverything = null;

    /**
     * @var boolean $forwardSubdomains
     */
    protected $forwardSubdomains = null;

    /**
     * @var string $forwardEmailTo
     */
    protected $forwardEmailTo = null;

    /**
     * @param string $domainName
     * @param string $forwardTo
     * @param string $forwardMethod
     * @param string $frameTitle
     * @param string $frameIcon
     * @param boolean $forwardEverything
     * @param boolean $forwardSubdomains
     * @param string $forwardEmailTo
     */
    public function __construct($domainName, $forwardTo, $forwardMethod, $frameTitle, $frameIcon, $forwardEverything, $forwardSubdomains, $forwardEmailTo)
    {
      $this->domainName = $domainName;
      $this->forwardTo = $forwardTo;
      $this->forwardMethod = $forwardMethod;
      $this->frameTitle = $frameTitle;
      $this->frameIcon = $frameIcon;
      $this->forwardEverything = $forwardEverything;
      $this->forwardSubdomains = $forwardSubdomains;
      $this->forwardEmailTo = $forwardEmailTo;
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
      return $this->domainName;
    }

    /**
     * @param string $domainName
     * @return \SamIT\TransIP\Forward
     */
    public function setDomainName($domainName)
    {
      $this->domainName = $domainName;
      return $this;
    }

    /**
     * @return string
     */
    public function getForwardTo()
    {
      return $this->forwardTo;
    }

    /**
     * @param string $forwardTo
     * @return \SamIT\TransIP\Forward
     */
    public function setForwardTo($forwardTo)
    {
      $this->forwardTo = $forwardTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getForwardMethod()
    {
      return $this->forwardMethod;
    }

    /**
     * @param string $forwardMethod
     * @return \SamIT\TransIP\Forward
     */
    public function setForwardMethod($forwardMethod)
    {
      $this->forwardMethod = $forwardMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrameTitle()
    {
      return $this->frameTitle;
    }

    /**
     * @param string $frameTitle
     * @return \SamIT\TransIP\Forward
     */
    public function setFrameTitle($frameTitle)
    {
      $this->frameTitle = $frameTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrameIcon()
    {
      return $this->frameIcon;
    }

    /**
     * @param string $frameIcon
     * @return \SamIT\TransIP\Forward
     */
    public function setFrameIcon($frameIcon)
    {
      $this->frameIcon = $frameIcon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getForwardEverything()
    {
      return $this->forwardEverything;
    }

    /**
     * @param boolean $forwardEverything
     * @return \SamIT\TransIP\Forward
     */
    public function setForwardEverything($forwardEverything)
    {
      $this->forwardEverything = $forwardEverything;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getForwardSubdomains()
    {
      return $this->forwardSubdomains;
    }

    /**
     * @param boolean $forwardSubdomains
     * @return \SamIT\TransIP\Forward
     */
    public function setForwardSubdomains($forwardSubdomains)
    {
      $this->forwardSubdomains = $forwardSubdomains;
      return $this;
    }

    /**
     * @return string
     */
    public function getForwardEmailTo()
    {
      return $this->forwardEmailTo;
    }

    /**
     * @param string $forwardEmailTo
     * @return \SamIT\TransIP\Forward
     */
    public function setForwardEmailTo($forwardEmailTo)
    {
      $this->forwardEmailTo = $forwardEmailTo;
      return $this;
    }

}
