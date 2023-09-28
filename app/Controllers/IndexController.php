<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\IndexModel;

class IndexController extends BaseController
{
    private $page = "/views/start.php";
    private $data;
    
    public function index()
    {
        $object = new IndexModel;
        $this->data['block'] = $object->block();
        
        //var_dump($this->data['block']);

        $this->view->render($this->page, $this->data);
    }
    
    public function test()
    {
        $test = new IndexModel;
        var_dump($test->test());
    }
}

