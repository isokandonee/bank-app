<?php include "includes/a_config.php";?>
<!DOCTYPE html>
<html>
<head>
	<?php include "includes/head-tag-contents.php";?>
</head>
<body>

<?php include "includes/navigation.php";?>

<div class="container" id="main-content">

<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
<a class="btn btn-success" href="index.php">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Login Here</h4>
                <form method="post" action="controller/login.php" autocomplete="off" id="myForm"enctype="multipart/form-data">
				<input type="hidden" name="token" value="sdkajsdaksjdklasjdaklsdjalkjs938092qpwoalsdalsdasdasd">

                    <div class="form-row">
                        <div class="form-group col-md-12">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off"/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="password" id="password" name="password" placeholder="" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-row">
                        <button name="submitForm" id="submitForm" type="button" class="btn btn-danger">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</div>

<?php include "includes/footer.php";?>
</body>
<script src="script/index2.js"></script>
</html>