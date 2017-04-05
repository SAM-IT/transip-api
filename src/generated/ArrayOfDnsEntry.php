<?php

namespace SamIT\TransIP;

class ArrayOfDnsEntry implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DnsEntry[] $ArrayOfDnsEntry
     */
    protected $ArrayOfDnsEntry = null;

    /**
     * @param DnsEntry[] $ArrayOfDnsEntry
     */
    public function __construct(array $ArrayOfDnsEntry)
    {
      $this->ArrayOfDnsEntry = $ArrayOfDnsEntry;
    }

    /**
     * @return DnsEntry[]
     */
    public function getArrayOfDnsEntry()
    {
      return $this->ArrayOfDnsEntry;
    }

    /**
     * @param DnsEntry[] $ArrayOfDnsEntry
     * @return \SamIT\TransIP\ArrayOfDnsEntry
     */
    public function setArrayOfDnsEntry(array $ArrayOfDnsEntry)
    {
      $this->ArrayOfDnsEntry = $ArrayOfDnsEntry;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ArrayOfDnsEntry[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DnsEntry
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfDnsEntry[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DnsEntry $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfDnsEntry[] = $value;
      } else {
        $this->ArrayOfDnsEntry[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ArrayOfDnsEntry[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DnsEntry Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfDnsEntry);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfDnsEntry);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfDnsEntry);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->ArrayOfDnsEntry);
    }

    /**
     * Countable implementation
     *
     * @return DnsEntry Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfDnsEntry);
    }

}
