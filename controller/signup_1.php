<?php 
include "connect.php";
if (isset($_POST['register'])) {
    # code...
    $fn = $_POST['fname'];
    $ln = $_POST['lname'];
    $ph = $_POST['phone'];
    $pa1 = sha1($_POST['pass']);
    $pa2 = sha1($_POST['passw']);
    $em = $_POST['email'];
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $errors = [];

    // ensure that form fields are filled properly
    if (empty($fn)) {
        # code...
        array_push($errors, "First name is required");
    }
    if (empty($ln)) {
        # code...
        array_push($errors, "Last name is required");
    }
    if (empty($ph)) {
        # code...
        array_push($errors, "Phone number is required");
    }
    if (empty($em)) {
        # code...
        array_push($errors, "Email is required");
    }
    if (empty($pa1)) {
        # code...
        array_push($errors, "Password is required");
    }
    if ($pa1 != $pa2) {
        # code...
        array_push($errors, "The two passwords do not match");
    }
    if (empty($target_file)) {
        # code...
        array_push($errors, "Passport is required");
    }
    if ($_FILES["fileToUpload"]["size"] > 8000000) {
        array_push($errors, "Sorry, your file is too large");
     
     }
     if($imageFileType !=="jpg" && $imageFileType !== "png" && $imageFileType !== "jpeg"
        && $imageFileType !== "gif" ) {
        array_push($errors, "Sorry, only JPG, JPEG, PNG & GIF files are allowed");
}
    if (count($errors) == 0){
        $sql = "INSERT INTO users.user_tb (first_name,last_name,email,password,passport,phone,created_at) VALUES
        ('$fn','$ln','$em','$pa1','$target_file','$ph',current_date())"; 
        mysqli_query($conn, $sql);
        if($insert){
            echo "<script>alert('Registration successful!')</script>";header('location:../login.php');
        }
    }
}
?>