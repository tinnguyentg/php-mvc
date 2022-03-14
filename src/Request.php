<?php

namespace App;

class Request
{
    public string $method;
    static array $kwargs = [];

    public function __construct()
    {
        $this->method = strtolower($_SERVER['REQUEST_METHOD']);
    }

    static function path(): string
    {
        $path = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        return $path;
    }
}
