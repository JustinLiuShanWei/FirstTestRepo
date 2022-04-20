<?php
      include ("db_connect.php");
      
      $ItemName=$_POST['ItemName'];
      $ItemDes=$_POST['ItemDesc'];
      $ItemQ=$_POST['ItemQuantity'];
      $Price=$_POST['ItemPrice'];
      $Dis=$_POST['ItemPriceDis'];
      $Loc=$_POST['ItemImageLoc'];
      $cat=$_POST["ItemCategory"];

      $qry="select max(ItemID) as maxid from product_database ";
      $jd=0;
      $run=mysqli_query($conn,$qry);
      while ($rows=mysqli_fetch_array($run)){
            $jd=$rows[0];
      }

      $qry="Insert into product_database values ($jd+1,'$ItemName','$ItemDes','$ItemQ',$Price,$Dis,'$Loc','$cat')";
      if (mysqli_query($conn,$qry)==TRUE){
            echo '<script> alert("Menu Item Added Successful");</script>';
            header('refresh:0;url=adminMainPage.php');
      }
      else{
            echo '<script> alert("Please try again");</script>';
            header('refresh:0;url=adminMainPage.php');
      }
?>