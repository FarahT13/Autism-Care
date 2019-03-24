<?php
require 'database/configaration.php';
?>
!DOCTYPE html
<html>
      <head>
         <title>Information Form</title>
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
				 <li><a href="profile.php">Profile</a></li>
		   
		     </ul>
		  </div>
		</div>
		<div id="main-wrapper">
	<center>
	<h2>Information Form</h2>
	<img src="images/login avatar.png" class="avatar"></img>

	</center>
	<form  class="myform" action="information.php" method="post">
	<label><b>Patient's Name: </b></label><br>
	<input name="Patient_Name" type="text" class="inputvalues" placeholder="Type patient's name" required/><br>
	<label><b>Age:</b></label><br>
	<input name="Age" type="text" class="inputvalues" placeholder="Type Age" required/><br>
	<label><b>Father's Name: </b></label><br>
	<input  name="Father_Name" type="text" class="inputvalues" placeholder="Type father's name" required/><br>
	<label><b>Father's Occupation: </b></label><br>
	<input  name="Father_Occupation" type="text" class="inputvalues" placeholder="Type father's occupation" required/><br>
	<label><b>Mother's Name: </b></label><br>
	<input  name="Mother_Name" type="text" class="inputvalues" placeholder="Type mother's name" required/><br>
	<label><b>Mother's Occupation: </b></label><br>
	<input  name="Mother_Occupation" type="text" class="inputvalues" placeholder="Type mother's occupation" required/><br>
	<label><b>Monthly Income: </b></label><br>
	<input  name="Monthly_Income" type="text" class="inputvalues" placeholder="Type monthly income" required/><br>
	<label><b>Child's problem: </b></label><br>
	<input  name="Child_problem" type="text" class="inputvalues" placeholder="Type problem" required/><br>
	<a href="SpecialistList.php"><input name="Select_Specialist" type="submit" id="SelectSpecialist_btn" value="Select Specialist"/><br>
	<a href="profile.php"><input type="button" id="back_btn" value="Back"/></a>
	</form>
	<?php
	if(isset($_POST['Select_Specialist']))
	{
		//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
		    $Patient_Name= $_POST ['Patient_Name'];
		    $Age= $_POST ['Age'];
		    $Father_Name= $_POST ['Father_Name'];
			$Father_Occupation= $_POST ['Father_Occupation'];
			$Mother_Name= $_POST ['Mother_Name'];
		    $Mother_Occupation= $_POST ['Mother_Occupation'];
		    $Monthly_Income= $_POST ['Monthly_Income'];
		    $Child_problem= $_POST ['Child_problem'];
		    $query= "select *from inform_table WHERE Patient_Name='$Patient_Name'";
			$query_run= mysqli_query($con,$query);
			$query="insert into inform_table values('$Patient_Name','$Age','$Father_Name','$Father_Occupation','$Mother_Name','$Mother_Occupation','$Monthly_Income','$Child_problem')";
				$query_run= mysqli_query($con,$query);
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("Select Specialist") </script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error!") </script>';
				}
		
	}
	?>
    </body>
</html>