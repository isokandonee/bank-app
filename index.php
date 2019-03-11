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
                        <h2 class="py-3">Registration</h2>
                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.

</p>
<a class="btn btn-success" href="login.php">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <form method="post" action="controller/index.php" autocomplete="off" id="myForm"enctype="multipart/form-data">
				<input type="hidden" name="token" value="sdkajsdaksjdklasjdaklsdjalkjs938092qpwoalsdalsdasdasd">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="firstname" name="firstname" placeholder="Firstname" class="form-control" type="text"/>
                        </div>
                        <div class="form-group col-md-6">
                          <input id="lastname" name="lastname" placeholder="Lastname" class="form-control" type="text"/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off"/>
                        </div>
                        <div class="form-group col-md-6">
                          <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"/>
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="password" id="password" name="password" placeholder="" class="form-control"/>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" id="cpassword" name="cpassword" placeholder="" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                    		<input accept="image/*" type="file" name="fileToUpload" class="form-control" id=""/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="checkbox" value="" id="tac" required="required">
                                  <label class="form-check-label" for="invalidCheck2">
                                    <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                                  </label>
                                </div>
                              </div>

                          </div>
                    </div>

                    <div class="form-row">
                        <button name="submitForm" id="submitForm" type="button" class="btn btn-danger">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</div>

<?php include "includes/footer.php";?>
</body>
<script src="script/index.js"></script>
</html>