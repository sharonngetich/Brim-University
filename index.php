 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,inititial scale=1.0">
<link rel="stylesheet"  href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,600;0,700;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> Brim University
</title>
</head>
<body>
	<section class="header">
		<nav>
		<a href="index.html"><img src="images/logo.jpg">
		<div class="nav-links" id="navLinks">
			<i class="fa fa-times" onclick="hideMenu()"></i>
			<ul> 

			  <li><a href="Home.html">HOME</a></li>
			   <li><a href="About.html">ABOUT</a></li>
			    <li><a href="Course.html">COURSE</a></li>
			    <li><a href="Facil.html">FACILITIES</a></li>
			     <li><a href=".html">RESEARCH</a></li>
			   <li><a href="Contact.html">CONTACT</a></li>
				
			</li>
		</ul>
		</div>
		<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		
         

		<div class="text-box">
			<h1>World's Biggest University</h1>
			<p> This is the best university in africa</p>

		

		<a href=""class="hero-btn">Visit Us To Know More</a>
	</div>
	</section>
	


	
	<section class="testimonials">
		<h1>What Our Students Says</h1>
		<p>Read what current students and alumni have to say about their experience</p>

		<div class="row">
			<div class="testimonials-col">
				<img src="images/kwetu.jpg">
				<div>
					<p> “Will forever be grateful for this fun-filled and enriching experience. Would love to come back and be a part of you again!”</p>
					<h3>Mitch Kwetu</h3>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
			</div>
				<div class="testimonials-col">
				<img src="images/dr.jpg">
				<div>
					<p> "The Criminal Justice Master's program has allowed me to explore and learn in a completely different field from my undergrad. The wide variety of classes and knowledgeable faculty makes studying in a new discipline interesting, informative, challenging and rewarding.</p>
					<h3>Dr Kioko</h3>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
			</div>
				<div class="testimonials-col">
				<img src="images/am.jpg">
				<div>
					<p> “My overall experience exceeded my expectations. I had a lovely time here... The student ambassadors are very friendly and helped us feel welcome here. All the social programme were very fun, and this programme will be in my fondest memories.”</p>
					<h3>Ambrose</h3>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
			</div>



	</section>
	<section class="cta">
		<h1>Enroll For Our various Online and On campus Courses<br>Any Where From the World</h1>
		<a href="" class="hero-btn">CONTACT US</a>
		


	</section>

	


</section>


	<!- - - -  -JavaScript for Toggle Menu ------>
	<script >
		var navLinks = document.getElementById('navLinks');

		function showMenu() {
			navLinks.style.right ="0";

		}
		function hideMenu() {
			navLinks.style.right ="-200px";
			
		}
	</script>
</body>
</html>