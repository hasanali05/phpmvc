<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request;

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
    public function store(Request $request)
    {
        print_r($request->getBody());
        return 'asdf';
    }
}