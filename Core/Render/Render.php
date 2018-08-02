<?php
/**
 * Created by PhpStorm.
 * User: Steven O'Driscoll
 * Date: 8/1/2018
 * Time: 8:02 PM
 */

namespace Core\Render;


class Render
{
    public function __construct()
    {
    }

    public static function render($data, $dump = '')
    {
        echo '<pre>';
        if ($dump)
        {
            echo htmlspecialchars(print_r($data, true));
        }
        else
        {
            var_dump(print_r($data, true));
        }
        echo '</pre>';
    }
}