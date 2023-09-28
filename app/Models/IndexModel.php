<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\ReportingModel;
use PDO;

class IndexModel extends BaseModel
{
    public function test()
    {
        $sql = "SELECT * FROM `ekr`";
        $res = [];
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $res[$row['id']] = $row;
        }
        return $res;
    }
    
    public function block()
    {
        //Получае информацию по расходам
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

