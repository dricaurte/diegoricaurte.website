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
          <div class="heading">
            <h2 class="portfoliotitle">Caroline Sommers Blog</h2>
            <h3 class="portfoliocategories"> Brand / Digital / UI </h3> 
          </div>
        </div>
      </div>
      <div class= "row">
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/caroline-spread1.png" title= "Caroline Spread1" alt= "carolinespread1">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Objective </h3>
          <p class="portfolioitemtext"> My objective in this assignment was to redesign the user interface of Caroline Sommers blog in a way utilizing a simple, modern, and responsive layout. This new layout would make access to the posts natural and seamless as well as better define Caroline's brand.</p>
        </div>
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/caroline-spread2.png" title= "Caroline Spread2" alt= "carolinespread2">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Process </h3>
          <p class="portfolioitemtext"> My process began by asking Caroline explicitly what she was looking for in a website, and what parts of her current website she found most appealing. A sending her a few website examples based on her feedback, I moved forward with low fidelity mock ups detailing a information hierarchy and design layout. I continued the initial process by creating a user persona of what I perceived to be a likely reader of her blog, which focused on a more urban demographic. Caroline wanted a distinctive look to her site, and noted that she was a fan of Andy Warhol's pop art, and would like that to be incorporated. The interface I created would have to mesh with such a unique visual style. </p>
        </div>
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/caroline-spread3.png" title= "Caroline Spread3" alt= "carolinespread3">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Solution </h3>
          <p class="portfolioitemtext"> To create an ease of navigation, I created a single page layout revolving around the blog posts. The responsive site would be compatible with any device, accessible to at-home and on-the-go readers. Each article would be represented with a title, image, and the beginnings of each post in order to draw in the reader, encouraging them to read on. The style of the page is also quite minimalistic, focusing on gray scale tones in order to compliment the pop art color highlights in the logo. With this new, clean, and logical layout would allow Caroline to expanding her readership as well as the recognition of her brand. </p>
        </div>
        <div class= "col-xs-8 centered bumper">
          <img class= "portfoliopicture" src="images/portfolio-spreads/bumper.png" title= "Caroline Spread3" alt= "carolinespread3">
        </div>
        <div class= "col-xs-8 centered videoborder">
          <video img-responsive autoplay loop>
            <source src="images/animations/caroline-desktop.mp4" type="video/mp4">
          </video>
        </div>
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/caroline-spread4.png" title= "Caroline Spread4" alt= "carolinespread4">
        </div>
        <div class= "col-xs-8 centered videoborder">
          <video img-responsive autoplay loop>
            <source src="images/animations/caroline-mobile.mp4" type="video/mp4">
          </video>
        </div>
        <div class= "col-xs-8 centered bumper">
          <img class= "portfoliopicture" src="images/portfolio-spreads/bumper.png" title= "Caroline Spread3" alt= "carolinespread3">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Reflection </h3>
          <p class="portfolioitemtext"> Designing for Caroline was an absolute pleasure, but was not without its challenges and learning experiences. The changes I proposed to Caroline were at times a bit drastic, which led to some pullback on her side. In the end, however, I found that research and attention to user needs helped ease that process when well presented to the client. </p>
        </div>
        <div class= "col-xs-8 centered">
          <img class= "portfoliopicture" src="images/portfolio-spreads/caroline-spread5.png" title= "Caroline Spread5" alt= "carolinespread5">
        </div>
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

