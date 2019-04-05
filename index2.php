<?php
    session_start();
    require 'database/configaration.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Specialist Login Page</title>
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
	<h2>Login Form</h2>
	<img src="images/login avatar.png" class="avatar"></img>

	</center>
	<form  class="myform" action="index2.php" method="post">
	<label><b>Username: </b></label><br>
	<input name="U_name" type="text" class="inputvalues" placeholder="Type your username"/><br>
	<label><b>password:</b></label><br>
	<input name="P_word" type="password" class="inputvalues" placeholder="Type your username"/><br>
	<a href="SpecialP.php"><input name="loginS" type="submit" id="Slogin_btn" value="Login as Specialist"/></a>
	<a href="SpecialistR.php"><input type="button" id="register_btn" value="Register as Specialist"/></a>
	</form>
	<?php
	if (isset($_POST['loginS']))
	{ 
            $U_name=$_POST['U_name'];
			$P_word=$_POST['P_word'];
			$query2="select *from login_specialist WHERE U_name='$U_name' ANd P_word='$P_word'";
			$query_run2=mysqli_query($con,$query2);
			if(mysqli_num_rows($query_run2)>0)
			{$_SESSION['U_name']= $U_name;
		     header('location:SpecialP.php');
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