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

    <!--SUBIR ARCHIVOS AL SERVIDOR-->
    <?php
        //tipos de archivos a admitir
        $formatos = array('.jpg', '.png', '.doc', '.pdf');
        //validar si alguien presiono el botón del formulario
        if (isset($_POST['boton'])) {
            $nombreArchivo= $_FILES['archivo']['name'];
            $nombreTmpArchivo= $_FILES['archivo']['tmp_name'];
            $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
            //si la extensión esta dentro del arreglo se acepta.
            if (in_array($ext, $formatos)) {
                if (move_uploaded_file($nombreTmpArchivo, "../../static/subirarchivos-pedidos/$nombreArchivo")) {
                    echo "Archivo $nombreArchivo subido exitosamente";
                }else{
                    echo "Ocurrió un error";
                }
            }else{
                echo "Archivo no permitido";
            }
        }
        ?>


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
        <div class="row store-wrapper">
            <!--Inicio categorias-->
            <div class="col-md-2 shop-sidebar">
                <button id="allcategory" class="btn btn-primary col-12">Todas las categorias</button>
                <button id="divulgacion" class="btn btn-primary col-12">Divulgacion cientifica</button>
                <button id="juega" class="btn btn-primary col-12">Juega Y Aprende</button>
                <button id="empresas" class="btn btn-primary col-12">Empresas</button>
                <button id="curriculum" class="btn btn-primary col-12">Curriculum</button>
            </div>
            <!--Inicio categorias-->
            <div class="col-md-10 products-list">
                <!--Inicio Seccion Cards -->

                <div class="col-12">
                    <center><h1 class="divulgacion">Divulgacion Cientifica</h1></center>
                    <div class="row">
                        <div class="col-4">
                            <div class="card divulgacion">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card divulgacion">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card divulgacion">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card divulgacion">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card divulgacion">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card divulgacion">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <center><h1 class="juega">Juega Y Aprende</h1></center>
                    <div class="row">
                        <div class="col-4">
                            <div class="card juega">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card juega">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card juega">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card juega">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card juega">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card juega">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <center><h1 class="curriculum">Curriculum</h1></center>
                    <div class="row">
                        <div class="col-4">
                            <div class="card curriculum">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4 curriculum">
                            <div class="card">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4 curriculum">
                            <div class="card">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4 curriculum">
                            <div class="card">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4 curriculum">
                            <div class="card">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4 curriculum">
                            <div class="card">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <center><h1 class="empresa">Empresa</h1></center>
                    <div class="row">
                        <div class="col-4">
                            <div class="card empresa">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card empresa">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card empresa">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card empresa">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card empresa">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card empresa">
                                <h5>Plantilla 1</h5>
                                <img src="../../static/images/shop/divulgacion1.jpg" width="100%" alt="">
                                <p>Descripcion Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </p>
                                <h6>Precio: 400$ </h6>
                                <button class="btn btn-info">Demo</button>
                                <button class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!--Fin Seccion Cards-->



<!--                <div class="product-item" id="perso" category="perso">-->
<!--                    <div class="row">-->
<!---->
<!--                        <div class="jumbotron jumbotron-fluid  bg-light text-dark">-->
<!--                            <div class="container ">-->
<!--                                <h1 class="display-4">¿Qué tipo de página web te gustaría crear?</h1>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-8">-->
<!--                            <p>DinnoWeb reconoce la importancia de tu negocio, por ello es necesario que está tenga presencia en Internet para que puedas publicar toda tu información personal a tus clientes.-->
<!--                                Por lo que a continuación encontrarás un pequeño manual con los datos que necesitamos en DinnoWeb para ayudarte a crear un diseño adecuado para tú página personal o para tú empresa.-->
<!--                            </p>-->
<!---->
<!--                            <h3>1. Definir los requerimientos y el contenido del sitio web</h3>-->
<!--                            <p> La mejor manera de hacer esto es realizar una pequeña investigación en sitios web similares al que nosotros intentamos crear (ej. el mismo tipo de negocio, el mismo tipo de información, etc.) para navegarlos, leer la información que proporcionan e ir generando una idea más específica acerca de lo que queremos y/o necesitamos tener en nuestro sitio de internet. </p>-->
<!---->
<!--                            <p>Por lo que al crear este contenido deberas responder las siguientes preguntas:-->
<!--                            </p>-->
<!--                            <ul>-->
<!--                                <li>¿Qué información publicaremos en nuestro sitio web?</li>-->
<!--                                <li>¿Cuál será la estructura de dicha información?</li>-->
<!--                                <li>¿Requerimos funciones especiales?, ¿cuáles?</li>-->
<!--                                <li>¿Cuál es el estilo gráfico que deseamos tener en nuestro sitio web? (referencias para los diseñadores)</li>-->
<!--                            </ul>-->
<!---->
<!---->
<!--                            <br>-->
<!--                            <br>-->
<!---->
<!---->
<!--                            <h3>2. Define el nombre de dominio para tú sitio web</h3>-->
<!--                            <p>Uno de los aspectos más importantes para nuestro sitio web es elegir un nombre de dominio apropiado para el mismo. En la mayoría de los casos se prefiere que el nombre del sitio web sea el mismo nombre de la empresa o marca que lo crea, sin embargo existen casos en los que ya no hay disponibilidad del nombre de dominio que representa a la marca. En estos casos se tienen que buscar opciones representativas que puedan estar disponibles, como por ejemplo las variaciones del mismo nombre de dominio o distintas extensiones de dominio en las que la palabra o frase original pueda estar aún disponible.</p>-->
<!---->
<!---->
<!--                            <h3>3. Presupuesto</h3>-->
<!--                            <p>Finalmente mandanos un archivo PDF, JPG, PNG o .DOC con tú idea, no olvides incluir tus datos para contactarte y generarte un presupuesto.-->
<!--                                Estos son los datos que debes incluir:</p>-->
<!--                            <ul>-->
<!---->
<!--                                <li>1. Nombre</li>-->
<!--                                <li>2. Correo electrónico</li>-->
<!--                                <li>3. Teléfono</li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!---->
<!---->
<!--                        <div class="col-xl-12">-->
<!--                            <div class="caja">-->
<!--                                <form method="post" action="" enctype="multipart/form-data">-->
<!--                                    <h3>Subenos tu archivo: </h3>-->
<!--                                    <input type="file" name="archivo">-->
<!--                                    <br>-->
<!--                                    <br>-->
<!--                                    <input class="btn btn-danger" type="submit" value="Enviar archivo" name="boton">-->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
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