<?php
session_start();
require "connect.php";
$id = $_SESSION['id'];
$ac = $_POST['ac_no'];
$am = $_POST['amount'];
$ttid = 1;
$ttide = 2;
$fetch = mysqli_query($conn,"select user_id,balance from user_account where account_number = '$ac'");
$a = mysqli_fetch_array($fetch);
$ide = $a['user_id'];
$balances = $a['balance'];
$fetcher = mysqli_query($conn,"select balance from user_account where user_id = '$id'");
$b = mysqli_fetch_array($fetcher);
$balance = $b['balance'];
$bal = $balance - $am;
$bala = $balances + $am;
$src = "source_id";
$dst = "destination_id";
$insert = mysqli_query($conn,"insert into transaction (transaction_type_id,$src,$dst,amount,created_at)
 values('$ttide','$id','$ide','$am',current_date()");
 $inserts = mysqli_query($conn,"insert into transaction (transaction_type_id,$src,$dst,amount,created_at)
  values('$ttid','$ide','$id','$am',current_date()");
 $update = mysqli_query($conn,"update user_account set balance = $bal where user_id = $id");
 $updates = mysqli_query($conn,"update user_account set balance = $bala where user_id = $ide");
 if (!($insert) && !($inserts)) {
    echo "<script>alert('Transfer not successful!')</script>";
    echo mysqli_error($conn);
    // header('location:dashboard.php');
}
// if ($am < $balance){
    
//     echo "<script>alert('The amount you want to transfer is more than your current balance!')</script>";
//     echo mysqli_error($conn);
// }
// if ($src === $dst){
    
//     echo "<script>alert('You cannot transfer to your own account!')</script>";
//     echo mysqli_error($conn);
// }
else {
        header('location:../pages/dashboard.php');
        echo "<script>alert('Transfer successful!')</script>";
    
  
}


?>
<script>
    var e = document.getElementById("but");
    if($src == $dst){
        e.preventDefault();
    }
</script>