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
        $expenses = $object->block("expenses", 2023, "no");
        
        //Преобразовываем расходы
        $expen = [
            "expenses" => round($expenses['fulfilled'] / 1000, 1),
            "percent"  => round(($expenses['fulfilled'] * 100) / $expenses['approved'], 0),
            "mounth"   => $expenses['mounth']
        ];
        
        //Получае информацию по доходам
        $object2 = new ReportingModel;
        $income = $object2->block("income", 2023, "no");
        
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
    
    /**
     * Возвращаем массив содержащий информацию
     * по диаграмме сайта
     * Динамика доходов и расходов
     *
     * @param string $meaning
     * @return array
     */
    public function dynamics(string $meaning)
    {
        //Получае информацию
        if($meaning == "income"){
            $object = new ReportingModel;
            $result202001 = $object->block("$meaning", 2020, "00010000000000000000");
            $result202002 = $object->block("$meaning", 2020, "00020000000000000000");
            $result202101 = $object->block("$meaning", 2021, "00010000000000000000");
            $result202102 = $object->block("$meaning", 2021, "00020000000000000000");
            $result202201 = $object->block("$meaning", 2022, "00010000000000000000");
            $result202202 = $object->block("$meaning", 2022, "00020000000000000000");
            $result202301 = $object->block("$meaning", 2023, "00010000000000000000");
            $result202302 = $object->block("$meaning", 2023, "00020000000000000000");
            
            $result = [
                "result202001" => round($result202001['fulfilled'] / 1000, 1),
                "result202002" => round($result202002['fulfilled'] / 1000, 1),
                "result202101" => round($result202101['fulfilled'] / 1000, 1),
                "result202102" => round($result202102['fulfilled'] / 1000, 1),
                "result202201" => round($result202201['fulfilled'] / 1000, 1),
                "result202202" => round($result202202['fulfilled'] / 1000, 1),
                "result202301" => round($result202301['approved'] / 1000, 1),
                "result202302" => round($result202302['approved'] / 1000, 1),
            ];
            return $result;
            
        }else{
            $object = new ReportingModel;
            $result2020 = $object->block("$meaning", 2020, "no");
            $result2021 = $object->block("$meaning", 2021, "no");
            $result2022 = $object->block("$meaning", 2022, "no");
            $result2023 = $object->block("$meaning", 2023, "no");
            
            $result = [
                "result2020" => round($result2020['fulfilled'] / 1000, 1),
                "result2021" => round($result2021['fulfilled'] / 1000, 1),
                "result2022" => round($result2022['fulfilled'] / 1000, 1),
                "result2023" => round($result2023['approved'] / 1000, 1),
            ];
            return $result;
            
        }

        
    }
    
}

