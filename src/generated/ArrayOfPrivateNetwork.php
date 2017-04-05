<?php

namespace SamIT\TransIP;

class ArrayOfPrivateNetwork implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PrivateNetwork[] $ArrayOfPrivateNetwork
     */
    protected $ArrayOfPrivateNetwork = null;

    /**
     * @param PrivateNetwork[] $ArrayOfPrivateNetwork
     */
    public function __construct(array $ArrayOfPrivateNetwork)
    {
      $this->ArrayOfPrivateNetwork = $ArrayOfPrivateNetwork;
    }

    /**
     * @return PrivateNetwork[]
     */
    public function getArrayOfPrivateNetwork()
    {
      return $this->ArrayOfPrivateNetwork;
    }

    /**
     * @param PrivateNetwork[] $ArrayOfPrivateNetwork
     * @return \SamIT\TransIP\ArrayOfPrivateNetwork
     */
    public function setArrayOfPrivateNetwork(array $ArrayOfPrivateNetwork)
    {
      $this->ArrayOfPrivateNetwork = $ArrayOfPrivateNetwork;
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
      return isset($this->ArrayOfPrivateNetwork[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PrivateNetwork
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfPrivateNetwork[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PrivateNetwork $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfPrivateNetwork[] = $value;
      } else {
        $this->ArrayOfPrivateNetwork[$offset] = $value;
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
      unset($this->ArrayOfPrivateNetwork[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PrivateNetwork Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfPrivateNetwork);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfPrivateNetwork);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfPrivateNetwork);
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
      reset($this->ArrayOfPrivateNetwork);
    }

    /**
     * Countable implementation
     *
     * @return PrivateNetwork Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfPrivateNetwork);
    }

}
