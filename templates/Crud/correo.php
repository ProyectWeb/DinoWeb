<?php
    require ('../../PHPMailer/PHPMailer-master/src/Exception.php');
    require ('../../PHPMailer/PHPMailer-master/src/PHPMailer.php');
    require ('../../PHPMailer/PHPMailer-master/src/SMTP.php');

    echo php_ini_loaded_file();
    echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n";

    $Destino = $_POST['staticEmail'];
    $Asunto = $_POST['subject'];
    $Mensaje = $_POST['message'];

    $mail = new \PHPMailer\PHPMailer\PHPMailer();
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host= 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "lordgrodus@gmail.com";
    $mail->Password = "qonmqa3p";
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->isHTML();
    $mail->setFrom('lordgrodus@gmail.com');
    $mail->Subject = "ADADSASDA";
    $mail->Body = "dsasdadasdadasdasasda";
    $mail->addAddress("drdr_2@hotmail.com");
    $mail->send();











