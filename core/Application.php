<?php
namespace Core;

use Core\Application as CoreApplication;

class Application 
{
    public static string $ROOT_PATH;
    public Route $router;
    public Request $request;

    public function __construct($rootPath) {
        self::$ROOT_PATH = $rootPath;
        $this->request = new Request();
        $this->router = new Route($this->request);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}