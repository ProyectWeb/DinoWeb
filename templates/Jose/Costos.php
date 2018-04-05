<?php
include("connection.php");
    $con=conectar();

    $sql = "SELECT * FROM usuario";
    $result = mysqli_query($con,$sql);
    $nombres=array();
    $edades = array();
    foreach ($result as $res ){
        array_push($nombres,$res['nombre']);
        array_push($edades,$res['edad']);
    }

?>

<!doctype html>
<html>
	<head>
		<title>Bar Chart</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="../../static/javascript/base/Chart.js"></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	</head>
	<body>
		<h2><center>Usuario edad</center></h2>
		<div>
			<canvas id="canvas"></canvas>
		</div>
	<script>
    var nombres = <?php echo json_encode($nombres); ?>;
    var edades = <?php echo json_encode($edades); ?>;

    var ctx = document.getElementById("canvas").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: nombres,
            datasets: [{
                label: 'Precio',
                data: edades,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
	</script>
	</body>
</html>

