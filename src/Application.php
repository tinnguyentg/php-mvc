<?php

namespace App;

use Exception;

class Application
{
    static Router $router;

    public function __construct()
    {
        static::$router = new Router();
    }

    public function run()
    {
        $callback = static::$router->resolve(Request::path());

        if (!$callback) {
            throw new Exception("Page not found");
        } else {
            call_user_func($callback);
        }
    }
}
