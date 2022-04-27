<?php
    session_destroy();
    echo "<script> alert('Logged Out.');</script>";
    echo "<script> window.location='login.php';</script>";
?>