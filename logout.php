<?php
    session_start();
    echo "<script> alert('Logged Out.');</script>";
    echo "<script> window.location='login.php';</script>";
    unset($_SESSION['user_id']);
    unset($_SESSION['cart_item']);
?>