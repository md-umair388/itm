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
						 if(move_uploaded_file($tmp,"../img/photos/".$filename))
						 {   $photo=$filename;
					         $condition=1;
					         ?><script> alert(" Photo Uploaded Successfully");</script><?php
						 }
						}
					 }
					 else
					 {
						 ?><script> alert(" Please Select valid Image");
						            window.location="addphotos.php";
						 </script><?php
					 }
				}
				 else
				 {
					 ?><script> alert(" Please select a file to Upload Or Your file is more than 2 MB");
					            window.location="addphotos.php";
					 </script><?php
				 }
		    }
		
			if(isset($_POST['upload']))
			{   
				if($condition==1)
				{
					$type=$_POST['type'];
					$title=$_POST['title'];
					$status=1;
					include("connect.php");
					mysqli_query($con,"insert into photos(type,title,photo,status) values('$type','$title','$photo','$status')");
					if(mysqli_affected_rows($con)==1)
					{   ?><script> alert(" Data Uploaded Successfully");
							 window.location="showphotos.php";
						</script><?php
					}
					else
					{
						?><script> alert(" Data  not uploaded Successfully")
						</script><?php
					}
				}
			}	
		  ?>
		  
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
		<script>
			function validate()
			{
				if(document.getElementById("title").value=="")
				{
					
					document.getElementById("title").focus();
					document.getElementById("title_error")
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
                    <h1>Photos</small></h1>
                    <div class="alert alert-dismissable alert-warning">
                        <button data-dismiss="alert" class="close" type="button">&times;</button>
                        Welcome to the photos dashboard! of ITM Group of Institutions you can easily manage all the current slider. 
                        <br />
                        
                    </div>
                </div>
            </div>
         </div> 
		 <!--------------------------------------------------------------->
		 <section class="banner-area relative about-banner" id="home" >	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Add Slider			
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Dashboard</a> 
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
					  <form method="POST" action="" onsubmit="return validate()" enctype = "multipart/form-data">
							<table class="table">
							   <tr>
									<td>Type:</td>
									<td>
										<select id="type" name="type" class="form-control">
											<option value="">--Select type--</option>
											<option value="Slider">Slider(home page)</option>
											<option value="Depcs">Department Image (CS & IT)</option>
											<option value="Depec">Department Image (EC)</option>
											<option value="Depme">Department Image (ME)</option>
											<option value="Depcivil">Department Image (Civil)</option>
											<option value="Depmba">Department Image (MBA)</option>
											<option value="Deppoly">Department Image (Polytechnic)</option>
											<option value="Deppharm">Department Image (Pharmacy)</option>
											<option value="Depas">Department Image (Applied Science)</option>
											
										</select>
									</td>
								</tr>
							
								<tr>
									<td>Title of Slider:</td>
									<td>
										<input type="text" name="title" id="title" class="form-control" onblur="checkTextBox(this)">
										<span class="text-danger" id="title_error"></span>
									</td>
								</tr>
								
								<tr>
									<td>Upload Image</td>
										<td><input class="btn btn-success" type="file"  name="image"></td>
								</tr>
								<tr>
									<td></td>
									<td><input class="btn btn-primary" type="submit"  name="upload" 
									value="Upload"></td>
								</tr>
							</table>
						</form>
					</div>
				</div>	
			</section>
			
			
	</body>
</html>