<?php
require 'connect.php';
session_start();
session_unset();
header('location:log_in.php');
?>