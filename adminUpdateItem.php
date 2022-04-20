<?php
    include ("db_connect.php");
    $id=$_GET["key"];
    $itemName=$_POST["ItemName"];
    $itemDesc=$_POST["ItemDesc"];
    $itemQuantity=$_POST["ItemQuantity"];
    $itemPrice=$_POST["ItemPrice"];
    $itemPriceDis=$_POST["ItemPriceDis"];
    $itemImageLoc=$_POST["ItemImageLoc"];
    $itemCat=$_POST["abc"];

    $qry="update product_database set ItemName='$itemName', ItemDesc='$itemDesc', ItemQuantity='$itemQuantity', ItemPrice='$itemPrice', ItemPriceDis='$itemPriceDis', ItemImageLoc='$itemImageLoc', ItemCategory='$itemCat' where ItemID=$id";
    if (mysqli_query($conn,$qry)==true){
        echo "<script> alert('Record updated');</script>";
        echo "<script> window.location='adminMainPage.php';</script>";
    }
    else{
        echo "<script> alert('Record update unsuccessful. Please contact Admin');</script>";
    }
?>