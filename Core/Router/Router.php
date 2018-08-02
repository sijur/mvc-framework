<?php
/**
 * Created by PhpStorm.
 * User: Steven O'Driscoll
 * Date: 8/1/2018
 * Time: 6:28 PM
 */

namespace Core\Router;

require dirname(__DIR__) . '/Render/Render.php';
use Core\Render\Render;

class Router
{
    public function __construct() {}

    protected $routes = [];

    protected $params = [];

    protected $url = '';

    public function getRoutes()
    {
        return $this->routes;
    }

    protected function display($data, $dump)
    {
        $render = new Render();
        echo '<pre>';
        $render->render($data, $dump);
        echo '</pre>';
    }
}