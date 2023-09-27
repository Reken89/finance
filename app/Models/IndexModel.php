<?php

namespace App\Models;

use App\Models\BaseModel;
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
    
}

