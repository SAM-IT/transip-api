<?php

namespace SamIT\TransIP;

class ArrayOfNameserver implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Nameserver[] $ArrayOfNameserver
     */
    protected $ArrayOfNameserver = null;

    /**
     * @param Nameserver[] $ArrayOfNameserver
     */
    public function __construct(array $ArrayOfNameserver)
    {
      $this->ArrayOfNameserver = $ArrayOfNameserver;
    }

    /**
     * @return Nameserver[]
     */
    public function getArrayOfNameserver()
    {
      return $this->ArrayOfNameserver;
    }

    /**
     * @param Nameserver[] $ArrayOfNameserver
     * @return \SamIT\TransIP\ArrayOfNameserver
     */
    public function setArrayOfNameserver(array $ArrayOfNameserver)
    {
      $this->ArrayOfNameserver = $ArrayOfNameserver;
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
      return isset($this->ArrayOfNameserver[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Nameserver
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfNameserver[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Nameserver $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfNameserver[] = $value;
      } else {
        $this->ArrayOfNameserver[$offset] = $value;
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
      unset($this->ArrayOfNameserver[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Nameserver Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfNameserver);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfNameserver);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfNameserver);
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
      reset($this->ArrayOfNameserver);
    }

    /**
     * Countable implementation
     *
     * @return Nameserver Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfNameserver);
    }

}
