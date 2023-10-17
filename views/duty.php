<?php
?>
<div
    class='hidden'   
    data-point01='<?= $data['dynamics2020'] ?>'
    data-point02='<?= $data['dynamics2021'] ?>'
    data-point03='<?= $data['dynamics2022'] ?>'
    data-point04='<?= $data['dynamics2023'] ?>'   
    
    data-point001='<?= $data['vector']['2020']['mundeb'] ?>'
    data-point002='<?= $data['vector']['2021']['mundeb'] ?>'
    data-point003='<?= $data['vector']['2022']['mundeb'] ?>'
    data-point004='<?= $data['vector']['2023']['mundeb'] ?>'
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
                    <div class="row row-cols-1 row-cols-lg-3">
                        <div class="col d-flex">
                            <div class="card radius-10 w-100">
                                <div class="card-body">
                                    <p class="font-weight-bold mb-1 text-secondary">Динамика сбалансированности бюджета</p>
                                    
                                    <div class="chart-container-0">
                                        <canvas id="chart40"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex">
                            <div class="card radius-10 w-100">
                                <div class="card-body">
                                    <p class="font-weight-bold mb-1 text-secondary">Муниципальный долг бюджета</p>
                                    
                                    <div class="chart-container-0">
                                        <canvas id="chart41"></canvas>
                                    </div>
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

