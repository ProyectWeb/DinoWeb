<?php
include("connection.php");
$con=conectar();
?>

<!doctype html>
<html>
	<head>
		<title>Bar Chart</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="../Chart.js"></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	</head>
	<body>
		<h2><center>Grafica de ventas</center></h2>
		<div style="width: 70%">
			<canvas id="canvas" height="360" width="400"></canvas>
		</div>
	<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
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
				fillColor : "rgba(4, 32, 78,0.5)",
				strokeColor : "rgba(2, 17, 42,0.8)",
				highlightFill: "rgba(13, 83, 15,0.75)",
				highlightStroke: "rgba(0,0,0,1)",
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
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}
	</script>
	</body>
</html>

