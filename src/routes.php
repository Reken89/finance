<?php

use App\Controllers\IndexController;
use App\Controllers\IncomeController;
use App\Controllers\ExpensesController;
use App\Controllers\DutyController;
use App\Controllers\ContactController;

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
    
//Страница с Расходами    
}elseif ($route[2] == "expenses") {
    $route = new ExpensesController;
    $route->index();

//Страница с Долгами   
}elseif ($route[2] == "duty") {
    $route = new DutyController;
    $route->index();

//Страница Контакты
}elseif ($route[2] == "contacts") {
    $route = new ContactController;
    $route->index(); 
}
