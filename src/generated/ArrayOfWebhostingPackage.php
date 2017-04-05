<?php

namespace SamIT\TransIP;

class ArrayOfWebhostingPackage implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var WebhostingPackage[] $ArrayOfWebhostingPackage
     */
    protected $ArrayOfWebhostingPackage = null;

    /**
     * @param WebhostingPackage[] $ArrayOfWebhostingPackage
     */
    public function __construct(array $ArrayOfWebhostingPackage)
    {
      $this->ArrayOfWebhostingPackage = $ArrayOfWebhostingPackage;
    }

    /**
     * @return WebhostingPackage[]
     */
    public function getArrayOfWebhostingPackage()
    {
      return $this->ArrayOfWebhostingPackage;
    }

    /**
     * @param WebhostingPackage[] $ArrayOfWebhostingPackage
     * @return \SamIT\TransIP\ArrayOfWebhostingPackage
     */
    public function setArrayOfWebhostingPackage(array $ArrayOfWebhostingPackage)
    {
      $this->ArrayOfWebhostingPackage = $ArrayOfWebhostingPackage;
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
      return isset($this->ArrayOfWebhostingPackage[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WebhostingPackage
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfWebhostingPackage[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WebhostingPackage $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfWebhostingPackage[] = $value;
      } else {
        $this->ArrayOfWebhostingPackage[$offset] = $value;
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
      unset($this->ArrayOfWebhostingPackage[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return WebhostingPackage Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfWebhostingPackage);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfWebhostingPackage);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfWebhostingPackage);
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
      reset($this->ArrayOfWebhostingPackage);
    }

    /**
     * Countable implementation
     *
     * @return WebhostingPackage Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfWebhostingPackage);
    }

}
