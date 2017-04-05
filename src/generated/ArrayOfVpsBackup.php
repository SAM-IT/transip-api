<?php

namespace SamIT\TransIP;

class ArrayOfVpsBackup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VpsBackup[] $ArrayOfVpsBackup
     */
    protected $ArrayOfVpsBackup = null;

    /**
     * @param VpsBackup[] $ArrayOfVpsBackup
     */
    public function __construct(array $ArrayOfVpsBackup)
    {
      $this->ArrayOfVpsBackup = $ArrayOfVpsBackup;
    }

    /**
     * @return VpsBackup[]
     */
    public function getArrayOfVpsBackup()
    {
      return $this->ArrayOfVpsBackup;
    }

    /**
     * @param VpsBackup[] $ArrayOfVpsBackup
     * @return \SamIT\TransIP\ArrayOfVpsBackup
     */
    public function setArrayOfVpsBackup(array $ArrayOfVpsBackup)
    {
      $this->ArrayOfVpsBackup = $ArrayOfVpsBackup;
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
      return isset($this->ArrayOfVpsBackup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VpsBackup
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfVpsBackup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VpsBackup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfVpsBackup[] = $value;
      } else {
        $this->ArrayOfVpsBackup[$offset] = $value;
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
      unset($this->ArrayOfVpsBackup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VpsBackup Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfVpsBackup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfVpsBackup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfVpsBackup);
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
      reset($this->ArrayOfVpsBackup);
    }

    /**
     * Countable implementation
     *
     * @return VpsBackup Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfVpsBackup);
    }

}
