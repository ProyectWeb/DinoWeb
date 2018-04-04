<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
     Pedido
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="../../static/css/font-awesome.css" rel="stylesheet">
    <link href="../../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../static/css/animate.min.css" rel="stylesheet">
    <link href="../../static/css/owl.carousel.css" rel="stylesheet">
    <link href="../../static/css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="../../static/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="../../static/css/custom.css" rel="stylesheet">

    <script src="../../static/javascript/base/respond.min.js"></script>

    <!--<link rel="shortcut icon" href="favicon.png">-->
   <!-- <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">-->



</head>

<body>
  
    
    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                   <!-- Agregar barra de navegacion -->
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="Pago.php">
                            <h1 align="center">Información del pedido</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="#"><i class="fa fa-user"></i><br>Datos</a>
                                </li>

                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Metodo de pago</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Confirmación de pedido</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">ID Pedido</label>
                                         <!-- lo debe generar automaticamente-->   <input type="text" class="form-control" id="firstname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Número de usuario</label>
                                            <input type="text" class="form-control" id="lastname">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="company">Fecha del Pedido</label>
                                            <input type="text" class="form-control" id="company">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="street">Fecha de Entrega</label>
                                            <input type="text" class="form-control" id="street">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                               
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                           
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                          
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                           
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           
                                        </div>
                                    </div>

                                </div>
                                <!-- /.row -->
                            </div>

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="../Laura/shop.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>Cancelar</a>
                                </div>
                                <div class="pull-right">
                                     <a href="Pago.php" class="btn btn-default"><i class="fa fa-chevron-right"></i>Continuar con la compra</a>
                                   <!-- <button type="submit" class="btn btn-primary">Continuar con la compra<i class="fa fa-chevron-right"></i>-->
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

     

    </div>
    <!-- /#all -->


    

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