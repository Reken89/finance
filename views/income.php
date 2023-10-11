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
    data-title01='<?= $data['diagramone']['00010000000000000000']['title'] ?>'
    data-title02='<?= $data['diagramone']['00020000000000000000']['title'] ?>'
    data-fulfilled01='<?= $data['diagramone']['00010000000000000000']['fulfilled'] ?>'
    data-fulfilled02='<?= $data['diagramone']['00020000000000000000']['fulfilled'] ?>'
    
    data-title001='<?= $data['diagramtwo']['00010100000000000000']['title'] ?>'
    data-title002='<?= $data['diagramtwo']['00010300000000000000']['title'] ?>'
    data-title003='<?= $data['diagramtwo']['00010500000000000000']['title'] ?>'
    data-title004='<?= $data['diagramtwo']['00010600000000000000']['title'] ?>'
    data-title005='<?= $data['diagramtwo']['00010800000000000000']['title'] ?>'
    data-title006='<?= $data['diagramtwo']['00010900000000000000']['title'] ?>'
    data-title007='<?= $data['diagramtwo']['00011100000000000000']['title'] ?>'
    data-title008='<?= $data['diagramtwo']['00011200000000000000']['title'] ?>'
    data-title009='<?= $data['diagramtwo']['00011300000000000000']['title'] ?>'
    data-title010='<?= $data['diagramtwo']['00011400000000000000']['title'] ?>'
    data-title011='<?= $data['diagramtwo']['00011600000000000000']['title'] ?>'
    data-title012='<?= $data['diagramtwo']['00011700000000000000']['title'] ?>'
    data-title013='<?= $data['diagramtwo']['00020200000000000000']['title'] ?>'
    data-title014='<?= "прочие доходы" ?>'
    
    data-fulfilled001='<?= $data['diagramtwo']['00010100000000000000']['fulfilled'] ?>'
    data-fulfilled002='<?= $data['diagramtwo']['00010300000000000000']['fulfilled'] ?>'
    data-fulfilled003='<?= $data['diagramtwo']['00010500000000000000']['fulfilled'] ?>'
    data-fulfilled004='<?= $data['diagramtwo']['00010600000000000000']['fulfilled'] ?>'
    data-fulfilled005='<?= $data['diagramtwo']['00010800000000000000']['fulfilled'] ?>'
    data-fulfilled006='<?= $data['diagramtwo']['00010900000000000000']['fulfilled'] ?>'
    data-fulfilled007='<?= $data['diagramtwo']['00011100000000000000']['fulfilled'] ?>'
    data-fulfilled008='<?= $data['diagramtwo']['00011200000000000000']['fulfilled'] ?>'
    data-fulfilled009='<?= $data['diagramtwo']['00011300000000000000']['fulfilled'] ?>'
    data-fulfilled010='<?= $data['diagramtwo']['00011400000000000000']['fulfilled'] ?>'
    data-fulfilled011='<?= $data['diagramtwo']['00011600000000000000']['fulfilled'] ?>'
    data-fulfilled012='<?= $data['diagramtwo']['00011700000000000000']['fulfilled'] ?>'
    data-fulfilled013='<?= $data['diagramtwo']['00020200000000000000']['fulfilled'] ?>'
    data-fulfilled014='<?= $data['diagramtwo']['00020300000000000000']['fulfilled'] + 
        $data['diagramtwo']['00020700000000000000']['fulfilled'] +
        $data['diagramtwo']['00021800000000000000']['fulfilled'] +
        $data['diagramtwo']['00021900000000000000']['fulfilled'] ?>'
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
                                        <h6 class="mb-0">Доходы бюджета на <?php echo $date[$data['diagramone']['00010000000000000000']['mounth']]; ?></h6>
                                    </div>
                                    
                                </div>
                            </div>
                                <div class="card-body">
                                        <div class="chart-container-500">
                                                <canvas id="chart20"></canvas>
                                          </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Налоговые и неналоговые <span class="badge bg-gradient-quepal rounded-pill"><?php echo number_format($data['diagramone']['00010000000000000000']['fulfilled'], 1, ',', ' '); ?></span>
                                        </li>
                                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Безвозмездные поступления <span class="badge bg-gradient-ibiza rounded-pill"><?php echo number_format($data['diagramone']['00020000000000000000']['fulfilled'], 1, ',', ' '); ?></span>
                                        </li>
                                     
                                </ul>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-4">
                        <div class="card radius-10 w-100">
                            <div class="card-header bg-transparent">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="mb-0">Структура доходов на <?php echo $date[$data['diagramtwo']['00010100000000000000']['mounth']]; ?></h6>
                                    </div>
                                    
                                </div>
                            </div>
                                <div class="card-body">
                                        <div class="chart-container-500">
                                                <canvas id="chart21"></canvas>
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

