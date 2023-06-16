<?php

namespace Src;

class Url
{
    private string $content;
    private string $url;

    /**
     * Url constructor.
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
        $this->content = file_get_contents($this->url);
    }

    /**
     * @return bool|string
     */
    public function getContent(): bool|string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}