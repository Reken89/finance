<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\ReportingModel;

class IndexModel extends BaseModel
{
    /**
     * Возвращаем массив содержащий информацию
     * по первому блоку сайта
     * Доходы, расходы, профицит/дефицит, мун.долг
     *
     * @param 
     * @return array
     */
    public function block()
    {
        //Получае информацию по расходам.
        $object = new ReportingModel;
        $expenses = $object->block("expenses", 2023);
        
        //Преобразовываем расходы
        $expen = [
            "expenses" => round($expenses['fulfilled'] / 1000, 1),
            "percent"  => round(($expenses['fulfilled'] * 100) / $expenses['approved'], 0),
            "mounth"   => $expenses['mounth']
        ];
        
        //Получае информацию по доходам
        $object2 = new ReportingModel;
        $income = $object2->block("income", 2023);
        
        //Преобразовываем доходы
        $inc = [
            "income"   => round($income['fulfilled'] / 1000, 1),
            "percent"  => round(($income['fulfilled'] * 100) / $expenses['approved'], 0),
            "mounth"   => $income['mounth']
        ];
        
        //Формируем третий блок (Дефицит/Профицит)
        $three = [
            "three" => round(($income['fulfilled'] - $expenses['fulfilled']) / 1000, 1)
        ];
        
        //Собираем массив с нужной информацией
        $block = [
            "expenses" => $expen,
            "income"   => $inc,
            "three"    => $three,
        ];
        
        return $block;
                
    }
    
}

