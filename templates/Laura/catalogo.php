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
            <div class="col-md-2 category_list shop-sidebar">
                <a href="#" class="category_item" category="all">Todas las categorias</a>
                <a href="#" class="category_item" category="divulgacion">Divulgacion cientifica</a>
                <a href="#" class="category_item" category="juega">Juega y aprende</a>
                <a href="#" class="category_item" category="empresas">Empresas</a>
                <a href="#" class="category_item" category="curri">Curriculum</a>
                <a href="#" class="category_item" category="perso">Crea tu propia página web</a>
            </div>
            <!--Inicio categorias-->
            <div class="col-md-10 products-list ">
                <!--Inicio divulgación cientifica-->
                <div class="product-item" category="divulgacion">
                    <div class="card-deck">
                        <div class="card product-img">
                            <img class="card-img-top img-fluid" src="../../static/images/shop/divulgacion1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla learning</h3>

                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>

                            </div>
                        </div>
                        <div class="card product-img">

                            <div class="card-body">
                                <img class="card-img-top img-fluid" src="../../static/images/shop/divul2.jpg" alt="Card image cap">
                                <h3 class="card-title">Plantilla study</h3>

                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top img-fluid" src="../../static/images/shop/divulgacion3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla aqua</h3>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item" category="divulgacion">
                    <div class="card-deck">
                        <div class="card product-img">
                            <img class="card-img-top img-fluid" src="../../static/images/shop/divulgacio4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla investigation</h3>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top img-fluid" src="../../static/images/shop/divulgacio5.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla animals</h3>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top img-fluid" src="../../static/images/shop/divulgacio6.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla plants</h3>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Fin divulgación cientifica-->


                <!--Inicio juega y aprende-->
                <div class="product-item" category="juega">
                    <div class="card-deck">
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/juega1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla kids</h3>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/juega2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla kalearn</h3>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/juega3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla world</h3>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item" category="juega">
                    <div class="card-deck">
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/jueg4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Plantilla family</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/jueg5.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Plantilla rabbit</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/jueg6.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Plantilla investigacion</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Fin juega y aprende-->

                <!--Inicio empresas-->
                <div class="product-item" category="empresas">
                    <div class="card-deck">
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/empresa1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla business</h3>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/empresa2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla hotels</h3>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/empresa3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Card building</h3>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item" category="empresas">
                    <div class="card-deck">
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/empresa4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Plantilla food</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/empresa5.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Plantilla fruit</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/empresa6.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Plantilla collection</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Fin empresas-->


                <!--Inicio curriculum-->
                <div class="product-item" category="curri">
                    <div class="card-deck">
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/curri1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla Clarence</h3>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/curri2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla Start</h3>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/curri3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla John Dge</h3>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-item" category="curri">
                    <div class="card-deck">
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/curri4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla company</h3>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/curri5.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla pink</h3>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                        <div class="card product-img">
                            <img class="card-img-top" src="../../static/images/shop/curri6.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-title">Plantilla girl</h3>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <div class="bo">
                                    <button type="button" class="btn btn-secondary float-left">Versi. prueba</button>
                                    <button type="button" class="btn btn-dark float-right">Hacer pedido</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Fin curriculum-->


                <div class="product-item" id="perso" category="perso">
                    <div class="row">

                        <div class="jumbotron jumbotron-fluid  bg-light text-dark">
                            <div class="container ">
                                <h1 class="display-4">¿Qué tipo de página web te gustaría crear?</h1>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <p>DinnoWeb reconoce la importancia de tu negocio, por ello es necesario que está tenga presencia en Internet para que puedas publicar toda tu información personal a tus clientes.
                                Por lo que a continuación encontrarás un pequeño manual con los datos que necesitamos en DinnoWeb para ayudarte a crear un diseño adecuado para tú página personal o para tú empresa.
                            </p>

                            <h3>1. Definir los requerimientos y el contenido del sitio web</h3>
                            <p> La mejor manera de hacer esto es realizar una pequeña investigación en sitios web similares al que nosotros intentamos crear (ej. el mismo tipo de negocio, el mismo tipo de información, etc.) para navegarlos, leer la información que proporcionan e ir generando una idea más específica acerca de lo que queremos y/o necesitamos tener en nuestro sitio de internet. </p>

                            <p>Por lo que al crear este contenido deberas responder las siguientes preguntas:
                            </p>
                            <ul>
                                <li>¿Qué información publicaremos en nuestro sitio web?</li>
                                <li>¿Cuál será la estructura de dicha información?</li>
                                <li>¿Requerimos funciones especiales?, ¿cuáles?</li>
                                <li>¿Cuál es el estilo gráfico que deseamos tener en nuestro sitio web? (referencias para los diseñadores)</li>
                            </ul>


                            <br>
                            <br>


                            <h3>2. Define el nombre de dominio para tú sitio web</h3>
                            <p>Uno de los aspectos más importantes para nuestro sitio web es elegir un nombre de dominio apropiado para el mismo. En la mayoría de los casos se prefiere que el nombre del sitio web sea el mismo nombre de la empresa o marca que lo crea, sin embargo existen casos en los que ya no hay disponibilidad del nombre de dominio que representa a la marca. En estos casos se tienen que buscar opciones representativas que puedan estar disponibles, como por ejemplo las variaciones del mismo nombre de dominio o distintas extensiones de dominio en las que la palabra o frase original pueda estar aún disponible.</p>


                            <h3>3. Presupuesto</h3>
                            <p>Finalmente mandanos un archivo PDF, JPG, PNG o .DOC con tú idea, no olvides incluir tus datos para contactarte y generarte un presupuesto.
                                Estos son los datos que debes incluir:</p>
                            <ul>

                                <li>1. Nombre</li>
                                <li>2. Correo electrónico</li>
                                <li>3. Teléfono</li>
                            </ul>
                        </div>


                        <div class="col-xl-12">
                            <div class="caja">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <h3>Subenos tu archivo: </h3>
                                    <input type="file" name="archivo">
                                    <br>
                                    <br>
                                    <input class="btn btn-danger" type="submit" value="Enviar archivo" name="boton">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Fin menu de catálgo-->


    <footer class="footer">
        <p class="copy">&copy; Dino-APP 2018</p>
    </footer>

        <script src="../../static/javascript/catalogojavascript/jquery-3.2.1.min.js"></script>

    <script src="../../static/javascript/base/bootstrap.js"></script>
    <script src="../../static/javascript/base/popper.js"></script>


</body>
</html>