<?php

require "connect.php";
if (isset($_POST['fname'])){
    $fn = $_POST['fname'];
    $ln = $_POST['lname'];
    $ph = $_POST['phone'];
    $pa1 = sha1($_POST['pass']);
    $pa2 = sha1($_POST['passw']);
    $em = $_POST['email'];
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $log = true;


// Check file size
if ($_FILES["fileToUpload"]["size"] > 8000000) {
   $msgs= "Sorry, your file is too large.";
   include "../index.php";

}
// Allow certain file formats
if($imageFileType !=="jpg" && $imageFileType !== "png" && $imageFileType !== "jpeg"
&& $imageFileType !== "gif" ) {
    $msgt ="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    include "../index.php";
}
if ($pa1 !== $pa2) {
        $msg='Password do not match';
        include '../index.php';
}
else{
 move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$insert = mysqli_query($conn,
"INSERT INTO users.user_tb (first_name,last_name,email,password,passport,phone,created_at) VALUES
('$fn','$ln','$em','$pa1','$target_file','$ph',current_date())");
        if($insert){
            echo "<script>alert('Registration successful!')</script>";header('location:../login.php');
        }
        else{header('location:../index.php');echo "<script>alert('Registration not successful!')</script>";}
    }

}else{
    $mss = "No field can be left empty";
}
?>