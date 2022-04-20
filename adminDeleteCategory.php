<HTML>
      <form method="POST" action="adminRemCat.php">
            <div class="form-group">
            <label for="exampleInputName">Catgory ID</label>
                  <select name="abc" class="custom-select" id="inputGroupSelect03" >
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
            <button type="submit" class="btn btn-primary">Delete Category</button>
      </form>
</HTML>