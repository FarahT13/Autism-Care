<?php
require 'database/configaration.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="top"><p id="date">
		<script>
		    document.getElementByID("date").innerHTML= Date();
		</script>
		</p>
		</div>
		<div id="header">
		   <img style="float:center;margin-top:5px;" src="images/Logo.png"/>
		
		</div>
		<div id="menubar">
		  <div id="menu">
		     <ul>
			     <li><a href="homepage.php">Home</a></li>
			     <li><a href="About.php">About Us</a></li>
			     <li><a href="index.php">Login</a></li>
			     <li><a href="Register.php">Register</a></li>
		   
		     </ul>
		  </div>
		</div>
	<div id="main-wrapper">
	<center>
	<h2>Registration Form</h2>
	<img src="images/login avatar.png" class="avatar"></img>

	</center>
	<form  class="myform" action="Register.php" method="post">
	<label><b>Username: </b></label><br>
	<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
	<label><b>password:</b></label><br>
	<input name="password" type="password" class="inputvalues" placeholder="Your password" required/><br>
	<label><b>Confirm password: </b></label><br>
	<input  name="confirmpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
	<a href="profile.php"><input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/></a><br>
	<a href="index.php"><input type="button" id="back_btn" value="Back"/></a>
	</form>
	<?php
	if(isset($_POST['submit_btn']))
	{
		//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
		$username= $_POST ['username'];
		$password= $_POST ['password'];
		$confirmpassword= $_POST ['confirmpassword'];
		if($password==$confirmpassword)
		{
			$query= "select *from login_db WHERE username='$username'";
			$query_run= mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				echo '<script type="text/javascript"> alert("User exists") </script>';
			}
			else
			{
				$query="insert into login_db values('$username','$password')";
				$query_run= mysqli_query($con,$query);
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("registered") </script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error!") </script>';
				}
			}
		}
		else
		{
			echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';
		}
	}
	?>
	</div>

</body>
</html>