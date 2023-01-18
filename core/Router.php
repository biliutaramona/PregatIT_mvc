<?php
namespace Core;

use App\Routes;
use Core\Request;

class Router
{
    public function execute()
    {
        $routes = Routes::getAll();
        $path = Request::getPath();
        $method = Request::getMethod();

        if (!isset($routes[$path]) || !isset($routes[$path][$method])) {
            $this->show404();
            return;
        }

        $controllerActionArr = explode('@', $routes[$path][$method]);

        if (count($controllerActionArr) !== 2) {
            $this->show404();
            return;
        }

        $controller = $controllerActionArr[0];
        $action = $controllerActionArr[1];

        (new $controller())->$action();
    }

    private function show404(): void
    {
        http_response_code(404);
        echo 'Page Not Found';
    }
}