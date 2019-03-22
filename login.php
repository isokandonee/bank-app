<?php 
// include 'controller/layout.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/obs.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/indexer.css">
    <script src="assets/js/main.js"></script>
<!------ Include the above in your HEAD tag ---------->

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
    
<style>
        body{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: white;
            font-size:1.2em;
            background-color: powderblue;
        }
        .container{
            position: relative;
            top: 200px;
            padding: 20px;
            border-radius: 5px;
        }
        #signup{
            position: relative;
            left: 80px;
            bottom: 38px;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top:-100px">
        <?php
        if (isset($msg)) {
                # code...
                echo "<p class='text-warning' style='text-align:center'>$msg</p>";
            }
        ?>
        <form class="col-md-6 mx-auto shadow pt-4 pd-4" action="controller/login.php" method="POST">
            <div class="form-group">
                <label for="usr">Email:</label>
                <input type="text" required  class="form-control" id="usr" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" required  class="form-control" id="pwd" name="password">
            </div>
                <button type="submit" class="btn btn-primary">Log in</button>
                <p>Not yet registered? <a href="index.php">Sign up</a></p>
                
        </form>
    </div>
    
</div>


</body>
</html>