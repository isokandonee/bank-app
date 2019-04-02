<?php
session_start();
require "connect.php";
if(isset($_POST['amount']) AND isset($_POST['ac_no'])){
$id = $_SESSION['id'];
$ac = $_POST['ac_no'];
$fetch = mysqli_query($conn,"SELECT * from user_tb full outer join user_account using (id) where account_number = '$ac'");
$r = mysqli_fetch_array($fetch);
$ide = $r['id'];
$ttid = 2;
$am = $_POST['amount'];
 $st = 1;
$insert = mysqli_query($conn,"insert into transaction (transaction_type_id,source_id,destination_id,amount,created_at)
 values('$ttid','$id','$ide','$am',current_date())");
 $update = mysqli_query($conn,"update user_account (user_id,account_type_id,balance,status_id,created_at)
 values('$ide','$ac','$am','$st',current_date()) where account_number = '$ac'");
if (!$insert && !$update) {
    # code...
    echo "<script>alert('Deposit not successful!')</script>";
    echo mysqli_error($conn);
    // echo "$id"; // header('location:account.php');
    }
else {
           header('location:../pages/dashboard.php');
            echo "<script>alert('Deposit successful!')</script>";
    }

}
?>