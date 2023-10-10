<?php
?>
<div
    class='hidden'   
     
    data-point10='<?= $data['vector']['2020']['servmundeb'] ?>'
    data-point20='<?= $data['vector']['2021']['servmundeb'] ?>'
    data-point30='<?= $data['vector']['2022']['servmundeb'] ?>'
    data-point40='<?= $data['vector']['2023']['servmundeb'] ?>'
    
    data-point100='<?= $data['vector']['2020']['bank'] ?>'
    data-point200='<?= $data['vector']['2021']['bank'] ?>'
    data-point300='<?= $data['vector']['2022']['bank'] ?>'
    data-point400='<?= $data['vector']['2023']['bank'] ?>'
    
    data-point01='<?= $data['vector']['2020']['credit'] ?>'
    data-point02='<?= $data['vector']['2021']['credit'] ?>'
    data-point03='<?= $data['vector']['2022']['credit'] ?>'
    data-point04='<?= $data['vector']['2023']['credit'] ?>'
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
                                    <p class="font-weight-bold mb-1 text-secondary">Обслуживание муниципального долга</p>
                                    
                                    <div class="chart-container-0">
                                        <canvas id="chart50"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col d-flex">
                            <div class="card radius-10 w-100">
                                <div class="card-body">
                                    <p class="font-weight-bold mb-1 text-secondary">Размер ключевой ставки</p>
                                    
                                    <div class="chart-container-0">
                                        <canvas id="chart51"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col d-flex">
                            <div class="card radius-10 w-100">
                                <div class="card-body">
                                    <p class="font-weight-bold mb-1 text-secondary">Размер максимальной процентной ставки, привлекаемых кредитов</p>
                                    
                                    <div class="chart-container-0">
                                        <canvas id="chart52"></canvas>
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



