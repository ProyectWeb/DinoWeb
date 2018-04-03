<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DinoApp</title>

    <!--Archivos CSS-->
    <link rel="stylesheet" href="../../static/css/catalogoestilos/bootstrap.css">
    <link rel="stylesheet" href="../../static/css/index.css">
    <link rel="stylesheet" href="../../static/css/main.css">

</head>
<body>

    <!-- Nav Bar -->
    <?php
        include('navBar.html');
    ?>

    <!--Carrusel-->
    <div class="carrusel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../../static/images/wall1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Crea tu propia Pagina Web</h5>
                        <p>Nosotros te Ayudamos</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../static/images/wall2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Elije un Diseno</h5>
                        <p>O danos tus ideas </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../../static/images/wall3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Visita nuestro Catalogo</h5>
                        <p>Esta a solo un click de distancia :3</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row line">
            <div class="col-12">
                <h1> Que hacemos?? </h1>
            </div>
            <div class="col-6">
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum error est modi placeat quasi
                    quibusdam rerum similique sit tempora vero. Eum quas quasi quos sit! Ab atque delectus odio
                    veritatis.
                </div>
                <div>Ab accusantium, consectetur consequuntur deserunt dignissimos ea earum eos expedita, magni modi
                    mollitia omnis quisquam quo quod rem repellat saepe sint, tempore tenetur voluptate. Repellat,
                    repudiandae, voluptates! A id, omnis.
                </div>
            </div>
            <div class="col-6">
                <img class="image" src="../../static/images/wall1.jpg" alt="No img" width="50%">
            </div>
        </div>
        <div class="row line">
            <div class="offset-6 col-6">
                <h1> Catalogo </h1>
            </div>
            <div class="col-6">
                <img class="image" src="../../static/images/wall2.jpg" alt="No img" width="50%">
            </div>
            <div class="col-6">
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum error est modi placeat quasi
                    quibusdam rerum similique sit tempora vero. Eum quas quasi quos sit! Ab atque delectus odio
                    veritatis.
                </div>
                <div>Ab accusantium, consectetur consequuntur deserunt dignissimos ea earum eos expedita, magni modi
                    mollitia omnis quisquam quo quod rem repellat saepe sint, tempore tenetur voluptate. Repellat,
                    repudiandae, voluptates! A id, omnis.
                </div>
            </div>
        </div>
        <div class="row line">
            <div class="col-12">
                <h1> Algunas Graficas </h1>
            </div>
            <div class="col-12">
                <canvas id="myChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php
        include('footer.html');
    ?>

    <!--Archivos JS-->
    <script src="../../static/javascript/base/jquery-3.3.1.js"> </script>
    <script src="../../static/javascript/base/popper.js"> </script>
    <script src="../../static/javascript/base/bootstrap.js"> </script>
    <script src="../../static/javascript/base/Chart.js"> </script>
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
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