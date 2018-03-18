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
                <li><a href="gtech-spread.php">NEXT</a></li>
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
            <h2 class="portfoliotitle">Pyrmd App</h2>
            <h4> Digital / UX / UI </h4>
        </div>
      </div>
      <div class= "row">
        <div class= "col-xs-8 centered bumper">
          <img class= "portfoliopicture" src="images/portfolio-spreads/pyrmd-spread1.png" title= "Pyrmd Spread1" alt= "pyrmdspread1">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Objective </h3>
          <p class="portfolioitemtext"> The primary objective of the Pyrmd app is to help you pick out a balanced diet every time you go to the grocery store. Using your personal statistics and dietary goals, Pyrmd will guide you through the process of constructing your own food pyramid, item by item. </p>
        </div>
        <div class= "col-xs-8 centered bumper">
          <img class= "portfoliopicture" src="images/portfolio-spreads/pyrmd-spread2.png" title= "Pyrmd Spread2" alt= "pyrmdspread2">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Process </h3>
          <p class="portfolioitemtext"> The process of developing the Pyrmd concept began with figuring out the best way to optimize the grocery shopping experience. Eating healthy is something that millions of Americans struggle with every day, so I thought that would be a good user issue to tackle. During my time in college, I remember coming across a few research papers that noted what food is around you is hugely influential in what you choose to eat, so I decided to conceptualize an app that would make it easy and convenient to pick out a healthy diet every time you went shopping for food.<br><br>

          After fine tuning the concept, I moved onto low fidelity wire frames illustrating the user journey as well as sample screen layouts. This helped me to simplify the journey as much as possible, as well as conceptualize a more coherent branding image throughout the app.
          </p>
        </div>
        <div class= "col-xs-8 centered bumper">
          <img class= "portfoliopicture" src="images/portfolio-spreads/pyrmd-spread3.png" title= "Pyrmd Spread3" alt= "pyrmdspread3">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Solution </h3>
          <p class="portfolioitemtext"> Every user has different dietary goals, but the vast majority involve gaining muscle, losing fat, or maintaining a healthy heart. The app focuses on these populations, and after logging in, the user enters their basic physical information and dietary goal. Pyrmd then uses this information calculate the users BMI, an appropriate dietary spread, and a caloric goal.<br><br>

          While at the grocery store, the user can open the app and use it as a grocery list as well as a checklist. As the user adds items to their list, the nutritional value is added to the total dietary goals on a HUD above the list in real time. At a glance, the user can see what areas of their diet they are neglecting before even reaching the checkout line. By allowing the user to conveniently collect a balanced food supply, Prymd eliminates the burden of the endless calorie counting and food analyzation that is enough to drive most users away from eating healthy at all. </p>
        </div>
        <div class= "col-xs-8 centered bumper">
          <img class= "portfoliopicture" src="images/portfolio-spreads/pyrmd-spread4.png" title= "Pyrmd Spread4" alt= "pyrmdspread4">
        </div>
        <div class= "col-xs-8 centered bumper">
          <img class= "portfoliopicture" src="images/portfolio-spreads/pyrmd-spread5.png" title= "Pyrmd Spread5" alt= "pyrmdspread5">
        </div>
        <div class= "col-xs-8 centered">
          <h3 class="portfoliotitle2"> Reflection </h3>
          <p class="portfolioitemtext"> It was a challenge developing an app concept in such a short period of time, but I believe it was a useful exercise and helped me create an idea that I actually believe could be successful! There is, of course, lots of back end work to be done in fleshing out this idea, but I am confident that is all within the realm of reasonable possibilities. </p>
        </div>
        <div class= "col-xs-8 centered bumper">
          <img class= "portfoliopicture" src="images/portfolio-spreads/pyrmd-spread6.png" title= "Pyrmd Spread6" alt= "pyrmdspread6">
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

