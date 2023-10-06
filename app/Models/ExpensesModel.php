<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\ReportingModel;

class ExpensesModel extends BaseModel 
{
    /**
     * Возвращаем массив содержащий информацию
     * по круговым диаграммам Расходы
     *
     * @param string $diagram
     * @return array
     */
    public function diagram(string $diagram)
    {
        if($diagram == "one"){
            $kbk = ['00001000000000000000', '00003000000000000000', '00004000000000000000', 
                '00005000000000000000', '00007000000000000000', '00008000000000000000', 
                '00009000000000000000', '00010000000000000000', '00011000000000000000', 
                '00013000000000000000'];
            $limit = 10;
        }

        $object = new ReportingModel;
        $result = $object->diagram("expenses", 2023, $kbk, $limit);
        
        return $result;
    }
    
}
