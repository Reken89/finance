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
                    <div class="col-12 col-lg-8">
                        <div class="card radius-10">    
                            <div class="table-responsive mt-3">
                                <table class="table table-striped table-hover table-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th>Документы</th>
                                            <th>Год</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div><i class='bx bxs-file-pdf me-2 font-24 text-danger'></i>
                                                    </div>
                                                    <div class="font-weight-bold text-danger"><a href="/finance/file/Проект Бюджета на 2023-2025гг.pdf" download>Проект Бюджета на 2023-2025гг.</a></div>
                                                </div>
                                            </td>
                                            <td>----</td>
                                        </tr>                                      
                                    </tbody>
                                </table>
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



