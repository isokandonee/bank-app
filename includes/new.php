
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
                    <a class="navbar-brand" href="#"><?php echo "<tr> <td></td></tr>"; ?></a>
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
