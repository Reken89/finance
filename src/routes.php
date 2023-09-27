<?php

use App\Controllers\IndexController;

$route = explode("/", $_SERVER['REQUEST_URI']);     
$route = str_replace(".php", "", $route);

//echo "<pre>";
//var_dump($route);

//Запускаем разбор адресной строки
if($route[2] == "index" || $route[2] == ""){
    $route = new IndexController;
    $route->index();
    
} elseif ($route[2] == "test") {
    $route = new IndexController;
    $route->test();
}

