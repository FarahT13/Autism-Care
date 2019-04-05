<?php
    session_start();
    require 'database/configaration.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Analyst Login Page</title>
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
	<form  class="myform" action="index1.php" method="post">
	<label><b>Username: </b></label><br>
	<input name="User_name" type="text" class="inputvalues" placeholder="Type your username"/><br>
	<label><b>password:</b></label><br>
	<input name="pass_word" type="password" class="inputvalues" placeholder="Type your username"/><br>
	<a href="analysP.php"><input name="loginA" type="submit" id="Alogin_btn" value="Login as Analyst"/></a>
	<a href="AnalystR.php"><input type="button" id="register_btn" value="Register as Analyst"/></a>
	</form>
	<?php
	if (isset($_POST['loginA']))
	{ 
            $User_name=$_POST['User_name'];
			$pass_word=$_POST['pass_word'];
			$query1="select *from login_analyst WHERE User_name='$User_name' ANd pass_word='$pass_word'";
			$query_run1=mysqli_query($con,$query1);
			if(mysqli_num_rows($query_run1)>0)
			{$_SESSION['User_name']= $User_name;
		     header('location:analysP.php');
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