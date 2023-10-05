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
        }elseif ($diagram == "two") {
            $kbk = ['00010100000000000000', '00010300000000000000', '00010500000000000000',
                '00010600000000000000', '00010800000000000000', '00010900000000000000', 
                '00011100000000000000', '00011200000000000000', '00011300000000000000', 
                '00011400000000000000', '00011600000000000000', '00011700000000000000', 
                '00020200000000000000', '00020300000000000000', '00020700000000000000', 
                '00021800000000000000', '00021900000000000000'];
            $limit = 17;
        }

        $object = new ReportingModel;
        $result = $object->diagram("income", 2023, $kbk, $limit);
        
        return $result;
    }
    
}

