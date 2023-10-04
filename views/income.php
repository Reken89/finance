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
                                                <canvas id="chart20"></canvas>
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

