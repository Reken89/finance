<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class MbtModel extends BaseModel
{
    /**
     * Получаем информацию из таблицы mbt
     * Получаем значения по месяцу и году
     *
     * @string $mounth
     * @return array
     */
    public function run(string $mounth)
    {
        
        $sql = "SELECT * FROM mbt "
            . "WHERE year = 2023 AND mounth = '$mounth'";
      
        $res = [];
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $res[$row['id']] = $row;
        }
        
        return $res;       
    }
    
    /**
     * Получаем последний месяц из заполненных в таблице mbt
     * Получаем значения по году
     *
     * @string 
     * @return array
     */
    public function mounth()
    {
        $sql = "SELECT mounth FROM mbt "
            . "WHERE year = 2023 "
            . "ORDER BY mounth DESC LIMIT 1";
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;             
    }
    
}

