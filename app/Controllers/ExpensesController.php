<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ExpensesModel;

class ExpensesController extends BaseController 
{
    private $page = "/views/expenses.php";
    private $data;
    
    /**
     * Возвращаем информацию из БД
     * для отображения на сайте
     * Возвращаем нужный шаблон для отрисовки страницы
     * Расходы
     *
     * @param 
     * @return render()
     */
    public function index()
    {       
        $object = new ExpensesModel;
        $this->data['diagramone'] = $object->diagram("one");

        $this->view->render($this->page, $this->data);
    }
}
