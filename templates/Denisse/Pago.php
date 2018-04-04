<!--<?php 
       date_default_timezone_set("America/Mexico_City");
       echo date("d");
       ?>-->

<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <title>
      Pedido </title>

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
</head>
<body>
  <div class="navbar navbar-default yamm" role="navigation" id="navbar">
  <div class="container">
  <div class="navbar-header">
   <div class="navbar-collapse collapse" id="navigation">
   <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                          
                            <h1 align= "center">Información del pedido </h1>
                            <ul class="nav nav-pills nav-justified">
                                
                                <ul class="nav nav-pills nav-justified">
                                <li><a href="infodelpedido.php"><i class="fa fa-user"></i><br>Datos</a>
                                </li>
                               <li class="active"><a href="Pago.php"><i class="fa fa-money"></i><br>Método de pago</a>
                                </li>

                                 <li><a href="infodelpedido.php"><i class="fa fa-eye"></i><br>Confirmación del pedido</a>
                               
                                </li>
                                </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box payment-method">

                                            <h4>Paypal</h4>

                                            <p>
                                                
                           <img src="../../static/images/paypal.png"   width="150px" height="150px">


                                            </p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="payment" value="payment1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box payment-method">

                                            <h4>Debito o Crédito</h4>

                                            <p>
                                 <img src="../../static/images/visa.png"   width="170px" height="150px">
                                            </p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="payment" value="payment2">
                                            </div>
                                        </div>
                                        <!-- fecha del pedido     -->
                                    </div>

                                   
                                    </div>
                                </div>
                                <!-- /.row -->

                            </div>

                            <!-- /.content -->

                            <div class="box-footer">
                                <div class="pull-left">
                                <a href="../Laura/shop.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>Cancelar</a>
                                </div>
                                <div class="pull-right">
                                <a href="confirmacionpedido.php" class="btn btn-default"><i class="fa fa-chevron-right"></i> Continuar con la compra </a>
                                 <!--   <button type="submit" class="btn btn-primary">Continuar con la compra<i class="fa fa-chevron-right" -->  



                                </div>
                            </div>

                    </div>
                    <!-- /.box -->


                </div> <div class="col-md-3 col-sm-6">


                        <hr>

                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
       


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