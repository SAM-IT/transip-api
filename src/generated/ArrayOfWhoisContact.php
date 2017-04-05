<?php

namespace SamIT\TransIP;

class ArrayOfWhoisContact implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var WhoisContact[] $ArrayOfWhoisContact
     */
    protected $ArrayOfWhoisContact = null;

    /**
     * @param WhoisContact[] $ArrayOfWhoisContact
     */
    public function __construct(array $ArrayOfWhoisContact)
    {
      $this->ArrayOfWhoisContact = $ArrayOfWhoisContact;
    }

    /**
     * @return WhoisContact[]
     */
    public function getArrayOfWhoisContact()
    {
      return $this->ArrayOfWhoisContact;
    }

    /**
     * @param WhoisContact[] $ArrayOfWhoisContact
     * @return \SamIT\TransIP\ArrayOfWhoisContact
     */
    public function setArrayOfWhoisContact(array $ArrayOfWhoisContact)
    {
      $this->ArrayOfWhoisContact = $ArrayOfWhoisContact;
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
      return isset($this->ArrayOfWhoisContact[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WhoisContact
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfWhoisContact[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WhoisContact $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfWhoisContact[] = $value;
      } else {
        $this->ArrayOfWhoisContact[$offset] = $value;
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
      unset($this->ArrayOfWhoisContact[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return WhoisContact Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfWhoisContact);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfWhoisContact);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfWhoisContact);
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
      reset($this->ArrayOfWhoisContact);
    }

    /**
     * Countable implementation
     *
     * @return WhoisContact Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfWhoisContact);
    }

}
