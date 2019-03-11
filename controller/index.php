<?php

require "connect.php";
if (isset($_POST['token'])) {
    if ($_POST['token'] == $_SESSION['token']) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $phone = $_POST['phone'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 8000000) {
            $msgs = "Sorry, your file is too large.";
            header("Location: ../index.php");
        }
        // // Allow certain file formats
        if ($imageFileType !== "jpg" && $imageFileType !== "png" && $imageFileType !== "jpeg"
            && $imageFileType !== "gif") {
            $msgt = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            header("Location: ../index.php");
        } else {
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            $insert = mysqli_query($conn, "INSERT INTO users (first_name,last_name,email,password,passport,phone) VALUES ('$firstname','$lastname','$email','$password','$target_file','$phone')");
            if ($insert) {
                echo "<script>alert('Registration successful!')</script>";
                // set sessions and login automatically
                header("Location: ../dashboard");
            } else {
                echo mysqli_error($conn);
            }
        }
    } else {
        header("Location: ../index.php");
    }
} else {
    header("Location: ../index.php");
}
