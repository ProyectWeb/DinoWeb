<?php
    define('servername','localhost');
    define('username','root');
    define('password','qonmqa3p');
    define('database','DinnoApp');
    // Create connection
    $conn = mysqli_connect(servername, username, password, database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>