<?php
session_start();
require "connect.php";
$ln = $_SESSION['lname'];
// $l = $_SESSION['lname'];
// $fetcha = mysqli_query($conn,"SELECT user.id,first_name,last_name,balance,account_number from user_tb left OUTER join user_account ON 
// (user_tb.id = user_account.user_id) having last_name like '$ln'");
// $fetch = mysqli_query($conn,"SELECT user_tb.id from user_tb left OUTER join user_account ON 
// (user_tb.id = user_account.user_id) left outer join transaction on (user_tb.id = transaction.source_id) having last_name like '$ln'");
$fetch = mysqli_query($conn,"SELECT id from user_tb where last_name like '$ln'");
$r = mysqli_fetch_array($fetch);
$id = $r['id'];
$ac = $_POST['ac_type'];
$ttid = 2;
$am = $_POST['amount'];
$ac_no = rand(10000000,99999999);
$date = date('j F Y h:i:s');
 $st = 1;
//  $accn = rand();
// $me= mysqli_query($conn,"insert into user_account (account_no,date,savings,current,id) values('$no','$da','$sa','$cu','$id')");
$insert = mysqli_query($conn,"insert into transaction (transaction_type_id,source_id,destination_id,amount,created_at)
 values('$ttid','$id','$id','$am','$date')");
 $inserts = mysqli_query($conn,"insert into user_account (user_id,account_type_id,account_number,balance,status_id,created_at,updated_at)
 values('$id','$ac','$ac_no','$am','$st','$date','$date')");
//  echo mysqli_error($conn);
// if($conn){
//     echo 'connected';
// }
// else{
//     echo mysqli_error($conn);
// }

// if (!$me) {
    # code...
    // echo "<script>alert('Account creations not successful!')</script>";
    // echo mysqli_error($conn);
    // header('location:dashboard.php');
// }
if (!$insert) {
    # code...
    echo "<script>alert('Account creation not successful!')</script>";
    echo mysqli_error($conn);
    // echo "$id";

    // header('location:account.php');
}
if (!$inserts) {
    # code...
    echo "<script>alert('Account creation not successful!')</script>";
    echo mysqli_error($conn);
    // echo "$id";

    // header('location:account.php');
}
else {
           header('location:dashboard.php');
            echo "<script>alert('Account creation successful!')</script>";
    
  
}


?>