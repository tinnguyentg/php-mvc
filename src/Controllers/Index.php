<?php

namespace App\Controllers;

use App\View;

class Index extends Controller
{
    public function get()
    {
        return View::render('index.html', ['title' => "PHP MVC"]);
    }
}
