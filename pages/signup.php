<?php

require "connect.php";
// if(isset($_POST['submit'])){

    $fn = $_POST['fname'];
    $ph = $_POST['phone'];
    $pa1 = sha1($_POST['pass']);
    $pa2 = sha1($_POST['passw']);
    $em = $_POST['email'];
    $ln = $_POST['lname'];
    $crdt = date('j F Y h:i:s');
    $updt = date('j F Y h:i:s');
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $log = true;

// }
// Check file size
if ($_FILES["fileToUpload"]["size"] > 8000000) {
   $msgs= "Sorry, your file is too large.";
   include "sign_up.php";

}
// Allow certain file formats
if($imageFileType !=="jpg" && $imageFileType !== "png" && $imageFileType !== "jpeg"
&& $imageFileType !== "gif" ) {
    $msgt ="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    include "sign_up.php";
}
if ($pa1 !== $pa2) {
    $log = false;
    if ($log) {
        $msg='Password do not match';
        include 'sign_up.php';
    }
}

else {
 move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$insert= mysqli_query($conn,"insert into users (first_name,last_name,email,password,passport,phone,created_at,updated_at) values('$fn','$ln','$em','$pa1','$target_file'),'$ph','$crdt','$updt'");
        if($insert){
            echo "<script>alert('Registration successful!')</script>";
           header('location:log_in.php');
        }
  
          
     

}


?>