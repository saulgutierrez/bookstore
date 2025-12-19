<?php
    require "../includes/header.php";
    // Avoid the users access to this page directly accross URL
    // This page doesn't must be visible if the cart is empty
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
        header('HTTP/1.0 403 Forbidden', TRUE, 403);
        die(header('location: '.APPURL.''));
    }
?>