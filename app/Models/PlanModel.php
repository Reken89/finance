<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class PlanModel extends BaseModel
{
    /**
     * Получаем информацию из таблицы plan
     *
     * @param string $meaning, int $year
     * @return array
     */
    public function diagram(string $meaning, int $year)
    {
        $sql = "SELECT * FROM plans "
            . "WHERE meaning = '$meaning' AND year = '$year' "
            . "ORDER BY mounth DESC LIMIT 1";
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;       
    }  
}

