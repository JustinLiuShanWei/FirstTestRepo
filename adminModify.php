<HTML>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<BODY>
<div class="container"  style="background-color:#E6D3F2;">
      <div class="row" style="height: 5%; background-color:#D193F7; padding:40px;">
    <div class="col-12"></div>
    
      </div>
      <div class="row" style="height: 5%;background-color:#480673; color:#ffffff;">
    <div class="col-8"><h3>Pinocone Food Catering Admin Page</h3></div>
    <div class="col-2"><a href="HomePage.html">Log In to Order</a></div>
      <div class="col-2"><a href="adminLogin.html">Admin Login</a></div>
      </div>
      <div class="row" style="height: 20%; ">
    <div class="col-12"></div>
    
      </div>

  <span class="align-middle" >
    <div class="row">
    <div class="col">
      
    </div>
      <?php
      include ("db_connect.php");
      $id=$_GET["key"];
      $qry1="select * from product_database where ItemID=$id";
      $qry2="select ItemCategory from product_database where ItemID=$id";
      $run=mysqli_query($conn,$qry1);
      $catID=mysqli_query($conn,$qry2);
      while ($rows=mysqli_fetch_array($run))
      {
      ?>
      
    <div class="colcol-lg-2" style="background-color:#ffffff; padding:40px; border-color:#230237; border-style: solid;border-width: thin;">
        <form method="POST" action=<?php echo'adminUpdateItem.php?key='.$id;?>>
            <div class="form-group">
                <label for="exampleInputName">Item Name</label>
                <input type="string" class="form-control" id="ItemName" placeholder="Item Name" name="ItemName" value=<?php echo $rows['ItemName'];?>>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Item Description</label>
                <input type="string" class="form-control" id="ItemDesc" aria-describedby="emailHelp" name="ItemDesc" value=<?php echo $rows['ItemDesc'];?>>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Item Quantity</label>
                <input type="string" class="form-control" id="ItemQuantity" placeholder="Quantity" name="ItemQuantity" value=<?php echo $rows['ItemQuantity'];?>>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Price</label>
                <input type="string" class="form-control" id="ItemPrice" placeholder="Price" name="ItemPrice" value=<?php echo $rows['ItemPrice'];?>>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Discount</label>
                <input type="string" class="form-control" id="ItemPriceDis" placeholder="Discount" name="ItemPriceDis" value=<?php echo $rows['ItemPriceDis'];?>>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Item Image Location</label>
                <input type="string" class="form-control" id="ItemImageLoc" placeholder="Image Location" name="ItemImageLoc" value=<?php echo $rows['ItemImageLoc'];?>>
            </div>
            <div class="form-group">
            <label for="exampleInputName">Catgory ID</label>
            <select name="abc" class="custom-select" id="inputGroupSelect03">
                <option selected>Choose...</option>
                <?php
                    include ("db_connect.php");
                    $qry="select * from product_category_extension";
                    $run=mysqli_query($conn,$qry);
                    while ($rows=mysqli_fetch_array($run)){
                        echo '<option value="'.$rows["Category"].'">'.$rows["CatDesc"].'</option>';
                    }
                ?>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Item</button>
        </form>
    </div>
      <?php }?>
    <div class="col -md-auto">
      
    </div>
  </div>
  </span>
  <div class="row" style="height: 20%; ">
    <div class="col-12"></div>
    
      </div>
</div>
</BODY>
</HTML>