<?php

namespace Src\Parser;

use Src\Tag;
use Src\TagCollection;

class HtmlParser implements Parser
{
    // Регулярное выражение для поиска HTML-тегов
    private const PATTERN = '/<\s*([a-zA-Z0-9]+)(\s|>)/';

    /**
     * @param string $data
     * @return TagCollection
     */
    public static function parse(string $data): TagCollection
    {
        $result = [];
        if (preg_match_all(self::PATTERN, $data, $matches)) {
            foreach ($matches[1] as $item) {
                $result[] = new Tag($item);
            }
        }

        return new TagCollection(...$result);
    }
}