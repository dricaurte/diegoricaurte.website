<!DOCTYPE html>
<html> 
<head>
   <?php include 'resources/head.php';?>
</head>
<body>
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
                <li><a href="gtech-spread.php">PREV</a></li>
                <li><a href="index.php#portfolio">HOME</a></li>
                <li><a href="agv-sport-spread.php">NEXT</a></li>
                <!--Nav Menu-->
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="portfolioitem firstSec section">
    <div class= "container">
      <div class= "row">
        <div class= "col-xs-8 centered">
          <div class=" heading">
            <h2 class="portfoliotitle">Signature Website</h2>
            <h3 class="portfoliocategories"> Brand / Digital / UI </h3> 
          </div>
        </div>
      </div>
      <div class= "row">
        <div class= "col-xs-8 centered videoborder">
          <video img-responsive autoplay loop>
            <source src="images/animations/signature-header.mp4" type="video/mp4">
          </video>
        </div>
        <div class= "col-xs-8 centered bumper">
          <img class= "portfoliopicture" src="images/portfolio-spreads/bumper.png" title= "Caroline Spread3" alt= "carolinespread3">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Objective </h3>
          <p class="portfolioitemtext"> The primary objective in creating my own website portfolio was to give potential employers and recruiters an impression of what I am capable of as a digital and graphic designer. The positive aesthetic along with a fluid user experience should leave the user with a sense of my skill set as a digital and graphic designer, and ultimately lead to professional design opportunities. </p>
        </div>
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/signature-spread1.png" title= "Signature Website Spread1" alt= "signaturewebsite1">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Process </h3>
          <p class="portfolioitemtext"> Being my own client allowed for more freedom in the development process, but I still opted to start with low fidelity wire frames in order to be as organized and efficient as possible in my work flow. The theme of my site was my own design environment, so I also took the time to capture a few photos and layouts that would capture the essence of my websites theme. I also created a user empathy map for the primary user: a design recruiter. A recruiter may only spend a few seconds to get an impression on the site, and with that in mind, ease of navigation and clean design were a priority. Furthermore, the design needed to house a variety of portfolio pieces, which called for design choices that meshed with many different brands and styles. Last but not least, the site should to be memorable and unique, as to prevent it from being glossed over by any potential employer. </p>
        </div>
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/signature-spread2.png" title= "Signature Website Spread2" alt= "signaturewebsite2">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Solution </h3>
          <p class="portfolioitemtext"> The website you are on right now is designed and custom built by yours truly, utilizing HTML, CSS, Bootstrap, PHP, and jQuery. The responsive interface prioritizes a user-friendly experience, and maintains a clean, simple aesthetic that is up to date with today's digital design standards. A scrolling menu bar allows for constant ease of navigation, and the responsive grid design allows for compatibility on any device. The portfolio pages are purposefully simple in order to not interfere with the themes of the different portfolio pieces. With my resume, skill set, and work samples never more than a click away, diegoricaurte.website is your one stop for everything you need to know about your next designer and utility player. </p>
        </div>
        <div class= "col-xs-8 centered videoborder">
          <video img-responsive autoplay loop>
            <source src="images/animations/signature-desktop.mp4" type="video/mp4">
          </video>
        </div>
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/signature-spread3.png" title= "Signature Website Spread3" alt= "signaturewebsite3">
        </div>
        <div class= "col-xs-8 centered videoborder">
          <video img-responsive autoplay loop>
            <source src="images/animations/signature-mobile.mp4" type="video/mp4">
          </video>
        </div>
        <div class= "col-xs-8 centered bumper">
          <img class= "portfoliopicture" src="images/portfolio-spreads/bumper.png" title= "Caroline Spread3" alt= "carolinespread3">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Reflection </h3>
          <p class="portfolioitemtext"> Designing as my own client at first seemed like a frictionless and stress free process, but I quickly learned that it is in these kinds of assignments that I needed to be doubly cautious in the design process. I had to act as my own biggest critic in order to bring the best in this design, and even then I had to remind myself to stay humble, flexible, and steadfast in my journey to seek constructive criticism.</p>
        </div>
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/signature-spread4.png" title= "Signature Website Spread4" alt= "signaturewebsite4">
        </div>
      </div> 
    </div> 
  </section>
  <!--Footer Section-->
  <?php include 'resources/portfolioitemportfolio.php';?>
  <?php include 'resources/portfoliofooter.php';?>
  <!--Footer Section-->
<!--Scripts-->  
  <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/jquery.inview.min.js" type="text/javascript"></script>
  <script src="js/portfolioitemnavbar.js" type="text/javascript"></script>
<!--Scripts-->
</body>
</html>

