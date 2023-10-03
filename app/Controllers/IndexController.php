<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\IndexModel;

class IndexController extends BaseController
{
    private $page = "/views/start.php";
    private $data;
    
    /**
     * Возвращаем информацию из БД
     * для отображения на сайте
     * Возвращаем нужный шаблон для отрисовки стартовой страницы
     *
     * @param 
     * @return render()
     */
    public function index()
    {
        $object = new IndexModel;
        $this->data['block'] = $object->block();
        $this->data['diagram'] = $object->diagram();
        $this->data['dynamicd'] = $object->dynamics("income"); //Доходы

        $this->view->render($this->page, $this->data);
    }

}

