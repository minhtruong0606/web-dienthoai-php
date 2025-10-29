<?php
    $con = mysqli_connect("172.31.24.242", "webuser", "Nt25102004", "ecommerce", 3306)
    or die(mysqli_connect_error());
    if (!isset($_SESSION)) {
        session_start();
    }
?>
