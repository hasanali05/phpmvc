<?php
namespace Core;

class Route
{
    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path]['callback'] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path]['callback'] ?? false;
        
        if($callback === false) {
            echo "Not found";
            exit;
        }
        echo call_user_func($callback);
    }
}