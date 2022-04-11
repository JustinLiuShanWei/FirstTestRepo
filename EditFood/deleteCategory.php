<HTML>
<form method="POST" action="RemCat.php">
              <div class="form-group">
                  <label for="exampleInputName">Catgory ID</label>
                   <select name="abc" class="custom-select" id="inputGroupSelect03" >
                  <option selected>Choose...</option>
                  <?php
                        $con=mysqli_connect("localhost","root","","foodorderdb");
                        $qry="select * from menucategory_tbl";
                        $run=mysqli_query($con,$qry);
                        while ($rows=mysqli_fetch_array($run))
                        {
                              echo '<option value="'.$rows["Category"].'">'.$rows["CatDesc"].'</option>';
                        }
                  ?>
                  </select>
              </div>
              <button type="submit" class="btn btn-primary">Delete Category</button>
</form>
</HTML>