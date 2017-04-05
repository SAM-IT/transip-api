<?php

namespace SamIT\TransIP;

class WebHost
{

    /**
     * @var string $domainName
     */
    protected $domainName = null;

    /**
     * @var ArrayOfCronjob $cronjobs
     */
    protected $cronjobs = null;

    /**
     * @var ArrayOfMailBox $mailBoxes
     */
    protected $mailBoxes = null;

    /**
     * @var ArrayOfDb $dbs
     */
    protected $dbs = null;

    /**
     * @var ArrayOfMailForward $mailForwards
     */
    protected $mailForwards = null;

    /**
     * @var ArrayOfSubDomain $subDomains
     */
    protected $subDomains = null;

    /**
     * @param string $domainName
     * @param ArrayOfCronjob $cronjobs
     * @param ArrayOfMailBox $mailBoxes
     * @param ArrayOfDb $dbs
     * @param ArrayOfMailForward $mailForwards
     * @param ArrayOfSubDomain $subDomains
     */
    public function __construct($domainName, $cronjobs, $mailBoxes, $dbs, $mailForwards, $subDomains)
    {
      $this->domainName = $domainName;
      $this->cronjobs = $cronjobs;
      $this->mailBoxes = $mailBoxes;
      $this->dbs = $dbs;
      $this->mailForwards = $mailForwards;
      $this->subDomains = $subDomains;
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
     * @return \SamIT\TransIP\WebHost
     */
    public function setDomainName($domainName)
    {
      $this->domainName = $domainName;
      return $this;
    }

    /**
     * @return ArrayOfCronjob
     */
    public function getCronjobs()
    {
      return $this->cronjobs;
    }

    /**
     * @param ArrayOfCronjob $cronjobs
     * @return \SamIT\TransIP\WebHost
     */
    public function setCronjobs($cronjobs)
    {
      $this->cronjobs = $cronjobs;
      return $this;
    }

    /**
     * @return ArrayOfMailBox
     */
    public function getMailBoxes()
    {
      return $this->mailBoxes;
    }

    /**
     * @param ArrayOfMailBox $mailBoxes
     * @return \SamIT\TransIP\WebHost
     */
    public function setMailBoxes($mailBoxes)
    {
      $this->mailBoxes = $mailBoxes;
      return $this;
    }

    /**
     * @return ArrayOfDb
     */
    public function getDbs()
    {
      return $this->dbs;
    }

    /**
     * @param ArrayOfDb $dbs
     * @return \SamIT\TransIP\WebHost
     */
    public function setDbs($dbs)
    {
      $this->dbs = $dbs;
      return $this;
    }

    /**
     * @return ArrayOfMailForward
     */
    public function getMailForwards()
    {
      return $this->mailForwards;
    }

    /**
     * @param ArrayOfMailForward $mailForwards
     * @return \SamIT\TransIP\WebHost
     */
    public function setMailForwards($mailForwards)
    {
      $this->mailForwards = $mailForwards;
      return $this;
    }

    /**
     * @return ArrayOfSubDomain
     */
    public function getSubDomains()
    {
      return $this->subDomains;
    }

    /**
     * @param ArrayOfSubDomain $subDomains
     * @return \SamIT\TransIP\WebHost
     */
    public function setSubDomains($subDomains)
    {
      $this->subDomains = $subDomains;
      return $this;
    }

}
