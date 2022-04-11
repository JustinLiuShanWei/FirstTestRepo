<?php
$con=mysqli_connect("localhost","root","","foodorderdb");
$cat=$_POST["Category"];
$ItemName=$_POST['ItemName'];
$Price=$_POST['Price'];
$Dis=$_POST['Discount'];
$itemimg = $_FILES['file']['fileToUpload'];

$file = fopen($itemimg, 'r');
$file_contents = fread($file, filesize($itemimg));
fclose($file);
$file_contents = addslashes($file_contents);


$qry="select max(MenuItemID) as maxid from MenuItems_tbl ";
$jd=0;
$run=mysqli_query($con,$qry);
while ($rows=mysqli_fetch_array($run))
      {
                  $jd=$rows[0];
      }

$qry="Insert into MenuItems_tbl values ($cat,$jd+1,'$ItemName',$Price,$Dis,'$file_contents')";
if (mysqli_query($con,$qry)==TRUE)
{
      echo '<script> alert("Menu Item Added Successful");</script>';
      header('refresh:0;url=adminLogin.php');
}
else
{
      echo '<script> alert("Please try again");</script>';
      header('refresh:0;url=adminLogin.php');
}
?>