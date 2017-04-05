<?php

namespace SamIT\TransIP;

class ArrayOfSubDomain implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SubDomain[] $ArrayOfSubDomain
     */
    protected $ArrayOfSubDomain = null;

    /**
     * @param SubDomain[] $ArrayOfSubDomain
     */
    public function __construct(array $ArrayOfSubDomain)
    {
      $this->ArrayOfSubDomain = $ArrayOfSubDomain;
    }

    /**
     * @return SubDomain[]
     */
    public function getArrayOfSubDomain()
    {
      return $this->ArrayOfSubDomain;
    }

    /**
     * @param SubDomain[] $ArrayOfSubDomain
     * @return \SamIT\TransIP\ArrayOfSubDomain
     */
    public function setArrayOfSubDomain(array $ArrayOfSubDomain)
    {
      $this->ArrayOfSubDomain = $ArrayOfSubDomain;
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
      return isset($this->ArrayOfSubDomain[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SubDomain
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfSubDomain[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SubDomain $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfSubDomain[] = $value;
      } else {
        $this->ArrayOfSubDomain[$offset] = $value;
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
      unset($this->ArrayOfSubDomain[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SubDomain Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfSubDomain);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfSubDomain);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfSubDomain);
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
      reset($this->ArrayOfSubDomain);
    }

    /**
     * Countable implementation
     *
     * @return SubDomain Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfSubDomain);
    }

}
