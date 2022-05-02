<?php
namespace Core;

class Controller
{
    public string $layout = 'main';
    public function view($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
    
    public function setLayout($layout = 'main')
    {
        $this->layout = $layout;
    }
}