<?php
include("connection.php");
    $con=conectar();

    $sql = "SELECT * FROM Apps";
    $result = mysqli_query($con, $sql);
    $nombres=array();
    foreach ($result as $res ){
        array_push($nombres,$res['nombre']);
    }

    $sql = "SELECT * FROM Pagos";
    $costos=array();
    $result = mysqli_query($con, $sql);
    foreach ($result as $res ){
        array_push($costos,$res['costos']);
    }

?>

<!doctype html>
<html>
<head>
    <title>Line Chart</title>
</head>
<body>
<h2>
    <center>Costo de Aplicacciones</center>
</h2>
<div class="container">
    <div>
        <canvas id="canvas"></canvas>
    </div>
</div>
<script src="../../static/javascript/base/Chart.js"></script>
<script>
    var nombres = <?php echo json_encode($nombres); ?>;
    var costos = <?php echo json_encode($costos); ?>;
    var ctx = document.getElementById("canvas").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: nombres,
            datasets: [{
                label: 'Precio',
                data: costos,
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