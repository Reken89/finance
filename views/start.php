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
<!-- Значения для отрисовки диаграммы "Кассовый план" -->
<div
    class='hidden'
    data-janr='<?= $data['diagram']['janr'] ?>'
    data-febr='<?= $data['diagram']['febr'] ?>'
    data-marr='<?= $data['diagram']['marr'] ?>'
    data-aprr='<?= $data['diagram']['aprr'] ?>'
    data-mayr='<?= $data['diagram']['mayr'] ?>'
    data-junr='<?= $data['diagram']['junr'] ?>'
    data-julr='<?= $data['diagram']['julr'] ?>'
    data-augr='<?= $data['diagram']['augr'] ?>'
    data-sepr='<?= $data['diagram']['sepr'] ?>'
    data-octr='<?= $data['diagram']['octr'] ?>'
    data-novr='<?= $data['diagram']['novr'] ?>'
    data-decr='<?= $data['diagram']['decr'] ?>'
    data-jand='<?= $data['diagram']['jand'] ?>'
    data-febd='<?= $data['diagram']['febd'] ?>'
    data-mard='<?= $data['diagram']['mard'] ?>'
    data-aprd='<?= $data['diagram']['aprd'] ?>'
    data-mayd='<?= $data['diagram']['mayd'] ?>'
    data-jund='<?= $data['diagram']['jund'] ?>'
    data-juld='<?= $data['diagram']['juld'] ?>'
    data-augd='<?= $data['diagram']['augd'] ?>'
    data-sepd='<?= $data['diagram']['sepd'] ?>'
    data-octd='<?= $data['diagram']['octd'] ?>'
    data-novd='<?= $data['diagram']['novd'] ?>'
    data-decd='<?= $data['diagram']['decd'] ?>'
    
    data-approvedd='<?= $data['block']['execution']['approved_d'] ?>'
    data-fulfilledd='<?= $data['block']['execution']['fulfilled_d'] ?>'
    data-approvedr='<?= $data['block']['execution']['approved_r'] ?>'
    data-fulfilledr='<?= $data['block']['execution']['fulfilled_r'] ?>'
    
    data-d202001='<?= $data['dynamicd']['result202001'] ?>'
    data-d202002='<?= $data['dynamicd']['result202002'] ?>'
    data-d202101='<?= $data['dynamicd']['result202101'] ?>'
    data-d202102='<?= $data['dynamicd']['result202102'] ?>'
    data-d202201='<?= $data['dynamicd']['result202201'] ?>'
    data-d202202='<?= $data['dynamicd']['result202202'] ?>'
    data-d202301='<?= $data['dynamicd']['result202301'] ?>'
    data-d202302='<?= $data['dynamicd']['result202302'] ?>'
    
    data-r2020='<?= $data['dynamicr']['result2020'] ?>'
    data-r2021='<?= $data['dynamicr']['result2021'] ?>'
    data-r2022='<?= $data['dynamicr']['result2022'] ?>'
    data-r2023='<?= $data['dynamicr']['result2023'] ?>'
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
	   <!--end header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                   <div class="col">
					 <div class="card radius-10 border-start border-0 border-3 border-success">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Доходы на <?php echo $date[$data['block']['income']['mounth']]; ?></p>
									<h4 class="my-1 text-success"><?php echo number_format($data['block']['income']['income'], 1, ',', ' '); ?> Тыс/Руб</h4>
									<p class="mb-0 font-13"><?php echo $data['block']['income']['percent'] ?>% от годового плана</p>
								</div>
								<div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
								</div>
							</div>
						</div>
					 </div>
				   </div>
				   <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-danger">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Расходы на <?php echo $date[$data['block']['expenses']['mounth']]; ?></p>
								   <h4 class="my-1 text-danger"><?php echo number_format($data['block']['expenses']['expenses'], 1, ',', ' '); ?> Тыс/Руб</h4>
								   <p class="mb-0 font-13"><?php echo $data['block']['expenses']['percent'] ?>% от годового плана</p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto">
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-info">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Дефицит/Профицит на <?php echo $date[$data['block']['income']['mounth']]; ?></p>
								   <h4 class="my-1 text-info"><?php echo number_format($data['block']['three']['three'], 1, ',', ' '); ?> Тыс/Руб</h4>
                                                                   <p class="mb-0 font-13"><?php if($data['block']['three']['three'] > 0){echo "Профицит";}else{echo "Дефицит";} ?></p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-warning">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Муниципальный долг на <?php echo $date[$data['block']['income']['mounth']]; ?></p>
								   <h4 class="my-1 text-warning">XX Тыс/Руб</h4>
								   <p class="mb-0 font-13">XX% от годового плана</p>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto">
							   </div>
						   </div>
					   </div>
					</div>
				  </div> 
				</div><!--end row-->

				<div class="row">
                   <div class="col-12 col-lg-8">
                      <div class="card radius-10">
						  <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Кассовый план на <?php echo $date[$data['diagram']['mounth']]; ?></h6>
								</div>

							</div>
							<div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #008000"></i>Доходы</span>
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #CD5C5C"></i>Расходы</span>
							</div>
							<div class="chart-container-1">
								<canvas id="chart1"></canvas>
							  </div>
						  </div>
						  
					  </div>
				   </div>
				   <div class="col-12 col-lg-4">
                      <div class="card radius-10">
						  <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Исполнение по доходам и расходам на <?php echo $date[$data['block']['income']['mounth']]; ?></h6>
								</div>
								
							</div>
							<div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #00008B"></i>Утверждено</span>
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #800080"></i>Исполнено</span>
							</div>
							<div class="chart-container-1">
								<canvas id="chart6"></canvas>
							  </div>
						  </div>
					  </div>
				   </div>
				</div><!--end row-->
                                
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="card radius-10">
                                            <div class="card-body">
                                                <div id="chart15"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 col-lg-6">
                                        <div class="card radius-10">
                                            <div class="card-body">
                                                <div id="chart16"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end row-->				
			</div>
		</div>
		
		<footer class="page-footer">
		    <?php include("views/footer.html") ?>
		</footer>
	</div>
	<!--end wrapper-->

<div>    
    <?php include("views/script.html") ?>
</div>
    
</body>

</html>

