<?php

namespace SamIT\TransIP;

class ArrayOfCronjob implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Cronjob[] $ArrayOfCronjob
     */
    protected $ArrayOfCronjob = null;

    /**
     * @param Cronjob[] $ArrayOfCronjob
     */
    public function __construct(array $ArrayOfCronjob)
    {
      $this->ArrayOfCronjob = $ArrayOfCronjob;
    }

    /**
     * @return Cronjob[]
     */
    public function getArrayOfCronjob()
    {
      return $this->ArrayOfCronjob;
    }

    /**
     * @param Cronjob[] $ArrayOfCronjob
     * @return \SamIT\TransIP\ArrayOfCronjob
     */
    public function setArrayOfCronjob(array $ArrayOfCronjob)
    {
      $this->ArrayOfCronjob = $ArrayOfCronjob;
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
      return isset($this->ArrayOfCronjob[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Cronjob
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfCronjob[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Cronjob $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfCronjob[] = $value;
      } else {
        $this->ArrayOfCronjob[$offset] = $value;
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
      unset($this->ArrayOfCronjob[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Cronjob Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfCronjob);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfCronjob);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfCronjob);
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
      reset($this->ArrayOfCronjob);
    }

    /**
     * Countable implementation
     *
     * @return Cronjob Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfCronjob);
    }

}
