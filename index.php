<!DOCTYPE html>
<html> 
<head>
   <?php include 'resources/head.php';?>
</head>
<body data-spy="scroll" data-target=".navbar-flat" data-offset="55">
	<!--Loader-->
	<div class="loader"></div>
	<!--Loader-->
	<section id="welcome" class="sectionsplashimage">
		<div class="container indexsignaturecontainer">
			<div class="row">
				<div class="col-xs-10 centered">
					<div>
						<img src="images/signature.svg" class="indexsignature centered img-responsive .captionjs" alt="signature">
					</div>
				</div>
				<div class="col-xs-10 centered">
					<div>
						<a href="#resume" class="borderBtn scrollto">MORE ABOUT ME</a>
					</div>
				</div>
			</div>
		</div>
	</section>
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
								<!--Nav Menu-->
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Navbar Section-->
	<!--Resume Section-->
	<section class="section about firstSec colored" id="resume">
		<div class="container">
			<div class= "row">
				<div class="col-xs-6 profilePic">
					<img src="images/me.jpg" class="img-circle caption" alt="Diego">
				</div>
				<div class="col-xs-10 centered heading">
					<h1>DIEGO RICAURTE</h1>
					<h3>Graphic and Digital Designer</h3>
					<a href="files/resume.pdf" class="borderBtn">DOWNLOAD RESUME</a>
				</div>
			</div>
		</div>
	</section>
	<!--Resume Section-->
	<!--Services Section-->
    <section class="section services" id="about">
		<div class="container">
			<div class= "row">
				<div class="divider"></div>
				<div class="col-xs-10 centered heading">
					<h2>WHO I AM AND WHAT I DO</h2>
					<p>I create logical solutions for my clients </p>
				</div>
				<div class="col-xs-12 centered">
					<p class= "blurb">My name is Diego Ricaurte, and I am a graphic and digital designer from Ellicott City, Maryland. I am passionate about design that 
					is not only pleasing to the eye, but also intuitive to the user. I believe effective design can shed light on solutions that previously
					seemed impossible. I enjoy learning new skills and have a steep learning curve. I love working with others to create the best possible product, and I take pride 
					in my ability to adapt to any setting with any team. With a little help from a cup of coffee, I believe a positive attitude and rigorous work ethic can
					move worlds.
					</p>
				</div>
				<div class="services-inner hidethis col-xs-12 centered">
					<div class="service col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<p class="icon"><i class="screen"></i></p>
						<h4>DIGITAL DESIGN</h4>
					</div> 
					<div class="service col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<p class="icon"><i class="pen"></i></p>
						<h4>GRAPHIC DESIGN</h4>
					</div> 
					<div class="service col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<p class="icon"><i class="tag"></i></p>
						<h4>BRANDING</h4>
					</div> 
					<div class="service col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<p class="icon"><i class="camera"></i></p>
						<h4>PHOTOGRAPHY</h4>
					</div> 
				</div>
			</div>
		</div>
	</section>
	<!--Services Section-->
	<!--Skills Section-->
	<section class="skills section colored skillsimage" id="skills">
		<div class="container">
			<div class= "row">
				<div class="divider" id="skills"></div>
				<div class="col-xs-10 centered heading">
					<h2>TECHNICAL SKILLS</h2>
				</div>
				<!--Skills Items-->
				<div id="skills-slide">
					<div class="skill">
						<span class="chart" data-percent="91">
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
						<span class="chart" data-percent="92">
							<span class="percent"></span>
						</span>
						<h4>INDESIGN</h4>
					</div>
					<div class="skill">
						<span class="chart" data-percent="85">
							<span class="percent"></span>
						</span>
						<h4>LIGHTROOM</h4>
					</div>
					<div class="skill">
						<span class="chart" data-percent="80">
							<span class="percent"></span>
						</span>
						<h4>PHOTOGRAPHY</h4>
					</div>
					<div class="skill">
						<span class="chart" data-percent="85">
							<span class="percent"></span>
						</span>
						<h4>HTML</h4>
					</div>
					<div class="skill">
						<span class="chart" data-percent="90">
							<span class="percent"></span>
						</span>
						<h4>CSS</h4>
					</div>
					<div class="skill">
						<span class="chart" data-percent="80">
							<span class="percent"></span>
						</span>
						<h4>JQUERY</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Skills Section-->
	<!--Portfolio Section-->
	<section class="section portfolio" id="portfolio">
		<div class="container">
			<div class="row centered">
			 	<div class="divider"></div>
				<div class="col-xs-10 centered heading">
					<h2>PORTFOLIO</h2>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 thumb">
	                <a href="signature-website-spread.php">
						<div class="figure cap-bot">
							<img class="thumbimage img-responsive centered" src="images/portfolio-thumbs/signature-website-thumb.png" alt="">					
							<div class="figcaption">
								<h5>Signature Website</h5>
							</div>
						</div>
					</a>
	            </div>
	            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 thumb">
	                <a href="the-key-elements-spread.php">
						<div class="figure cap-bot">
							<img class="thumbimage img-responsive centered" src="images/portfolio-thumbs/the-key-elements-thumb.png" alt="">					
							<div class="figcaption">
								<h5>The Key Elements</h5>
							</div>
						</div>
					</a>
	            </div>
	            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 thumb">
	                <a href="dr-design-spread.php">
						<div class="figure cap-bot">
							<img class="thumbimage img-responsive centered" src="images/portfolio-thumbs/dr-design-thumb.png" alt="">						
							<div class="figcaption">
								<h5>DR Design</h5>
							</div>
						</div>
					</a>
	            </div>
	            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 thumb">
	                <a href="superstar-fitness-spread.php">
						<div class="figure cap-bot">
							<img class="thumbimage img-responsive centered" src="images/portfolio-thumbs/superstar-fitness-thumb.png" alt="">
							<div class="figcaption">
								<h5>Tapout: Superstar Fitness</h5>
							</div>
						</div>
					</a>
	            </div>
	            
	            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 thumb">
	                <a href="gtech-designs-spread.php">
						<div class="figure cap-bot">
							<img class="thumbimage img-responsive centered" src="images/portfolio-thumbs/gtech-thumb.png"  alt="">						
							<div class="figcaption">
								<h5>GTech Designs</h5>
							</div>
						</div>
					</a>
	            </div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 thumb">
	                <a href="agv-sport-spread.php">
						<div class="figure cap-bot">
							<img class="thumbimage img-responsive centered" src="images/portfolio-thumbs/agv-sport-thumb.png" alt="">						
							<div class="figcaption">
								<h5>AGV Sport</h5>
							</div>
						</div>
					</a>
	            </div>
	            
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 thumb">
	                <a href="arms-race-spread.php">
						<div class="figure cap-bot">
							<img class="thumbimage img-responsive centered" src="images/portfolio-thumbs/arms-race-thumb.png" alt="">						
							<div class="figcaption">
								<h5>Arms Race</h5>
							</div>
						</div>
					</a>
	            </div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 thumb">
	                <a href="photography-spread.php">
						<div class="figure cap-bot">
							<img class="thumbimage img-responsive centered" src="images/portfolio-thumbs/photography-thumb.png" alt="">						
							<div class="figcaption">
								<h5>Photography</h5>
							</div>
						</div>
					</a>
	            </div>
		    </div>
	    </div>
    </section> 
    <!-- End of Portfolio Section --> 
	<!--Footer Section-->
	<footer class="section">
	  <div class="container">
	    <div class="row">
	          <div class="col-xs-12 ">
	              <div class="col-xs-2 stampcontainer center-block">
	                <a href="#welcome" class="scrollto">
	                  <img class="stamp centered" src="images/badge.svg" alt="">
	                </a>
	              </div>
	          </div> 
	        <div class="col-xs-12">
	          <ul class= "socialmedia">
	            <li><a target="_blank" class="facebook" href="https://www.facebook.com/diegoricaurtedesign/"></a></li>
	            <li><a target="_blank" class="linkedin" href="https://www.linkedin.com/in/diego-ricaurte-91b41563/"></a></li>
	            <li><a target="_blank" class="instagram" href="https://www.instagram.com/daricaurte/"></a></li>
	            <li><a target="_blank" class="pinterest" href="https://www.pinterest.com/daricaurte/pins/"></a></li>
	            <li><a target="_blank" class="behance" href="https://www.behance.net/diegoricaurte"></a></li>
	          </ul>
	          <p>&copy; 2016 diegoricaurte.website</p>
	        </div>
	    </div>
	  </div>
	</footer>
	<!--Footer Section-->
	<!--Scripts-->	
	<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/jquery.easypiechart.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="js/jquery.inview.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<!--Scripts-->
</body>
</html>