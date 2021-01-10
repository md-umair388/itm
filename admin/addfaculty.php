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
						 if(move_uploaded_file($tmp,"../img/faculty/".$filename))
						 {   $photo=$filename;
					         $condition=1;
					         ?><script> alert(" Photo Uploaded Successfully");</script><?php
						 }
						}
					 }
					 else
					 {
						 ?><script> alert(" Please Select valid Image");
						            window.location="addfaculty.php";
						 </script><?php
					 }
				}
				 else
				 {
					 ?><script> alert(" Please select a file to Upload Or Your file is more than 2 MB");
					            window.location="addfaculty.php";
					 </script><?php
				 }
		    }
		  
		 
		 if(isset($_POST['register']))
			{   
				if($condition==1)
				{	
				  $name=$_POST['name'];
				  $designation=$_POST['designation'];
				  $department=$_POST['department'];
				  $about=$_POST['about'];
				  $status=1;
			      include("connect.php");
				  mysqli_query($con,"insert into faculty(name,designation,department,photo,status,about) values('$name','$designation','$department','$photo','$status','$about')");
		           if(mysqli_affected_rows($con)==1)
			        {   ?><script> alert(" Data Uploaded Successfully");</script><?php
			        }
				   else
				  {
					?><script> alert(" Data  not Uploaded ");</script><?php
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
                    <h1>Faculty</small></h1>
                    <div class="alert alert-dismissable alert-warning">
                        <button data-dismiss="alert" class="close" type="button">&times;</button>
                        Welcome to the Faculty dashboard! of ITM Group of Institutions Here you can easily manage the faculties. 
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
								Add Faculty			
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Dashboard </a> 
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
						<input type="text" name="name" id="name" class="form-control" onblur="checkTextBox(this)">
						<span class="text-danger" id="name_error"></span>
					</td>
				</tr>
				<tr>
					<td>Designation*</td>
					<td>
						<input type="text" name="designation" 
						id="designation" class="form-control" onblur="checkTextBox(this)">
						<span class="text-danger" id="designation_error"></span>
					</td>
				</tr>
				<tr>
					<td>Department*</td>
					<td>
						<select id="department" name="department" class="form-control">
							<option value="">--Select Department--</option>
							<option value="Applied Science">Applied Science</option>
							<option value="Computer Science and Engg & Information Technology">Computer Science and Engg. & Information Technology</option>
							<option value="Electronics and Comm. Engg">Electronics and Comm. Engg.</option>
							<option value="Mechanical Engg">Mechanical Engg</option>
							<option value="Civil Engineering">Civil Engineering</option>
							<option value="Master of Business Administration">Master of Business Administration</option>
							<option value="Bachelor of Pharmacy">Bachelor of Pharmacy</option>
							<option value="Polytechnic">Polytechnic</option>
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
					<td>Qualification</td>
					<td><textarea class="form-control" id="about" name="about" onblur="checkTextBox(this)">
					</textarea><span class="text-danger" id="about_error"></span>
					</td>
				</tr>
			       
				
				<tr>
					<td> Upload Image</td>
					<td><input class="btn btn-success" type="file"  name="image" 
					value="Upload"></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="btn btn-primary" type="submit"  name="register" 
					value="Submit"></td>
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
				
					
				}
				
				if(document.getElementById("description").value=="")
				{
					
					document.getElementById("description").focus();
					document.getElementById("description_error")
					.innerHTML="This field is required";
					return false;
				}
				
				
			}
			function checkTextBox(x)
			{
				if(x.value!="")
				{
					document.getElementById(x.id+"_error").innerHTML="";
					return false;
				}
			}
			
		</script>
</body>
</html>