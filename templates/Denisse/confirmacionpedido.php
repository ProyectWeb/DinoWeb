<?php
    echo $variable1=($_GET['variable1']);
    echo $variable2=($_GET['variable2']);
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

    <!--  <link rel="shortcut icon" href="favicon.png">-->



</head>

<body>
    <!--NavBar-->
    <?php
        include('../Richi/navBar.php');
    ?>
        <!--Fin NavBar-->

        <div class="container">
            <div class="row">
                <div class="card col-12" id="checkout">
                    <div class="box">
                        <form method="post" action="Pago.php">
                            <h1 align="center">Confirmación del pedido</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="btn-sld col-4">
                                    <a href="infodelpedido.php">
                                        <i class="fa fa-user"></i>
                                        <br>Datos</a>
                                </li>
                                <li class="btn-sld col-4">
                                    <a href="Pago.php">
                                        <i class="fa fa-money"></i>
                                        <br>Método de pago</a>
                                </li>
                                <li class="btn-sld active col-4">
                                    <a href="#">
                                        <i class="fa fa-eye"></i>
                                        <br>Confirmación de pedido</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Producto</th>
                                                <th>Cantidad</th>
                                                <th>Precio</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <!-- <img src="img/detailsquare.jpg" alt="White Blouse Armani">-->
                                                    </a>
                                                </td>
                                                <td>
                                                    <!--<a href="#">White Blouse Armani</a>-->
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                <th> </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.content -->

                            <div>
                                <div class="pull-left">
                                    <a href="Pago.php" class="btn btn-default">
                                        <button type="submit" class="btn btn-primary">Atras</button>
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Finalizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--SCRIPTS TO INCLUDE-->
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