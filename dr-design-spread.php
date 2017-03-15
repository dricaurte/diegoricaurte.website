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
                <li><a href="the-key-elements-spread.php">PREV</a></li>
                <li><a href="index.php#portfolio">HOME</a></li>
                <li><a href="superstar-fitness-spread.php">NEXT</a></li>
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
            <p> <b> Objective: </b> DR Design is the first iteration of my design brand. The objective of this project was to create a simple, modern, and user friendly landing page with a focus on the design portfolio. </p> 

            <p> <b> Challenge: </b> As with any portfolio, the biggest challenge to overcome is standing out amongst a large pool of talented applicants. Most portfolio pages only have seconds to capture their target audience, an employer, so the design needed to prioritize ease of navigation, as well as memorable and unique visuals. </p>
            
            <p> <b> Solution: </b> The resulting hand-coded website utilizes a grid layout with a simple page structure consisting of a landing page that links to each individual portfolio piece, as well as a resume. The color palette consists of different shades of digital blue, with a brighter shade highlighting user focus. Personalized icons are used throughout the site in order to create a unique style that is simple enough not to detract from the variety of styles presented on the portfolio pages.</p> 
          </div>
        </div>
      </div>
      <div class= "row">
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/dr-design-spread.png" title= "DR Design Spread" alt= "drdesign">
        </div>
        <div class= "col-xs-8 centered">
          <img class= "portfoliofootergif" src="images/portfolio-spreads/drdesign_footer_animation.gif" title= "DR Design Spread Footer Animation" alt= "signaturewebsite">
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

