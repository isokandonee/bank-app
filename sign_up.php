<?php include 'layout.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body{
			background-color: lightgrey;
		}
		form{
			position: relative;
			top: -15px;
			border-radius: 5px;
			color: white;
		}
		
		.container{
            position: relative;
            padding: 20px;
            border-radius: 5px;
        }
	</style>
</head>
<body>

<div class="container">
	<?php
	require "connect.php";
		if(isset($msgs)){
			echo "<h2 style='red'>".$msgs."</h2>";
		}
		if(isset($msgt)){
			echo "<h2 style='red'>".$msgt."</h2>";
		}
	?>
			<form class="col-md-6 mx-auto shadow pt-4 pd-4" action="signup.php" method="POST" enctype="multipart/form-data">
				<h2>User Registration</h2>
					<div class="form-group">
						<label for="pwd">Full Name:</label>
						<input required type="text" name="fname" class="form-control" id="pwd">
					</div>
				<div class="form-group">
					<label for="usr">Username:</label>
					<input required type="text" name="uname" class="form-control" id="usr" name="username">
				</div>
				<div class="form-group">
					<label for="pwd">Email:</label>
					<input required type="email" name="email" class="form-control" id="pwd">
				</div>
				<div class="form-group">
					<label for="pwd">Telephone:</label>
					<input required type="text" name="phone" class="form-control" id="pwd">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input required type="password" name="pass" class="form-control" id="pwd">
				</div>
				<div class="form-group">
					<label for="pht">Upload Photo:</label>
					<input type="file" name="fileToUpload" id="fileToUpload">
				</div>
					<button type="submit" class="btn btn-primary">Sign up</button>
					<p>Signed up already? <a href="log_in.php">Log in</a></p>
			</form>
	</div>

</body>
</html>