<?php
    include("connection.php");
    $con=conectar();

    $sql = "select count(superusuario) as cuenta from usuario where superusuario = 1";
    $result = mysqli_query($con,$sql);
    $numsupers = 0;
    foreach ($result as $res){
        $numsupers = $res['cuenta'];
    }

    $sql = "select count(administrador) as cuenta from usuario where administrador = 1";
    $result = mysqli_query($con,$sql);
    $numadmins= 0;
    foreach ($result as $res){
        $numadmins = $res['cuenta'];
    }

    $sql = "select count(nombre) as cuenta from usuario where administrador = 0 AND superusuario = 0";
    $result = mysqli_query($con,$sql);
    $numusers= 0;
    foreach ($result as $res){
        $numusers = $res['cuenta'];
    }

    ?>


<!doctype html>
<html>
	<head>
		<title>Line Chart</title>
        <script src="../../static/javascript/base/Chart.js"></script>
	</head>
	<body>
		<div>
			<h2><center>Usuario super y admin</center></h2>
			<div>
				<canvas id="canvas"></canvas>
			</div>
		</div>


	<script>
        var numsupers= <?php echo json_encode($numsupers); ?>;
        var numadmins = <?php echo json_encode($numadmins); ?>;
        var numusers= <?php echo json_encode($numusers); ?>;
        var ctx = document.getElementById("canvas").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Superusuarios','Administradores','Usuarios'],
                datasets: [{
                    label: 'Cantidad',
                    data: [numsupers,numadmins,numusers],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
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
