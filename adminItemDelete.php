<?php
    include ("db_connect.php");
    $id=$_GET["key"];
    $qry="delete from product_database where itemID=$id";
    if (mysqli_query($conn,$qry)==true){
        echo "<script> alert('Record Deleted');</script>";
        echo "<script> window.location='adminMainPage.php';</script>";
    }
?>