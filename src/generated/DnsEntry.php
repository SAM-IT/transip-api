<?php

namespace SamIT\TransIP;

class DnsEntry
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $expire
     */
    protected $expire = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $content
     */
    protected $content = null;

    /**
     * @param string $name
     * @param int $expire
     * @param string $type
     * @param string $content
     */
    public function __construct($name, $expire, $type, $content)
    {
      $this->name = $name;
      $this->expire = $expire;
      $this->type = $type;
      $this->content = $content;
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
     * @return \SamIT\TransIP\DnsEntry
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getExpire()
    {
      return $this->expire;
    }

    /**
     * @param int $expire
     * @return \SamIT\TransIP\DnsEntry
     */
    public function setExpire($expire)
    {
      $this->expire = $expire;
      return $this;
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
     * @return \SamIT\TransIP\DnsEntry
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param string $content
     * @return \SamIT\TransIP\DnsEntry
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

}
