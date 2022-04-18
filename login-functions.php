<?php

function check_login($conn){
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $query = "select * from userdatabase where id = '$id' limit 1";

        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return 1;
        }
    }
    //redirect to login
    else{
        return 0;
    }
    die;
}