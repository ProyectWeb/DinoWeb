<?php
    session_start();
    $var_value = $_SESSION['varname'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="../../static/css/font-awesome.css" rel="stylesheet">
    <link href="../../static/css/catalogoestilos/bootstrap.css" rel="stylesheet">
    <link href="../../static/css/animate.min.css" rel="stylesheet">
    <link href="../../static/css/owl.carousel.css" rel="stylesheet">
    <link href="../../static/css/owl.theme.css" rel="stylesheet">

    <!--Own Styles-->
    <link rel="stylesheet" href="../../static/css/infodelpedido.css">

    <!-- your stylesheet with modifications -->
    <link href="../../static/css/custom.css" rel="stylesheet">
    <script src="../../static/javascript/base/respond.min.js"></script>

</head>

<body>
    <?php
        include('../Richi/navBar.php');
    ?>

    <div class="container">
        <div class="card">
            <div>
                <h1 align="center">Información del pedido </h1>
                <ul class="nav nav-pills nav-justified">
                    <li class="btn-sld col-4">
                        <a href="infodelpedido.php">
                            <i class="fa fa-user"></i>
                            <br>Datos</a>
                    </li>
                    <li class="btn-sld col-4 active">
                        <a href="Pago.php">
                            <i class="fa fa-money"></i>
                            <br>Método de pago</a>
                    </li>
                    <li class="btn-sld col-4">
                        <a href="infodelpedido.php">
                            <i class="fa fa-eye"></i>
                            <br>Confirmación del pedido</a>
                    </li>
                </ul>
            </div>
            <div>
                <div class="row">
                    <div class="col-6">
                        <div class="box payment-method">
                            <img src="../../static/images/paypal.png" class="image-pay">
                            <div class="text-center">
                                <input type="radio" name="payment" value="payment1">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box payment-method">
                            <img src="../../static/images/visa.png" class="image-pay">
                            <div class="box-footer text-center">
                                <input type="radio" name="payment" value="payment2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="pull-left">
                    <a href="infodelpedido.php">
                        <button class="btn btn-primary">Atras</button>
                    </a>
                </div>
                <div class="pull-right">
                    <a href="confirmacionpedido.php">
                        <button class="btn btn-primary">Continuar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- *** SCRIPTS TO INCLUDE ***
_________________________________________________________ -->
    <script src="../../static/javascript/base/jquery-1.11.0.min.js"></script>
    <script src="../../static/javascript/base/bootstrap.min.js"></script>
    <script src="../../static/javascript/base/jquery.cookie.js"></script>
    <script src="../../static/javascript/base/waypoints.min.js"></script>
    <script src="../../static/javascript/base/modernizr.js"></script>
    <script src="../../static/javascript/base/bootstrap-hover-dropdown.js"></script>
    <script src="../../static/javascript/base/owl.carousel.min.js"></script>
    <script src="../../static/javascript/base/front.js"></script>

</body>

</html>