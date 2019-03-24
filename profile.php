<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
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
	<h2>Profile</h2>
	<h2>Welcome</h2>
	<img src="images/login avatar.png" class="avatar"></img>

	</center>
	<form class="myform" action="profile.php" method="post">
	 <a href="information.php"><input type="button" id="problem_btn" value="Submit Problem"/></a>
	 <a href="index.php"><input type="button" id="logout_btn" value="Logout"/></a>
	</form>
</div>	
</body>
</html>
	