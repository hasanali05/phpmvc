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
            return "Not found";
        }

        if(is_string($callback)) {
            $layout = 'main';
            return $this->renderView($layout, $callback);
        }

        return call_user_func($callback);
    }

    public function renderView($layout, $view)
    {
        $layoutContent = $this->layoutContent($layout);
        $viewContent = $this->onlyViewContent($view);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent($layout)
    {
        ob_start();
        include_once Application::$ROOT_PATH."/views/layouts/$layout.php";
        return ob_get_clean();
    }

    protected function onlyViewContent($view) {
        ob_start();
        include_once Application::$ROOT_PATH."/views/$view.php";
        return ob_get_clean();
    }
}