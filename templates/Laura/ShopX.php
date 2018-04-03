<?php
/**
 * Created by PhpStorm.
 * User: Rich
 * Date: 03/04/2018
 * Time: 01:20 AM
 */

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Catalogo</title>
        <meta name="description" content="Esta plantilla forma parte de la sección catalogo de plantillas de la página web">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="img/dino.png">

        <!--CSS-->

        <link rel="stylesheet" href="../../static/css/catalogoestilos/bootstrap.css">
        <link rel="stylesheet" href="../../static/css/catalogoestilos/style.css">
        <link rel="stylesheet" href="../../static/css/catalogoestilos/fontawesome/web-fonts-with-css/css/fontawesome.css">
        <link rel="stylesheet" href="../../static/css/catalogoestilos/owl.carousel.min.css">
        <link rel="stylesheet" href="../../static/css/catalogoestilos/default.css">
        <link rel="stylesheet" href="../../static/css/catalogoestilos/nice-select.css">
        <link rel="stylesheet" href="../../static/css/catalogoestilos/meanmenu.css">

        <link rel="stylesheet" href="../../static/css/catalogoestilos/responsive.css">
    </head>
    <body>
        <?php
        include('../Richi/navBar.html');
        ?>
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
        <div class="shop-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <!--Menú de categorias inicio-->
                    <div class="col-md-2">
                        <div class="shop-sidebar">
                            <div class="nav flex-column " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                   aria-selected="true">
                                    <p class="cat">Divulgación científica</p>
                                </a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                   aria-selected="false">
                                    <p class="cat">Juega y aprende </p>
                                </a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                   aria-selected="false">
                                    <p class="cat">Empresas </p>
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                   aria-selected="false">
                                    <p class="cat">Curriculum </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--Menú de categorias fin-->
                    <div class="col-md-10">
                        <div class="tab-content" id="v-pills-tabContent">
                            <!--Inicio divulgación cientifica-->
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="col-xl-9">
                                    <div class="shop-layout">
                                        <div class="shop-layout-bar clearfix">
                                            <ul class="nav shop-tab" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                                        <i class="fas fa-th-large"> Ordenar por grupo</i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                                        <i class="fas fa-th-large"> Ordenar por lista</i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content mt-40" id="myTabContent">

                                            <!--Inicio primera vista-->
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="row">
                                                    <div class="col-xl-4">
                                                        <div class="product-wrapper">
                                                            <div class="product-img">
                                                                <a href="../dinotemplates/divulgacioncientifica/education/index.html">
                                                                    <img class="adapt" src="../../static/images/shop/divulgacion1.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-content text-center">
                                                                <h3>
                                                                    <a href="#">Plantilla aprendizaje</a>
                                                                </h3>
                                                                <div class="rating">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                                <div class="price">
                                                                    <span>$ 2100.9 </span>
                                                                    <span>
                                                                        <del>$239.9</del>
                                                                    </span>
                                                                </div>
                                                                <div class="cart-btn">
                                                                    <a href="#">Hacer pedido</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="product-wrapper">
                                                            <div class="product-img">
                                                                <a href="../dinotemplates/divulgacioncientifica/plantilla3/index.html">
                                                                    <img src="../../static/images/shop/divul2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-content text-center">
                                                                <h3>
                                                                    <a href="#">Plantilla study</a>
                                                                </h3>
                                                                <div class="rating">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                                <div class="price">
                                                                    <span>$ 229.9 </span>
                                                                    <span>
                                                                        <del>$239.9</del>
                                                                    </span>
                                                                </div>
                                                                <div class="cart-btn">
                                                                    <a href="#">Hacer pedido</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4">
                                                        <div class="product-wrapper">
                                                            <div class="product-img">
                                                                <a href="../dinotemplates/divulgacioncientifica/king/index.html">
                                                                    <img src="../../static/images/shop/divulgacion3.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-content text-center">
                                                                <h3>
                                                                    <a href="#">Plantilla aqua</a>
                                                                </h3>
                                                                <div class="rating">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                                <div class="price">
                                                                    <span>$ 229.9 </span>
                                                                    <span>
                                                                        <del>$239.9</del>
                                                                    </span>
                                                                </div>
                                                                <div class="cart-btn">
                                                                    <a href="#">Hacer pedido</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="product-wrapper">
                                                            <div class="product-img">
                                                                <a href="../dinotemplates/divulgacioncientifica/plantilla4/index.html">
                                                                    <img src="../../static/images/shop/divulgacio4.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-content text-center">
                                                                <h3>
                                                                    <a href="#">Plantilla investigación</a>
                                                                </h3>
                                                                <div class="rating">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                                <div class="price">
                                                                    <span>$ 229.9 </span>
                                                                    <span>
                                                                        <del>$239.9</del>
                                                                    </span>
                                                                </div>
                                                                <div class="cart-btn">
                                                                    <a href="#">Hacer pedido</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4">
                                                        <div class="product-wrapper">
                                                            <div class="product-img">
                                                                <a href="../dinotemplates/divulgacioncientifica/plantilla5/index.html">
                                                                    <img src="../../static/images/shop/divulgacio5.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-content text-center">
                                                                <h3>
                                                                    <a href="#">Plantilla animals</a>
                                                                </h3>
                                                                <div class="rating">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                                <div class="price">
                                                                    <span>$ 229.9 </span>
                                                                    <span>
                                                                        <del>$239.9</del>
                                                                    </span>
                                                                </div>
                                                                <div class="cart-btn">
                                                                    <a href="#">Hacer pedido</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="product-wrapper">
                                                            <div class="product-img">
                                                                <a href="../dinotemplates/divulgacioncientifica/plantilla6/index.html">
                                                                    <img src="../../static/images/shop/divulgacio6.jpg" alt="">
                                                            </div>
                                                            <div class="product-content text-center">
                                                                <h3>
                                                                    <a href="#">Plantilla plants</a>
                                                                </h3>
                                                                <div class="rating">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                                <div class="price">
                                                                    <span>$ 229.9 </span>
                                                                    <span>
                                                                        <del>$239.9</del>
                                                                    </span>
                                                                </div>
                                                                <div class="cart-btn">
                                                                    <a href="#">Hacer pedido</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--Fin primera vista-->

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Fin divulgación cientifica-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer area start-->
        <footer class="footer">
            <p class="copy">&copy; Dino-APP 2018</p>
        </footer>
        <!--Footer area end-->
        <!--JS-->
        <script src="../../static/javascript/catalogojavascript/modernizr-3.5.0.min.js"></script>
        <script src="../../static/javascript/catalogojavascript/jquery-3.2.1.min.js"></script>
        <script src="../../static/javascript/base/bootstrap.js"></script>
        <script src="../../static/javascript/base/popper.js"></script>
        <script src="../../static/javascript/catalogojavascript/owl.carousel.min.js"></script>
        <script src="../../static/javascript/catalogojavascript/jquery.meanmenu.min.js"></script>
        <script src="../../static/javascript/catalogojavascript/plugins.js"></script>
        <script src="../../static/javascript/catalogojavascript/main.js"></script>
    </body>
</html>
