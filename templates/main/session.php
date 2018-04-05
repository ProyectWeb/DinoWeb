<?php
    include('connection.php');
    session_start();
    $user_check = $_SESSION['login_user'];
    $sql = "select correo from usuario where correo = '$email'";
    $check_name = mysqli_query($conn,$sql);

    if(!isset($_SESSION['login_user'])){
        $estado = 0;
    }else{
        $estado = 1;
    }
?>