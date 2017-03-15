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
                <li><a href="superstar-fitness-spread.php">PREV</a></li>
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
          <div class="heading">
            <h2 class="portfoliotitle">GTECH Designs</h2>
            <h4> Brand / Print / Web </h4> 
            <p> <b> Objective: </b> My primary objective during my internship at GTECH Designs was to spearhead a collateral re-branding, creating a uniform image across web and print. This re-branding would facilitate the launch of a marketing portfolio targeted toward potential clients looking to re-brand their own materials. The resulting collateral would include new print materials as well as a redesigned company landing page. </p> 

            <p> <b> Challenge: </b> The primary challenge of this assignment was to conceptualize a branding image that could seamlessly transition between print and web materials, creating a uniform experience for the user. Any design choice for one platform would have to consider the compatibility with the other, and allow for potential clients to get a sense of GTECH's capabilities no matter the entry point. </p>

            <p> <b> Solution: </b> My solution to these design challenges was a grid based design that would allow for and clear and clean user journey throughout web and print. My re-branding image expanded on the purple logo of GTECH Designs, using the same hue to accent the websites focal points. A collapsible menu bar reduces clutter for the user while providing easy access to the websites multiple sections. The viewer is guided through GTECH's past campaigns, as well as ways to interact further with the company with a contact section and links to various social media. The site and print materials serve as an example for what GTECH can accomplish for its clients; a clean, modern, and story driven design style that is clean enough to be credible, but personal enough to be trusted. </p> 
          </div>
        </div>
      </div>
      <div class= "row">
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/gtech-spread.png" title= "Gtech Designs Spread" alt= "gtech">
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

