<html>
      <head>
         <title>Autism Care</title>
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
			     <li><a href="index.php">Login</a></li>
			     <li><a href="Register.php">Register</a></li>
		   
		     </ul>
		  </div>
		</div>
		<div class="post_body">
		   <div class="slider">
		      <div class="slideshow-container">
			     <div class="mySlides fade">
				     <img src="images/slide1.jpg" style="width:1100px; heigt:100px;">
				 </div>
			  </div>
		   <div>
		</div>
    </body>
	<script>
	var slideIndex=0;
	showSlides();
	function showSlides(){
		var i;
		var slides=document.getElementByClassName("mySlides");
		var dots=document.getElementByClassName("dot");
		for(i=0;i<slides.length;i++)
		{
			slides[i].style.display="none";
		}
		slideIndex++;
		if(slideIndex>slides.length){slideIndex=1}
		for(i=0;i<dots.length;i++){
		dots[i].className = dots[i].className.replace("active","");
		}
		slides[slideIndex-1].style.display="block";
		dots[slideIndex-1].className+="active";
		setTimeout(showSlides,2000);
	}
	</script>
</html>
