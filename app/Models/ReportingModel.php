<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class ReportingModel extends BaseModel
{
    /**
     * Получаем информацию из таблицы reporting
     * Получаем только итоговое значение по kbk = no
     * Получаем либо расходы, либо доходы, в зависимости от запроса
     *
     * @param string string $meaning, int $year, string $kbk
     * @return array
     */
    public function block(string $meaning, int $year, string $kbk)
    {
        
        $sql = "SELECT id, mounth, approved, fulfilled FROM reporting "
            . "WHERE meaning = '$meaning' AND year = '$year' AND kbk = '$kbk' "
            . "ORDER BY mounth DESC LIMIT 1";
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;

    }  
    
    /**
     * Получаем информацию из таблицы reporting
     * Получаем значения по kbk
     * Получаем либо расходы, либо доходы, в зависимости от запроса
     *
     * @string $meaning, int $year, array $kbk, int $limit
     * @return array
     */
    public function diagram(string $meaning, int $year, array $kbk, int $limit)
    {
        $code = implode(",",$kbk);
        
        $sql = "SELECT id, mounth, title, kbk, fulfilled FROM reporting "
            . "WHERE meaning = '$meaning' AND year = '$year' AND kbk IN($code) "
            . "ORDER BY mounth DESC LIMIT $limit";
      
        $res = [];
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $row['fulfilled'] = round($row['fulfilled'] / 1000, 1);
            $row['title'] = mb_strtolower($row['title']);
            $row['title'] = mb_strimwidth($row['title'], 0, 50, '...');
            $res[$row['kbk']] = $row;
        }
        
        return $res;       
    }
}

