<?php

namespace SamIT\TransIP;

class ArrayOfOperatingSystem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OperatingSystem[] $ArrayOfOperatingSystem
     */
    protected $ArrayOfOperatingSystem = null;

    /**
     * @param OperatingSystem[] $ArrayOfOperatingSystem
     */
    public function __construct(array $ArrayOfOperatingSystem)
    {
      $this->ArrayOfOperatingSystem = $ArrayOfOperatingSystem;
    }

    /**
     * @return OperatingSystem[]
     */
    public function getArrayOfOperatingSystem()
    {
      return $this->ArrayOfOperatingSystem;
    }

    /**
     * @param OperatingSystem[] $ArrayOfOperatingSystem
     * @return \SamIT\TransIP\ArrayOfOperatingSystem
     */
    public function setArrayOfOperatingSystem(array $ArrayOfOperatingSystem)
    {
      $this->ArrayOfOperatingSystem = $ArrayOfOperatingSystem;
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
      return isset($this->ArrayOfOperatingSystem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OperatingSystem
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfOperatingSystem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OperatingSystem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfOperatingSystem[] = $value;
      } else {
        $this->ArrayOfOperatingSystem[$offset] = $value;
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
      unset($this->ArrayOfOperatingSystem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OperatingSystem Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfOperatingSystem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfOperatingSystem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfOperatingSystem);
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
      reset($this->ArrayOfOperatingSystem);
    }

    /**
     * Countable implementation
     *
     * @return OperatingSystem Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfOperatingSystem);
    }

}
