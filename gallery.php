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
			<section style="background:url(img/itm.jpg);" class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12"  style="margin-top:70px;">
							<h1 class="text-white">
								Gallery				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span> 
								<a href="gallery.php">Gallery</p><br/><br/></a>
							<form action="" method="POST">	
								<input type="submit" class="primary-btn text-uppercase" name="campus" value="Campus">&nbsp;&nbsp;&nbsp;
								<input type="submit" class="primary-btn text-uppercase" name="labs" value="Labs">&nbsp;&nbsp;&nbsp;
								<input type="submit" class="primary-btn text-uppercase" name="library" value="Library">&nbsp;&nbsp;&nbsp;
								<input type="submit" class="primary-btn text-uppercase" name="convocation" value="Convocation">&nbsp;&nbsp;&nbsp;
								<input type="submit" class="primary-btn text-uppercase" name="alumni" value="Alumni"><br/><br/>
								<input type="submit" class="primary-btn text-uppercase" name="technical" value="Technical Fest">&nbsp;&nbsp;&nbsp;
								<input type="submit" class="primary-btn text-uppercase" name="cultural" value="Cultural Fest">&nbsp;&nbsp;&nbsp;
								<input type="submit" class="primary-btn text-uppercase" name="sports" value="Sports Meet">&nbsp;&nbsp;&nbsp;
								<input type="submit" class="primary-btn text-uppercase" name="other" value="Other">
							</form>
							
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
        <?php
		 $type="Campus";
		 if(isset($_POST['campus']))
		 { $type="Campus";
		 }
		 if(isset($_POST['labs']))
		 { $type="Labs";
		 }
		 if(isset($_POST['library']))
		 { $type="Library";
		 }
		 if(isset($_POST['convocation']))
		 { $type="Convocation";
		 }
		 if(isset($_POST['alumni']))
		 { $type="Alumni Meet";
		 }
		 if(isset($_POST['technical']))
		 { $type="Technical Fest";
		 }
		 if(isset($_POST['cultural']))
		 { $type="Cultural Fest";
		 }
		 if(isset($_POST['sports']))
		 { $type="Sports Meet";
		 }
		 if(isset($_POST['other']))
		 { $type="Others";
		 }
		  
		?>			
				
			<!-- Start gallery Area -->
			<section class="gallery-area section-gap">
				<div class="container">
					<div class="row">
						<?php
					     
					     include("connect.php");
						  $result=mysqli_query($con,"select *from gallery where type='$type' AND status=1");
						  while( $row=mysqli_fetch_assoc($result))
							{  ?>
								<div class="col-lg-6">
								    
									<?php  echo ("<a href='img/gallery/".$row['photo']."' class='img-gal'>");?>	
									
										<div class="single-imgs relative">		
											<div class="overlay overlay-bg"></div>
											<div class="relative">
											   <font face="Bradley Hand ITC" size="5" color="Teal">
								                  <br/><br/><br/>
							                       <center><?php echo ($row['title']);?></center>
							                    </font>
												<?php  echo ("<img  src='img/gallery/".$row['photo']."' class='img-fluid'>");?>
												
							
	                                            <font face="Lucida Calligraphy" size="3" color="grey" align="Right">
							                     <br><br><?php echo ($row['description']);?>
												</font> 
											</div>
										</div>
									</a>
								</div>
							<?php
							} ?>
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
													

			<!-- start footer Area -->
			<?php
			include("footer.php");
			 ?>				
		
		<!-- End footer Area -->	


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