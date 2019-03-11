<?php

require 'connect.php';
if (isset($_POST['token'])) {
    if ($_POST['token'] == $_SESSION['token']) {
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $save = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        if ($save) {
            while ($row = mysqli_fetch_array($save)) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['unames'] = $row['username'];
                $_SESSION['pass'] = $row['password'];
                $_SESSION['id'] = $row['id'];
            }
            if (count($row) > 0) {
                header("Location: ../dashboard");
            } else {
                die("handle does not exist here");
            }
        } else {
            header("Location : ../ssdsds.phps");
        }
    } else {
        header("Location : ../asdasd.phpe");
    }
} else {
    header("Location : ../34553.phpt");
}
