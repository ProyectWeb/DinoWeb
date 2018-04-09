<!doctype html>
<html lang="">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
     content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catálogo</title>
    <link rel="stylesheet" href="../../static/css/catalogoestilos/bootstrap.css">
    <link rel="stylesheet" href="../../static/css/catalogoestilos/estiloscatalogo.css">




</head>
<body>
    <!--Inicio Nav-->
    <?php
    include('../Richi/navBar.php');
    ?>
    <!--Fin nav-->

    <!--Imagen principal inicio-->
    <div class="page-title-area pt-100 pb-100" style="background-image:url(../../static/images/shop/p.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title text-center">
                        <h2>ELIGE LA PLANTILLA QUE MÁS TE GUSTE</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item ">
                                    Curriculum
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Estudio
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Ciencia</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Imagen principal fin-->

    <!--Incio catálogo-->
    <div class="container wrap">
        
            <?php
            include('card.php');
            ?>

        <!--Fin Seccion Cards-->
    </div>



    <!--Fin menu de catálgo-->


    <footer class="footer">
        <p class="copy">&copy; Dino-APP 2018</p>
    </footer>

    <script src="../../static/javascript/catalogojavascript/jquery-3.2.1.min.js"></script>
    <script src="../../static/javascript/catalogojavascript/script.js"></script>

    <script>

        function hideall() {
            $('.divulgacion').hide();
            $('.juega').hide();
            $('.curriculum').hide();
            $('.empresa').hide();
        };
        function showall() {
            $('.divulgacion').fadeIn();
            $('.juega').fadeIn();
            $('.curriculum').fadeIn();
            $('.empresa').fadeIn();
        };

        $('#allcategory').click(function(){
            hideall();
        });
        $('#divulgacion').click(function(){
            hideall();
            $('.divulgacion').fadeIn();
        });
        $('#juega').click(function(){
            hideall();
            $('.juega').fadeIn();
        });
        $('#empresas').click(function(){
            hideall();
            $('.empresa').fadeIn();
        });
        $('#curriculum').click(function(){
            hideall();
            $('.curriculum').fadeIn();
        });





    </script>


    <script src="../../static/javascript/base/bootstrap.js"></script>
    <script src="../../static/javascript/base/popper.js"></script>


</body>
</html>