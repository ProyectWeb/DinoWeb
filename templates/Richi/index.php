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
            margin-top: 200px;
            height: 500px;
        }

        .data{
            margin: auto;
            text-align: center;
        }

        .image{
            width: 100%;
            margin-top: 40px;
            margin-left: 10px;
            border-radius: 10px;
        }
        .register{
            margin: auto;
            text-align: center;
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
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contrasena">
                </div>
                <button type="submit" class="col-12 btn btn-primary">Entra</button>
            </form>
            o
            <br>
            <button id="register-btn" class="col-6 btn btn-primary">Registrate</button>
        </div>
        <div class="register col-6">
            <h1>Registrate</h1>
            <form>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contrasena">
                <input type="nombre" class="form-control" id="exampleInputPassword1" placeholder="Contrasena">
                <input type="edad" class="form-control" id="exampleInputPassword1" placeholder="Contrasena">
                <input type="genero" class="form-control" id="exampleInputPassword1" placeholder="Contrasena">
                <button type="submit" class="col-12 btn btn-primary">Entra</button>
            </form>
            o
            <br>
            <button id="login-btn"  class="col-6 btn btn-primary">Inicia Sesion</button>
        </div>
    </div>
</div>


<script src="../../static/javascript/base/jquery-3.3.1.js" ></script>
<script src="../../static/javascript/base/popper.js" ></script>
<script src="../../static/javascript/base/bootstrap.js" ></script>
<script>
    var $data = $('.data');
    var $register = $('.register');
    $register.hide();

    $('#register-btn').click(function () {
        $data.fadeOut();
        $register.fadeIn();
    });

    $('#login-btn').click(function () {
        $register.fadeOut();
        $data.fadeIn();
    });

</script>

</body>
</html>

