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
                <li><a href="caroline-spread.php">PREV</a></li>
                <li><a href="index.php#portfolio">HOME</a></li>
                <li><a href="the-key-elements-spread.php">NEXT</a></li>
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
            <h2 class="portfoliotitle">Tapout: Superstar Fitness</h2>
            <h4> Brand / Digital / UI </h4>
          </div>
        </div>
      </div>
      <div class= "row">
      <div class= "col-xs-8 centered">
        <img class= "portfoliopicture" src="images/portfolio-spreads/superstar-spread1.png" title= "Superstar Fitness1" alt= "superstarfitness1">
      </div>
      <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Objective </h3>
          <p class="portfolioitemtext"> WWE Superstar Fitness is a concept expansion of the WWE Tapout brand, with the objective of allowing the superstars of the WWE to interact with their fans on the fitness landscape. The platforms purpose is to encourage WWE fans to follow their wrestling idols on a road to better health. </p>
      </div>
      <div class= "col-xs-8 centered">
        <img class= "portfoliopicture" src="images/portfolio-spreads/superstar-spread2.png" title= "Superstar Fitness2" alt= "superstarfitness2">
      </div>
      <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Process </h3>
          <p class="portfolioitemtext"> To begin the design process, I made sure to keep brand identity on the forefront of my mind and do extensive research to that end. Then, I developed a few user personas illustrating the variety of users that would be able to use this expansion and follow their favorite superstars. Then, to create a logical addition to to current website structure, I made sure to create low fidelity mock ups of the additional website sections. <br> <br>

           This process led me to focus on WWE brand standards in constructing the altered landing page. While the expansion should of course be innovative and bring new ideas to the table, it also has to integrate seamlessly into the current interface structure. The new interface would also have to be simple and accessible to the target user, the audience for WWE programming, which encompasses a large range of ages and cultural backgrounds around the world. </p>
      </div>
      <div class= "col-xs-8 centered">
        <img class= "portfoliopicture" src="images/portfolio-spreads/superstar-spread3.png" title= "Superstar Fitness3" alt= "superstarfitness3">
      </div>
      <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Solution </h3>
          <p class="portfolioitemtext"> My concept expansion builds upon the current website structure, and expands upon the current brand style. Each month the user is presented with four different superstars. Each superstar has a personalized fitness page, where the user can follow their daily routines, and a weekly vlog for a more dynamic view into the fitness program. Through desktop and mobile interfaces, Superstar Fitness allows any fan to see exactly how their favorite superstar is maintaining their workout regimen, and encourages them to follow along in their footsteps, day by day. </p>
      </div>
      <div class= "col-xs-8 centered bumper">
          <img class= "portfoliopicture" src="images/portfolio-spreads/bumper.png" title= "Caroline Spread3" alt= "carolinespread3">
        </div>
      <div class= "col-xs-8 centered videoborder">
          <video img-responsive autoplay loop>
            <source src="images/animations/superstar-fitness-desktop.mp4" type="video/mp4">
          </video>
      </div>
      <div class= "col-xs-8 centered">
        <img class= "portfoliopicture" src="images/portfolio-spreads/superstar-spread4.png" title= "Superstar Fitness4" alt= "superstarfitness4">
      </div>
      <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Reflection </h3>
          <p class="portfolioitemtext"> This design project was a useful exercise in brand identity additions as well as user centric design. The WWE's extremely well established brand image created some unexpected difficulties when attempting to come up with a novel and new expansion, and their wide, varied audience made designing made for an excellent additional challenge.</p>
      </div>
      <div class= "col-xs-8 centered">
        <img class= "portfoliopicture" src="images/portfolio-spreads/superstar-spread5.png" title= "Superstar Fitness4" alt= "superstarfitness5">
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

