<?php
session_start();
require 'connect.php';
$us = $_POST['username'];
$pa = sha1($_POST['password']);
$log=true;
$save=mysqli_query($conn,"select * from user_registration where username ='$us' and password ='$pa'");
$fetch = mysqli_query($conn,"SELECT * from user_registration where username = '$us'");
// $_SESSION['id'] = $r['id'];
while ($r=mysqli_fetch_array($save)) {
    $log=false;
    $_SESSION['unames']=$r['username'];
    $_SESSION['pass']=$r['password'];
    $_SESSION['id'] = $r['id'];
}
if ($log) {
    $msg='Login failed! Invalid username or password';
    include 'log_in.php';
}
else{
    echo "<script>alert('Login successful')</script>";
    header('location:dashboard.php');
}
?>


