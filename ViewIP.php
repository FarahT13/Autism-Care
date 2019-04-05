!DOCTYPE html
<html>
      <head>
         <title>Problem View Page</title>
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
	<h2>Patient's Problem Form</h2>
	<img src="images/login avatar.png" class="avatar"></img>

	</center>
	<form  class="myform" action="ViewIP.php" method="post">
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
	<a href="analysP.php"><input name="button" type="submit" id="VFile_btn" value="View Files"/><br>
	<a href="analysP.php"><input name="button" type="submit" id="feedback_btn" value="Write Feedback"/><br>
	</form>

    </body>
</html>