<?php
/**
 * Created by PhpStorm.
 * User: Rich
 * Date: 14/03/2018
 * Time: 12:26 AM
 */
    $servername = "localhost";
    $username = "root";
    $password = "qonmqa3p";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>DinoApp</title>

    <link rel="stylesheet" href="../../static/css/bootstrap.css">
    <style>
        body{
            background: linear-gradient(-135deg, #2dc836, #cdd00d);
        }
        .login{
            background: white;
            border-radius: 10px;
            margin-top: 150px;
            padding: 50px;
            transition: all 0.7s ease-out;
        }

        .data{
            margin: auto;
            text-align: center;
        }

        .image{
            width: 100%;
            border-radius: 10px;
        }
        .register{
            margin: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row login">
        <div class="col-6">
            <img class="image" src="../../static/media/images/banner-login.jpg" alt="No img">
        </div>
        <div class="data col-6">
            <h1>Inicia Sesion</h1>
            <form>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
            </form>
            <p>Aun no te has Registrado?</p>
            <button id="register-btn" class="col-6 btn btn-primary">Registrate</button>
        </div>
        <div class="register col-6">
            <h1>Registrate</h1>
            <form>
                <div class="form-group row">
                    <label for="inputCorreo" class="col-sm-2 col-form-label">Correo</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Contrasena</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Contrasena">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Confirmar Contrasena">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEdad" class="col-sm-2 col-form-label">Edad</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPassword3" placeholder="Edad">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Femenino
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <div class="col-12">
                        <button type="submit" class="col-12 btn btn-primary">Registrarse</button>
                    </div>
                </div>
            </form>
            <button id="login-btn"  class="col-12 btn btn-primary">Volver a Iniciar Sesion</button>
        </div>
    </div>
</div>


<script src="../../static/javascript/base/jquery-3.3.1.js" ></script>
<script src="../../static/javascript/base/popper.js" ></script>
<script src="../../static/javascript/base/bootstrap.js" ></script>
<script>
    var $data = $('.data');
    var $register = $('.register');
    $data.hide();

    $('#register-btn').click(function () {
        $data.fadeOut(400,function () {
            $register.fadeIn();
        });
    });

    $('#login-btn').click(function () {
        $register.fadeOut(400,function () {
            $data.fadeIn();
        });
    });

</script>

</body>
</html>

