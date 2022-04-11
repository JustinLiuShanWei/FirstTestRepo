 <?php
$con=mysqli_connect("localhost","root","","foodorderdb");
$id=$_POST["abc"];
$qry="delete from menucategory_tbl where Category=$id";
if (mysqli_query($con,$qry)==true)
{
      echo "<script> alert('Record Deleted');</script>";
      echo "<script> window.location='adminLogin.php';</script>";
}
?>