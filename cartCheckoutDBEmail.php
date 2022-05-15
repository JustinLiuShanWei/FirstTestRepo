<?php
    session_start();
    include ("db_connect.php");
    $query = "select max(order_id) AS max from order_database";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    $maxOrderId = $row['max'] + 1;
    $userId = $_SESSION["user_id"];
    foreach($_SESSION["cart_item"] as $k => $v) {
        $itemID = $_SESSION["cart_item"][$k]["code"];
        $itemQuantity = $_SESSION["cart_item"][$k]["quantity"];
        $itemPrice = $_SESSION["cart_item"][$k]["price"];
        $orderStatus = "Order Placed";
        $query = "insert into order_database (order_id, user_id, item_id, item_quantity, item_price, order_status) VALUES ('$maxOrderId', '$userId', '$itemID', '$itemQuantity', '$itemPrice', '$orderStatus')";
        mysqli_query($conn,$query);
    }

    $subject = "My subject";
    $email = "101209992@students.swinburne.edu.my";
    $id=$_SESSION["user_id"];
    $currentDate = date("Y-m-d");
    $msg = "Hi! We had recieve your payment. Your order is processing.";

    if ($id = "all") $qry="select email from userdatabase where membership_expiry < '$currentDate'";
    else $qry="select email from userdatabase where id = $id";
    $run=mysqli_query($conn,$qry);
    while ($rows=mysqli_fetch_array($run)){
        $msg = wordwrap($msg,70);
        // mail($email,$subject,$msg);
    }
    echo "<script> alert('Your Order has been Confirmed');</script>";
    echo "<script> window.location='cartCheckoutThankYou.php';</script>";
?>