<?php
    session_start();
    include ("db_connect.php");
    include ("functions.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        //POST SOMETHING
        $user_name = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //read from database
            $query = "select * from userdatabase where username = '$user_name' limit 1";
            $result = mysqli_query($conn,$query);

            if($result && mysqli_num_rows($result)>0){
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password']==$password){
                    $_SESSION['user_id'] = $user_data['id'];
                    echo "Login Sucessfull";
                    die;
                }
            }
            echo '<script>alert("Wrong username/password")</script>';
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
                <h2>Login</h2>
                <form action="login.php" method="POST">
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="username">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="password">
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Login" name="submit">
                    </div>
                    <div class="inputBx">
                        <p>Don't have an account? <a href="registration.php">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>