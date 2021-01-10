<?php 
			$condition=0;
			if(isset($_FILES['image']))
			{ if(is_uploaded_file($_FILES['image']['tmp_name']))
				{
					 $filename=$_FILES['image']['name'];
					 $tmp=$_FILES['image']['tmp_name'];
					 $file_size = $_FILES['image']['size'];
					 $type=$_FILES['image']['type'];
					 $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
					 
					 $types=array("jpeg","jpg","png");
					 if(in_array($file_ext,$types))
				    {   if($file_size > 2097152)
						{
							?><script> alert(" File size should not be more than 2 MB");</script><?php
						}
						else
						{
						 if(move_uploaded_file($tmp,"../img/community/".$filename))
						 {   $photo=$filename;
					         $condition=1;
					         ?><script> alert(" Photo Uploaded Successfully");
							 
							 </script><?php
						 }
						}
					 }
					 else
					 {
						 ?><script> alert(" Please Select valid Image");
						            window.location="editcommunity.php";
						 </script><?php
					 }
				}
				 else
				 {
					 ?><script> alert(" Please select a file to Upload Or Your file is more than 2 MB");
					            window.location="editcommunity.php";
					 </script><?php
				 }
		    }
		  
		 
		 if(isset($_POST['submit']))
			{   
				if($condition==1)
				{	
				  $id=$_GET['data_id'];
				  $community=$_POST['community'];
				  $name=$_POST['name'];
				  $department=$_POST['department'];
				  $designation=$_POST['designation'];
			      include("connect.php");
				  mysqli_query($con,"update club set community='$community',name='$name',department='$department',designation='$designation',photo='$photo',status=1 where id=$id ");
		           if(mysqli_affected_rows($con)==1)
			        {   ?><script> alert(" Data Uploaded Successfully");
							window.location="showcommunity.php";
				</script><?php
			        }
				   else
				  {
					?><script> alert(" Data  not Uploaded ");
						window.location="editcommunity.php";
					</script><?php
				  }
				}
			}	
		  ?>
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
				
			<!--------------------------Main body--------------------------------------->
			 <div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1>Community</h1>
						<div class="alert alert-dismissable alert-warning">
							<button data-dismiss="alert" class="close" type="button">&times;</button>
							 Welcome to the Community/Club corner Feel free to edit communities. 
							<br />
							
							
							
						</div>
					</div>
				</div>
			 </div> 
			 <!--------------------------------------------------------------->
			 <!-- start banner Area -->
				<section class="banner-area relative about-banner" id="home" >	
					<div class="overlay overlay-bg"></div>
					<div class="container">				
						<div class="row d-flex align-items-center justify-content-center">
							<div class="about-content col-lg-12">
								<h1 class="text-white">
									Edit Community	
								</h1>	
								<p class="text-white link-nav"><a href="index.php">Dashboard</a> 
							</div>	
						</div>
					</div>
				</section>
				<!-- End banner Area -->
				<br/><br/>

			
            <!-- Start info Area --->
			<section class="info-area pb-40">
				<div class="container-fluid">
				    <div class="col-md-12">
					<!-----------------main content------>
					  <form method="POST" action="" onsubmit="return validate()" enctype = "multipart/form-data">
					  <?php
							include("connect.php");
							$id=$_GET['data_id'];
							$result=mysqli_query($con,"select * from club where id=$id and status=1");
							$row = mysqli_fetch_assoc($result);
						?>
				<table class="table">
								<tr>	
									<td>Community/Club Name*</td>
									<td>
										<select id="community" name="community" class="form-control">
											<option value="<?php echo ($row['community']);?>"><?php echo ($row['community']);?></option>
											<option value="Training & Placement">Training & Placement</option>
											<option value="Anti-Ragging">Anti-Ragging</option>
											<option value="Value Education Cell">Value Education Cell</option>
											<option value="Art & Cultural">Art & Cultural</option>
											<option value="Web-Development">Web-Development</option>							
										</select>
									</td>
								</tr>
								
								<tr>
									<td>Name</td>
									<td><input class="form-control" id="name" name="name" onblur="checkTextBox(this)" required value="<?php echo ($row['name']);?>">
									<span class="text-danger" id="name_error"></span>
									</td>
								</tr>
								<tr>
					<td>Department:</td>
					<td>
						<select id="department" name="department" class="form-control">
							<option value="<?php echo $row['department']?>"><?php echo $row['department']?></option>
							<option value="Computer Science and Engg & Information Technology">Computer Science and Engg. & Information Technology</option>
							<option value="Applied Science">Applied Science</option>
							<option value="Electronics and Comm. Engg">Electronics and Comm. Engg.</option>
							<option value="Mechanical Engg">Mechanical Engg</option>
							<option value="Civil Engineering">Civil Engineering</option>
							<option value="Master of Business Administration">Master of Business Administration</option>
							<option value="Bachelor of Pharmacy">Bachelor of Pharmacy</option>
							<option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option>
							<option value="Diploma in Civil Engineering">Diploma in Civil Engineering</option>
							<option value="Diploma in Electrical Engineering">Diploma in Electrical Engineering</option>
							<option value="Bachelor of Computer Application">Bachelor of Computer Application</option>
							<option value="Bachelor of Business Administration">Bachelor of Business Administration</option>
							<option value="Diploma in Pharmacy">Diploma in Pharmacy</option>
							<option value="Diploma in Homeopathy Pharmacy">Diploma in Homeopathy Pharmacy</option>
						</select>
					</td>
				</tr>
								<tr>
									<td>Designation in Community Club</td>
									<td>
										<select id="designation" name="designation" class="form-control">
											<option value="<?php echo ($row['designation']);?>"><?php echo ($row['designation']);?></option>
											<option value="President">President</option>
											<option value="Co-Ordinate">Co-Ordinator</option>
											<option value="Vice-President">Vice-President</option>
											<option value="Treasurer">Treasurer</option>
											<option value="Secretary">Secretary</option>							
											<option value="Member">Member</option>							
										</select>
									</td>
								</tr>
								<tr>
									<td>Upload Image</td>
										<td><input class="btn btn-success" type="file"  name="image" required>
										&nbsp;&nbsp;
										<?php  echo ("<img  src='../img/community/".$row['photo']."' class='img-fluid'>");?>
										</td>
								</tr>
								<tr>
									<td></td>
									<td><input class="btn btn-primary" type="submit"  name="submit" value="Upload"></td>
								</tr>
				</table>
			</form>
		</div>
		
					<!--------------------------------->  
					</div>
				</div>	
			</section>
			<!-- End info Area -->
		
			
             <script>
				function validate()
				{
					if(document.getElementById("name").value=="")
					{
						
						document.getElementById("name").focus();
						document.getElementById("name_error")
						.innerHTML="This field is required";
						return false;
					}
					else
					{
						var name=document.getElementById("name").value;
						var filter=/^[a-zA-Z\s]*$/ ;
						if(!filter.test(name))
						{
							document.getElementById("name").focus();
							document.getElementById("name_error").innerHTML="Please Enter Valid Name";
							return false;
						}
					
				}
			</script>
							    			

	</body>
</html>