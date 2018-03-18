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
                <li><a href="signature-website-spread.php">PREV</a></li>
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
            <h2 class="portfoliotitle">DR Design</h2>
            <h4> Brand / Digital / UI </h4> 
          </div>
        </div>
      </div>
      <div class= "row">
        <div class= "col-xs-8 centered videoborder">
          <video img-responsive autoplay loop>
            <source src="images/animations/drdesign-header.mp4" type="video/mp4">
          </video>
        </div>
        <div class= "col-xs-8 centered bumper">
          <img class= "portfoliopicture" src="images/portfolio-spreads/bumper.png" title= "Caroline Spread3" alt= "carolinespread3">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Objective </h3>
          <p class="portfolioitemtext"> DR Design is the first iteration of my design brand. The objective of this project was to create a portfolio that would appeal to employers, and ultimately help me obtain an internship. To accomplish this, I needed to create a simple, modern, and user friendly experience with a focus on the design portfolio. </p>
        </div>
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/drdesign-spread1.png" title= "DR Design Spread" alt= "drdesign1">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Process </h3>
          <p class="portfolioitemtext"> In developing this first iteration of my portfolio, I began with wire framing the layout of the homepage as well as the portfolio pages. Given that the primary user on this site would be an employer, I thought it best to make the layout and navigation simple and to the point. I also developed some flat, personalized icons in order to make the site unique to my design sense, and memorable to the user. This way, the user would be able to find everything they need within a matter of seconds, but also remember the visual style amongst the hundreds of portfolio's they see every week.</p>
        </div>
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/drdesign-spread2.png" title= "DR Design Spread" alt= "drdesign2">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Solution </h3>
          <p class="portfolioitemtext"> The resulting hand-coded website utilizes a grid layout with a simple page structure consisting of a landing page that links to each individual portfolio piece, as well as a resume. The color palette consists of different shades of digital blue, with a neon shade highlighting user focus. Personalized icons are used throughout the site in order to create a unique style that is simple enough not to detract from the variety of styles presented on the portfolio pages. </p>
        </div>
        <div class= "col-xs-8 centered bumper">
          <img class= "portfoliopicture" src="images/portfolio-spreads/bumper.png" title= "Caroline Spread3" alt= "carolinespread3">
        </div>
        <div class= "col-xs-8 centered videoborder">
          <video img-responsive autoplay loop>
            <source src="images/animations/drdesign-desktop.mp4" type="video/mp4">
          </video>
        </div>
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/drdesign-spread3.png" title= "DR Design Spread" alt= "drdesign3">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Reflection </h3>
          <p class="portfolioitemtext"> In designing the first iteration of my portfolio, I was forced to design to a perspective completely separate from my own. Although at the time of this process I did not know of practices such as of user empathy maps, this project exercised my mind in the same way and helped me to become a more user centric designer.</p>
        </div>
        <div class= "col-xs-8 centered bumper">
          <img class= "portfoliopicture" src="images/portfolio-spreads/bumper.png" title= "Caroline Spread3" alt= "carolinespread3">
        </div>
        <div class= "col-xs-8 centered videoborder">
          <video img-responsive autoplay loop>
            <source src="images/animations/drdesign-footer.mp4" type="video/mp4">
          </video>
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

