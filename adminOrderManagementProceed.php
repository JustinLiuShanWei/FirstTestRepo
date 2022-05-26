<?php
    include ("db_connect.php");
    $order_No=$_GET["orderNo"];
    $qry1="SELECT order_status FROM order_database where item_no=$order_No";
    $result = mysqli_query($conn,$qry1);
    $orderArray = mysqli_fetch_assoc($result);
    $order_status = $orderArray["order_status"];
    switch ($order_status){
        case "Order Placed":
            $word = "Preparing";
            break;
        case "Preparing":
            $word = "Delivering";
            break;
        case "Delivering":
            $word = "Completed";
            break;
        case "Completed":
            $word = "Completed";
            break;
    }
    $qry2="UPDATE order_database SET order_status='$word' WHERE item_no=$order_No";
    if (mysqli_query($conn,$qry2)==true){
        echo "<script> alert('Record Changed');</script>";
        echo "<script> window.location='adminMainPage.php';</script>";
    }
?>