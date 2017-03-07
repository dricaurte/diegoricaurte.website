<!DOCTYPE html>
<html> 
<head>
   <?php include 'resources/head.php';?>
</head>
<body data-spy="scroll" data-target=".navbar-flat" data-offset="55">
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
                <li><a href="index.php#welcome">HOME</a></li>
                <li><a href="index.php#resume"">RESUME</a></li>
                <li><a href="index.php#about">ABOUT</a></li>
                <li><a href="index.php#skills">SKILLS</a></li>
                <li><a href="index.php#portfolio">PORTFOLIO</a></li>
                <!--Nav Menu-->
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Navbar Section-->
  <section class="portfolioitem section firstSec">
    <div class= "container">
      <div class= "row">
        <div class= "col-xs-8 centered">
          <div class=" heading">
            <h2 class="portfoliotitle">Signature Website</h2>
            <h4> Brand / Digital / UI <h4> 
              <p> <b> Objective: </b> The primary objective in creating my own online website and portfolio was to give potential employers and recruiters an impression of what I am capable of as a digital and graphic designer. The positive aesthetic and digital experience should leave the user with a sense of my skill set as a digital and graphic designer, and lead to professional design opportunities. </p>
              <p> <b> Challenge: </b> The target audience is a design recruiter, who may only spend a few seconds to get an impression on the site. With that in mind, ease of navigation and clean design were a priority. Furthermore, the design needed to house a variety of portfolio pieces, which called for design choices that meshed with many different brands and styles. Last but not least, the site should to be memorable and unique, as to prevent it from being glossed over by any potential employer. </p>
              <p> <b> Solution: </b> The website you are on right now is designed and custom built by yours truly, utilizing HTML, CSS, Boostrap, PHP, and jQuery. The responsive interface prioritizes a user-friendly experience, and maintains a clean, simple aesthetic that is up to date with today's digital design standards. A scrolling nav bar allows for constant ease of navigation, and the responsive grid design allows for compatibility on any device. The portfolio pages are purposefully simple in order to not interfere with the themes of the different portfolio pieces. With my resume, skill set, and work samples never more than a click away, diegoricaurte.website is your one stop for everything you need to know about your next star employee. </p> 
          </div>
        </div>
      </div>
      <div class= "row">
        <div class= "col-xs-8 centered">
          <img class= "portfolioheadergif" src="images/portfolio-spreads/signature_header_animation.gif" title= "Signature Header Animation" alt= "signaturewebsite">
        </div>
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/signature-website-spread.png" title= "Signature Website Spread" alt= "signaturewebsite">
        </div>
      </div> 
    </div> 
  </section>
  <!--Footer Section-->
  <?php include 'resources/portfoliofooter.php';?>
  <!--Footer Section-->
<!--Scripts-->  
  <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/jquery.inview.min.js" type="text/javascript"></script>
<!--Scripts-->
</body>
</html>

