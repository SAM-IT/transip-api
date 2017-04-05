<?php

namespace SamIT\TransIP;

class ArrayOfMailBox implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MailBox[] $ArrayOfMailBox
     */
    protected $ArrayOfMailBox = null;

    /**
     * @param MailBox[] $ArrayOfMailBox
     */
    public function __construct(array $ArrayOfMailBox)
    {
      $this->ArrayOfMailBox = $ArrayOfMailBox;
    }

    /**
     * @return MailBox[]
     */
    public function getArrayOfMailBox()
    {
      return $this->ArrayOfMailBox;
    }

    /**
     * @param MailBox[] $ArrayOfMailBox
     * @return \SamIT\TransIP\ArrayOfMailBox
     */
    public function setArrayOfMailBox(array $ArrayOfMailBox)
    {
      $this->ArrayOfMailBox = $ArrayOfMailBox;
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
      return isset($this->ArrayOfMailBox[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MailBox
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfMailBox[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MailBox $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfMailBox[] = $value;
      } else {
        $this->ArrayOfMailBox[$offset] = $value;
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
      unset($this->ArrayOfMailBox[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MailBox Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfMailBox);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfMailBox);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfMailBox);
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
      reset($this->ArrayOfMailBox);
    }

    /**
     * Countable implementation
     *
     * @return MailBox Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfMailBox);
    }

}
