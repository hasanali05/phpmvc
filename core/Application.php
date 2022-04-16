<?php
namespace Core;

class Application 
{
    public Route $router;
    public Request $request;
    public function __construct() {
        $this->request = new Request();
        $this->router = new Route($this->request);
    }

    public function run()
    {
        $this->router->resolve();
    }
}