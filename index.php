<!DOCTYPE html>
<html> 
<head>
   <?php include 'resources/head.php';?>
</head>
<body data-spy="scroll" data-target=".navbar-flat" data-offset="55">
	<!--Loader-->
	<div class="loader">
	</div>
	<!--Loader-->
	<section class="splashimage" id="welcome">
		<div class="container intromessage">
			<div class= "row">
				<div class="col-xs-12">
					<div>
						<img src="images/indexsignature.png" class="indexsignature centered img-responsive">
					</div>
				</div>
			</div>
			<div class= "row">
				<div class="col-xs-12">
					<div>
						<a href="#resume" class="borderBtn scrollto">MORE ABOUT ME</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Navbar Section-->
	<section id = "navigation-bar"> 
		<div class="navbar navbar-flat">
			<div class="container">
				<div class = "row">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">MENU</a>
				</div>
				<div class="navbar-collapse collapse">
					<nav>
						<ul class="nav navbar-nav">
							<!--Nav Menu-->
							<li class="active"><a href="#welcome" class="scrollto">HOME</a></li>
							<li><a href="#resume" class="scrollto">RESUME</a></li>
							<li><a href="#about" class="scrollto">ABOUT</a></li>
							<li><a href="#skills" class="scrollto">SKILLS</a></li>
							<li><a href="#portfolio" class="scrollto">PORTFOLIO</a></li>
							<!-- <li><a href="#contact" class="scrollto">CONTACT</a></li> -->
							<!--Nav Menu-->
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!--Navbar Section-->
	<!--Resume Section-->
	<section class="hero firstSec section colored" id="resume">
		<div class="container">
			<div class= "row">
				<div class="col-xs-6 col-md-4 profilePic">
					<img src="images/me.jpg" alt="" class="img-circle">
				</div>
				<div class="heading">
					<h1>DIEGO RICAURTE</h1>
					<h3>Graphic and Web Designer</h3>
					<a href="files/resume.pdf" class="borderBtn">DOWNLOAD RESUME</a>
				</div>
			</div>
		</div>
	</section>
	<!--Resume Section-->
	<!--Portfolio Section-->
	<section class="portfolio section" id="portfolio">
		<div class="container">
			<div class="row">
			 	<div class="divider"></div>
				<div class="heading">
					<h2>PORTFOLIO</h2>
				</div>
	            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 index thumb">
	                <a class="index thumbnail" href="the-key-elements-spread.php">
	                    <img class="img-responsive" src="images/portfolio-thumbs/thekeyelements.png" alt="">
		                <div class = "index caption">
		         			<h4>The Key Elements</h4>
		         		</div>
	                </a>
	            </div>
	            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 index thumb">
	                <a class="index thumbnail" href="atom-family-spread.php">
	                    <img class="img-responsive" src="images/portfolio-thumbs/atomfamily.png" alt="">
	                	<div class = "index caption">
	         				<h4>Atom Family</h4>
	         			</div>
	                </a>
	            </div>
	            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 index thumb">
	                <a class="index thumbnail" href="agv-sport-spread.php">
	                    <img class="img-responsive" src="images/portfolio-thumbs/agvsport.png" alt="">
	                	<div class = "index caption">
	         				<h4>AGV Sport</h4>
	         			</div>
	                </a>
	            </div>
	            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 index thumb">
	                <a class="index thumbnail" href="dr-design-spread.php">
	                    <img class="img-responsive" src="images/portfolio-thumbs/drdesign.png" alt="">
		                <div class = "index caption">
		         			<h4>DR Design</h4>
		         		</div>
	                </a>
	            </div>
   				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 index thumb">
	                <a class="index thumbnail" href="tournament-of-heroes-spread.php">
	                    <img class="img-responsive" src="images/portfolio-thumbs/tournamentofheroes.png"  alt="">
		                <div class = "index caption">
		         			<h4>Tournament Of Heroes</h4>
		         		</div>
	                </a>
	            </div>
	            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 index thumb">
	                <a class="index thumbnail" href="hard-rock-cafe-baltimore-spread.php">
	                    <img class="img-responsive" src="images/portfolio-thumbs/hardrockcafebaltimore.png" alt="">
		                <div class = "index caption">
		         			<h4>Hard Rock Cafe Baltimore</h4>
		         		</div>
	                </a>
	            </div>
	            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 index thumb">
	                <a class="index thumbnail" href="wake-will-spread.php">
	                    <img class="img-responsive" src="images/portfolio-thumbs/wakewill.png" alt="">
		                <div class = "index caption">
		         			<h4>Wake Will</h4>
		         		</div>
	                </a>
	            </div>
	            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 index thumb">
	                <a class="index thumbnail" href="arms-race-spread.php">
	                    <img class="img-responsive" src="images/portfolio-thumbs/armsrace.png" alt="">
	                <div class = "index caption">
	         			<h4>Arms Race</h4>
	         		</div>
	                </a>
	            </div>
	        </div>
	   	</div>
    </section> 
    <!-- End of Portfolio Section --> 
	<!--Skills Section-->
	<section class="skills section colored" id="skills">
		<div class="container">
			<div class= "row">
				<div class="divider" id"skills"></div>
				<div class="heading">
					<h2>TECHNICAL SKILLS</h2>
				</div>
				<div id="skills-slide">
					<!--Skills Items-->
					<div class="skill">
						<span class="chart" data-percent="70">
							<span class="percent"></span>
						</span>
						<h4>PHOTOSHOP</h4>
					</div>
					<div class="skill">
						<span class="chart" data-percent="95">
							<span class="percent"></span>
						</span>
						<h4>ILLUSTRATOR</h4>
					</div>
					<div class="skill">
						<span class="chart" data-percent="75">
							<span class="percent"></span>
						</span>
						<h4>INDESIGN</h4>
					</div>
					<div class="skill">
						<span class="chart" data-percent="85">
							<span class="percent"></span>
						</span>
						<h4>HTML5</h4>
					</div>
					<div class="skill">
						<span class="chart" data-percent="80">
							<span class="percent"></span>
						</span>
						<h4>CSS</h4>
					</div>
					<div class="skill">
						<span class="chart" data-percent="65">
							<span class="percent"></span>
						</span>
						<h4>PHP</h4>
					</div>
					<div class="skill">
						<span class="chart" data-percent="55">
							<span class="percent"></span>
						</span>
						<h4>MYSQL</h4>
					</div>
					<div class="skill">
						<span class="chart" data-percent="70">
							<span class="percent"></span>
						</span>
						<h4>JQUERY</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Skills Section-->
	<!--Services Section-->
    <section class="services section" id="about">
		<div class="container">
			<div class= "row">
				<div class="divider"></div>
				<div class="heading">
					<h2>WHO I AM AND WHAT I DO</h2>
					<p>I create logical solutions for my clients </p>
				</div>
				<div class="blurb">
					<p>My name is Diego Ricaurte, and I am a graphic and web designer from Howard County, Maryland. I am passionate about design that 
					is not only pleasing to the eye, but also intuitive to the user. I believe effective design can shed light on solutions that previously
					seemed impossible. I enjoy learning new skills and have a steep learning curve. I love working with others to create the best possible product, and I take pride 
					in my ability to adapt to any setting with any team. With a little help from a cup of coffee, I believe a positive attitude and rigorous work ethic can
					move worlds.
					</p>
				</div>
				<div class="services-inner hidethis">
					<div class="service col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<p class="icon"><i class="screen"></i></p>
						<h3>WEB DESIGN</h3>
					</div> 
					<div class="service col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<p class="icon"><i class="heart"></i></p>
						<h3>UX/UI DESIGN</h3>
					</div> 
					<div class="service col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<p class="icon"><i class="tag"></i></p>
						<h3>BRANDING</h3>
					</div> 
					<div class="service col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<p class="icon"><i class="camera"></i></p>
						<h3>PHOTOGRAPHY</h3>
					</div> 
				</div>
			<div class= "row">
		</div>
	</section>
	<!--Services Section-->
	<!--Contact Section-->
	<!-- <section class="contact section" id="contact">
		<div class="container">
			<div class="divider"></div>
			<div class="heading">
				<h2>SHOOT A MESSAGE</h2>
			</div>
			<div class="form">
				<div class="col-xs-12 col-sm-9 col-md-9 centered">
					<form action="send.php" onSubmit="return false;" id="xhr" method="post" name="contactform" class="contactform">
						<input type="hidden" value="contact" name="type">
						<input name="send[name]" type="text" class="col-xs-12 col-sm-6 col-md-6 col-lg-6" placeholder="Your name..." data-validation="required">
						<input name="send[email]" type="email" class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 no-margin" placeholder="Your email..." data-validation="email">
						<textarea name="send[message]" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your message..." data-validation="required"></textarea>
						<p><button class="submit sendcontact">SEND MESSAGE</button></p>
					</form>
					<p class="error"></p>
				</div>
			</div>
		</div>
	</section> -->
	<!--Contact Section-->
	<!--Footer Section-->
  	<?php include 'resources/footer.php';?>
	<!--Footer Section-->
<!--Scripts-->	
	<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/jquery.easypiechart.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.form-validator.min.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="js/jquery.inview.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
<!--Scripts-->
</body>
</html>