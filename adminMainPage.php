<?php
  session_start();
  include ("db_connect.php");
  include ("login-functions.php");
  $loginst = check_login_admin($conn);

  if($loginst!=1){
    echo "<script> alert('Not Login. Please Login!');</script>";
    echo "<script> window.location='login.php';</script>";
  }
?>


<HTML>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#newCat").click(function(){
        $("#contents").load("adminAddCategory.php");
    });
    $("#DelCat").click(function(){
        $("#contents").load("adminDeleteCategory.php");
    });
    $("#newItem").click(function(){
        $("#contents").load("adminAddMenuItem.php");
    });
    $("#ModifyItem").click(function(){
        $("#contents").load("adminModifyItem.php");
    });
});
</script>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<BODY>
<div class="container"  style="background-color:#48404d;">
      <div class="row" style="height: 5%; background-color:#D193F7; padding:40px;">
    <div class="col-12"></div>
    
      </div>
    <div class="row" style="height: 5%;background-color:#480673; color:#ffffff;">
      <div class="col-10"><h3>Pinocone Food Catering Admin Page</h3></div>
      <div class="col-2"><a href="adminLogout.php">Log Out <?php echo $_SESSION['adminName'];?></a></div>
    </div>
      
    <div class="row" style="margin:25px;height:90%;">
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
            <div class="col-4" style="background-color:#ffffff; padding:40px; border-color:#230237; margin:20px;"></div>
            <ul class="list-group">
            <div class="list-group-item list-group-item-info"><a id="newCat" href="#"> Create a Food Category</a></div>
            <div class="list-group-item list-group-item-info"><a id="DelCat" href="#"> Delete a Food Category</a></div>
            <div class="list-group-item list-group-item-info"><a id="newItem" href="#"> Add a Food Item</a></div>
            <div class="list-group-item list-group-item-info"><a id="ModifyItem" href="#"> Modify a Food Item</a></div>
            </div>
            
            <div class="col-8 shadow p-3 mb-5 bg-white rounded">
            <div class="col-8" id="contents" style="background-color:#ffffff; padding:40px; border-color:#230237; margin:20px;">
            </div>
            </div>
            
        </div>
      </div>
</div>
</BODY>
</HTML>