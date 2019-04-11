<?php

namespace App\Internal\Psr\Http\Message\Collection;

class HeaderCollection implements CollectionInterface
{
    private $headers = [];

    /**
     * @inheritdoc
     */
    public function offsetExists($offset): bool
    {
        $headers = $this->changeKeyCase();

        return \array_key_exists(strtolower($offset), $headers);
    }

    /**
     * @inheritdoc
     */
    public function offsetGet($offset)
    {
        return $this->headers[$offset];
    }

    /**
     * @inheritdoc
     */
    public function offsetSet($offset, $value): CollectionInterface
    {
        $this->headers[$offset] = $value;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function offsetUnset($offset): void
    {
        foreach ($this->headers as $key => $value) {
            if (strtolower($offset) === strtolower($key)) {
                unset($this->headers[$key]);
            }
        }
    }

    public function changeKeyCase(): array
    {
        return \array_change_key_case($this->headers);
    }

    public function ToArray(): array
    {
        return $this->headers;
    }

    public function isEmpty(): bool
    {
        return empty($this->headers);
    }

    public function addHeader($key, $value): void
    {
        if (!$this->offsetExists($key)) {
            return;
        }

        $this->offsetUnset($key);
        $this->offsetSet($key, $value);
    }
}