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
            <h2 class="portfoliotitle">AGV SPORT</h2>
            <h4> Brand / Product / Icon / Print <h4> 
            <p> <b> Objective: </b> AGV Sports group is a company that makes gear for bike riders. My primary project was designing the new line of "hang tags" that will be attached to new products in 2014. </p>

            <p> <b> Challenge: </b>The primary challenge was designing a tag that could accompany a myriad of different products - helmets, gloves, suits, boots, jeans - while still maintaining a consistent brand image. All in all, this tag design would accompany a total of 75 different riding products. </p>

            <p> <b> Solution: </b> My solution to this design challenge was a tag that utilized an icons and brief descriptions, customized to each individual product. The tags would utilize a bold orange hue to catch the eye of the customer as well as define a unique and recognizable brand. Over 20 different icons and descriptions were used to customize this new design format according to each product's specifications.  </p> 
          </div>
        </div>
      </div>
      <div class= "row">
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/agv-sport-tags-spread.png" title= "AGV Sport Spread" alt= "agvsporttags">
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

