<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 02.05.20
 * Time: 11:47
 */

ini_set('display_errors',1);
error_reporting(E_ALL);
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
//
$router = new Router();
$router->run();
//

//require('products_db.php');
require('components/header.php');




//require('components/footer.php');