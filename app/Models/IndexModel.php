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
        $object = new ReportingModel;
        $expenses = $object->block("expenses", 2023);
        return $expenses;
                
    }
    
}

