<?php
$con=mysqli_connect("localhost","root","","foodorderdb");
$id=$_POST["ItemID"];
$in=$_POST["ItemName"];
$ip=$_POST["Price"];
$qry="update  menuitems_tbl set ItemName='$in', Price=$ip where MenuItemID=$id";
if (mysqli_query($con,$qry)==true)
{
      echo "<script> alert('Record updated');</script>";
      echo "<script> window.location='adminLogin.php';</script>";
}
?>