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
// $id = mt_rand(1,10);
// $r = mysqli_fetch_array($fetch);
// $id = $r['id'];
$fetcha = mysqli_query($conn,"select id from user_account where account_no = '$ac'");
$a = mysqli_fetch_array($fetcha);
$ide = $a['id'];
// $fetch = mysqli_query($conn,"SELECT name from user_registration where id = '$ide'");
// $r = mysqli_fetch_array($fetch);
// $na = $r['name'];
$fetchab = mysqli_query($conn,"select account_no from user_account where id = '$id'");
$ab = mysqli_fetch_array($fetchab);
$accnt = $ab['account_no'];
// $fetchi = mysqli_query($conn,"select credit,debit from user_transaction where account_no = '$accnt'");
// $i = mysqli_fetch_array($fetchi);
// $cre = $a['credit'];
// $deb = $a['debit'];
// $crdb = $cre - $de;
$inserts = mysqli_query($conn,"insert into user_transaction (transaction_id,transaction_date,credit,debit,account_no) values('$tra','$da','$de','$cr','$accnt') where account_no = '$accnt' ");
$insertss = mysqli_query($conn,"insert into user_transaction (transaction_id,transaction_date,credit,debit,account_no) values('$tra','$da','$cr','$de','$ac') where account_no = '$ac' ");

// $inset = mysqli_query($conn,"INSERT INTO (SELECT transaction_id,transaction_date,credit,debit,account_no FROM   user_transaction WHERE  account_no = '$accnt') VALUES ('$tra','$da','$de','$cr','$accnt')");
// $insets = mysqli_query($conn,"UPDATE user_transaction SET credit = '$crdb', debit = '$de' WHERE account_no = '$accnt'");
// $inst = mysqli_query($conn,"INSERT INTO (SELECT transaction_id,transaction_date,credit,debit,account_no FROM   user_transaction WHERE  account_no = '$ac') VALUES ('$tra','$da','$cr','$de','$ac')");
// if($conn){
//     echo 'connected';
// }
// else{
//     echo mysqli_error($conn);
// }

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