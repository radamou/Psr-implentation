<?php

namespace App\Internal\Psr\Http\Message\Collection;

interface CollectionInterface extends  \ArrayAccess
{
    /**
     * Check if the key exist for the collection
     *
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset): bool;

    /**
     * Return value corresponding to the $offset
     *
     * @param mixed $offset
     *
     * @return mixed
     */
    public function offsetGet($offset);

    /**
     * Set the value corresponding to the offset
     *
     * @param mixed $offset
     * @param mixed $value
     *
     * @return CollectionInterface
     */
    public function offsetSet($offset, $value): self;

    /**
     * Unset the value corresponding to the offset
     *
     * @param mixed $offset
     *
     * @return self
     */
    public function offsetUnset($offset): self;

    /**
     * Return array with key to lower/Upper case
     *
     * @return static
     */
    public function changeKeyCase();

    /**
     * Return Collection as array
     *
     * @return array
     */
    public function ToArray(): array;

    /**
     * Check if the Collection is empty
     *
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Add Header in the collection
     *
     * @param $key
     * @param $value
     *
     * @return self
     */
    public function addElement($key, $value): self;
}