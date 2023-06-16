<?php

namespace Src;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use TypeError;


class TagCollection implements Countable, IteratorAggregate, ArrayAccess
{
    private array $tags;

    /**
     * TagCollection constructor.
     * @param Tag ...$tags
     */
    public function __construct(Tag ...$tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return ArrayIterator
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->tags);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->tags);
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->tags[$offset]);
    }

    /**
     * @param mixed $offset
     * @return Tag
     */
    public function offsetGet($offset): Tag
    {
        return $this->tags[$offset];
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        if ($value instanceof Tag) {
            $this->tags[$offset] = $value;
        } else {
            throw new TypeError("Not a tag!");
        }
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->tags[$offset]);
    }
}