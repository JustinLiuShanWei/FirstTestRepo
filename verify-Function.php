<?php

function checkMembership($conn){
    $onGoingDates = "here";
    $membershipCheck = FALSE;
    $checkDate = "";
    $Expiry = FALSE;
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $query = "select membership_expiry from userdatabase where id = '$id' limit 1";
        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0){
            $dates = mysqli_fetch_assoc($result);
            foreach ($dates as $date) $checkDate = $date;
            $checkDateStr2Time = strtotime($checkDate);
            $today = date("Y-m-d");
            $timeStampToday = strtotime($today);
            $finalCheckDate = $checkDate;
            // echo "<script> alert('$checkDateStr2Time == $today');</script>";     Check Data Contain
            if ($checkDateStr2Time < $timeStampToday){
                $Expiry = TRUE;
            }
            else {
                $membershipCheck = TRUE;
            }
        }
    }
    return $membershipCheck;
}

function finalCheckDate($conn){
    $onGoingDates = "here";
    $membershipCheck = FALSE;
    $checkDate = "";
    $Expiry = FALSE;
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $query = "select membership_expiry from userdatabase where id = '$id' limit 1";
        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0){
            $dates = mysqli_fetch_assoc($result);
            foreach ($dates as $date) $checkDate = $date;
            $checkDateStr2Time = strtotime($checkDate);
            $today = date("Y-m-d");
            $timeStampToday = strtotime($today);
            $finalCheckDate = $checkDate;
        }
    }
    return $finalCheckDate;
}

function checkMembershipExpiry($conn){
    $onGoingDates = "here";
    $membershipCheck = FALSE;
    $checkDate = "";
    $Expiry = FALSE;
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $query = "select membership_expiry from userdatabase where id = '$id' limit 1";
        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0){
            $dates = mysqli_fetch_assoc($result);
            foreach ($dates as $date) $checkDate = $date;
            $checkDateStr2Time = strtotime($checkDate);
            $today = date("Y-m-d");
            $timeStampToday = strtotime($today);
            $finalCheckDate = $checkDate;
            // echo "<script> alert('$checkDateStr2Time == $today');</script>";     Check Data Contain
            if ($checkDateStr2Time < $timeStampToday){
                $Expiry = TRUE;
            }
            else {
                $membershipCheck = TRUE;
            }
        }
    }
    return $Expiry;
}


function checkMembershipExpiry2($conn,$id){
    $query = "select membership_expiry from userdatabase where id = '$id' limit 1";
    $result = mysqli_query($conn,$query);
    if($result && mysqli_num_rows($result) > 0 && $result!=null){
        $dates = mysqli_fetch_assoc($result);
        foreach ($dates as $date) $checkDate = $date;
        $checkDateStr2Time = strtotime($checkDate);
        $today = date("Y-m-d");
        $timeStampToday = strtotime($today);
        $finalCheckDate = $checkDate;
        // echo "<script> alert('$checkDateStr2Time == $today');</script>";     Check Data Contain
        if ($checkDateStr2Time < $timeStampToday){
            $Expiry = TRUE;
        }
        else {
            $membershipCheck = TRUE;
        }
    
    }
    return $Expiry;
}
