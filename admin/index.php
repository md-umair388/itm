<?php  session_start();
if(isset($_SESSION['user_login']))
{ ?>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Dashboard - Admin</title>

		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/local.css" />

		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- you need to include the shieldui css and js assets in order for the charts to work -->
		<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
		<link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

		<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
		<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
	</head>
	<body>
		<div id="wrapper">
			  <?php 
				include("navigation.php");
				?>
				
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1>Dashboard </h1>
						<div class="alert alert-dismissable alert-warning">
							<button data-dismiss="alert" class="close" type="button">&times;</button>
							Welcome to the admin dashboard! of ITM Group of Institutions Feel free to add ,delete and modify all pages and informations  to your needs. 
							<br />
							
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>  Home page </h3>
							</div>
							<div class="panel-body">
								<div id="shieldui-grid1"></div>
								<p>This is the Main Home page of Admin Dashboard.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Description of All the databases used.</h3>
							</div>
							<div class="panel-body">
								<ul class="server-stats">
									<li>
										<div class="key pull-right">admin</div>
										<div class="stat">
											<div class="info">Keeps admins name & password.</div>
										</div>
								    </li>
									<hr>
									<li>
										<div class="key pull-right">photos</div>
										<div class="stat">
											<div class="info">Saves slider /main image that is displayed on each deparment page</div>
										</div>
									</li><hr>
									<li>
										<div class="key pull-right">faculty</div>
										<div class="stat">
											<div class="info">Saves information of all the faculties.</div>
										</div>
									</li><hr>
									
									
								</ul>
							</div>
							
						</div>
					</div>

					<div class="col-lg-4">
						<header>
							<ul class="nav nav-tabs">
								<li class="active">
									<a data-toggle="tab" href="#report">Quick Links</a>
								</li>
						    </ul>
							<ul>
							<a href="addphotos.php"><li>Add Photo to Slider </li></a>
							<a href="addgallery.php"><li>Add Photo to gallery </li>
							<a href="addnotice.php"><li>Add New Notice </li></a>
							<a href="addevent.php"><li>Add New Events & News </li></a>							
							<a href="addphotos.php"><li>Add Department main image</li></a>
							<a href="showfee.php"><li>Modify Fee Structure </li></a>
							<a href="showdownloads.php"><li>Add to downloads section</li></a>
							<a href="showcommunity.php"><li>Add to community section</li></a>
							</ul>
						</header>
										
					</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /#wrapper -->

	   
	</body>
	</html>
<?php 
}
else
{
	header("Location:login.php");
}

?>
