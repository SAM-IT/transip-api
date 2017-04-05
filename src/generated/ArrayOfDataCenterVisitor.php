<?php

namespace SamIT\TransIP;

class ArrayOfDataCenterVisitor implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DataCenterVisitor[] $ArrayOfDataCenterVisitor
     */
    protected $ArrayOfDataCenterVisitor = null;

    /**
     * @param DataCenterVisitor[] $ArrayOfDataCenterVisitor
     */
    public function __construct(array $ArrayOfDataCenterVisitor)
    {
      $this->ArrayOfDataCenterVisitor = $ArrayOfDataCenterVisitor;
    }

    /**
     * @return DataCenterVisitor[]
     */
    public function getArrayOfDataCenterVisitor()
    {
      return $this->ArrayOfDataCenterVisitor;
    }

    /**
     * @param DataCenterVisitor[] $ArrayOfDataCenterVisitor
     * @return \SamIT\TransIP\ArrayOfDataCenterVisitor
     */
    public function setArrayOfDataCenterVisitor(array $ArrayOfDataCenterVisitor)
    {
      $this->ArrayOfDataCenterVisitor = $ArrayOfDataCenterVisitor;
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
      return isset($this->ArrayOfDataCenterVisitor[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DataCenterVisitor
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfDataCenterVisitor[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DataCenterVisitor $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfDataCenterVisitor[] = $value;
      } else {
        $this->ArrayOfDataCenterVisitor[$offset] = $value;
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
      unset($this->ArrayOfDataCenterVisitor[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DataCenterVisitor Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfDataCenterVisitor);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfDataCenterVisitor);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfDataCenterVisitor);
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
      reset($this->ArrayOfDataCenterVisitor);
    }

    /**
     * Countable implementation
     *
     * @return DataCenterVisitor Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfDataCenterVisitor);
    }

}
