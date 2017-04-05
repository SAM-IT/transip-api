<?php

namespace SamIT\TransIP;

class Cronjob
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $minuteTrigger
     */
    protected $minuteTrigger = null;

    /**
     * @var string $hourTrigger
     */
    protected $hourTrigger = null;

    /**
     * @var string $dayTrigger
     */
    protected $dayTrigger = null;

    /**
     * @var string $monthTrigger
     */
    protected $monthTrigger = null;

    /**
     * @var string $weekdayTrigger
     */
    protected $weekdayTrigger = null;

    /**
     * @param string $name
     * @param string $url
     * @param string $email
     * @param string $minuteTrigger
     * @param string $hourTrigger
     * @param string $dayTrigger
     * @param string $monthTrigger
     * @param string $weekdayTrigger
     */
    public function __construct($name, $url, $email, $minuteTrigger, $hourTrigger, $dayTrigger, $monthTrigger, $weekdayTrigger)
    {
      $this->name = $name;
      $this->url = $url;
      $this->email = $email;
      $this->minuteTrigger = $minuteTrigger;
      $this->hourTrigger = $hourTrigger;
      $this->dayTrigger = $dayTrigger;
      $this->monthTrigger = $monthTrigger;
      $this->weekdayTrigger = $weekdayTrigger;
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
     * @return \SamIT\TransIP\Cronjob
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \SamIT\TransIP\Cronjob
     */
    public function setUrl($url)
    {
      $this->url = $url;
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
     * @return \SamIT\TransIP\Cronjob
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinuteTrigger()
    {
      return $this->minuteTrigger;
    }

    /**
     * @param string $minuteTrigger
     * @return \SamIT\TransIP\Cronjob
     */
    public function setMinuteTrigger($minuteTrigger)
    {
      $this->minuteTrigger = $minuteTrigger;
      return $this;
    }

    /**
     * @return string
     */
    public function getHourTrigger()
    {
      return $this->hourTrigger;
    }

    /**
     * @param string $hourTrigger
     * @return \SamIT\TransIP\Cronjob
     */
    public function setHourTrigger($hourTrigger)
    {
      $this->hourTrigger = $hourTrigger;
      return $this;
    }

    /**
     * @return string
     */
    public function getDayTrigger()
    {
      return $this->dayTrigger;
    }

    /**
     * @param string $dayTrigger
     * @return \SamIT\TransIP\Cronjob
     */
    public function setDayTrigger($dayTrigger)
    {
      $this->dayTrigger = $dayTrigger;
      return $this;
    }

    /**
     * @return string
     */
    public function getMonthTrigger()
    {
      return $this->monthTrigger;
    }

    /**
     * @param string $monthTrigger
     * @return \SamIT\TransIP\Cronjob
     */
    public function setMonthTrigger($monthTrigger)
    {
      $this->monthTrigger = $monthTrigger;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeekdayTrigger()
    {
      return $this->weekdayTrigger;
    }

    /**
     * @param string $weekdayTrigger
     * @return \SamIT\TransIP\Cronjob
     */
    public function setWeekdayTrigger($weekdayTrigger)
    {
      $this->weekdayTrigger = $weekdayTrigger;
      return $this;
    }

}
