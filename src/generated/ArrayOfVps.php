<?php

namespace SamIT\TransIP;

class ArrayOfVps implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Vps[] $ArrayOfVps
     */
    protected $ArrayOfVps = null;

    /**
     * @param Vps[] $ArrayOfVps
     */
    public function __construct(array $ArrayOfVps)
    {
      $this->ArrayOfVps = $ArrayOfVps;
    }

    /**
     * @return Vps[]
     */
    public function getArrayOfVps()
    {
      return $this->ArrayOfVps;
    }

    /**
     * @param Vps[] $ArrayOfVps
     * @return \SamIT\TransIP\ArrayOfVps
     */
    public function setArrayOfVps(array $ArrayOfVps)
    {
      $this->ArrayOfVps = $ArrayOfVps;
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
      return isset($this->ArrayOfVps[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Vps
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfVps[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Vps $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfVps[] = $value;
      } else {
        $this->ArrayOfVps[$offset] = $value;
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
      unset($this->ArrayOfVps[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Vps Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfVps);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfVps);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfVps);
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
      reset($this->ArrayOfVps);
    }

    /**
     * Countable implementation
     *
     * @return Vps Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfVps);
    }

}
