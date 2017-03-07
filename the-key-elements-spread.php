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
            <h2 class="portfoliotitle">The Key Elements</h2>
            <h4> Brand / Digital / UX / UI </h4> 
            <p> <b> Live Link: </b> <a href="www.thekeyelements.online"> www.thekeyelements.online </a>
            <p> <b> Objective: </b> My primary objective in working with The Key Element's a cappella group was a complete branding overhaul that would target the average Cornell student. To accomplish this goal, I decided to conceptualize, design, and code a new website for the group. This rehauled media would facilitate a renewed impression on the Cornell population in order to and maximize audition and concert attendance. 
            <p/>
            <p> <b> Challenge: </b> The target user for the new website is the average Cornell Student. Given such a large scope, I put a focus on a wide apppeal, creating a brand that is attractive to all viewers, regardless of music preference or gender. The new website needed to be desktop and mobile friendly, as well as give easy access to the groups music, events, personality, merchandise, and contact information. Lastly, this rebrand had to set the Key Elements apart from any of the other 20+ singing groups on campus</p>
            <p><b> Solution: </b> The newly designed logo maintains the core 'bolt' motif of the original imaging, and adds a musical component in order to stay true to the nature of the group. The custom built site utilizes a simple scroll-through structure, and navigates the user through the groups member information, music, merchandise. Widgets and links throughout the site guide the user to various social media and music platforms the group utilizes, allowing for easy access to various promotional content. The overall tone of the website is neutral and people-focused, allowing the personality of the group to shine through, and creates a genuine user experience of The Key Elements A Cappella. <p/> 
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

