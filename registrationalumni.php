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
		<?php 
			if(isset($_REQUEST['status']))
			{
				echo "<p>Registered successfully.</p>";
			}
		?>
		<?php 
			if(isset($_POST['submit']))
			{
				$name=$_POST['name'];
				$YOA=$_POST['YOA'];
				$YOP=$_POST['YOP'];
				$COO=$_POST['COO'];
				$contact=$_POST['contact'];
				$email=$_POST['email'];
				$CWO=$_POST['CWO'];
				$LOO=$_POST['LOO'];
				$Des=$_POST['Des'];
				$addr=$_POST['address'];
				$status=1;
				
				 include("connect.php");
				
				mysqli_query($con,"insert into 
					itmAlumni(name,yearadmi,yearpass,courseopted,contact,email,currorg,locorg,designation,address,status) 
					values('$name','$YOA','$YOP','$COO','$contact','$email','$CWO','$LOO','$Des','$addr','$status')");
				if(mysqli_affected_rows($con)==1)
				{
					$id=mysqli_insert_id($con);
					?><script> alert("Your registrational successfully done");
							window.location="index.php";
					</script><?php
				}
				else
				{
					?><script> alert("Your registrational fail");
							window.location="registrationalumni.php";
					</script><?php
				}
			}
			?>
	
		<script>
			function validate()
			{
				if(document.getElementById("name").value=="")
				{
					document.getElementById("name").focus();
					document.getElementById("name_error").innerHTML="Username field is required.";
					return false;
				}
				else
				{
					var name=document.getElementById("name").value;
					var filter=/^([a-zA-Z\-])+$/ ;
					if(!filter.test(name))
					{
						document.getElementById("name").focus();
						document.getElementById("name_error").innerHTML="Please Enter Valid Name";
						return false;
					}
					
				}
				
				if(document.getElementById("YOA").value=="")
				{
					document.getElementById("YOA").focus();
					document.getElementById("YOA_error").innerHTML="Field is required.";
					return false;
				}
				else
				{  //YOA me 2012 kama hai hai
					var YOA=document.getElementById("YOA").value;
					if(YOA.length!=4)
					{
						document.getElementById("YOA").focus();
						document.getElementById("YOA_error").innerHTML="Please enter valid year";
						return false;
					}
					else if(isNaN(YOA))
					{
						document.getElementById("YOA").focus();
						document.getElementById("YOA_error").innerHTML="Invalid year";
						return false;
					}
				}
				
				if(document.getElementById("YOP").value=="")
				{
					document.getElementById("YOP").focus();
					document.getElementById("YOP_error").innerHTML="Field is required.";
					return false;
				}
				else
				{   //YOA me 2012 kana hai hai
					var YOP=document.getElementById("YOP").value;
					if(YOP.length!=4)
					{
				
						document.getElementById("YOP").focus();
						document.getElementById("YOP_error").innerHTML="Please enter valid year";
						return false;
					}
					else if(isNaN(YOP))
					{
						document.getElementById("YOP").focus();
						document.getElementById("YOP_error").innerHTML="Invalid year";
						return false;
					}
				}
				
				if(document.getElementById("contact").value=="")
				{
					document.getElementById("contact").focus();
					document.getElementById("contact_error").innerHTML="Field is required.";
					return false;
				}
				else
				{
					var contact=document.getElementById("contact").value;
					if(contact.length!=10)
					{
						document.getElementById("contact").focus();
						document.getElementById("contact_error")
						.innerHTML="Please enter 10 digit contact number";
						return false;
					}
					else if(isNaN(contact))
					{
						document.getElementById("contact").focus();
						document.getElementById("contact_error").innerHTML="Invalid contact";
						return false;
					}
				}
				
				/*if(document.getElementById("email").value=="")
				{
					document.getElementById("email").focus();
					document.getElementById("email_error")
					.innerHTML="Email field is";
					return false;
				}
				else
				{
					var email=document.getElementById("email").value;
					var filter=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,4})+$/ ;
					if(!filter.test(email))
					{
						document.getElementById("email").focus();
						document.getElementById("email_error")
						.innerHTML="Please Enter Valid Email";
						return false;
					}
				}
				
				if(document.getElementById("CWO").value=="")
				{
					document.getElementById("CWO").focus();
					document.getElementById("CWO_error").innerHTML="Field is required.";
					return false;
				}
				
				if(document.getElementById("LOO").value=="")
				{
					document.getElementById("LOO").focus();
					document.getElementById("LOO_error").innerHTML="Field is required.";
					return false;
				}
				
				if(document.getElementById("Des").value=="")
				{
					document.getElementById("Des").focus();
					document.getElementById("Des_error").innerHTML="Field is required.";
					return false;
				}*/
			}
		</script>
	</head>
	<body>
        <?php
		 include("headtitle.php");
		 ?>	
			<!-- start banner Area -->
			<section style="background:url(img/itm.jpg);" class="banner-area relative about-banner" id="home" >	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Registration Form for Alumni			
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="registrationalumni.php">Registration Form</a></p> 
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
            <br><br>
			
            <!-- Start info Area --->
			<section class="info-area pb-40">
				<div class="container-fluid">
				    <div class="col-md-12">
					<!-----------------main content------>
					  <form method="POST" action="" onsubmit="return validate()" enctype = "multipart/form-data">
				<table class="table">
				<tr>
					<td>Name*</td>
					<td>
						<input type="text" name="name" id="name"  onblur="checkTextBox(this)" class="form-control">
						<span id="name_error"></span>
					</td>
				</tr>
				<tr>
					<td>Year of Admission:</td>
					<td>
						<input type="text" name="YOA" id="YOA"  onblur="checkTextBox(this)" maxlength='4' class="form-control" >
						<span id="YOA_error"></span>
					</td>
				</tr>
				<tr>
					<td>Year of Passing*</td>
					<td>
						<input type="text" name="YOP" id="YOP"  onblur="checkTextBox(this)" maxlength='4' class="form-control">
						<span id="YOP_error"></span>
					</td>
				</tr>
				<tr>
					<td>Course Opted*:</td>
					<td>
						<select id="COO" name="COO" onblur="checkTextBox(this)" required class="form-control">
							<option value="">--Select Course--</option>
							<option value="BTECH">B.Tech</option>
							<option value="BBA">BBA</option>
							<option value="BCA">BCA</option>
							<option value="MBA">MBA</option>
							<option value="MCA">MCA</option>
							<option value="PHARMA">Pharmacy</option>
							<option value="POLYTECHNIC">Polytechnic</option>
						</select>
						<span  id="COO_error"></span>
					</td>
				</tr>
				<tr>
					<td>Contact No*:</td>
					<td>
						<input type="text" name="contact" id="contact"  onblur="checkTextBox(this)" class="form-control">
						<span id="contact_error"></span>
					</td>
				</tr>
				<tr>
					<td>Email Id:</td>
					<td>
						<input type="text" name="email" id="email"  onblur="checkTextBox(this)" class="form-control">
						<span id="email_error"></span>
					</td>
				</tr>
				<tr>
					<td>Current working Organization:</td>
					<td>
						<input type="text" name="CWO" id="CWO"  onblur="checkTextBox(this)" class="form-control">
						<span id="CWO_error"></span>
					</td>
				</tr>
				<tr>
					<td>Location of Organization:</td>
					<td>
						<input type="text" name="LOO" id="LOO"  onblur="checkTextBox(this)" class="form-control">
						<span id="LOO_error"></span>
					</td>
				</tr>
				<tr>
					<td>Designation:</td>
					<td>
						<input type="text" name="Des" id="Des"  onblur="checkTextBox(this)" class="form-control">
						<span id="Des_error"></span>
					</td>
				</tr>
				<tr>
					<td>Your current location:</td>
					<td><textarea  id="address" name="address" class="form-control">
					</textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"  name="submit" value="Submit" class="btn btn-primary"></td>
				</tr>
			</table>
			</form>
		</div>
		</div>
		</section>
		
		     
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