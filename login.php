<?php 
include 'includes/a_config.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<?php include "includes/head-tag-contents.php"; ?>
</head>
<body>
<?php include "includes/design-top.php"; ?>
        <div class="container" id="main-container">
        <section class="testimonial py-5" id="testimonial">
            <div class="container">
                
            <div class="row ">
                <div class="col-md-4 py-5 bg-primary text-white text-center ">
                    <div class=" ">
                        <div class="card-body">
                            <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                            <h2 class="py-3">Login</h2>
                            <p>Please click the below button if you do not have an account yet.</p>
                            <a class="btn btn-success" href="index.php">Signup</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 py-5 border"><?php include 'controller/login.php';
        if (isset($msg)) {
                # code...
                echo "<p class='text-warning' style='text-align:center'>$msg</p>";
            }
        ?>
                    <h4 class="pb-4 text-center">Login here</h4>
                <form class="" action="controller/login.php" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input required placeholder="you@domain.com" type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input required placeholder="********" type="password" name="password" class="form-control">
                    </div>
                </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                
                </form>
                </div>
            </div>
        </section>
    </div>
        <?php include "includes/footer.php";?>
    </body>
    <script src="assets/js/index.js"></script>
    </html>