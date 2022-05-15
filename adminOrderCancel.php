<?php
    include ("db_connect.php");
    $order_No=$_GET["orderNo"];
    $word="Canceled";
    $qry2="UPDATE order_database SET order_status='$word' WHERE item_no=$order_No";
    if (mysqli_query($conn,$qry2)==true){
        echo "<script> alert('Record Canceled');</script>";
        echo "<script> window.location='adminMainPage.php';</script>";
    }
?>