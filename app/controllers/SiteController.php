<?php

namespace App\Controllers;

use Core\Application;
use Core\Controller;

class SiteController extends Controller
{
    public function home()
    {
        return $this->view('home', ['name'=>'Mvc']);
    }
    public function show()
    {
        return $this->view('contact');
    }
    public function store()
    {
        return 'asdf';
    }
}