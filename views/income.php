<?php
    var_dump($data);
?>
<div
    class='hidden'   
    data-title01='<?= $data['diagramone']['00010000000000000000']['title'] ?>'
    data-title02='<?= $data['diagramone']['00020000000000000000']['title'] ?>'
    data-fulfilled01='<?= $data['diagramone']['00010000000000000000']['fulfilled'] ?>'
    data-fulfilled02='<?= $data['diagramone']['00020000000000000000']['fulfilled'] ?>'
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
                                        <h6 class="mb-0">Доходы бюджета</h6>
                                    </div>
                                    
                                </div>
                            </div>
                                <div class="card-body">
                                        <div class="chart-container-1">
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
                                        <h6 class="mb-0">Структура доходов</h6>
                                    </div>
                                    
                                </div>
                            </div>
                                <div class="card-body">
                                        <div class="chart-container-1">
                                                <canvas id="chart21"></canvas>
                                          </div>
                                </div>                               
                        </div>
                    </div>
                </div>
            </div>

            <div class="overlay toggle-icon"></div>
            <!--end overlay-->
            <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
            <!--End Back To Top Button-->
            <footer class="page-footer">
                    <p class="mb-0">Copyright © 2021. All right reserved.</p>
            </footer> 

        </div>
    </div> 
    
    <div>    
        <?php include("views/script.html") ?>
    </div>
    
</body>
</html>

