<?php
    $con = mysqli_connect("localhost", "root", "", "ecommerce", 3306)
    or die(mysqli_connect_error());
    if (!isset($_SESSION)) {
        session_start();
    }
?>
