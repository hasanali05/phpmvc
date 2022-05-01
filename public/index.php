<?php

require_once __DIR__.'/../vendor/autoload.php';

use Core\Application;
use App\Controllers\SiteController;

$app = new Application(dirname(__DIR__));

// $app->router->get('/', 'home');

// $app->router->get('/contact', function() {
//     return 'contact';
// });

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'show']);
$app->router->post('/contact', [SiteController::class, 'store']);

$app->run();