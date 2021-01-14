<?php
include ('database.php');

//Check If from is submited

if (isset($_POST['submit'])){
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // set sime Zone
    date_default_timezone_set('Asia/Dhaka');
    $time = date('h:i:s a', time());

    if (!isset($user)||$user==''||!isset($message)||$message==''){
        $error = "FillUp Both Filed";
        header('location: index.php?error='.urldecode($error));
        exit();
    }else {
        $query = "INSERT INTO `shout`(`user`, `message`, `time`) VALUES ('$user','$message','$time')";
        if (!mysqli_query($con, $query)){
            die('Error: '.mysqli_error($con));
        }else{
            header('location: index.php');
            exit();
        }
    }

}