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
                <li><a href="agv-sport-spread.php">PREV</a></li>
                <li><a href="index.php#portfolio">HOME</a></li>
                <li><a href="photography-spread.php">NEXT</a></li>
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
            <h2 class="portfoliotitle">Wake Will</h2>
            <h4> Brand / Graphics / Event Design </h4> 
            <p> <b> Objective: </b> The goal of Wake Will was to give rise to a groundswell of support from a devoted community of Wake Foresters, and to lay the foundation for the pursuit of something even greater. With this in mind, it was my objective to create interactive stations that would engage and captivate guests, sending a message to the target audience of the Wake Forest Alumni population.
            </p>
            <p> <b> Challenge: </b> In order to engage the target audience, I would need incorporate the Wake Forest branding into my design. Furthermore, creating at a larger scale also entailed a different approach to print design, placing a greater focus on smaller details. 
            </p>
            <p><b> Solution: </b> The interactive stations focused on user interactivity. The Wake Will Book invites Alumni to share Wake Forest's impact on their lives. The rotating cube's displays achievements of current Wake Undergraduates, allowing alumni to explore different students with each side of the cube. By encouraging Alumni to learn more about the current Wake Forest population, as well as reminisce their own history with the institution, the two stations incite action in the Alumni and fostered a greater pride in their alma mater. </p> 
          </div>

        </div>
      </div>
      <div class= "row">
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/wake-will-spread.png" title= "Wake Will Spread" alt= "wakewill">
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

