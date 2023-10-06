<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\ReportingModel;

class DutyModel extends BaseModel 
{
    /**
     * Возвращаем число
     * Для отрисовки линейной диаграммы
     * "Динамика сбалансированности бюджета"
     *
     * @param int $year
     * @return int
     */
    public function dynamics(int $year)
    {       
        //Получае информацию по расходам.
        $object = new ReportingModel;
        $expenses = $object->block("expenses", $year, "no");
        
        //Получае информацию по доходам
        $object2 = new ReportingModel;
        $income = $object2->block("income", $year, "no");
        
        $result = round(($income['fulfilled'] - $expenses['fulfilled']) / 1000, 1);
        return $result;
    }
}
