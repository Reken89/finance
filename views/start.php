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
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
        <link href="assets/plugins/highcharts/css/highcharts.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	<title>Бюджет для граждан г.Костомукша</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
	 <!--start header wrapper-->	
	  <div class="header-wrapper">
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="topbar-logo-header">
						<div class="">
							<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
						</div>
						<div class="">
							<h4 class="logo-text">Бюджет для граждан</h4>
						</div>
					</div>
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>

					

				</nav>
			</div>
		</header>
		<!--end header -->
		<!--navigation-->
		<div class="nav-container primary-menu">
			<div class="mobile-topbar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Rukada</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<nav class="navbar navbar-expand-xl w-100">
				<ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
					<li class="nav-item dropdown">
					  <a href="javascript:;" class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">

						<div class="menu-title">Основные параметры бюджета</div>
					</a>
					<ul class="dropdown-menu">
						<li> <a class="dropdown-item" href="#"><i class="bx bx-right-arrow-alt"></i>Доходы</a>
						</li>
						<li> <a class="dropdown-item" href="#"><i class="bx bx-right-arrow-alt"></i>Расходы</a>
						</li>
						<li> <a class="dropdown-item" href="#"><i class="bx bx-right-arrow-alt"></i>Муниципальный долг</a>
						</li>
                                                <li> <a class="dropdown-item" href="#"><i class="bx bx-right-arrow-alt"></i>Обслуживание муниципального долга</a>
						</li>
					  </ul>
					</li>
					<li class="nav-item dropdown">
						<a href="javascript:;" class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">

						<div class="menu-title">Решение о бюджете</div>
					  </a>
					  <ul class="dropdown-menu">
						<li> <a class="dropdown-item" href="#"><i class="bx bx-right-arrow-alt"></i>Проект Решение о бюджете</a>
						</li>
						<li> <a class="dropdown-item" href="#"><i class="bx bx-right-arrow-alt"></i>Решение о бюджете</a>
						</li>						
						</ul>
					  </li>
					  <li class="nav-item">
						<a  class="nav-link" href="widgets.html">
							<div class="menu-title">Вкладка №3</div>
						</a>
					 </li>
		
				  </ul>
			</nav>
		</div>
		<!--end navigation-->
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

				 <div class="card radius-10">
                         <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Recent Orders</h6>
								</div>
								<div class="dropdown ms-auto">
									<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
									</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="javascript:;">Action</a>
										</li>
										<li><a class="dropdown-item" href="javascript:;">Another action</a>
										</li>
										<li>
											<hr class="dropdown-divider">
										</li>
										<li><a class="dropdown-item" href="javascript:;">Something else here</a>
										</li>
									</ul>
								</div>
							</div>
						 <div class="table-responsive">
						   <table class="table align-middle mb-0">
							<thead class="table-light">
							 <tr>
							   <th>Product</th>
							   <th>Photo</th>
							   <th>Product ID</th>
							   <th>Status</th>
							   <th>Amount</th>
							   <th>Date</th>
							   <th>Shipping</th>
							 </tr>
							 </thead>
							 <tbody><tr>
							  <td>Iphone 5</td>
							  <td><img src="assets/images/products/01.png" class="product-img-2" alt="product img"></td>
							  <td>#9405822</td>
							  <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span></td>
							  <td>$1250.00</td>
							  <td>03 Feb 2020</td>
							  <td><div class="progress" style="height: 6px;">
									<div class="progress-bar bg-gradient-quepal" role="progressbar" style="width: 100%"></div>
								  </div></td>
							 </tr>
		  
							 <tr>
							  <td>Earphone GL</td>
							  <td><img src="assets/images/products/02.png" class="product-img-2" alt="product img"></td>
							  <td>#8304620</td>
							  <td><span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span></td>
							  <td>$1500.00</td>
							  <td>05 Feb 2020</td>
							  <td><div class="progress" style="height: 6px;">
									<div class="progress-bar bg-gradient-blooker" role="progressbar" style="width: 60%"></div>
								  </div></td>
							 </tr>
		  
							 <tr>
							  <td>HD Hand Camera</td>
							  <td><img src="assets/images/products/03.png" class="product-img-2" alt="product img"></td>
							  <td>#4736890</td>
							  <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span></td>
							  <td>$1400.00</td>
							  <td>06 Feb 2020</td>
							  <td><div class="progress" style="height: 6px;">
									<div class="progress-bar bg-gradient-bloody" role="progressbar" style="width: 70%"></div>
								  </div></td>
							 </tr>
		  
							 <tr>
							  <td>Clasic Shoes</td>
							  <td><img src="assets/images/products/04.png" class="product-img-2" alt="product img"></td>
							  <td>#8543765</td>
							  <td><span class="badge bg-gradient-quepal text-white shadow-sm w-100">Paid</span></td>
							  <td>$1200.00</td>
							  <td>14 Feb 2020</td>
							  <td><div class="progress" style="height: 6px;">
									<div class="progress-bar bg-gradient-quepal" role="progressbar" style="width: 100%"></div>
								  </div></td>
							 </tr>
							 <tr>
							  <td>Sitting Chair</td>
							  <td><img src="assets/images/products/06.png" class="product-img-2" alt="product img"></td>
							  <td>#9629240</td>
							  <td><span class="badge bg-gradient-blooker text-white shadow-sm w-100">Pending</span></td>
							  <td>$1500.00</td>
							  <td>18 Feb 2020</td>
							  <td><div class="progress" style="height: 6px;">
									<div class="progress-bar bg-gradient-blooker" role="progressbar" style="width: 60%"></div>
								  </div></td>
							 </tr>
							 <tr>
							  <td>Hand Watch</td>
							  <td><img src="assets/images/products/05.png" class="product-img-2" alt="product img"></td>
							  <td>#8506790</td>
							  <td><span class="badge bg-gradient-bloody text-white shadow-sm w-100">Failed</span></td>
							  <td>$1800.00</td>
							  <td>21 Feb 2020</td>
							  <td><div class="progress" style="height: 6px;">
									<div class="progress-bar bg-gradient-bloody" role="progressbar" style="width: 40%"></div>
								  </div></td>
							 </tr>
						    </tbody>
						  </table>
						  </div>
						 </div>
					</div>


					<div class="row">
						<div class="col-12 col-lg-7 col-xl-8 d-flex">
						  <div class="card radius-10 w-100">
							<div class="card-header bg-transparent">
								<div class="d-flex align-items-center">
									<div>
										<h6 class="mb-0">Recent Orders</h6>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
							   </div>
							 <div class="card-body">
								<div class="row">
								  <div class="col-lg-7 col-xl-8 border-end">
									 <div id="geographic-map-2"></div>
								  </div>
								  <div class="col-lg-5 col-xl-4">
			                       
									<div class="mb-4">
									<p class="mb-2"><i class="flag-icon flag-icon-us me-1"></i> USA <span class="float-end">70%</span></p>
									<div class="progress" style="height: 7px;">
										 <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 70%"></div>
									 </div>
									</div>
			   
									<div class="mb-4">
									 <p class="mb-2"><i class="flag-icon flag-icon-ca me-1"></i> Canada <span class="float-end">65%</span></p>
									 <div class="progress" style="height: 7px;">
										 <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 65%"></div>
									 </div>
									</div>
			   
									<div class="mb-4">
									 <p class="mb-2"><i class="flag-icon flag-icon-gb me-1"></i> England <span class="float-end">60%</span></p>
									 <div class="progress" style="height: 7px;">
										 <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 60%"></div>
									   </div>
									</div>
			   
									<div class="mb-4">
									 <p class="mb-2"><i class="flag-icon flag-icon-au me-1"></i> Australia <span class="float-end">55%</span></p>
									 <div class="progress" style="height: 7px;">
										 <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 55%"></div>
									   </div>
									</div>
			   
									<div class="mb-4">
									 <p class="mb-2"><i class="flag-icon flag-icon-in me-1"></i> India <span class="float-end">50%</span></p>
									 <div class="progress" style="height: 7px;">
										 <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 50%"></div>
									   </div>
									</div>

									<div class="mb-0">
									   <p class="mb-2"><i class="flag-icon flag-icon-cn me-1"></i> China <span class="float-end">45%</span></p>
									   <div class="progress" style="height: 7px;">
										   <div class="progress-bar bg-dark progress-bar-striped" role="progressbar" style="width: 45%"></div>
										 </div>
									</div>

								  </div>
								</div>
							 </div>
						   </div>
						</div>
			   
						<div class="col-12 col-lg-5 col-xl-4 d-flex">
							<div class="card w-100 radius-10">
						     <div class="card-body">
							  <div class="card radius-10 border shadow-none">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary">Total Likes</p>
											<h4 class="my-1">45.6M</h4>
											<p class="mb-0 font-13">+6.2% from last week</p>
										</div>
										<div class="widgets-icons-2 bg-gradient-cosmic text-white ms-auto"><i class='bx bxs-heart-circle'></i>
										</div>
									</div>
								</div>
							 </div>
							 <div class="card radius-10 border shadow-none">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary">Comments</p>
											<h4 class="my-1">25.6K</h4>
											<p class="mb-0 font-13">+3.7% from last week</p>
										</div>
										<div class="widgets-icons-2 bg-gradient-ibiza text-white ms-auto"><i class='bx bxs-comment-detail'></i>
										</div>
									</div>
								</div>
							 </div>
							 <div class="card radius-10 mb-0 border shadow-none">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary">Total Shares</p>
											<h4 class="my-1">85.4M</h4>
											<p class="mb-0 font-13">+4.6% from last week</p>
										</div>
										<div class="widgets-icons-2 bg-gradient-kyoto text-dark ms-auto"><i class='bx bxs-share-alt'></i>
										</div>
									</div>
								</div>
							  </div>
							 </div>

							</div>
			   
						</div>
					 </div><!--end row-->

					 <div class="row row-cols-1 row-cols-lg-3">
						 <div class="col d-flex">
                           <div class="card radius-10 w-100">
							   <div class="card-body">
								<p class="font-weight-bold mb-1 text-secondary">Weekly Revenue</p>
								<div class="d-flex align-items-center mb-4">
									<div>
										<h4 class="mb-0">$89,540</h4>
									</div>
									<div class="">
										<p class="mb-0 align-self-center font-weight-bold text-success ms-2">4.4% <i class="bx bxs-up-arrow-alt mr-2"></i>
										</p>
									</div>
								</div>
								<div class="chart-container-0">
									<canvas id="chart3"></canvas>
								  </div>
							   </div>
						   </div>
						 </div>
						 <div class="col d-flex">
							<div class="card radius-10 w-100">
								<div class="card-header bg-transparent">
									<div class="d-flex align-items-center">
										<div>
											<h6 class="mb-0">Orders Summary</h6>
										</div>
										<div class="dropdown ms-auto">
											<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
											</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="javascript:;">Action</a>
												</li>
												<li><a class="dropdown-item" href="javascript:;">Another action</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="javascript:;">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="chart-container-1">
										<canvas id="chart4"></canvas>
									  </div>
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Completed <span class="badge bg-gradient-quepal rounded-pill">25</span>
									</li>
									<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Pending <span class="badge bg-gradient-ibiza rounded-pill">10</span>
									</li>
									<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Process <span class="badge bg-gradient-deepblue rounded-pill">65</span>
									</li>
								</ul>
							</div>
						  </div>
						  <div class="col d-flex">
							<div class="card radius-10 w-100">
								 <div class="card-header bg-transparent">
									<div class="d-flex align-items-center">
										<div>
											<h6 class="mb-0">Top Selling Categories</h6>
										</div>
										<div class="dropdown ms-auto">
											<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
											</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="javascript:;">Action</a>
												</li>
												<li><a class="dropdown-item" href="javascript:;">Another action</a>
												</li>
												<li>
													<hr class="dropdown-divider">
												</li>
												<li><a class="dropdown-item" href="javascript:;">Something else here</a>
												</li>
											</ul>
										</div>
									 </div>
								 </div>
								<div class="card-body">
								   <div class="chart-container-0">
									 <canvas id="chart5"></canvas>
								   </div>
								</div>
								<div class="row row-group border-top g-0">
									<div class="col">
										<div class="p-3 text-center">
											<h4 class="mb-0 text-danger">$45,216</h4>
											<p class="mb-0">Clothing</p>
										</div>
									</div>
									<div class="col">
										<div class="p-3 text-center">
											<h4 class="mb-0 text-success">$68,154</h4>
											<p class="mb-0">Electronic</p>
										</div>
									 </div>
								</div><!--end row-->
							</div>
						  </div>
					 </div><!--end row-->

			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
					<label class="form-check-label" for="semidark">Semi Dark</label>
				</div>
			</div>
			<hr/>
			<div class="form-check">
				<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
				<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
			</div>
			<hr/>
			<h6 class="mb-0">Header Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator headercolor1" id="headercolor1"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor2" id="headercolor2"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor3" id="headercolor3"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor4" id="headercolor4"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor5" id="headercolor5"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor6" id="headercolor6"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor7" id="headercolor7"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor8" id="headercolor8"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="assets/plugins/chartjs/js/Chart.extension.js"></script>        
        <!-- highcharts js -->
	<script src="assets/plugins/highcharts/js/highcharts.js"></script>

       
	<script src="assets/js/index.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>

