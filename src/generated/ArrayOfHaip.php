<?php

namespace SamIT\TransIP;

class ArrayOfHaip implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Haip[] $ArrayOfHaip
     */
    protected $ArrayOfHaip = null;

    /**
     * @param Haip[] $ArrayOfHaip
     */
    public function __construct(array $ArrayOfHaip)
    {
      $this->ArrayOfHaip = $ArrayOfHaip;
    }

    /**
     * @return Haip[]
     */
    public function getArrayOfHaip()
    {
      return $this->ArrayOfHaip;
    }

    /**
     * @param Haip[] $ArrayOfHaip
     * @return \SamIT\TransIP\ArrayOfHaip
     */
    public function setArrayOfHaip(array $ArrayOfHaip)
    {
      $this->ArrayOfHaip = $ArrayOfHaip;
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
      return isset($this->ArrayOfHaip[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Haip
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfHaip[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Haip $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfHaip[] = $value;
      } else {
        $this->ArrayOfHaip[$offset] = $value;
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
      unset($this->ArrayOfHaip[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Haip Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfHaip);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfHaip);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfHaip);
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
      reset($this->ArrayOfHaip);
    }

    /**
     * Countable implementation
     *
     * @return Haip Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfHaip);
    }

}
