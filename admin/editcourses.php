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
						 if(move_uploaded_file($tmp,"../img/courses/".$filename))
						 {   $photo=$filename;
					         $condition=1;
					         ?><script> alert(" Photo Uploaded Successfully");</script><?php
						 }
						}
					 }
					 else
					 {
						 ?><script> alert(" Please Select valid Image");
						            window.location="editcourses.php";
						 </script><?php
					 }
				}
				 else
				 {
					 ?><script> alert(" Please select a file to Upload Or Your file is more than 2 MB");
					            window.location="editcourses.php";
					 </script><?php
				 }
		    }
		  
		 
		 if(isset($_POST['register']))
			{   
				if($condition==1)
				{	
				   $id=$_GET['data_id'];
				  $name=$_POST['name'];
				  $affiliated=$_POST['affiliated'];
				  $description=$_POST['description'];
				  $shdescription=$_POST['shdescription'];
				  $status=1;
			      include("connect.php");
				  mysqli_query($con,"update  courses set name='$name',affiliated='$affiliated',description='$description',shortdescription='$shdescription',photo='$photo',status=1 where id=$id");
		           if(mysqli_affected_rows($con)==1)
			        {   ?><script> alert(" Data Uploaded Successfully");
							window.location="showcourses.php";
				</script><?php
			        }
				   else
				  {
					?><script> alert(" Data  not Uploaded ");
					window.location="editcourses.php";
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
                    <h1>Courses</h1>
                    <div class="alert alert-dismissable alert-warning">
                        <button data-dismiss="alert" class="close" type="button">&times;</button>
                         Welcome to the courses dashboard ! Feel free to edit courses section. 
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
								Edit Courses			
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
							$result=mysqli_query($con,"select * from courses where id=$id and status=1");
							$row = mysqli_fetch_assoc($result);
						?>
				<table class="table">
				<tr>
					<td>Name of the Course*:</td>
					<td>
						<input type="text" name="name" id="name" class="form-control" onblur="checkTextBox(this)" value="<?php echo $row['name']?>">
						<span class="text-danger" id="name_error"></span>
					</td>
				</tr>
				
				<tr>
					<td>Affiliated to:</td>
					<td>
						<input type="text" name="affiliated" id="affiliated" class="form-control" onblur="checkTextBox(this)" value="<?php echo $row['affiliated']?>">
						<span class="text-danger" id="affiliated_error"></span>
					</td>
				</tr>
				
				<tr>
					<td>Description:</td>
					<td><textarea class="form-control" id="description" name="description" onblur="checkTextBox(this)">
					<?php echo $row['description']?>
					</textarea>
					</td>
				</tr>
				
				<tr>
					<td>Short Description(to display on Home page):</td>
					<td><textarea class="form-control" id="shdescription" name="shdescription" onblur="checkTextBox(this)">
					<?php echo $row['shortdescription']?>
					</textarea>
					</td>
				</tr>
				
				<tr>
					<td> Upload Image:</td>
					<td><input class="btn btn-success" type="file"  name="image" value="Upload" required>
					&nbsp;&nbsp;
					<?php  echo ("<img  src='../img/courses/".$row['photo']."' class='img-fluid'>");?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input class="btn btn-primary" type="submit"  name="register" 
					value="Upload"></td>
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
				if(document.getElementById("affiliated").value=="")
				{
					
					document.getElementById("affiliated").focus();
					document.getElementById("affiliated_error")
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