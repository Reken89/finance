<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DutyModel;

class ContactController extends BaseController 
{
    private $page = "/views/contacts.php";
    private $data;
    
    /**
     * Возвращаем информацию
     * для отображения на сайте
     * Возвращаем нужный шаблон для отрисовки страницы
     * Контакты
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

