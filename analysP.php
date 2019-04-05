<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Analyst Page</title>
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
			     <li><a href="Register.php">Register</a></li>
		   
		     </ul>
		  </div>
		</div>
	<div id="main-wrapper">
	<center>
	<h2>Profile</h2>
	<h3>Welcome
	   <?php echo $_SESSION['User_name'] ?>
	</h3>
	<img src="images/login avatar.png" class="avatar"></img>

	</center>
	<form class="myform" action="profile.php" method="post">
	 <a href="ViewIP.php"><input type="button" id="View_btn" value="View Problem Form"/></a>
	 <a href="index1.php"><input name="logout" type="submit" id="logout_btn" value="Logout"/></a>
	</form>
	<?php
	    if(isset($_POST['logout']))
		{
			session_destroy();
		    header('location:index1.php');
		}
	?>
</div>	
</body>
</html>