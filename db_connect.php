<?php
    $dbhost='localhost';
    $dbuser='root';
    $dbpass='';
    $dbname = "cateringdatabase";
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>