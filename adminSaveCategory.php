<?php
    include ("db_connect.php");
    $cd=$_POST["CatDesc"];

    $qry="select max(Category) as maxid from product_category_extension";
    $jid=0;
    $run=mysqli_query($conn,$qry);
    while ($rows=mysqli_fetch_array($run)){
        $jid=$rows[0];
    }

    $qry="Insert into product_category_extension values ($jid+1,'$cd')";
    if (mysqli_query($conn,$qry)==TRUE){
        echo '<script> alert("Category Added Successful");</script>';
        header('refresh:0;url=adminMainPage.php');
    }
    else{
        echo '<script> alert("Please try again");</script>';
        header('refresh:0;url=adminMainPage.php');
    }
?>