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
     * @param string $meaning, int $year
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
}

