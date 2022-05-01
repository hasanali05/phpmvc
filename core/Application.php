<?php
namespace Core;

class Application 
{
    public static string $ROOT_PATH;
    public Route $router;
    public Request $request;
    public Response $response;

    public function __construct($rootPath) {
        self::$ROOT_PATH = $rootPath;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Route($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}