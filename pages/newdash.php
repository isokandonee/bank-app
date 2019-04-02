<?php 
session_start();
require "../controller/connect.php";
// include "../includes/a_config.php";
$id = $_SESSION['id'];
$fetch = mysqli_query($conn,"SELECT * from user_tb left OUTER join user_account ON 
(user_tb.id = user_account.user_id) where id = $id");
$r = mysqli_fetch_array($fetch);
$f = $r['first_name'];
$l = $r['last_name'];
$fl = $f." ".$l;
?>
<!doctype html>
<html lang="en">
<head>
<?php include "../includes/head-tag-contents.php";?>
</head>
<body>
<?php include "../includes/design-top.php";?>

<div class="container">

        <nav class="navbar navbar-expand-sm navbar-fixed">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Transactions
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../pages/dashboard.php">Dashboard</a>
                        <a class="dropdown-item" href="../pages/account.php">Account</a>
                        <a class="dropdown-item" href="../pages/transfer.php">Transfer</a>
                        <a class="dropdown-item" href="../pages/statement.php">Account statement</a>
                        <a class="dropdown-item" href="../pages/transfer.php">Log out</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="content">
            <div class="container-fluid">
                    <h6 class="h1 text-primary"  href="#">Welcome! <?php echo "<tr> <td>".$fl."</td></tr>"; ?></h6>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Account No</h4>
                                <!-- <p class="category">Last Performance</p> -->
                            </div><hr>
                            <div class="content">
                                <!-- <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div> -->
                                <b style="font-size:3.5em;"><?php echo "<tr> <td>".$r['account_number']."</td></tr>"; ?></b>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Account Balance</h4>
                                <!-- <i class="divider"></i> -->
                            </div><hr>
                            <div class="content">
                                <div class="simple-text text-success">
                                    <b style="font-size:3.5em;">#<?php echo "<tr> <td>".$r['balance']."</td></tr>"; ?></b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                
            </div>
        </div>
</div>


</body>
</html>
