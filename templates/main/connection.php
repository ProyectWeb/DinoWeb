<?php
    define('servername','localhost');
    define('username','id3627976_root');
    define('password','123456789');
    define('database','id3627976_dinnoapp');
    // Create connection
    $conn = mysqli_connect(servername, username, password, database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>