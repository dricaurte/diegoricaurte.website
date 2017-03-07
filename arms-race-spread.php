<!DOCTYPE html>
<html> 
<head>
   <?php include 'resources/head.php';?>
</head>
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
                <li><a href="#welcome">HOME</a></li>
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
            <h2 class="portfoliotitle"> Arms Race </h2>
            <h4> Illustration / Print <h4> 
            <p>This work was inspired by the events of the Cold War, which was, in many ways, the culminations of the end of the world's
             "Arms Race". From sticks, to stones, to machine guns, to rocket launchers, and eventually nuclear warheads,
             this race has led society down a path seemingly destined for a climactic and total destruction. This poster is meant to
             represent not only the many forms of the arms race, but exactly where the finish line is.
             <p> 
          </div>
        </div>
      </div>
      <div class= "row">
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/arms-race-spread.png" title= "Arms Race Spread" alt= "armsrace">
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

