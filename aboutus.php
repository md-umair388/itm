<html>
	<head>
	    <title>ITM Group of Institution</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
        <?php
		 include("headtitle.php");
		 include("connect.php");
		 ?>				  
			<!-- start banner Area -->
			<section style="background:url(img/itm.jpg);" class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="aboutus.php"> About Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
             <br>
			<!-- Start info Area -->
			<section class="info-area pb-30">
				<div class="container-fluid">
					<div class="row align-items-center">
						
						<div class="col-lg-12">
							<center><h1>About us</h1 ></center>
							<?php
							  
												  $condition="About Us";
												  $result=mysqli_query($con,"select * from aboutus where type='$condition' and status=1");
												  $row=mysqli_fetch_assoc($result);
												  echo("<p>".$row['description']."</p>");
							?>
						</div>
					</div>
				</div>	
			</section>
			<!-- End info Area -->	

			<!-- Start course-mission Area -->
			<section class="course-mission-area pb-120">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Goals to Achieve By Our Institution</h1>
								<p>We are Known by the excellence which we always reflect back.</p>
							</div>
						</div>
					</div>							
                    <div class="row">
                        <div class="col-md-7 accordion-center">

                            <!-- accordion 2 start-->
                            <dl class="accordion">
                                <dt>
                                    <a href="">Our Mission</a>
                                </dt>
                                <dd>
                                   <?php
							  
												  $condition="Our Mission";
												  $result=mysqli_query($con,"select * from aboutus where type='$condition' and status=1");
												  $row=mysqli_fetch_assoc($result);
												  echo("<p>".$row['description']."</p>");
										?>
                                </dd>
                                <dt>
                                    <a href="">Our Objective</a>
                                </dt>
                                <dd>
                                    <?php
							  
												  $condition="Our Objective";
												  $result=mysqli_query($con,"select * from aboutus where type='$condition' and status=1");
												  $row=mysqli_fetch_assoc($result);
												  echo("<p>".$row['description']."</p>");
										?>
                                </dd>
                                <dt>
                                    <a href="">Our Principals</a>
                                </dt>
                                <dd>
                                    <?php
							  
												  $condition="Our Principals";
												  $result=mysqli_query($con,"select * from aboutus where type='$condition' and status=1");
												  $row=mysqli_fetch_assoc($result);
												  echo("<p>".$row['description']."</p>");
										?>
                                </dd>
                                <dt>
                                    <a href="">Our Vision</a>
                                </dt>
                                <dd>
                                    <?php
							  
												  $condition="Our Vision";
												  $result=mysqli_query($con,"select * from aboutus where type='$condition' and status=1");
												  $row=mysqli_fetch_assoc($result);
												  echo("<p>".$row['description']."</p>");
										?>
                                </dd>                                    
                            </dl>
                            <!-- accordion 2 end-->
                        </div>
						  
                    </div>
				</div>	
			</section>
			<!-- End Area -->
			<?php
			  include("studentregister.php");
		      include("footer.php");
		     ?>
			
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>