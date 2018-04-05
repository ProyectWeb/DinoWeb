<?php
    session_start();
    include("../main/connection.php");
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
            $sql1 = "select password from usuario where password = '$pass'";
            $check_pass = mysqli_query($conn,$sql1);
            if (mysqli_num_rows($check_pass)==0){
                echo "Contraseña incorrecta";
            }else{
                $sql1 = "select * from usuario where password = '$pass'";
                $check_pass = mysqli_query($conn,$sql1);
                foreach ($check_pass as $res){
                    $_SESSION['nombre'] = $res['nombre'];
                    $_SESSION['superusuario'] = $res['superusuario'];
                    $_SESSION['administrador'] = $res['administrador'];
                }
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;

                header("location: index.php");
            }
        }
    }

