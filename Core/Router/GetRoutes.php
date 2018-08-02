<?php
/**
 * Created by PhpStorm.
 * User: Steven O'Driscoll
 * Date: 8/1/2018
 * Time: 8:10 PM
 */

namespace Core\Router;

include 'AddRoutes.php';

class GetRoutes extends AddRoutes
{
    public function __construct()
    {
        parent::__construct();
    }

    public function setupRoutes($debug = '')
    {
        $this->add();

        if ($debug)
        {
            $routes = $this->getRoutes();
            $this->displayRoutes($routes, true);
        }

    }

    public function getRoutes()
    {
        return $this->routes;
    }

    protected function displayRoutes($routes, $dump)
    {
        $this->display($routes, $dump);
    }
}