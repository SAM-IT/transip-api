<?php

namespace SamIT\TransIP;

class ArrayOfSnapshot implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Snapshot[] $ArrayOfSnapshot
     */
    protected $ArrayOfSnapshot = null;

    /**
     * @param Snapshot[] $ArrayOfSnapshot
     */
    public function __construct(array $ArrayOfSnapshot)
    {
      $this->ArrayOfSnapshot = $ArrayOfSnapshot;
    }

    /**
     * @return Snapshot[]
     */
    public function getArrayOfSnapshot()
    {
      return $this->ArrayOfSnapshot;
    }

    /**
     * @param Snapshot[] $ArrayOfSnapshot
     * @return \SamIT\TransIP\ArrayOfSnapshot
     */
    public function setArrayOfSnapshot(array $ArrayOfSnapshot)
    {
      $this->ArrayOfSnapshot = $ArrayOfSnapshot;
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
      return isset($this->ArrayOfSnapshot[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Snapshot
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfSnapshot[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Snapshot $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfSnapshot[] = $value;
      } else {
        $this->ArrayOfSnapshot[$offset] = $value;
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
      unset($this->ArrayOfSnapshot[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Snapshot Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfSnapshot);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfSnapshot);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfSnapshot);
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
      reset($this->ArrayOfSnapshot);
    }

    /**
     * Countable implementation
     *
     * @return Snapshot Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfSnapshot);
    }

}
