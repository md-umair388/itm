<html>
	<head>
	    
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
								News & Events				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="events.php"> Events</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start events-list Area -->
			<section class="events-list-area section-gap event-page-lists">
				<div class="container">
					<div class="row align-items-center">
					
					<?php
							
								
								  $result=mysqli_query($con,"select * from event where status=1 order by id DESC ");
									while($row=mysqli_fetch_assoc($result))
									{	
									  ?>
									 <div class="col-lg-6 pb-30">
									 <div class="single-carusel row align-items-center">
									    <div class="col-12 col-md-6 thumb">
									        <?php  echo ("<img class='img-fluid' src='img/event/".$row['photo']."'>");?>
									    </div>
									  <div class="detials col-12 col-md-6">
										<p><?php echo ucwords($row['date']);?></p>
										<a href="#"><h4><?php echo ucwords($row['title']);?></h4></a>
										<p>
											<?php echo ucwords($row['description']);?>
										</p>
									  </div>
								       </div>
									   </div>
									  <?php
										
									}
							?>

					

																	
								
					</div>
				</div>	
			</section>
			<!-- End events-list Area -->
		
            
			
            
             
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