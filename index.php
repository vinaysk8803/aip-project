<?php
session_start();
?>

<html>

  <head>

    <title> Home | Le Cafe' </title>
  </head>
<style>
.order{
  padding: px;
  height: 800px;
  text-align: center;
  background-image: url("767277.jpg");
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.slide1{
  padding: px;
  height: 800px;
  text-align: center;
  background-image: url("Strawberry.jpg");
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.slide2{
  padding: px;
  height: 800px;
  text-align: center;
  background-image: url("Vegetables.jpg");
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.slide3{
  padding: px;
  height: 800px;
  text-align: center;
  background-image: url("Sweets.jpg");
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.slide4{
  padding: px;
  height: 800px;
  text-align: center;
  background-image: url("love.jpg");
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.blink {
            font-size: 20px;
            font-weight: bold;
            color: red;
            transition: 0.1s;
        }
</style>
  <link rel="stylesheet" type = "text/css" href ="css/foodlist.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet" type = "text/css" href ="css/index.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>
<!-- <div class="order"> -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="color:lime;font-size:25px;">Le Cafe'</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>
       </div>

      </div>
    </nav>
  <div class="wide">        
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">

      <div class="item active">
        <div class="col-xs-3 logo"><img src="images/LogoImage.jpg"></div>
        <div class="order">      
      <div class="carousel-caption"></div>
      </div>
      </div>
       
       <!--div class="item">
      <img src="images/home.jpg" style="width:100%;">
      <div class="carousel-caption">

      </div>
      </div-->

      <div class="item">
        <div class="col-xs-3 logo"><img src="images/LogoImage.jpg"></div>
      <div class="slide1">
      <div class="carousel-caption"></div>
      </div>
      </div>

      <div class="item">
        <div class="col-xs-3 logo "><img src="images/LogoImage.jpg"></div>
        <div class="slide2">
      <div class="carousel-caption"></div>
      </div>
      </div>
    
      <div class="item">
        <div class="col-xs-3 logo "><img src="images/LogoImage.jpg"></div>
        <div class="slide3">
      <div class="carousel-caption"></div>
      </div>
      </div>

      <div class="item">
        <div class="col-xs-3 logo "><img src="images/LogoImage.jpg"></div>
        <div class="slide4">
      <div class="carousel-caption"></div>
      </div>
      </div>

    </div>
   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>

    <br>

     
        
        <div class="tagline" style="color: purple; position: absolute; top:350px ;left: 300px;">Good Food is Good Mood</div>
    </div>

<div class="blink" id="blink">
 <h6 style="position: absolute; top:450px; left: 40px; font-size: 10px;
            font-weight: bold; color: red;text-shadow: 20px 5px 10px grey;"><font size="7">Click Here for order</font></h6></div>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" style="position: absolute; top:575px; left: 40px;"> Order Now </a></center>
    </center>
</div>

<script type="text/javascript">
        var blink = document.getElementById('blink');
        setInterval(function() {
            blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
        }, 1500);
    </script>
</body>
</html>