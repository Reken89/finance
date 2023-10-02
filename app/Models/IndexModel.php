<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\ReportingModel;
use App\Models\PlanModel;

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
        
        //Формируем информацию для диаграммы
        //Исполнение по доходам и расходам
        $execution = [
            "approved_d"  => round($income['approved'] / 1000, 1),
            "fulfilled_d" => round($income['fulfilled'] / 1000, 1),
            "approved_r"  => round($expenses['approved'] / 1000, 1),
            "fulfilled_r" => round($expenses['fulfilled'] / 1000, 1),
        ];

        
        //Собираем массив с нужной информацией
        $block = [
            "expenses"  => $expen,
            "income"    => $inc,
            "three"     => $three,
            "execution" => $execution,
        ];
        
        return $block;
                
    }
    
    /**
     * Возвращаем массив содержащий информацию
     * по диаграмме сайта
     * Кассовый план
     *
     * @param 
     * @return array
     */
    public function diagram()
    {
        //Получае информацию по расходам.
        $object = new PlanModel();
        $expenses = $object->diagram("expenses", 2023);
        
        //Получае информацию по доходам
        $object2 = new PlanModel;
        $income = $object2->diagram("income", 2023);
        
        //Проверяем существует ли значение 
        //полученное при обращении к таблице plan
        //Формируем массив из полученных данных     
        $diagram = [
            "mounth" => $expenses == true ? $expenses['mounth'] : 0,
            "janr"   => $expenses == true ? $expenses['jan'] : 150000,
            "febr"   => $expenses == true ? $expenses['feb'] : 150000,
            "marr"   => $expenses == true ? $expenses['mar'] : 150000,
            "aprr"   => $expenses == true ? $expenses['apr'] : 150000,
            "mayr"   => $expenses == true ? $expenses['may'] : 150000,
            "junr"   => $expenses == true ? $expenses['jun'] : 150000,
            "julr"   => $expenses == true ? $expenses['jul'] : 150000,
            "augr"   => $expenses == true ? $expenses['aug'] : 150000,
            "sepr"   => $expenses == true ? $expenses['sep'] : 150000,
            "octr"   => $expenses == true ? $expenses['oct'] : 150000,
            "novr"   => $expenses == true ? $expenses['nov'] : 150000,
            "decr"   => $expenses == true ? $expenses['dec'] : 150000,
            "jand"   => $income == true ? $income['jan'] : 150000,
            "febd"   => $income == true ? $income['feb'] : 150000,
            "mard"   => $income == true ? $income['mar'] : 150000,
            "aprd"   => $income == true ? $income['apr'] : 150000,
            "mayd"   => $income == true ? $income['may'] : 150000,
            "jund"   => $income == true ? $income['jun'] : 150000,
            "juld"   => $income == true ? $income['jul'] : 150000,
            "augd"   => $income == true ? $income['aug'] : 150000,
            "sepd"   => $income == true ? $income['sep'] : 150000,
            "octd"   => $income == true ? $income['oct'] : 150000,
            "novd"   => $income == true ? $income['nov'] : 150000,
            "decd"   => $income == true ? $income['dec'] : 150000,
        ];
        
        return $diagram;
        
    }
    
}

