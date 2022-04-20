<?php
    include ("db_connect.php");
    $id=$_POST["abc"];
    $qry1="delete from product_database where ItemCategory=$id";
    $qry2="delete from product_category_extension where Category=$id";
    if (mysqli_query($conn,$qry1)==true)
    {
        if (mysqli_query($conn,$qry2)==true){
            echo "<script> alert('Record Category Deleted');</script>";
            echo "<script> window.location='adminMainPage.php';</script>";
        }
    }
?>