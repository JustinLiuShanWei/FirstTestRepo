<html>
    <form method="POST" action="emailMembershipSystem.php">
        <div class="form-group">
        <label for="exampleInputName">Username</label>
                <select name="abc" class="custom-select" id="inputGroupSelect03" >
        <option selected>Choose...</option>
        <?php
            include ("db_connect.php");
            $currentDate = date("Y-m-d");
            $qry="select * from userdatabase where membership_expiry < '$currentDate'";
            echo "<script> alert('$qry');</script>";
            $run=mysqli_query($conn,$qry);
            while ($rows=mysqli_fetch_array($run)){
                echo '<option value="all">******ALL USER*******</option>';
                echo '<option value="'.$rows["id"].'">'.$rows["username"].'</option>';
            }
        ?>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Send Email</button>
    </form>
</html>