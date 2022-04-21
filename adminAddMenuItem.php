<HTML>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<BODY>
    <form method="POST" Action="
    .php">
        <div class="form-row align-items-center">
            <div class="col-auto my-1">
            <label for="exampleInputName">Select Food category </label>
                <select class="custom-select mr-sm-2" name="ItemCategory">
                    <option selected>Choose...</option>
                    <?php
                        include ("db_connect.php");
                        $qry="select Category, CatDesc from product_category_extension";
                        $run=mysqli_query($conn,$qry);
                        while ($rows=mysqli_fetch_array($run)){
                            echo "<option value=".$rows['Category'].">".$rows['CatDesc']."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputName">Add Food Item </label>
            <input type="string" class="form-control" id="ItemName" name="ItemName"  placeholder="New Food Item">
        </div>
        <div class="form-group">
            <label for="exampleInputName">Food Description</label>
            <input type="string" class="form-control" id="ItemDesc" name="ItemDesc"  placeholder="Item Description">
        </div>
        <div class="form-group">
            <label for="exampleInputName">Food Quantity</label>
            <input type="string" class="form-control" id="ItemQuantity" name="ItemQuantity"  placeholder="Item Quantity">
        </div>
        <div class="form-group">
            <label for="exampleInputName">Price</label>
            <input type="string" class="form-control" id="ItemPrice" name="ItemPrice"  placeholder="Price">
        </div>
        <div class="form-group">
            <label for="exampleInputName">Membership Discount</label>
            <input type="string" class="form-control" id="ItemPriceDis" name="ItemPriceDis"  placeholder="Discount">
        </div>
        <div class="form-group">
            <label for="exampleInputName">Image Location</label>
            <input type="string" class="form-control" id="ItemImageLoc" name="ItemImageLoc"  placeholder="Location">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</BODY>
</HTML>