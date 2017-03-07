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
          <div class="heading">
            <h2 class="portfoliotitle">Wake Will</h2>
            <h4> Brand / Graphics / Event Design </h4> 
            <p> <b> Objective: The objective of Wake Will  was to give rise to a groundswell of support from a devoted community of Wake Foresters, and its success laid the foundation for the pursuit of something even greater. With this in mind, it was my objective to create interactive stations that would engage and captivate guests, speaking to the target audience of the Wake Forest Alumni population. </b> 
            <p/>
            <p> <b> Challenge: In order to engage the target audience, I would need incorporate the Wake Forest branding into my designs in order to create a feeling of familiarity. Creating at a larger scale also entailed a different approach to print design, placing a even larger focus on smaller details.</b> </p>
            <p><b> Solution: </b> In order to connect to the Wake Forest Alumni, I created interactives that invited user interactivity. The Wake Will book encouraged Alumni to share Wake Forest's impact on their lives. The rotating cube's displayed achievemenets of current Wake Undergraduates, allowing alumni to explore different students with each side of the cube. By enouraging Alumni to learn more about the current Wake Forest population, as well as reminesce their own history with the institution, the interactives enouraged action in the Alumni and fostered greater pride in their alma mater. <p/> 
          </div>

        </div>
      </div>
      <div class= "row">
        <div class= "col-xs-8 centered">
          <img class= "portfolioheadergif" src="images/portfolio-spreads/keheaderanimation.gif" title= "The Key Elements Header Animation" alt= "signaturewebsite">
        </div>
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/the-key-elements-spread.png" title= "The Key Elements Spread" alt= "thekeyelements">
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
  <script src="js/portfolionavbar.js" type="text/javascript"></script>
<!--Scripts-->
</body>
</html>

