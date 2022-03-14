<?php

namespace App\Controllers;

use App\Request;

use Exception;

abstract class Controller
{
    protected Request $request;

    public function __construct(
        Request $request = new Request()
    ) {
        $this->request = $request;
    }


    static function as_view()
    {
        $controller = new static();
        if (!method_exists($controller, $controller->request->method)) {
            throw new Exception('Method not allowed');
        } else {
            call_user_func([$controller, $controller->request->method]);
        }
    }
}
