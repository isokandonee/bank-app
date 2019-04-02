<?php
session_start();
require "connect.php";
if(isset($_POST['pass'])){
$id = $_SESSION['id'];
$ac = sha1($_POST['pass']);
$am = $_POST['amount'];
$ttid = 1;
$ttide = 2;
$fetch = mysqli_query($conn,"select * from user_account where account_number = '$ac'");
$a = mysqli_fetch_array($fetch);
$ide = $a['user_id'];
$balances = $a['balance'];
$fetcher = mysqli_query($conn,"select * from user_account where user_id = '$id'");
$b = mysqli_fetch_array($fetcher);
$acc = $b['account_number'];
$balance = $b['balance'];
$bal = $balance - $am;
$bala = $balances + $am;
$log=false;
// echo "ttide ".$ttide." id ".$id." ide ".$ide." am ".$am;
// echo "ac".$ac;
// echo "acc".$acc;
if ($balance < $am) {
    $log = true;
    if ($log) {
        $msg='The amount you want to transfer is more than your current balance!';
        include '../pages/transfer.php';
    }
}
elseif ($ac == $acc) {
    $log = true;
    if ($log) {
        $msg='You cannot transfer to your own account!';
        include '../pages/transfer.php';
    }
}
else {
        $insert = mysqli_query($conn,"insert into transaction (transaction_type_id,source_id,destination_id,amount,created_at)
            values('$ttide','$id','$ide','$am',current_date())");
        $inserts = mysqli_query($conn,"insert into transaction (transaction_type_id,source_id,destination_id,amount,created_at)
            values('$ttid','$ide','$id','$am',current_date())");
        $update = mysqli_query($conn,"update user_account set balance = $bal, updated_at = current_date() where user_id = $id");
        $updates = mysqli_query($conn,"update user_account set balance = $bala, updated_at = current_date() where user_id = $ide");
        header('location:../pages/dashboard.php');
        echo "<script>alert('Transfer successful!')</script>";
    
  
    }

}
?>