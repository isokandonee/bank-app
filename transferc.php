<?php
session_start();
require "connect.php";
// for user_account
$fetch = mysqli_query($conn,"SELECT * from user_registration");
$r = mysqli_fetch_array($fetch);
$id = $r['id'];

$ac = $_POST['ac_no'];
$cu = $_POST['name'];
$no = mt_rand();
$da = date('j F Y h:i:s');
// for user_transaction
$am = $_POST['amount'];
$tra = mt_rand(100000,999999);
$de = 0;
// $id = mt_rand(1,10);
// $r = mysqli_fetch_array($fetch);
// $id = $r['id'];
$me= mysqli_query($conn,"insert into user_account (account_no,date,savings,current,id) values('$no','$da','$sa','$cu','$id')");
$inserts = mysqli_query($conn,"insert into user_transaction (transaction_id,transaction_date,credit,debit,account_no) values('$tra','$da','$am','$de','$no')");
// if($conn){
//     echo 'connected';
// }
// else{
//     echo mysqli_error($conn);
// }

if (!$me) {
    # code...
    // echo "<script>alert('Account creations not successful!')</script>";
    echo mysqli_error($conn);
    // header('location:dashboard.php');
}
if (!$inserts) {
    # code...
    echo "<script>alert('Account creation not successful!')</script>";
    echo mysqli_error($conn);
    // header('location:account.php');
}
else {
           header('location:dashboard.php');
            echo "<script>alert('Account creation successful!')</script>";
    
  
}


?>