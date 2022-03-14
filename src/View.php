<?php

namespace App;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class View
{

    private FilesystemLoader $loader;
    private Environment $twig;

    public function __construct()
    {
        $this->loader = new FileSystemLoader('../templates');
        $this->twig = new Environment($this->loader);
    }

    static function render(string $view, array $context = [])
    {
        $view_instance = new static();
        echo $view_instance->twig->render($view, $context);
        return;
    }
}
