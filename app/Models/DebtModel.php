<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class DebtModel extends BaseModel
{
    /**
     * Получаем информацию из таблицы mundebts
     * Получаем информацию только для 4 блока главной страницы
     * Выбираем по году, и сортируем по наибольшему месяцу
     *
     * @param int $year
     * @return array
     */
    public function block(int $year)
    {        
        $sql = "SELECT id, mounth, mundeb, servmundeb FROM mundebts "
            . "WHERE year = '$year' AND servmundeb != 0 "
            . "ORDER BY mounth DESC LIMIT 1";
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;

    } 
    
}
