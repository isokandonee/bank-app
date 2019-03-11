<?php
session_start();
require 'connect.php';
$em = $_POST['email'];
$pa = sha1($_POST['password']);
$log = true;
$save = mysqli_query($conn,"select * from users where email ='$em' and password ='$pa'");
// $fetch = mysqli_query($conn,"SELECT * from user_registration where email = '$em'");
// $_SESSION['id'] = $r['id'];
while ($r = mysqli_fetch_array($save)) {
    $log = false;
    $_SESSION['email'] = $r['email'];
    $_SESSION['unames'] = $r['username'];
    $_SESSION['pass'] = $r['password'];
    $_SESSION['id'] = $r['id'];
    $_SESSION['passw'] = $pa;
}
if ($log) {
    $msg = 'Login failed! Invalid email or password';
    include 'log_in.php';
}
else{
    echo "<script>alert('Login successful')</script>";
    header('location:dashboard.php');
}
?>


