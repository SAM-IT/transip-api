<?php

namespace SamIT\TransIP;

class ArrayOfTld implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Tld[] $ArrayOfTld
     */
    protected $ArrayOfTld = null;

    /**
     * @param Tld[] $ArrayOfTld
     */
    public function __construct(array $ArrayOfTld)
    {
      $this->ArrayOfTld = $ArrayOfTld;
    }

    /**
     * @return Tld[]
     */
    public function getArrayOfTld()
    {
      return $this->ArrayOfTld;
    }

    /**
     * @param Tld[] $ArrayOfTld
     * @return \SamIT\TransIP\ArrayOfTld
     */
    public function setArrayOfTld(array $ArrayOfTld)
    {
      $this->ArrayOfTld = $ArrayOfTld;
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
      return isset($this->ArrayOfTld[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Tld
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfTld[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Tld $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfTld[] = $value;
      } else {
        $this->ArrayOfTld[$offset] = $value;
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
      unset($this->ArrayOfTld[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Tld Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfTld);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfTld);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfTld);
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
      reset($this->ArrayOfTld);
    }

    /**
     * Countable implementation
     *
     * @return Tld Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfTld);
    }

}
