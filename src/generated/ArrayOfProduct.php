<?php

namespace SamIT\TransIP;

class ArrayOfProduct implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Product[] $ArrayOfProduct
     */
    protected $ArrayOfProduct = null;

    /**
     * @param Product[] $ArrayOfProduct
     */
    public function __construct(array $ArrayOfProduct)
    {
      $this->ArrayOfProduct = $ArrayOfProduct;
    }

    /**
     * @return Product[]
     */
    public function getArrayOfProduct()
    {
      return $this->ArrayOfProduct;
    }

    /**
     * @param Product[] $ArrayOfProduct
     * @return \SamIT\TransIP\ArrayOfProduct
     */
    public function setArrayOfProduct(array $ArrayOfProduct)
    {
      $this->ArrayOfProduct = $ArrayOfProduct;
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
      return isset($this->ArrayOfProduct[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Product
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfProduct[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Product $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfProduct[] = $value;
      } else {
        $this->ArrayOfProduct[$offset] = $value;
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
      unset($this->ArrayOfProduct[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Product Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfProduct);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfProduct);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfProduct);
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
      reset($this->ArrayOfProduct);
    }

    /**
     * Countable implementation
     *
     * @return Product Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfProduct);
    }

}
