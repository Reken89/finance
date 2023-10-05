<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\IncomeModel;

class IncomeController extends BaseController
{
    private $page = "/views/income.php";
    private $data;
    
    /**
     * Возвращаем информацию из БД
     * для отображения на сайте
     * Возвращаем нужный шаблон для отрисовки страницы
     * Доходы
     *
     * @param 
     * @return render()
     */
    public function index()
    {
        $object = new IncomeModel;
        $this->data['diagramone'] = $object->diagram("one");
        $this->data['diagramtwo'] = $object->diagram("two");

        $this->view->render($this->page, $this->data);
    }
    
}

