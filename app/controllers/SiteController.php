<?php

namespace App\Controllers;

use Core\Application;
use Core\Controller;

class SiteController extends Controller
{
    public function home()
    {
        return Application::$app->router->renderView('main', 'home', ['name'=>'Mvc']);
    }
    public function show()
    {
        return Application::$app->router->renderView('main', 'contact');
    }
    public function store()
    {
        return 'asdf';
    }
}