<?php
include("connection.php");
$con=conectar();
?>


<!doctype html>
<html>
	<head>
		<title>Line Chart</title>
		<script src="../Chart.js"></script>
	</head>
	
	<body>
		<h2><center>Costo de Aplicacciones</center></h2>
		<div style="width:80%">
			<div>
				<canvas id="canvas" height="450" width="600"></canvas>
			</div>
		</div>
	<script>
		var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {
			labels : [
			<?php
        $sql = "SELECT * FROM Apps";
        $result = mysqli_query($con,$sql);
        while($registros = mysqli_fetch_array($result))
        {
        ?>
            '<?php echo $registros["nombre"] ?>',
        <?php 
        }
        ?>
        ],
			datasets : [
				{
					
					label: "My Second dataset",
					fillColor : "rgba(79, 13, 64 ,0.3)",
					strokeColor : "rgba(0,0,0,1)",
					pointColor : "rgba(0,0,0,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : 

					<?php
				$sql = "SELECT * FROM Pagos";
				$result = mysqli_query($con,$sql);
				?>
		        [ <?php while ($registros = mysqli_fetch_array($result)){ ?> '<?php echo $registros["costos"]?>',
				<?php }?>]
				}
			]

		}

	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData, {
			responsive: true
		});
	}


	</script>

	</body>
</html>
