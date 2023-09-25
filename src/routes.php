<?php

$route = explode("/", $_SERVER['REQUEST_URI']);     
$route = str_replace(".php", "", $route);

echo "<pre>";
var_dump($route);
