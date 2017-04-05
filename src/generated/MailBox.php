<?php

namespace SamIT\TransIP;

class MailBox
{

    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var string $spamCheckerStrength
     */
    protected $spamCheckerStrength = null;

    /**
     * @var int $maxDiskUsage
     */
    protected $maxDiskUsage = null;

    /**
     * @var boolean $hasVacationReply
     */
    protected $hasVacationReply = null;

    /**
     * @var string $vacationReplySubject
     */
    protected $vacationReplySubject = null;

    /**
     * @var string $vacationReplyMessage
     */
    protected $vacationReplyMessage = null;

    /**
     * @param string $address
     * @param string $spamCheckerStrength
     * @param int $maxDiskUsage
     * @param boolean $hasVacationReply
     * @param string $vacationReplySubject
     * @param string $vacationReplyMessage
     */
    public function __construct($address, $spamCheckerStrength, $maxDiskUsage, $hasVacationReply, $vacationReplySubject, $vacationReplyMessage)
    {
      $this->address = $address;
      $this->spamCheckerStrength = $spamCheckerStrength;
      $this->maxDiskUsage = $maxDiskUsage;
      $this->hasVacationReply = $hasVacationReply;
      $this->vacationReplySubject = $vacationReplySubject;
      $this->vacationReplyMessage = $vacationReplyMessage;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param string $address
     * @return \SamIT\TransIP\MailBox
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpamCheckerStrength()
    {
      return $this->spamCheckerStrength;
    }

    /**
     * @param string $spamCheckerStrength
     * @return \SamIT\TransIP\MailBox
     */
    public function setSpamCheckerStrength($spamCheckerStrength)
    {
      $this->spamCheckerStrength = $spamCheckerStrength;
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
     * @return \SamIT\TransIP\MailBox
     */
    public function setMaxDiskUsage($maxDiskUsage)
    {
      $this->maxDiskUsage = $maxDiskUsage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasVacationReply()
    {
      return $this->hasVacationReply;
    }

    /**
     * @param boolean $hasVacationReply
     * @return \SamIT\TransIP\MailBox
     */
    public function setHasVacationReply($hasVacationReply)
    {
      $this->hasVacationReply = $hasVacationReply;
      return $this;
    }

    /**
     * @return string
     */
    public function getVacationReplySubject()
    {
      return $this->vacationReplySubject;
    }

    /**
     * @param string $vacationReplySubject
     * @return \SamIT\TransIP\MailBox
     */
    public function setVacationReplySubject($vacationReplySubject)
    {
      $this->vacationReplySubject = $vacationReplySubject;
      return $this;
    }

    /**
     * @return string
     */
    public function getVacationReplyMessage()
    {
      return $this->vacationReplyMessage;
    }

    /**
     * @param string $vacationReplyMessage
     * @return \SamIT\TransIP\MailBox
     */
    public function setVacationReplyMessage($vacationReplyMessage)
    {
      $this->vacationReplyMessage = $vacationReplyMessage;
      return $this;
    }

}
