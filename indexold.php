	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="itm">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>ITM Group of Institution</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
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
			<link href="2/ninja-slider.css" rel="stylesheet" type="text/css" />
            <script src="2/ninja-slider.js" type="text/javascript"></script>
		</head>
		<body>	
           <!---header--->
		    <?php
			  include("headtitle.php");
			  include("connect.php");
			  ?>
			 
			  
			  <!-----------main------------------->
			  
			  <!-- start banner Area -->
     <section class="banner-area relative " style="background-color: rgba(4,9,30,0.9);" id="home" >	

	<div class="overlay overlay-bg"></div>
	<div class="row d-flex align-items-center justify-content-center">
				<div style="margin-top:0px; padding-top:0px;  padding-bottom:90px;  padding-right:0px;  padding-left:0px;" class="about-content col-lg-12">
				
				     <!--start  new responsive slider-->
						<div id="ninja-slider">    
							<div class="slider-inner">
								<ul>
									<?php 
													  include("connect.php");
													 $condition="Slider";
													 $result=mysqli_query($con,"select * from photos where type='$condition' and status=1");
													 while($row=mysqli_fetch_assoc($result))
													 { ?> 
															<li>
																<?php echo ("<a style='transform-origin:center top 30px;' class='ns-img' href='img/photos/".$row['photo']."'> </a>");?>
																<div style="font-size:30px; color:orangered;" class="caption"><?php echo ucwords($row['title']);?></div>
															</li>
														<?php
													 }
													  ?>
								</ul>
								<div class="navsWrapper">
									<div id="ninja-slider-prev"></div>
									<div id="ninja-slider-next"></div>
								</div>
							</div>
						</div>
						<!--end-->
				
				    
					  	
					     <div class="banner-content col-lg-11 col-md-5" style=" padding-left: 80px;">
                              	<h2 style="color:teal; font-size:35px;"class="text-uppercase">
								We Ensure better education for a better world			
							</h2>
							<p class="pt-10 pb-10">
								From the begining ,we stand with our determination firm and our flag raised high touching the sky with glorious pride of excellence results .
							</p>	
							<a href="institutions.php" class="primary-btn text-uppercase">Our Institutions</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<a href="courses.php" class="primary-btn text-uppercase">Courses @ ITM</a>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<a href="fees.php" class="primary-btn text-uppercase">Fees Structure</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<a href="events.php" class="primary-btn text-uppercase">Events & News</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<a href="notice.php" class="primary-btn text-uppercase">Notices</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						</div>	
					<!------------------------------------------------------------>
				</div>	
		    </div>
		
		
	</section>
			  
	
			<!-- End banner Area -->
			
			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Our Uniqueness</h4>
								</div>
								<div class="desc-wrap">
									<p>
										<ul>
										 <li><h4>1 Group</h4></li>
										 <li><h4>5 Institutions</h4></li>
										 <li><h4>5000 Students</h4></li>
										 <li><h4>6000+ Alumni</h4></li>
										</ul>
									</p>
																	
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Our Affliations</h4>
								</div>
								<div class="desc-wrap">
									<p>
									<ul>
										 <li><h4>Approved by AICTE & PCI</h4></li>
										 <li><h4>AKTU,Lucknow</h4></li>
										 <li><h4>BTE,Lucknow</h4></li>
										 <li><h4>DDU,Gorakhpur</h4></li>
										</ul>
										
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Quick Contacts</h4>
								</div>
								<div class="desc-wrap">
									<p>
										<ul>
										 <li><b>City office:</b>7905041229</li>
										 <li><b>Gida Office:</b>7887050768</li>
										 <li><b>Email:</b>director.itm@gmail.com</li>
										 <li><b>Write us:</b>ITM Technical Campus,AL-1<br>Sector-7,Gida,Gorakhpur(UP)-273209</li>
										</ul>
									</p>
																	
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
			
			
			<!-----Information Section------>
			    <br><center><div class="col-md-8">
						<div class="about-desc animate-box">
							<h2>Welcome to ITM</h2><br>
							 <?php
							  
							  $condition="Welcome Information";
							 $result=mysqli_query($con,"select * from aboutus where type='$condition' and status=1");
	                         $row=mysqli_fetch_assoc($result);
							  echo("<p>".$row['description']."</p>");
							 ?>
                    <div class="fancy-collapse-panel">
	                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	                     <div class="panel panel-default">
	                         <div class="panel-heading" role="tab" id="headingOne">
	                             <h4 class="panel-title">
	                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap;padding: .75rem 1rem; margin-bottom: 1rem;list-style: none;background-color: #e9ecef;border-radius: .25rem;">Why choose us?
	                                 </a>
	                             </h4>
	                         </div>
	                         <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	                             <div class="panel-body">
	                                 <div class="row">
									      		<div class="col-md-12">
												<?php
							  
												  $condition="Why to Choose Us";
												  $result=mysqli_query($con,"select * from aboutus where type='$condition' and status=1");
												  $row=mysqli_fetch_assoc($result);
												  echo("<p>".$row['description']."</p>");
												 ?>
												</div>
	                             </div>
	                         </div>
	                     </div>
	                     <div class="panel panel-default">
	                         <div class="panel-heading" role="tab" id="headingTwo">
	                             <h4 class="panel-title">
	                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap;padding: .75rem 1rem; margin-bottom: 1rem;list-style: none;background-color: #e9ecef;border-radius: .25rem;">Our Mission
	                                 </a>
	                             </h4>
	                         </div>
	                         <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	                             <div class="panel-body">
	                                <?php
							  
												  $condition="Our Mission";
												  $result=mysqli_query($con,"select * from aboutus where type='$condition' and status=1");
												  $row=mysqli_fetch_assoc($result);
												  echo("<p>".$row['description']."</p>");
												 ?>
	                             </div>
	                         </div>
	                     </div>
	                     <div class="panel panel-default">
	                         <div class="panel-heading" role="tab" id="headingThree">
	                             <h4 class="panel-title">
	                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap;padding: .75rem 1rem; margin-bottom: 1rem;list-style: none;background-color: #e9ecef;border-radius: .25rem;">Our Motto
	                                 </a>
	                             </h4>
	                         </div>
	                         <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	                             <div class="panel-body">
	                                  <?php
							  
												  $condition="Our Motto";
												  $result=mysqli_query($con,"select * from aboutus where type='$condition' and status=1");
												  $row=mysqli_fetch_assoc($result);
												  echo("<p>".$row['description']."</p>");
										?>
	                             </div>
	                         </div>
	                     </div>
	                  </div>
						</div>
					</div>
				</div>
				</center>
					
			<!-- Start popular-course Area -->
			<br><section class="popular-course-area">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="title text-center">
								<h1 class="mb-10">Courses @ ITM</h1>
								<p>Institute Of Technology & Management proves itself in the follwing Domains:...</p>
						</div>
					</div>						
					<div class="row">
						<div class="active-popular-carusel">
							<?php
							  include("connect.php");
							 $result=mysqli_query($con,"select * from courses where status=1");
	                          while($row=mysqli_fetch_assoc($result))
							  {		  
							     
							      ?>
							
								<div class="single-popular-carusel">
									<div class="thumb-wrap relative">
										<div class="thumb relative">
											<div class="overlay overlay-bg"></div>	
											<?php  echo ("<img class='img-fluid' src='img/courses/".$row['photo']."'>");?>
										</div>								
									</div>
									<div class="details">
										<a href="#">
											<h4>
												<?phpecho($row['name']);?>
											</h4>
										</a>
										<p>
											<u>Affiliated To:<?php echo($row['affiliated']);?></u><br>
											<?php echo($row['shortdescription']);?>											
										</p>
									</div>
								</div>	<?php
							  }
								?>
						</div>	
					</div>
				</div>
					
			</section>
			<!-- End popular-course Area -->
			
			  <?php
			  //  <!-- Start registration form Area -->
			    include("studentregister.php");
				?>
			<!------ Start upcoming-event Area ---------------------------------------------------------------------------------------------------->
				    <section class="upcoming-event-area">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-30 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10"><br>Upcoming News & Events of our Institute</h1>
								<p>ITM has resolved itself to the following upcoming events.</p>
							</div>
						</div>
					</div>								
					
				    <div class="row">
						<div class="active-upcoming-event-carusel">
					        <?php
								$number=6;
								
								  $result=mysqli_query($con,"select * from event where status=1 order by id DESC");
									while(($row=mysqli_fetch_assoc($result))&& ($number>=1))
									{	
									  ?>
									 
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
									  <?php
										$number--;
									}
							?>
					    </div>
					</div>
			    </div>
    </section>
			
			<!-- End upcoming-event Area ------------------------------------------------------------------------------------------------------------------------>
			
			   <!-- Start message Area-->
			<section class="blog-area" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10"><br>From The Desk of the Management & Administration of Institue</h1>
								<p>ITM is blessed with many prestigious diamonds which always reflects back the strength of its success.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						
						 <div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
							<?php 
							     $condition="President";
								 $result=mysqli_query($con,"select * from management where designation='$condition' and status=1");
								 $row=mysqli_fetch_assoc($result);
							     echo ("<img class='img-fluid' src='img/dean/".$row['photo']."'>");
							?>	 
							</div>
							<h5><br><font color="teal"><?php echo ucwords($row['name']);?></font><br>President</h5>
							</a>
						
							<a href="mpresident.php" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Message</span><span class="lnr lnr-arrow-right"></span></a>		
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
							    <?php 
							     $condition="Secretary";
								 $result=mysqli_query($con,"select * from management where designation='$condition' and status=1");
								 $row=mysqli_fetch_assoc($result);
							     echo ("<img class='img-fluid' src='img/dean/".$row['photo']."'>");
							?>	 
																
							</div>
								<h5><br><font color="teal"><?php echo ucwords($row['name']);?></font><br>Secretary</h5>
							</a>

							<a href="msecretary.php" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Message</span><span class="lnr lnr-arrow-right"></span></a>						
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<?php 
							     $condition="Treasurer";
								 $result=mysqli_query($con,"select * from management where designation='$condition' and status=1");
								 $row=mysqli_fetch_assoc($result);
							     echo ("<img class='img-fluid' src='img/dean/".$row['photo']."'>");
							?>	 							
							</div>
							 <h5><br><font color="teal"><?php echo ucwords($row['name']);?></font><br> Treasurer</h5>
							</a>
							
							<a href="mtreasurer.php" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Message</span><span class="lnr lnr-arrow-right"></span></a>									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<?php 
							     $condition="Joint-secretary";
								 $result=mysqli_query($con,"select * from management where designation='$condition' and status=1");
								 $row=mysqli_fetch_assoc($result);
							     echo ("<img class='img-fluid' src='img/dean/".$row['photo']."'>");
							?>								
							</div>
							<h5><br><font color="teal"><?php echo ucwords($row['name']);?></font><br>Joint Secretary</h5>
							</a>
							
							<a href="mjoinsecretary.php" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Message</span><span class="lnr lnr-arrow-right"></span></a>							
						</div>							
					</div>
				</div>	
			</section>
			<!-- End message Area -->
          <!-- Start upcoming-event Area -->
			<section class="upcoming-event-area">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-30 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10"><br>What Our Student Say!</h1>
								<p></p>
							</div>
						</div>
					</div>								
					<div class="row">
						<div class="active-upcoming-event-carusel">
							<?php
								$number=6;
								
								  $result=mysqli_query($con,"select * from alumnispeak where status=1 order by id DESC");
									while(($row=mysqli_fetch_assoc($result))&& ($number>=1))
									{	
									  ?>
									 
									 <div class="single-carusel row align-items-center">
									    <div class="col-12 col-md-6 thumb">
									        <?php  echo ("<img  style='border-radius: 50%; width:70%; ' src='img/alumni/".$row['photo']."'>");?>
									    </div>
									  <div class="detials col-12 col-md-6">
										<p><?php echo ucwords($row['company']);?></p>
										<a href="#"><h4><?php echo ucwords($row['name']);?></h4></a>
										<p>
											<?php echo ucwords($row['description']);?>
										</p>
									  </div>
								       </div>
									  <?php
										$number--;
									}
							?>
																													
						</div>
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->
			

			<!-- footer -->
			<br>
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