<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bank App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/indexer.css">
    <script src="main.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="res/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="login-register.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
<script src="res/jquery.min.js"></script>
<script src="res/bootstrap.min.js"></script>
	<script src="login-register.js" type="text/javascript"></script>


<style>
        body{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: white;
            font-size:1.2em;
        }
        #title{
            background-color: rgba(255, 255, 255, 0.13);
            /* #943bea */
            /* opacity: 0.2; */
        }
        #title h1{
            font-size: 50px !important;
            /* text-align: center; */
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: gold;
        }
    </style>
</head>
<body>




<div class="menu"> <span></span> </div>
<nav id="nav">
		<ul class="main">
			<li><a href="sign_up.php">Register</a></li>
			<li><a href="log_in.php">Log in</a></li>
			<li><a href="#">Contact us</a></li>
			<li><a href="#">About us</a></li>
			<!-- <li><a target="_blank" href="https://www.instagram.com/ravi_singh_7/">Portfolio</a></li> -->
			<!-- <li><a target="_blank" href="https://500px.com/ravi7284007">Contact</a></li> -->
		</ul>
</nav>
<div class="overlay"></div>

<script>
$('.menu, .overlay').click(function () {
	$('.menu').toggleClass('clicked');

	$('#nav').toggleClass('show');

});
</script>

    <div id="title" class="jumbotron">
            <h1>Bank App</h1>
    </div>

</body>
</html>
