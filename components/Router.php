<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 04.05.20
 * Time: 22:56
 */

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);

    }

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            $uri = trim($_SERVER['REQUEST_URI'], '/');
        }

    }

//    Returns request string
    public function run()
    {

        $uri = $this->getURI();
        echo $uri;
        //Проверить надичие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {

            // Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {

                $segments = explode('/', $path);

                echo '<pre>';
                print_r($segments);
                echo '</pre>';



            }


        }
    }
}