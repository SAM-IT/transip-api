<?php

namespace SamIT\TransIP;

class DomainCheckResult
{

    /**
     * @var string $domainName
     */
    protected $domainName = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var ArrayOfstring $actions
     */
    protected $actions = null;

    /**
     * @param string $domainName
     * @param string $status
     * @param ArrayOfstring $actions
     */
    public function __construct($domainName, $status, $actions)
    {
      $this->domainName = $domainName;
      $this->status = $status;
      $this->actions = $actions;
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
     * @return \SamIT\TransIP\DomainCheckResult
     */
    public function setDomainName($domainName)
    {
      $this->domainName = $domainName;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \SamIT\TransIP\DomainCheckResult
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getActions()
    {
      return $this->actions;
    }

    /**
     * @param ArrayOfstring $actions
     * @return \SamIT\TransIP\DomainCheckResult
     */
    public function setActions($actions)
    {
      $this->actions = $actions;
      return $this;
    }

}
