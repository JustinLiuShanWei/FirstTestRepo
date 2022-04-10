<?php
    session_start();
    include ("db_connect.php");
    include ("functions.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        //POST SOMETHING
        $user_name = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            $query=  mysqli_query($conn,"Select * from userdatabase where username='$user_name'");
            $numrows=mysqli_num_rows($query); 
            if ($numrows==0){
                $query = "insert into userdatabase (id,username,password) values ('','$user_name','$password')";
                mysqli_query($conn,$query);
                header("Location: login.php");
                echo '<script>alert("Registration Successful!")</script>';
                sleep(3);
                die;
            }
            else{
                echo '<script>alert("Username has been used! Please enter another username")</script>';
            }
        }
        else{
            echo '<script>alert("Please enter a valid information")</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'Include/header.php'; ?>
</head>
<html>
<body>
   <section>
        <div class="imgBx">
            <img src="images/loginFoodBackground.jpg" alt="loginBG">
        </div>
        <div class="loginContentBx">
            <div class="formBx">
                <h2>Registration</h2>
                <form action="registration.php" method="POST">
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="username">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="password">
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Sign Up" name="submit">
                    </div>
                    <div class="inputBx">
                        <p>Have an account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>