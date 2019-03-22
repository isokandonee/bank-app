<?php
session_start();
require 'connect.php';
$em = $_POST['email'];
$pa = sha1($_POST['password']);
$log = true;
$save = mysqli_query($conn,"select * from user_tb where email ='$em' and password ='$pa'");
while ($r = mysqli_fetch_array($save)) {
    $log = false;
    $_SESSION['email'] = $r['email'];
    $_SESSION['lname'] = $r['last_name'];
    $_SESSION['pass'] = $r['password'];
    $_SESSION['id'] = $r['id'];
    $_SESSION['passw'] = $pa;
}
if ($log) {
    $msg = 'Login failed! Invalid email or password';
    include '../login.php';
}
else{
    echo "<script>alert('Login successful')</script>";
    header('location:../pages/dashboard.php');
}
?>


