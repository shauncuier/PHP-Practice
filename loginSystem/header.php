<?php 
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LogInSystem</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav>
    <div class="wrapper">
        <a href=""><img src="" alt=""></a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="discover.php">About Us</a></li>
            <li><a href="blog.php">Blog</a></li>
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<li><a href='profile.php'>Profile</a></li>";
                echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                }
                else {
                echo "<li><a href='singup.php'>Sing Up</a></li>";
                echo "<li><a href='login.php'>Log In</a></li>";
                }
            ?>


        </ul>
    </div>
</nav>
<div class="index">
    <div class="wrapper">