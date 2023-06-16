<?php

namespace Src;

class Tag
{
    private string $tagName;

    /**
     * Tag constructor.
     * @param string $tagName
     */
    public function __construct(string $tagName)
    {
        $this->tagName = $tagName;
    }

    /**
     * @return string
     */
    public function getTagName(): string
    {
        return $this->tagName;
    }
}