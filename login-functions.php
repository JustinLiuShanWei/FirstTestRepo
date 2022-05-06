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
    else{
        return 0;
    }
    die;
}

function check_login_admin($conn){
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $query = "select * from userdatabase where id = '$id' limit 1";
        $query2 = "select admin from userdatabase where id='$id'";
        $result = mysqli_query($conn,$query);
        $result2 = mysqli_query($conn,$query2);
        if($result && mysqli_num_rows($result) > 0){
            if($result2==true){
                $user_data = mysqli_fetch_assoc($result);
                return 1;
            }
        }
    }
    //redirect to login
    else{
        return 0;
    }
    die;
}