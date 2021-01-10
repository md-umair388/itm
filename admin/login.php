<?php session_start();?>
<html>
	<head>
		<title>Login Here</title>
		<script>
			function validate()
			{
				if(document.getElementById("uname").value=="")
				{
					
					document.getElementById("uname").focus();
					document.getElementById("uname_error")
					.innerHTML="User name is required";
					return false;
				}
				
				if(document.getElementById("pass").value=="")
				{
					document.getElementById("pass").focus();
					document.getElementById("pass_error").innerHTML="Please Enter Password";
					return false;
				}
			}
			
		</script>
		<style>
			.main{
				background:#efefef;
				padding:20px;
			}
			h1{
				text-align:center;
				border-bottom:5px solid #1e6a9b;
				color:green;
			}
			input[type='text'],select,
			input[type='password']
			{
				height:35px;
				width:300px;
				border:1px solid #333;
				border-radius:5px;
			}
			textarea{
				height:60px;
				width:300px;
				border:1px solid #333;
				border-radius:5px;
			}
			table tr td{padding:10px;}
			input[type='submit']
			{
				background:green;
				color:#fff;
				padding:10px 25px;
				font-size:18px;
				border:none;
				border-radius:5px;
				box-shadow:2px 2px 5px #333;
			}
			input[type='submit']:hover
			{
				box-shadow:4px 4px 10px #333;
				cursor:pointer;
			}
			span{
				font-size:14px;
				color:Red;
			}
		</style>
	</head>
	
	<body align="center">
		<div class="main">
			
			<h1>Login Here</h1>
			  
			  <?php 
			if(isset($_POST['login']))
			{
				$uname=$_POST['uname'];
				$pwd=md5($_POST['pass']);
				//COnnect to DB
				include("connect.php");
				
				$result=mysqli_query($con,
				"select *from admin where username='$uname'");
				if(mysqli_num_rows($result)==1)
				{
					$row=mysqli_fetch_assoc($result);
					if($row['status']=="1")
					{
						if($row['password']==$pwd)
						{
							
								//redirect to Home Page
								$_SESSION['user_login']=$row['id'];
								header("Location:index.php");
							
						}
						else
						{
							echo "<p class='text-center alert alert-danger'>Password not matched 
							for the Username</p>";
						}
						
					}	
					else
					{
					  echo "<p>Please Activate your account</p>";
					}
						
						
					
				}
				else
				{
					echo "<p class='text-center alert alert-danger'>Sorry! Username Does not
					Exists</p>";
				}
				
			}
			?>
			
			<form method="POST" action="" onsubmit="return validate()">
				<table align="center">
				
				<tr>
					<td>User Name*</td>
					<td>
						<input type="text" name="uname"
						id="uname" onblur="checkTextBox(this)">
						<br><span id="uname_error"></span>
					</td>
				</tr>
				<tr>
					<td>Password*</td>
					<td>
						<input type="password" name="pass"
						id="pass" onblur="checkTextBox(this)">
						<br><span id="pass_error"></span>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"  name="login" 
					value="Login"></td>
				</tr>
			</table>
			</form>
		</div>
	</body>
</html>