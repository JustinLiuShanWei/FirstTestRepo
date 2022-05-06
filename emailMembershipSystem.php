<?php
    include ("db_connect.php");

    $subject = "My subject";
    $email = "101209992@students.swinburne.edu.my";
    $msg = "First line of text\nSecond line of text";

    $id=$_POST["abc"];
    $currentDate = date("Y-m-d");
    
    if ($id = "all") $qry="select email from userdatabase where membership_expiry < '$currentDate'";
    else $qry="select email from userdatabase where id = $id";
    $run=mysqli_query($conn,$qry);
    while ($rows=mysqli_fetch_array($run)){
        $msg = wordwrap($msg,70);
        echo "<script> alert('Mail Sent.');</script>";
        echo "<script> window.location='adminMainPage.php';</script>";
        // mail($email,$subject,$msg);
    }
?>