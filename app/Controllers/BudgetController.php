<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BudgetController extends BaseController
{
    private $page = "/views/income.php";
    private $data;
    
    /**
     * Возвращаем информацию из БД
     * для отображения на сайте
     * Возвращаем нужный шаблон для отрисовки страницы
     * Решение бюджета
     *
     * @param 
     * @return render()
     */
    public function solution()
    {
        $this->data = [];
        $this->page = "/views/solution.php";

        $this->view->render($this->page, $this->data);
    }
    
}
