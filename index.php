<?php 
include 'includes/a_config.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<?php include "includes/head-tag-contents.php"; ?>
	
</head>

<?php include "includes/design-top.php";?>
<body>

<div class="container" id="main-container">
	<center class="testimonial py-5" id="testimonial">
	    <div class="container">
			
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                        <h2 class="py-3">Registration</h2>
                        <p>Please click the below button if you have an account already.</p>
                        <a class="btn btn-success" href="login.php">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border"><p>
	
                <h4 class="pb-4 text-center">Please fill with your details</h4><?php
	require "controller/connect.php";
		if(isset($msgs)){
			echo "<h2  class='text-danger' style='text-align:center'>".$msgs."</h2>";
		}
		if(isset($msgt)){
			echo "<h2  class='text-danger' style='text-align:center'>".$msgt."</h2>";
		}
		if (isset($msg)) {
                # code...
                echo "<p class='text-danger' style='text-align:center'>$msg</p>";
			}
			if (isset($mss)) {
                # code...
                echo "<p class='text-danger' style='text-align:center'>$mss</p>";
            }
	?></p>
			<form class="" action="controller/signup.php" method="POST" enctype="multipart/form-data">	
			<div class="form-row">
					<div class="form-group col-md-6">
						<input required placeholder="Firstname" type="text" name="fname" class="form-control">
					</div>
			
				<div class="form-group col-md-6">
					<input required placeholder="Lastname" type="text" name="lname" class="form-control">
				</div>
			</div>
            <div class="form-row">
				<div class="form-group col-md-6">
					<input required placeholder="you@domain.com" type="email" name="email" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<input required placeholder="+234-801-678-9012" type="text" name="phone" class="form-control">
				</div>
			</div>
            <div class="form-row">
				<div class="form-group col-md-6">
					<input required placeholder="********" type="password" name="pass" class="form-control">
				</div>
				
				<div class="form-group col-md-6">
					<input required placeholder="********" type="password" name="passw" class="form-control">
				</div>
			</div>
            <div class="form-row">
				<div class="form-group col-md-12">
					<input required class="form-control" type="file" name="fileToUpload">
				</div>
			</div>
					<button type="submit" class="btn btn-primary btn-block">Sign up</button>
					
			</form>
			</div>
		</div>
	</center>
</div>
	<?php include "includes/footer.php";?>
</body>
<script src="assets/js/index.js"></script>
</html>