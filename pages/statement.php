<?php 
session_start();
require "../controller/connect.php"; 
$id = $_SESSION['id'];
$fetch = mysqli_query($conn,"SELECT * from user_tb left OUTER join user_account ON 
(user_tb.id = user_account.user_id) where id = '$id'");
$r = mysqli_fetch_array($fetch);
$f = $r['first_name'];
$l = $r['last_name'];
$fl = $f." ".$l; 
$fetcht = mysqli_query($conn,"SELECT user_tb.id,first_name,last_name,source_id,destination_id,transaction_type_id,transaction.created_at,amount FROM user_tb right outer join transaction using (id) where source_id or destination_id = $id");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/obs.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <style> body{
        
    }</style>

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

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text text-warning" style="font-size:2em;">
                    Bank App
                </a>
            </div>

            <ul class="nav">
                <li class="active">
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
                                <li><a href="../pages/user.php">User Profile</a></li>
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
                    <div class="col-md-10">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Account Statement</h4>
                                <!-- <p class="category">Last Performance</p> -->
                            </div><hr>
                            <div class="content"><div class="table-responsive-sm"><p class="text-info">
                                <!-- <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div> -->
                                <?php
                                    echo "<table class='table text-center table-striped table-bordered text-info'><tr><th>Id</th><th>Date</th><th>Type</th><th>Amount</th>
                                    <th>Source</th><th>Destination</th></tr>";
                                    ?>
                                <?php
                                    $i=0; while($t = mysqli_fetch_array($fetcht)){
                                        $i++;
                                    if($m=$t['source_id']){$fetchm = mysqli_query($conn,"SELECT first_name,last_name from user_tb where id = '$m'");
                                       $me = mysqli_fetch_array($fetchm);
                                      $mi =  $me['last_name'];
                                      $mis =  $me['first_name'];
                                       $q = $mis." ".$mi;
                                    }
                                    if($mm=$t['destination_id']){$fetchm = mysqli_query($conn,"SELECT first_name,last_name from user_tb where id = '$mm'");
                                        $mee = mysqli_fetch_array($fetchm);
                                       $mih =  $mee['last_name'];
                                       $mihs =  $mee['first_name'];
                                        $qe = $mihs." ".$mih;
                                     }
                                    $cr_de = $t['transaction_type_id'];$cre = 0;if($cr_de == 1){$cre="Debit";}else{$cre="Credit";}
                                    echo "<tr><td>".$i."</td> <td>".$t['created_at']."</td><td>".$cre."</td><td>".$t['amount']."</td><td>".$q."</td><td>".$qe."</td></tr>";} ?>
                                    <?php echo "</table>" ?>
                                    </p></div>
                            </div>
                            <!-- <button class="btn btn-fill btn-primary px-5">Print Account Statement</button> -->
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
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Mitchel</a>, all rights reserved
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
