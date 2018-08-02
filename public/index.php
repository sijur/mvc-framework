<?php
/**
* Created by PhpStorm.
 * User: Steven O'Driscoll
 * Date: 8/1/2018
 * Time: 6:12 PM
 */

//echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '"';

require '../Core/Router/MatchRoutes.php';

$debug =  isset($_REQUEST['debug']) ?? '';

$router = new \Core\Router\MatchRoutes();
$router->setup($debug);

//echo get_class($router);
