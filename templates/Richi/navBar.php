<?php
/**
 * Created by PhpStorm.
 * User: Rich
 * Date: 14/03/2018
 * Time: 12:26 AM
 */

include("../main/connection.php");
session_start();


if($_SERVER["REQUEST_METHOD"]=="POST"){

    $email = mysqli_real_escape_string($conn,$_POST['inputEmail']);
    $pass = mysqli_real_escape_string($conn,$_POST['inputPassword']);

    $sql = "select correo from usuario where correo = '$email'";
    $check_name = mysqli_query($conn,$sql);

    if (mysqli_num_rows($check_name)==0){
        echo '<script language="javascript">';
        echo 'alert("No existe el usuario")';
        echo '</script>';
    }else{
        $sql = "select password from usuario where password = '$pass'";
        $check_pass = mysqli_query($conn,$sql);
        if (mysqli_num_rows($check_pass)==0){
            echo "Contraseña incorrecta";
        }else{
            header("location: index.php");
        }
    }


}

?>

<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
        <a class="navbar-brand" href="../Richi/index.php">DinnoApp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../Laura/shop.php">Catalogo<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Denisse/confirmacionpedido.php">Precios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Adrian/quienessomos.php">Acerca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Jose/analytics.php">Graficas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Crud/crud.php">Administracion</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secundary" data-toggle="modal" data-target="#exampleModal">
                    <?php echo $estado ?>
                </button>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="inputEmail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="inputPassword">
                        </div>
                    </div>
                    <button type="submit" id="login-btn" class="col-2 offset-10 btn btn-primary">Entrar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Registrarse</button>
            </div>
        </div>
    </div>
</div>

