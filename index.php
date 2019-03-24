<?php
    session_start();
    require 'database/configaration.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
	<h2>Login Form</h2>
	<img src="images/login avatar.png" class="avatar"></img>

	</center>
	<form  class="myform" action="index.php" method="post">
	<label><b>Username: </b></label><br>
	<input name="username" type="text" class="inputvalues" placeholder="Type your username"/><br>
	<label><b>password:</b></label><br>
	<input name="password" type="password" class="inputvalues" placeholder="Type your username"/><br>
	<input name="login" type="submit" id="login_btn" value="Login"/><br>
	<a href="Register.php"><input type="button" id="register_btn" value="Register"/></a>
	</form>
	<?php
	if (isset($_POST['login']))
	{ 
            $username=$_POST['username'];
			$password=$_POST['password'];
			$query="select *from login_db WHERE username='$username' ANd password='$password'";
			$query_run=mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{$_SESSION['username']= $username;
		     header('location:information.php');
			}
			else
			{
				echo'<script type="text/javascript">alert("Invalid credentials")</script>';
			}
	
	
	
	
	}
	?>
  </div>
</body>
</html>