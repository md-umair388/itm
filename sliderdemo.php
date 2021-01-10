<!DOCTYPE html>
<html>
<head>
    
    <link href="2/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="2/ninja-slider.js" type="text/javascript"></script>
    
</head>
<body>
    <br><br> welcome
    <!--start  new responsive slider-->
    <div id="ninja-slider"  >    
        <div class="slider-inner" >
            <ul>
			    <?php 
				                  include("connect.php");
							     $condition="Slider";
								 $result=mysqli_query($con,"select * from photos where type='$condition' and status=1");
								 while($row=mysqli_fetch_assoc($result))
								 { ?> 
										<li>
											<?php echo ("<a class='ns-img' href='img/photos/".$row['photo']."'> </a>");?>
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
       
</body>
</html>
