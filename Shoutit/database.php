<?php
$con = mysqli_connect("localhost","root","","shoutit");

//test

if(mysqli_connect_errno()){
    echo "Filed to connect MySQL".mysqli_connect_error();
}