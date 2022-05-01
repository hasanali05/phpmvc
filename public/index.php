<?php

require_once __DIR__.'/../vendor/autoload.php';

use Core\Application;

$app = new Application();

$app->router->get('/', function() {
    return 'hi';
});

// $app->router->get('/contact', function() {
//     return 'contact';
// });
$app->router->get('/contact', 'contact');

$app->run();