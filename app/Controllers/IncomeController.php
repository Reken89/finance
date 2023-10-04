<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
        $this->data = [];

        $this->view->render($this->page, $this->data);
    }
    
}

