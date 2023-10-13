<?php

namespace App\Models;

use App\Models\BaseModel;

class MbtExamModel extends BaseModel
{
    /**
     * Преобразуем массив
     * Добавляем ключи
     * Процент исполнения и статус
     *
     * @array $info
     * @return array
     */
    public function run(array $info, $mounth)
    {
        $result = [];
        $number = 0;
        
        //Определяем нижний и верхний порог процента
        //для послежующей установки правильного статуса
        if($mounth == 1){
            $one = 7;
            $two = 7;
        }elseif ($mounth == 2) {
            $one = 16;
            $two = 13;
        }elseif ($mounth == 3) {
            $one = 24;
            $two = 20;
        }elseif ($mounth == 4) {
            $one = 32;
            $two = 27;
        }elseif ($mounth == 5) {
            $one = 41;
            $two = 33;
        }elseif ($mounth == 6) {
            $one = 49;
            $two = 40;
        }elseif ($mounth == 7) {
            $one = 57;
            $two = 51;
        }elseif ($mounth == 8) {
            $one = 66;
            $two = 58;
        }elseif ($mounth == 9) {
            $one = 74;
            $two = 65;
        }elseif ($mounth == 10) {
            $one = 82;
            $two = 79;
        }elseif ($mounth == 11) {
            $one = 91;
            $two = 87;
        }elseif ($mounth == 12) {
            $one = 99;
            $two = 95;
        }
        
        
        foreach ($info as $value) {
            $number = ++$number;
            
            //Определяем статус
            if($value['approved'] != 0){
                $percent = round(($value['expenses'] * 100)/$value['approved'], 0);
                if($percent > $one){
                    $status = 5;
                }elseif ($percent < $two) {
                    $status = 3;
                }else{
                    $status = 4;
                }
            } else {
                $status = 3;
            }
            
                       
            if ($value['approved'] != 0){
                $result[$number] = [
                "id"       => $value['id'],
                "title"    => $value['title'],
                "approved" => number_format($value['approved'], 1, ',', ' '),
                "expenses" => number_format($value['expenses'], 1, ',', ' '),
                "percent"  => round(($value['expenses'] * 100)/$value['approved'], 0),
                "status"   => $status,    
            ];
            } else {
            $result[$number] = [
                "id"       => $value['id'],
                "title"    => $value['title'],
                "approved" => number_format($value['approved'], 1, ',', ' '),
                "expenses" => number_format($value['expenses'], 1, ',', ' '),
                "percent"  => 0,
                "status"   => $status,  
            ];
            }
        }

        return $result;
                      
    }
       
    
}
