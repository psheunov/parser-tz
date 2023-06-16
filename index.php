<?php

use Src\Helper\TagCounter;
use Src\Parser\HtmlParser;
use Src\Url;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

require_once 'vendor/autoload.php';

$url = new Url('https://www.example.ru/');
$tags = HtmlParser::parse($url->getContent());
$tagCounter = new TagCounter($tags);
echo $tagCounter;