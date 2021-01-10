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
		 ?>	
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home" >	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							    The Notice Board				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="notice.php"> Notice</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
            <br><br>
			<div class="container">
					<div class="row">
                        <div class="col-md-12 accordion-left">
                         <!-- accordion 2 start-->
						 <table class="table">
			            <tr>
							<td><b>Title</b></td>
							<td><b>Date</b></td>
							<td><b>Description</b></td>
							<td><b>View Details</b></td>
					   </tr>
							  <?php
							     include("connect.php");
								  $result=mysqli_query($con,"select * from notice order by id DESC");
	                              while( $row=mysqli_fetch_assoc($result))
								  {  
							      ?>
								  <tr>
								<div class="row">
									
										<div class="single-imgs relative">		
											<div class="relative">
												<td><?php echo ($row['title']); ?></td>
												<td><?php echo ($row['date']); ?></td>
												<td><?php echo ($row['description']); ?></td>
												<td><a href='img/notice/<?php echo $row['photo'] ?>' class="btn btn-primary text-uppercase" target="_blank">View</a></td>	
											</div>
										</div>
								</div>
								</tr>
								  
								<?php
								}
                                
								 ?> </table>
                            <!-- accordion 2 end-->
                        </div>
		            </div>
			</div>

         <?php
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