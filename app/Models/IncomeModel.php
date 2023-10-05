<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\ReportingModel;

class IncomeModel extends BaseModel
{
    public function diagram(string $diagram)
    {
        if($diagram == "one"){
            $kbk = ['00010000000000000000', '00020000000000000000'];
            $limit = 2;
        }else{
            
        }

        $object = new ReportingModel;
        $result = $object->diagram("income", 2023, $kbk, $limit);
        
        return $result;
    }
    
}

