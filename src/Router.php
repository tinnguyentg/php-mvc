<?php

namespace App;

class Router
{
    static array $routes = [];

    static function add(string $path, callable $callback, ?string $name)
    {
        static::$routes[] = ['path' => $path, 'callback' => $callback, 'name' => $name];
    }

    public function resolve(string $request_path): ?callable
    {
        $valid_callback = null;
        foreach (static::$routes as ['path' => $path, 'callback' => $callback, 'name' => $name]) {
            $re_path = '/^' . str_replace('/', '\/', $path) . '$/';
            if (preg_match($re_path, $request_path, Request::$kwargs)) {
                $valid_callback = $callback;
                break;
            }
        }
        return $valid_callback;
    }
}
