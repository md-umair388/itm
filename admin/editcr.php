<?php
			
		 
		 if(isset($_POST['register']))
			{   
					
					  $id=$_GET['data_id'];
					  $department=$_POST['department'];
					  $year=$_POST['year'];
					  $name=$_POST['name'];
					  $position=$_POST['position'];
					  include("connect.php");
					  mysqli_query($con,"update cr set department='$department',year='$year',name='$name',position='$position',status=1 where id=$id");
					   if(mysqli_affected_rows($con)==1)
						{   ?><script> alert(" Data Uploaded Successfully");
							window.location="showcr.php";
							</script><?php
						}
					   else
					  {
						?><script> alert(" Data  not Uploaded ");
							window.location="editcr.php";
						</script><?php
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
                    <h1>Class Representative</h1>
                    <div class="alert alert-dismissable alert-warning">
                        <button data-dismiss="alert" class="close" type="button">&times;</button>
                         Welcome to the Class Representative dashboard ! Feel free to delete and modify Class Representative section. 
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
								Edit Class Representative			
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Dashboard </a> 
						</div>	
					</div>
				</div>
			</section>
            <br><br>
			
           
			<section class="info-area pb-40">
				<div class="container-fluid">
				    <div class="col-md-12">
					  <form method="POST" action="" onsubmit="return validate()" enctype = "multipart/form-data">
					  <?php
							include("connect.php");
							$id=$_GET['data_id'];
							$result=mysqli_query($con,"select * from cr where id=$id and status=1");
							$row = mysqli_fetch_assoc($result);
						?>
				<table class="table">
				
				<tr>
					<td>Department:</td>
					<td>
						<select id="department" name="department" class="form-control">
							<option value="<?php echo $row['department']?>"><?php echo $row['department']?></option>
							<option value="Computer Science and Engg & Information Technology">Computer Science and Engg. & Information Technology</option>
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
					<td>Year:</td>
					<td>
						<input type="text" name="year" id="year" class="form-control" onblur="checkTextBox(this)" value="<?php echo $row['year']?>">
						<span class="text-danger" id="year_error"></span>
					</td>
				</tr>
				
				<tr>
					<td>Name*:</td>
					<td>
						<input type="text" name="name" id="name" class="form-control" onblur="checkTextBox(this)" value="<?php echo $row['name']?>">
						<span class="text-danger" id="name_error"></span>
					</td>
				</tr>
				
				<tr>
					<td>Position:</td>
					<td>
						<input type="text" name="position" id="position" class="form-control" onblur="checkTextBox(this)" value="<?php echo $row['position']?>">
						<span class="text-danger" id="position_error"></span>
					</td>
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
				else
				{
					var name=document.getElementById("name").value;
					var filter=/^[a-zA-Z\s]*$/;
					if(!filter.test(name))
					{
						document.getElementById("name").focus();
						document.getElementById("name_error").innerHTML="Please Enter Valid Name";
						return false;
					}
					
				}
				
				if(document.getElementById("year").value=="")
				{
					
					document.getElementById("year").focus();
					document.getElementById("year_error")
					.innerHTML="This field is required";
					return false;
				}
				else
				{
					var name=document.getElementById("year").value;
					var filter=/^([0-9\-])+$/ ;
					if(!filter.test(name))
					{
						document.getElementById("year").focus();
						document.getElementById("year_error").innerHTML="Please Enter Valid Name";
						return false;
					}
					
				}
				
				if(document.getElementById("position").value=="")
				{
					
					document.getElementById("position").focus();
					document.getElementById("position_error")
					.innerHTML="This field is required";
					return false;
				}
				else
				{
					var name=document.getElementById("position").value;
					var filter=/^[a-zA-Z0-9\s]*$/ ;
					if(!filter.test(name))
					{
						document.getElementById("position").focus();
						document.getElementById("position_error").innerHTML="Please Enter Valid Name";
						return false;
					}
					
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