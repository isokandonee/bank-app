<?php
include 'layout.php';
?>
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
			<form class="col-md-6 mx-auto shadow pt-3 pd-4" action="signup.php" method="POST" enctype="multipart/form-data">
				<h2 style="text-align:center;">User Registration</h2><p>
	<?php
require "connect.php";
if (isset($msgs)) {
    echo "<h2  class='text-danger' style='text-align:center'>" . $msgs . "</h2>";
}
if (isset($msgt)) {
    echo "<h2  class='text-danger' style='text-align:center'>" . $msgt . "</h2>";
}
if (isset($msg)) {
    # code...
    echo "<p class='text-danger' style='text-align:center'>$msg</p>";
}
?></p>
					<div class="form-group">
						<label for="pwd">First Name:</label>
						<input required placeholder="Firstname" type="text" name="fname" class="form-control" id="pwd">
					</div>
				<div class="form-group">
					<label for="usr">Last Name:</label>
					<input required placeholder="Lastname" type="text" name="lname" class="form-control" id="usr">
				</div>
				<div class="form-group">
					<label for="pwd">Email:</label>
					<input required placeholder="you@domain.com" type="email" name="email" class="form-control" id="pwd">
				</div>
				<div class="form-group">
					<label for="pwd">Telephone:</label>
					<input required placeholder="+123456789012" type="text" name="phone" class="form-control" id="pwd">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input required placeholder="********" type="password" name="pass" class="form-control" id="pwd">
				</div>

				<div class="form-group">
					<label for="pwd">Confirm Password:</label>
					<input required placeholder="********" type="password" name="passw" class="form-control" id="pwd">
				</div>
				<div class="form-group">
					<label for="pht">Upload Photo:</label>
					<input required class="form-control-file" type="file" name="fileToUpload" id="pht">
				</div>
					<button type="submit" class="btn btn-primary">Sign up</button>
					<p>Signed up already? <a href="log_in.php">Log in</a></p>
			</form>
	</div>

</body>
</html>