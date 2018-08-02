<?php
/**
 * Created by PhpStorm.
 * User: Steven O'Driscoll
 * Date: 8/1/2018
 * Time: 8:00 PM
 */

namespace Core\Router;

include 'Router.php';

class AddRoutes extends Router
{
    public function __construct()
    {
        parent::__construct();
    }

    public function setup()
    {
        $this->add();
    }

    private function convertRoute($route)
    {
        // convert the route to regular expressions: escape forward slashes.
        return preg_replace('/\//', '\\/', $route);
    }

    private function convertVariables($route)
    {
        // convert variables.
        return preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z]+)', $route);
    }

    private function addDelimiters($route)
    {
        // add start and end delimiters, and a case insensitive flag.
        return '/^' . $route . '$/i';
    }

    private function convertVariablesWithIds($route)
    {
        // convert variables with custom regular expressions.
        return preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);
    }

    protected function add()
    {
//        $this->addRoutes('', ['controller' => 'Home', 'action' => 'index']);
//        $this->addRoutes('posts', ['controller' => 'Posts', 'action' => 'index']);
        $this->addRoute('{controller}');
        $this->addRoute('{controller}/{action}');
        $this->addRoute('{controller}/{action}/{id:\d+}');
        $this->addRoute('admin/{action}/{controller}');
    }

    protected function addRoute($route, $params = [])
    {
        $route = $this->convertRoute($route);
        $route = $this->convertVariables($route);
        $route = $this->convertVariablesWithIds($route);
        $route = $this->addDelimiters($route);

        $this->routes[$route] = $params;
    }
}