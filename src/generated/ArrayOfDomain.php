<?php

namespace SamIT\TransIP;

class ArrayOfDomain implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Domain[] $ArrayOfDomain
     */
    protected $ArrayOfDomain = null;

    /**
     * @param Domain[] $ArrayOfDomain
     */
    public function __construct(array $ArrayOfDomain)
    {
      $this->ArrayOfDomain = $ArrayOfDomain;
    }

    /**
     * @return Domain[]
     */
    public function getArrayOfDomain()
    {
      return $this->ArrayOfDomain;
    }

    /**
     * @param Domain[] $ArrayOfDomain
     * @return \SamIT\TransIP\ArrayOfDomain
     */
    public function setArrayOfDomain(array $ArrayOfDomain)
    {
      $this->ArrayOfDomain = $ArrayOfDomain;
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
      return isset($this->ArrayOfDomain[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Domain
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfDomain[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Domain $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfDomain[] = $value;
      } else {
        $this->ArrayOfDomain[$offset] = $value;
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
      unset($this->ArrayOfDomain[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Domain Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfDomain);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfDomain);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfDomain);
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
      reset($this->ArrayOfDomain);
    }

    /**
     * Countable implementation
     *
     * @return Domain Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfDomain);
    }

}
