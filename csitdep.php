	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
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
		</head>
		<body>	
		 <?php
		 include("headtitle.php");
		 ?>
		  <!-- #header -->
		  <!-- start banner Area -->
			<section style="background:url(img/itm.jpg);" class="banner-area relative about-banner" id="home" >	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12" style="margin-top:80px;">
							<h2 class="text-white">
								Department of Computer Science & Information Technology				
							</h2>	
							<p class="text-white link-nav"><a href="#">The Department of Computer Science & Information Technology empower every student to be creative 
							and productive in their domains. It houses state of the art    laboratories ,provide library facility to staff & students  and boasts of well 
							trained ,committed and experienced teaching faculty who emphasize the theoretical and practical  application of computation and computer systems 
							to the needs of society.</a> </p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
		  
			

			<!-- Start course-details Area -->
			<section class="course-details-area pt-30">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 left-contents">
							<div class="main-image">
							     <?php
							       include("connect.php");
							       $condition="Depcs";
							       $result=mysqli_query($con,"select * from photos where type='$condition' and status=1");
	                               $row=mysqli_fetch_assoc($result);
							       echo(" <img class='img-fluid' src='img/photos/".$row['photo']."' alt=''>");
							    ?>
						   </div>
						</div>
						<div class="col-lg-4 right-contents">
						    <a href="#" class="primary-btn text-uppercase">Information Center</a>
							<ul>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Courses:</p> 
										<span class="or">B.Tech(Computer Sci. & Engg)<br>
										                 B.Tech(Information Technology)<br>
														 BCA
										</span>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>HOD: </p>
										<span></span>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Available Seats: </p>
										<span>B.Tech(CSE): 120 <br>
										      B.Tech(IT): 60 <br>
											  BCA: 
										</span>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p> Office Time:</p>
										<span>9.00 am to 4.00 pm</span>
									</a>
								</li>
							</ul>
							
						</div>
						<div class="col-lg-12 left-contents">	
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">About Us</div>
	                                <div class="jq-tab-title" data-tab="2">HOD Profile</div>
	                                <div class="jq-tab-title" data-tab="3">Faculties</div>
	                                <div class="jq-tab-title" data-tab="4">
									        <div class="star"><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i>
											  <span>Students</span>
											</div>
								    </div>
	                                <div class="jq-tab-title" data-tab="5">Coordinators & Representatives</div>
	                            </div>
	                            <div class="jq-tab-content-wrapper">
<!-------------------------------------------------------------------------------- linl 1-------------------------------------------->
	                                <div class="jq-tab-content active" data-tab="1">
									  <p style="color:teal;">
									     The Deapertment of Computer Science & Information Technology was established in the year 2000 right from the inception of 
										 the Institute with an intake of 60 Students intially in B.Tech (CSE) & B.Tech(IT)for imparting quality technical education in the field of Computer Science.
								      </p>
									 <b> <u>Mission:</u></b>
									 <p style="color:teal;">Empower every student to be creative and productive in the field of Computer Science and to impart quality 
									 education inculcating human values.
									 </p>
									 <b><u>Vision:</u></b>
									 <p style="color:teal;">To establish as a Center of Excellence in offering quality education in computer and allied subjects.
									 <br>To promote collaboration with industry for constructive interaction,for better integration of theory and application.
									 <br>To build and update infrastructure,to create an environment to facilitate research and skills enhancement for the staff.
									 </p>
	                                </div>
<!-----------------------------------------linl 2--------------------------------------------------------------------------->									
	                                <div class="jq-tab-content" data-tab="2">

											    
												
										<table class="table">
									        <tr>
											     <td><font style="color:teal;" size="5">Dr.S.K Pandey</font><br>Head of Department
												 </td> 
												 <td><img src="img\S.K Pandey.jpg" height='30%'width='20%'></td>
										    </tr>
											<tr>
											    <td><b>Qualification:</b></td>
												<td></td>
											</tr>
											<tr>
											    <td><b>Year Of Experience:</b></td>
												<td></td>
											</tr>
																						<tr>
											    <td><b>Brief Profile:</b></td>
												<td></td>
											</tr>
	                                    </table>    
	                                </div>
<!------------------------------------------------link 3----------------------------------------------------------------------->									
	                                <div class="jq-tab-content" data-tab="3">
										<table class="table">
										    <tr>
                                                <td><b>Name</b></td>
                                                <td><b>Designation</b></td>
                                                <td><b>Qualification</b></td>
                                                <td><b>Photo</b></td>												
											</tr>
											<?php
											 $dep="Computer Science & IT";
											 include("connect.php");
											  $result=mysqli_query($con,"select *from faculty where department='$dep'and status=1");
											  while( $row=mysqli_fetch_assoc($result))
											  { ?>
										       <tr>
												   <td><?php echo ($row['name']);?></td>
												   <td><?php echo ($row['designation']);?></td>
												   <td><?php echo($row['about']);?> </td>
												   <td><?php  echo ("<img style='border-radius: 50%;'  height='30%'width='30%' align ='left' src='img/faculty/".$row['photo']."'>");?></td>
											   </tr>
											  <?php
											 }?>
											
										</table>
	                                </div>
<!----------------------------------- ----------------------------link 4-------------------------------------->									
	                                <div class="jq-tab-content comment-wrap" data-tab="4">
						              <table class="table">
										    <tr>
                                                <td><b>Name</b></td>
                                                <td><b>Batch</b></td>
                                                <td><b>Description</b></td>
                                                <td><b>Photo</b></td>												
											</tr>
										</table>	
	                                </div>
<!-----------------------------link 5------------------------------------------------------------------------------>
	                                <div class="jq-tab-content" data-tab="5">	
	                                	 <table class="table">
										    <tr>
                                                <td><b>Name</b></td>
                                                <td><b>Batch</b></td>
                                                <td><b>Position</b></td>
                                                												
											</tr>
										</table> 						                                                                      
						            </div>	                                	
	                            </div>                                
	                        </div>
	                    </div>
				    </div>
						
				</div>
					
			</section>
			<!-- End course-details Area -->
			

			
			<!-- start footer Area -->		
              <br> <?php
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