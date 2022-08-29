<?php

class Router
{
    private Array $routes = Array(); 

    function get(string $route, $callback)
    {
        $this->register_route($route, "GET", $callback);
    }

    function post(string $route, $callback)
    {
        $this->register_route($route, "POST", $callback);
    }

    private function register_route(string $route, string $method, $callback)
    {
        $registeredRouter = $this->routes[$route] ?? Array();
        $registeredRouter[$method] = $callback;
        $this->routes[$route] = $registeredRouter; 
    }

    function route(string $path)
    {
        if(!isset($this->routes[$path][$_SERVER['REQUEST_METHOD']]))
            throw new Exception("Path '" . $path . "' not found");

        $out = $this->routes[$path][$_SERVER['REQUEST_METHOD']]();
        echo json_encode($out);
    }
}
