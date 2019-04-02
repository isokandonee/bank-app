<?php 
session_start();
require "../controller/connect.php"; 
$id = $_SESSION['id'];
// $l = $_SESSION['lname'];
$fetch = mysqli_query($conn,"SELECT first_name,last_name,balance,account_number from user_tb left OUTER join user_account ON 
(user_tb.id = user_account.user_id) where id = $id");
$r = mysqli_fetch_array($fetch);
$f = $r['first_name'];
$l = $r['last_name'];
$fl = $f." ".$l; 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/obs.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Bank App</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text" style="color:orange;font-size:2em;">
                    Bank App
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="../pages/dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="../pages/transfer.php">
                        <i class="pe-7s-graph"></i>
                        <p>Transfer</p>
                    </a>
                </li>
                <li>
                    <a href="../pages/account.php">
                        <i class="pe-7s-user"></i>
                        <p>Account</p>
                    </a>
                </li>
                <li>
                <a href="../pages/statement.php">
                        <i class="pe-7s-user"></i>
                        <p>Statement of Account</p>
                    </a>
                </li>
                <li>
                    <a href="../pages/deposit.php">
                        <i class="pe-7s-user"></i>
                        <p>Deposit</p>
                    </a>
                </li>
                <li>
                    <a href="../pages/withdraw.php">
                        <i class="pe-7s-user"></i>
                        <p>Withdraw</p>
                    </a>
                </li>
                <li>
                    <a href="../controller/logout.php">
                        <i class="pe-7s-user"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
        <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php echo "<tr> <td>".$fl."</td></tr>"; ?></a>
                </div>
        <div class="collapse navbar-collapse">
            
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    
                                    <p>
                                    <!-- <i class="pe-7s-menu"></i> -->
										<b class="pe-7s-menu"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="../pages/user.php">Transfer</a></li>
                                <li><a href="../pages/account.php">Create Account</a></li>
                                <!-- <li><a href="#">Create current account</a></li> -->
                                <li><a href="../controller/logout.php">Log out</a></li>
                              </ul>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Withdraw</h4>
                            </div>
                            <span><?php
        if (isset($msg)) {
                # code...
                echo "<p class='text-warning' style='text-align:center'>$msg</p>";
            }
        ?></span>
                            <div class="content">
                                <form action="../controller/withdraw.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="text" class="form-control" name="amount" placeholder="Amount">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label></textarea>
                                            </div>
                                        </div>
                                    </div> -->
                                    
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="pass" placeholder="********">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="pass" placeholder="Password">
                                            </div>
                                        </div>
                                    </div> -->
                                    
                            <!-- </div> -->

                                    <button type="submit" id="but" class="btn btn-info btn-fill pull-right">Withdraw</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Contact us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                About us
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Mitchel</a>, all rights reserved.  
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

</html>
