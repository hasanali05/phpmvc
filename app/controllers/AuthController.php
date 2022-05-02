<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request;

class AuthController extends Controller
{
    public function loginForm(Request $request)
    {
        if(!$request->isGet()) {
            return $this->view('_404');
        }
        $this->setLayout('empty');
        return $this->view('login');
    }
    public function login(Request $request)
    {
        if(!$request->isPost()) {
            return $this->view('_404');
        }
        return "handle";
    }
    public function registerForm(Request $request)
    {
        $this->setLayout('empty');
        return $this->view('register');
    }
    public function register(Request $request)
    {
        if(!$request->isPost()) {
            return $this->view('_404');
        }
        return "handle";
    }
}