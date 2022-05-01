<?php

require_once __DIR__.'/../vendor/autoload.php';

use Core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');

// $app->router->get('/contact', function() {
//     return 'contact';
// });
$app->router->get('/contact', 'contact');

$app->run();