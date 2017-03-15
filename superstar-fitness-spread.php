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
                <li><a href="dr-design-spread.php">PREV</a></li>
                <li><a href="index.php#portfolio">HOME</a></li>
                <li><a href="gtech-designs-spread.php">NEXT</a></li>
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
            <p> <b> Objective: </b> WWE Superstar Fitness is a concept expansion of the Tapout brand, with the objective of allowing the superstars of the WWE to interact with their fans on the fitness landscape. The platforms purpose is to encourage WWE fans to follow their wrestling idols on a road to better health. </p>

            <p> <b> Challenge: </b> To expand upon any brand, one has to be conscious of the design standards already in place. While the expansion should of course be innovative and bring new ideas to the table, it also has to integrate seamlessly into the current interface structure. The new interface would also have to be simple and accessible to the target user, the audience for WWE programming, which encompasses a large range of ages and cultural backgrounds around the world. </p>

            <p> <b> Solution: </b> My concept expansion builds upon the current website structure, and expands upon the current brand style. Each month the user is presented with four different superstars. Each superstar has a personalized fitness page, where the user can follow their daily routines, and a weekly vlog for a more dynamic view into the fitness program. Through desktop and mobile interfaces, Superstar Fitness allows any fan to see exactly how their favorite superstar is maintaining their workout regimen, and encourages them to follow along in their footsteps, day by day.</p> 
          </div>
        </div>
      </div>
      <div class= "row">
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/superstar-fitness-spread.png" title= "Superstar Fitness" alt= "superstarfitness">
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

