<?php
    $host = "localhost";
    $dbname = "bookstore";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $secret_key = "sk_test_51STSntF2L0uc4tAuzgdt3yj2JLgN6D7xjaNlppufMARdnZXR9hQ2qiwySPBp8cwdaqEW3JEGr7v32i2reblffZcF00rRDEnIrC";
?>