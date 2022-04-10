<?php
    session_start();
    include ("db_connect.php");
    include ("login-functions.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        //POST SOMETHING
        $name = $_POST['fname'];
        $email = $_POST['femail'];
        $phone = $_POST['fphone'];
        $user_name = $_POST['fusername'];
        $password = $_POST['fpassword'];
        $passwordcon = $_POST['fpasswordcon'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !is_numeric($name) && $password==$passwordcon){
            $encrypted_pwd = md5($password);
            $query=  mysqli_query($conn,"Select * from userdatabase where username='$user_name' or email='$email'");
            $numrows=mysqli_num_rows($query); 
            if ($numrows==0){
                $query = "insert into userdatabase (id,name,email,phone,username,password) values ('','$name','$email','$phone','$user_name','$encrypted_pwd')";
                mysqli_query($conn,$query);
                header("Location: login.php");
                echo '<script>alert("Registration Successful!")</script>';
                sleep(3);
                die;
            }
            else{
                echo '<script>alert("Username/Email has been used! Please enter another email/username")</script>';
            }
        }
        else{
            echo '<script>alert("Please enter a valid information")</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/styleRegistration.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
    <?php include 'registration-navbar.php' ?>
    <?php include 'registration-footer.php' ?>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="registration.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fname" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="fusername" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="femail" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" name="fphone" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="fpassword" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="fpasswordcon" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
