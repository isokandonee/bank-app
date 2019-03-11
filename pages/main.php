<?php
session_start();
require 'connect.php';
if(isset($_SESSION['unames'])){


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main Page</title>
    <link rel="stylesheet" type="text/css" href="res/bootstrap.min.css">
    <script type="text/javascript" src="res/jquery.js"></script>
	<script type="text/javascript" src="res/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <style>
        body{
            background-color: teal;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /* overflow: hidden; */
        }
        #big{
            width: 100%;
            background-color: aquamarine !important;
            color: blue !important;
        }
        #big li a{
            /* color: orange !important; */
            /* background: orange; */
            padding-left: 15px;
            margin-right: 15px;
        }
        #brand{
            font-size: 3em;
            font-weight: bold;
            color: orange !important;
        }
    </style>
</head>
<body>
<nav id="big" class="navbar navbar-expand-md bg-dark navbar-light">
<!-- Brand -->
<a id="brand" class="navbar-brand" href="#">Bank App</a>

<!-- Toggler/collapsibe Button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Navbar links -->
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item shadow">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link shadow" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link shadow" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link shadow" href='logout.php'>Log out</a>
    </li> 
  </ul>
</div> 
</nav>


</body>
</html>
<?php
}
else{
    header('location:loginh.php');
}
?>