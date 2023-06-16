<?php

namespace Src\Helper;

use Src\TagCollection;
use Stringable;

class TagCounter implements Stringable
{
    private TagCollection $tags;

    /**
     * TagCounter constructor.
     * @param TagCollection $tags
     */
    public function __construct(TagCollection $tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return array
     */
    public function count(): array
    {
        $result = [];
        foreach ($this->tags as $tag) {
            $tagName = strtolower($tag->getTagName());
            if (isset($result[$tagName])) {
                $result[$tagName]++;
            } else {
                $result[$tagName] = 1;
            }
        }

        return $result;
    }

    public function __toString()
    {
        $result = '';
        $tags = $this->count();
        foreach ($tags as $tag => $count) {
            $result .= sprintf('%s _____ %s <br>', $tag, $count);
        }

        return $result;
    }
}