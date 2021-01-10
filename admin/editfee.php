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
                    <h1>Fee structure</h1>
                    <div class="alert alert-dismissable alert-warning">
                        <button data-dismiss="alert" class="close" type="button">&times;</button>
                         Welcome to the fee structure dashboard ! Feel free to edit fee structure section. 
                        <br />
						
						
                        
                    </div>
                </div>
            </div>
         </div> 
		 <!--------------------------------------------------------------->
		 
			<?php 
			if(isset($_POST['upload']))
			{
				$id=$_GET['data_id'];
				$course=$_POST['course'];
				$tuition=$_POST['tuition'];
				$examin=$_POST['examin'];
				$security=$_POST['security'];
				$other=$_POST['other'];
				$total=$tuition+$examin+$security+$other;
				include("connect.php");
				mysqli_query($con,"update fees set course='$course',tuition='$tuition',examin='$examin',security='$security',other='$other',total='$total',status=1 where id=$id");
		        if(mysqli_affected_rows($con)==1)
				{
					?><script> alert(" Data Uploaded Successfully");
						window.location="showfee.php";
					</script><?php
					
				}
				else
				{
					?><script> alert(" Data  not Uploaded Successfully");</script><?php
				}
			}
			?>
	
		 
		 <!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h2 class="text-white">
							 Modify Fee Structure 				
							</h2>	
							<p class="text-white link-nav"><a href="index.php">Dashboard </a>
						</div>	
					</div>
				</div>
			</section>  
			<br>
			<center><h2>Modify Fee Structure</h2></center>
			<section class="info-area pb-40">
				<div class="container-fluid">
				    <div class="col-md-12">
					<!-----------------main content------>
					    <form method="POST" action="" 
			onsubmit="return validate()">
				<?php
					include("connect.php");
					$id=$_GET['data_id'];
					$result=mysqli_query($con,"select * from fees where id=$id and status=1");
					$row = mysqli_fetch_assoc($result);
				?>
				<table class="table">
				<tr>
					<td>Type/Course</td>
					<td>
						<input type="text" name="course" id="course" class="form-control" value="<?php echo $row['course']?>">
						<span class="text-danger" id="course_error"></span>
					</td>
				</tr>
				<tr>
					<td>Tuition Fee</td>
					<td>
						<input type="text" name="tuition" id="tuition" class="form-control" value="<?php echo $row['tuition']?>">
						<span class="text-danger" id="tuition_error"></span>
					</td>
				</tr>
				<tr>
					<td>Examination Fee</td>
					<td>
						<input type="text" name="examin" id="examin" class="form-control" value="<?php echo $row['examin']?>">
						<span class="text-danger" id="examin_error"></span>
					</td>
				</tr>
				<tr>
					<td>Security Fee</td>
					<td>
						<input type="text" name="security" id="security" class="form-control" value="<?php echo $row['security']?>" >
						<span class="text-danger" id="security_error"></span>
					</td>
				</tr>
				<tr>
					<td>Other Fee</td>
					<td>
						<input type="text" name="other" id="other" class="form-control" value="<?php echo $row['other']?>" >
						<span class="text-danger" id="other_error"></span>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input class="btn btn-primary" type="submit"  name="upload" value="Update"></td>
				</tr>
			</table>
			</form>
					</div>
				</div>
			</section>
			
			<script>
			function validate()
			{
				if(document.getElementById("tuition").value=="")
				{
					
					document.getElementById("tuition").focus();
					document.getElementById("tuition_error")
					.innerHTML="This field is required";
					return false;
				}
				else
				{
					var name=document.getElementById("tuition").value;
					var filter=/^([0-9\-])+$/ ;
					if(!filter.test(name))
					{
						document.getElementById("tuition").focus();
						document.getElementById("tuition_error").innerHTML="Please Enter Valid tuition fee";
						return false;
					}
					
				}
				
				if(document.getElementById("examin").value=="")
				{
					
					document.getElementById("examin").focus();
					document.getElementById("examin_error")
					.innerHTML="This field is required";
					return false;
				}
				else
				{
					var name=document.getElementById("examin").value;
					var filter=/^([0-9\-])+$/ ;
					if(!filter.test(name))
					{
						document.getElementById("examin").focus();
						document.getElementById("examin_error").innerHTML="Please Enter Valid examination fee";
						return false;
					}
					
				}
				
				if(document.getElementById("security").value=="")
				{
					
					document.getElementById("security").focus();
					document.getElementById("security_error")
					.innerHTML="This field is required";
					return false;
				}
				else
				{
					var name=document.getElementById("security").value;
					var filter=/^([0-9\-])+$/ ;
					if(!filter.test(name))
					{
						document.getElementById("security").focus();
						document.getElementById("security_error").innerHTML="Please Enter Valid security fee";
						return false;
					}
					
				}
				
				if(document.getElementById("other").value=="")
				{
					
					document.getElementById("other").focus();
					document.getElementById("other_error")
					.innerHTML="This field is required";
					return false;
				}
				else
				{
					var name=document.getElementById("other").value;
					var filter=/^([0-9\-])+$/ ;
					if(!filter.test(name))
					{
						document.getElementById("other").focus();
						document.getElementById("other_error").innerHTML="Please Enter Valid other fee";
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