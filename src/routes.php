<?php

use App\Controllers\IndexController;
use App\Controllers\IncomeController;

$route = explode("/", $_SERVER['REQUEST_URI']);     
$route = str_replace(".php", "", $route);

//Запускаем разбор адресной строки

//Главная страница
if($route[2] == "index" || $route[2] == ""){
    $route = new IndexController;
    $route->index(); 
    
//Страница с Доходами    
}elseif ($route[2] == "income") {
    $route = new IncomeController;
    $route->index();
}

