<?php

require_once __DIR__.'/../vendor/autoload.php';

use Core\Application;
use App\Controllers\SiteController;
use App\Controllers\AuthController;

$app = new Application(dirname(__DIR__));

// $app->router->get('/', 'home');

// $app->router->get('/contact', function() {
//     return 'contact';
// });

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'show']);
$app->router->post('/contact', [SiteController::class, 'store']);

$app->router->get('/login', [AuthController::class, 'loginForm']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'registerForm']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->run();