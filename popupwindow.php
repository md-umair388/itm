<html>

<head>
<style>
	button:hover{
		background:lightBlue;
	}
	button{
		  position:absolute;
		  top:0;
		  right:0;
		  padding: 0 5px;
		  font-size:1.3em;
		  font-weight:bold;
		  border:none;
		  cursor:pointer
		}
	#dialog{
		background:repeating-linear-gradient(45deg,#5f9ea0,#606dbc 10px,#465298 10px,#465298 20px);
	}
</style>
</head>
<body>
		 <?php			 
			 include("connect.php");
			  $result=mysqli_query($con,"select * from popwindow ORDER BY id DESC LIMIT 1 ");
			  $row=mysqli_fetch_assoc($result);
			?>
		<dialog id="dialog" open>
			<div >
				<div id="heading">
				<center><font size="5" color="white" id="head"><b>ITM:Group of Institutions</b></font></center>
				<button id="close" style= "float:right;" type="button" data-dismiss="modal">&times;</button>
				</div>
				<hr/>
				<div id="content">
					<a href="#">
						<?php  echo ("<img  src='./img/popwindow/".$row['photo']."' style='width:656px;height:496px;border-radius:15px;padding:8px'");?>
					</a>
				</div>
			</div>
		</dialog>
<script type="text/JavaScript">
	(function() {  
		var dialog = document.getElementById('dialog');   
		document.getElementById('close').onclick = function() {  
			dialog.close();  
		};  
	})(); 
</script>
</body>
</html>