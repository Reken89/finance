<?php
$date = [
    "0"  => "NULL",
    "1"  => "01-02-2023г.",
    "2"  => "01-03-2023г.",
    "3"  => "01-04-2023г.",
    "4"  => "01-05-2023г.",
    "5"  => "01-06-2023г.",
    "6"  => "01-07-2023г.",
    "7"  => "01-08-2023г.",
    "8"  => "01-09-2023г.",
    "9"  => "01-10-2023г.",
    "10" => "01-11-2023г.",
    "11" => "01-12-2023г.",
    "12" => "01-01-2024г.",
];
?>
<div
    class='hidden'   
    data-title01='<?= $data['diagramone']['00001000000000000000']['title'] ?>'
    data-title02='<?= $data['diagramone']['00003000000000000000']['title'] ?>'
    data-title03='<?= $data['diagramone']['00004000000000000000']['title'] ?>'
    data-title04='<?= $data['diagramone']['00005000000000000000']['title'] ?>'
    data-title05='<?= $data['diagramone']['00007000000000000000']['title'] ?>'
    data-title06='<?= $data['diagramone']['00008000000000000000']['title'] ?>'
    data-title07='<?= $data['diagramone']['00009000000000000000']['title'] ?>'
    data-title08='<?= $data['diagramone']['00010000000000000000']['title'] ?>'
    data-title09='<?= $data['diagramone']['00011000000000000000']['title'] ?>'
    data-title10='<?= $data['diagramone']['00013000000000000000']['title'] ?>'
    
    data-fulfilled01='<?= $data['diagramone']['00001000000000000000']['fulfilled'] ?>'
    data-fulfilled02='<?= $data['diagramone']['00003000000000000000']['fulfilled'] ?>'
    data-fulfilled03='<?= $data['diagramone']['00004000000000000000']['fulfilled'] ?>'
    data-fulfilled04='<?= $data['diagramone']['00005000000000000000']['fulfilled'] ?>'
    data-fulfilled05='<?= $data['diagramone']['00007000000000000000']['fulfilled'] ?>'
    data-fulfilled06='<?= $data['diagramone']['00008000000000000000']['fulfilled'] ?>'
    data-fulfilled07='<?= $data['diagramone']['00009000000000000000']['fulfilled'] ?>'
    data-fulfilled08='<?= $data['diagramone']['00010000000000000000']['fulfilled'] ?>'
    data-fulfilled09='<?= $data['diagramone']['00011000000000000000']['fulfilled'] ?>'
    data-fulfilled10='<?= $data['diagramone']['00013000000000000000']['fulfilled'] ?>'
    
></div>
<!doctype html>
<html lang="en">

<head>
    <?php include("views/head.html") ?>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
     <!--start header wrapper-->	
        <div class="header-wrapper">
            <?php include("views/header.html") ?>
        </div>
     
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="card radius-10 w-100">
                            <div class="card-header bg-transparent">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="mb-0">Структура расходов на <?php echo $date[$data['diagramone']['00001000000000000000']['mounth']]; ?></h6>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-container-500">
                                    <canvas id="chart30"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="card radius-10 w-100">
                            <div class="card-header bg-transparent">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="mb-0">Структура расходов на <?php echo $date[$data['diagramone']['00001000000000000000']['mounth']]; ?></h6>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="card-body">
                            <div class="chart-container-500">
                                <div class="chart-container-500" id="chart31"></div>
                            </div>
                        </div>
                        </div>
                    </div>  
                </div>  
                
            </div>

            <footer class="page-footer">
                <?php include("views/footer.html") ?>
            </footer> 

        </div>
    </div> 
    
    <div>    
        <?php include("views/script.html") ?>
    </div>
    
</body>
</html>




