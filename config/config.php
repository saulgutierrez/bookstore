<?php
    $host = "localhost";
    $dbname = "bookstore";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($conn) {
        echo "worked successfully";
    } else {
        echo "error in db connection";
    }
?>