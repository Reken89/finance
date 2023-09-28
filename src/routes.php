<?php

use App\Controllers\IndexController;

$route = explode("/", $_SERVER['REQUEST_URI']);     
$route = str_replace(".php", "", $route);

//Запускаем разбор адресной строки
if($route[2] == "index" || $route[2] == ""){
    $route = new IndexController;
    $route->index();   
}

