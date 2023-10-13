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
                <div class="card radius-10">
                    <div class="card-body">
			<div class="d-flex align-items-center">
			    <div>
				<h6 class="mb-0">Отчет об исполнении межбюджетных трансфертов, предоставляемых из бюджета Республики Карелия на <?php echo $date[$data['mounth']]; ?></h6>
			    </div>								
			</div>			
			    <table class="table align-middle mb-0">
				<thead class="table-light">
				    <tr>
					<th style="min-width: 700px; width: 700px;">Наименование Межбюджетного трансферта</th>
					<th>Утверждено</th>
					<th>Исполнено</th>
                                        <th>% Исполнения</th>
                                        <th>Статус</th>
                                        <th>% Исполнения</th>							   
				    </tr>
				</thead>
				<tbody>

                                    <?php
                                        foreach ($data['info'] as $value) {
                                            if($value['status'] == 5){
                                                $css = "bg-gradient-quepal";
                                                $grade = "отлично";
                                            }elseif ($value['status'] == 4) {
                                                $css = "bg-gradient-blooker";
                                                $grade = "хорошо";
                                            }elseif ($value['status'] == 3) {
                                                $css = "bg-gradient-bloody";
                                                $grade = "низкое освоение";
                                            }
                                            
                                            echo "<tr>";
                                                echo "<td>$value[title]</td>";
                                                echo "<td>$value[approved]</td>";
                                                echo "<td>$value[expenses]</td>";
                                                echo "<td>$value[percent]</td>";
                                                ?>


                                                <td><span class="badge <?php echo $css; ?> text-white shadow-sm w-100"><?php echo $grade ?></span></td>	
                                                <td><div class="progress" style="height: 6px;">
                                                <div class="progress-bar <?php echo $css; ?>" role="progressbar" style="width: <?php echo $value['percent']; ?>%"></div>
                                                </div></td>
                                            </tr>
                                            <?php
                                        }
                                    ?>                                                                                                            
                                </tbody>
			    </table>			
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





