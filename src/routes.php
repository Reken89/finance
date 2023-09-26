<?php

use App\Controllers\IndexController;

//require_once 'app/controllers/IndexController.php';

$route = explode("/", $_SERVER['REQUEST_URI']);     
$route = str_replace(".php", "", $route);

//echo "<pre>";
//var_dump($route);

$route = new IndexController;
$route->index();
