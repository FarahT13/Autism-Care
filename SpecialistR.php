<?php
require 'database/configaration.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Specialist Registration Page</title>
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
			     <li><a href="homepage.php">About Us</a></li>
			     <li><a>Login</a>
				       <ul>
				         <li><a href="index.php">Login as User</a></li>
					     <li><a href="index1.php">Login as Analyst</a></li>
					     <li><a href="index2.php">Login as Specialist</a></li>
				       </ul>
				 </li>
				 <li><a>Register</a>
				       <ul>
				         <li><a href="Register.php">Register as User</a></li>
					     <li><a href="AnalystR.php">Register as Analyst</a></li>
					     <li><a href="SpecialistR.php">Register as Specialist</a></li>
				       </ul>
				 </li>
		   
		      </ul>
		  </div>
		</div>
	<div id="main-wrapper">
	<center>
	<h2>Registration Form</h2>
	<img src="images/login avatar.png" class="avatar"></img>

	</center>
	<form  class="myform" action="SpecialistR.php" method="post">
	<label><b>Username: </b></label><br>
	<input name="U_name" type="text" class="inputvalues" placeholder="Type your username" required/><br>
	<label><b>password:</b></label><br>
	<input name="P_word" type="password" class="inputvalues" placeholder="Your password" required/><br>
	<label><b>Confirm password: </b></label><br>
	<input  name="confirmpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
	<a href="SpecialP.php"><input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/></a><br>
	<a href="index2.php"><input type="button" id="back_btn" value="Back"/></a>
	</form>
	<?php
	if(isset($_POST['submit_btn']))
	{
		//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
		$U_name= $_POST ['U_name'];
		$P_word= $_POST ['P_word'];
		$confirmpassword= $_POST ['confirmpassword'];
		if($P_word==$confirmpassword)
		{
			$query= "select *from login_specialist WHERE U_name='$U_name'";
			$query_run= mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				echo '<script type="text/javascript"> alert("User exists") </script>';
			}
			else
			{
				$query="insert into login_specialist values('$U_name','$P_word')";
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