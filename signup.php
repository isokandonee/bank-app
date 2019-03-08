<?php
session_start;

require "connect.php";
$fn = $_POST['fname'];
$ph = $_POST['phone'];
$pa = sha1($_POST['pass']);
$em = $_POST['email'];
$us = $_POST['uname'];

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

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

else {
 move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$insert= mysqli_query($conn,"insert into user_registration(name,username,email,phone,password,passport) values('$fn','$us','$em','$ph','$pa','$target_file')");
        if($insert){
            echo "<script>alert('Registration successful!')</script>";
           header('location:log_in.php');
        }
  
          
     

}


?>