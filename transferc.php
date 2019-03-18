<?php
session_start();
require "connect.php";
// $un = $_SESSION['unames'];
$id = $_SESSION['id'];
// for user_account


$ac = $_POST['ac_no'];
// $cu = $_POST['name'];
// $no = mt_rand();
$da = date('j F Y h:i:s');
// for user_transaction
$cr = $_POST['amount'];
$tra = mt_rand(100000,999999);
$de = 0;
$fetcha = mysqli_query($conn,"select id from user_account where account_no = '$ac'");
$a = mysqli_fetch_array($fetcha);
$ide = $a['id'];
$fetchab = mysqli_query($conn,"select account_no from user_account where id = '$id'");
$ab = mysqli_fetch_array($fetchab);
$accnt = $ab['account_no'];
$insert = mysqli_query($conn,"insert into transaction (transaction_type_id,source_id,destination_id,amount,created_at)
 values('$ttid','$id','$id','$am','$date')");
 if (!$inserts) {
    # code...
    // echo "<script>alert('Account creations not successful!')</script>";
    echo mysqli_error($conn);
    // header('location:dashboard.php');
}
if (!$inserts) {
    # code...
    echo "<script>alert('Transfer not successful!')</script>";
    echo mysqli_error($conn);
    // header('location:account.php');
}
else {
           header('location:dashboard.php');
            echo "<script>alert('Transfer successful!')</script>";
    
  
}


?>