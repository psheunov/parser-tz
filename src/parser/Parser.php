<?php


namespace Src\Parser;


interface Parser
{
    /**
     * @param string $data
     * @return mixed
     */
    public static function parse(string $data): mixed;
}