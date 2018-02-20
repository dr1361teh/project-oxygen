<?php

?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title><?php if(isset($title)){ echo $title.' VATFRANCE'; } else { echo 'VATFRANCE'; } ?></title>
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/revolution-slider/css/settings.css" rel="stylesheet">
		<link href="assets/css/global.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/skin.less" rel="stylesheet/less">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
<header id="header">
				<div class="container">
					<div class="row primary-header">
						<a href="index.php" class="col-xs-12 col-sm-2 brand" title="Welcome to VATFRANCE"><img src="assets/img/VATFRANCE.PNG" alt="VATFRANCE"></a>
						<div class="social-links col-xs-12 col-sm-10">
							<a href="volunteer.php" class="btn btn-default btn-volunteer">User Login</a>
							<ul class="social-icons hidden-xs">
								<li>
									<a href="" target="_blank">FR <i class="fa fa-flag"></i></a>
								</li>
								<li>
									<a href="" target="_blank">EN <i class="fa fa-flag"></i></a>
								</li>

							</ul>
						</div>
					</div>
				</div>
				<div class="navbar navbar-default" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav>
							<ul class="nav navbar-nav">
								<li class="active">
									<a href="javascript:;"  data-toggle="dropdown"  class="submenu-icon">Home <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="">About Us</a>
											</li>
											<li>
												<a href="">Join VATSIM</a>
											</li>
											<li>
												<a href="">Join VATFRANCE</a>
											</li>
											<li>
												<a href="">Staff Members</a>
											</li>
											<li>
												<a href="">Contact Us</a>
											</li>

										</ul>
									</div>
								</li>

								<li>
									<a href="javascript:;"  data-toggle="dropdown"  class="submenu-icon">ATC  <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->

									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="">Getting Started</a>
											</li>
											<li>
												<a href="">Approved Controllers</a>
											</li>
											<li>
												<a href="">Approved Visitors</a>
											</li>
											<li>
												<a href="">Solo Validations</a>
											</li>
											<li>
												<a href="">Controller Files</a>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<a href="javascript:;" data-toggle="dropdown" class="submenu-icon">Pilots <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->
									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="">Chart System</a>
											</li>
											<li>
												<a href="">Pilot Ratings</a>
											</li>
											<li>
												<a href="">Pilot Resources</a>
											</li>
											<li>
												<a href="">VATFRANCE PTD</a>
											</li>
										</ul>
									</div>
									<!-- end  -->

								</li>
								<li>
									<a href="javascript:;" data-toggle="dropdown" class="submenu-icon">Events <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
										<div  class="dropdown-menu">
										<ul>
										<li>
												<a href="">Event Calendar</a>
											</li>
											<li>
												<a href="">Suggest an event</a>
											</li>
										</ul>

									</div>
								</li>

								<li>
									<a href="javascript:;" data-toggle="dropdown" class="submenu-icon">Members <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->
									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="">vACC Stats</a>
											</li>
											<li>
												<a href="">Booking System</a>
											</li>

										</ul>
									</div>
								</li>
								<li>
									<a href="javascript:;" data-toggle="dropdown" class="submenu-icon">FIRs <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->
									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="">Paris</a>
											</li>
											<li>
												<a href="">Marseille</a>
											</li>
											<li>
												<a href="">Bordeaux</a>
											</li>
											<li>
												<a href="">Brest</a>
											</li>
											<li>
												<a href="">Reims</a>
											</li>

										</ul>
									</div>
							</ul>
							</nav>

						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</div>

			</header>
