<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class IndexController extends BaseController
{
    private $page = "/views/index.php";
    private $data;
    
    public function index()
    {
        $this->view->render($this->page, $this->data);
    }
}

