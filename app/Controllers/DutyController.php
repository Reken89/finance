<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DutyModel;

class DutyController extends BaseController 
{
    private $page = "/views/duty.php";
    private $data;
    
    /**
     * Возвращаем информацию из БД
     * для отображения на сайте
     * Возвращаем нужный шаблон для отрисовки страницы
     * Долг
     *
     * @param 
     * @return render()
     */
    public function index()
    {       
        $object = new DutyModel;
        $this->data['dynamics2020'] = $object->dynamics(2020);
        $this->data['dynamics2021'] = $object->dynamics(2021);
        $this->data['dynamics2022'] = $object->dynamics(2022);
        $this->data['dynamics2023'] = $object->dynamics(2023);

        $this->view->render($this->page, $this->data);
    }
}
