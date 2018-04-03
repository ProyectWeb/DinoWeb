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
		<div style="width:70%">
			<h2><center>Usuario super y admin</center></h2>
			<div>
				<canvas id="canvas" height="450" width="600"></canvas>
			</div>
		</div>


	<script>
		var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {
			labels : [
			<?php
        $sql = "SELECT * FROM Usuario";
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
					label: "My First dataset",
					fillColor : "rgba(220,220,220,0.2)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data : 
					<?php
				$sql = "SELECT * FROM Usuario";
				$result = mysqli_query($con,$sql);
				?>
		        [ <?php while ($registros = mysqli_fetch_array($result)){ ?> '<?php echo $registros["superusuario"]?>',
				<?php }?>]
				},
				{
					label: "My Second dataset",
					fillColor : "rgba(151,187,205,0.2)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(151,187,205,1)",
					data : 
					<?php
				$sql = "SELECT * FROM Usuario";
				$result = mysqli_query($con,$sql);
				?>
		        [ <?php while ($registros = mysqli_fetch_array($result)){ ?> '<?php echo $registros["administrador"]?>',
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
