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
                    <h1>Our Institution</h1>
                    <div class="alert alert-dismissable alert-warning">
                        <button data-dismiss="alert" class="close" type="button">&times;</button>
                         Welcome to the our institution dashboard ! Feel free to delete and modify our institution section. 
                        <br />
						
						
                        
                    </div>
                </div>
            </div>
         </div> 
		 <!--------------------------------------------------------------->
		 <!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h2 class="text-white">
							 Show Institution 				
							</h2>	
							<p class="text-white link-nav"><a href="index.php">Dashboard </a>
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
			<form action="" method="POST"><table class="table">
			            <tr>
							<td><b>Name</b></td>
							<td><b>Description</b></td>
							<td><b>Image</b></td>
							<td><b>Delete</b></td>
							<td><b>Edit</b></td>
					   </tr>

			<?php
			  include("connect.php");
			  $result=mysqli_query($con,"select *from institution where status=1");  
			   while( $row=mysqli_fetch_assoc($result))
			   {
			    ?>
			    <tr>
					        <td><?php echo ucwords($row['name']);?></td>
							<td><?php echo ucwords($row['description']);?></td>
							<td><a href='../img/institution/<?php echo $row['photo'] ?>' class="btn btn-primary text-uppercase">Photo</a></td>
							<td><a href='showinstitute.php?data_id=<?php echo $row['id'] ?>' class="btn btn-primary text-uppercase"  onclick=' return deletebyid();'>Delete</a></td>
							<td><a href='editinstitute.php?data_id=<?php echo $row['id'] ?>' class="btn btn-primary text-uppercase"  onclick='javascript:return confirm("Sure to edit ?" );'>Edit</a></td>
				</tr>
			    <?php
			   }
			   ?>
			  </table></form>
			  </div></div>
			  </section>
			  <script>
			    function deletebyid()
				{ if(confirm("Sure You Want to Delete"))
					{<?php
                        $id=$_GET['data_id'];
                       mysqli_query($con,"update institution set status=0 where id='$id'");
					?>
					   window.location="showinstitute.php";
					}
					
				}
			  </script>								    			

	</body>
</html>		 
			