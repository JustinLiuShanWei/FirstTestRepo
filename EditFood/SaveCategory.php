<?php
$con=mysqli_connect("localhost","root","","foodorderdb");
$cd=$_POST["CatDesc"];

$qry="select max(Category) as maxid from MenuCategory_tbl";
$jid=0;
$run=mysqli_query($con,$qry);
while ($rows=mysqli_fetch_array($run))
      {
                  $jid=$rows[0];
      }

$qry="Insert into MenuCategory_tbl values ($jid+1,'$cd')";
if (mysqli_query($con,$qry)==TRUE)
{
      echo '<script> alert("Category Added Successful");</script>';
      header('refresh:0;url=adminLogin.php');
}
else
{
      echo '<script> alert("Please try again");</script>';
      header('refresh:0;url=adminLogin.php');
}
?>