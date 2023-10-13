<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MbtModel;
use App\Models\MbtExamModel;

class MbtController extends BaseController 
{
    private $page = "/views/mbt.php";
    private $data;
    
    /**
     * Возвращаем информацию
     * для отображения на сайте
     * Возвращаем нужный шаблон для отрисовки страницы
     * Исполнение МБТ
     *
     * @param 
     * @return render()
     */
    public function index()
    {   
        $object = new MbtModel;
        $object2 = new MbtExamModel;
        $mounth = $object->mounth();
        $array = $object->run($mounth['mounth']);
        $this->data['info'] = $object2->run($array, $mounth['mounth']);
        $this->data['mounth'] = $mounth['mounth'];
        
        $this->view->render($this->page, $this->data);
    }
}

