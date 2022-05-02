<?php
namespace Core;

class Application 
{
    public static string $ROOT_PATH;
    public Route $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public Controller $controller;

    public function __construct($rootPath) {
        self::$ROOT_PATH = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Route($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}