<?php

require '../vendor/autoload.php';

use App\{Application, Router};
use App\Controllers\Index;

$app = new Application();
Router::add('/', [Index::class, 'as_view'], 'index');
$app->run();
