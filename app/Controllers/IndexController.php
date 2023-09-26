<?php

namespace App\Controllers;

require_once 'app/controllers/BaseController.php';

class IndexController extends BaseController
{
    private $page = "/views/index.php";
    private $data;
    
    public function index()
    {
        $this->view->render($this->page, $this->data);
    }
}

