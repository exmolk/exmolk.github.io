<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BigEvent</title>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i%7CPoppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Flat icon -->
    <link href="assets/flaticon/flaticon.css" rel="stylesheet">

    <!-- Swiper -->
    <link href="assets/css/swiper.min.css" rel="stylesheet">

    <!-- Lightcase -->
    <link href="assets/css/lightcase.css" rel="stylesheet">

    <!-- quick-view -->
    <link href="assets/css/quick-view.css" rel="stylesheet">

    <!-- nstSlider -->
    <link href="assets/css/jquery.nstSlider.css" rel="stylesheet">

    <!-- flexslider -->
    <link href="assets/css/flexslider.css" rel="stylesheet">

    <!-- banner-bg -->
    <link href="assets/css/banner-bg.css" rel="stylesheet">

    <!-- Style -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Responsive -->
    <link href="assets/css/responsive.css" rel="stylesheet">


  </head>
  <body>
  




<?php 
  include("header.php");
?>


    <!-- banner start here-->
    <section  class="banner banner-two">
      <ul id="top" class="cb-slideshow">
        <li><span><img width="100%" src="images/banner/robot.jpg"></span><div></div></li>
        <li><span><img width="100%" src="images/banner/chem.jpg"></span><div></div></li>
        <li><span><img width="100%" src="images/banner/car.jpg"></span><div></div></li>
        <li><span><img width="100%" src="images/banner/uni.jpg"></span><div></div></li>
        <li><span><img width="100%" src="images/banner/uni.jpg"></span><div></div></li>
        <li><span><img width="100%" src="images/banner/uni.jpg"></span><div></div></li>
        <!--<li><span>Image 02</span><div></div></li>
        <li><span>Image 03</span><div></div></li>
        <li><span>Image 04</span><div></div></li>
        <li><span>Image 05</span><div></div></li>
        <li><span>Image 06</span><div></div></li>-->
      </ul>
      
      <div class="banner-overlay">
        <div class="banner-content">
          
          <div id="clockdiv">
            <div class="clock-item">
              <span class="days"></span>
              <p class="smalltext">Days</p>
            </div>
            <div class="clock-item">
              <span class="hours"></span>
              <p class="smalltext">Hours</p>
            </div>
            <div class="clock-item">
              <span class="minutes"></span>
              <p class="smalltext">Minutes</p>
            </div>
            <div class="clock-item">
              <span class="seconds"></span>
              <p class="smalltext">Seconds</p>
            </div>
          </div>

          <!--<div class="content-left">
            <span class="counter" data-count="24">0</span>
            <p>December 2017</p>
          </div>-->
          
          <!--<p>don't miss the upcoming event</p>
          <h2>BUSINESS CONFERENCE 2017</h2>-->
          <ul>
            <li><span class="flaticon-tool"></span>28-29 April, 2017</li>
            <li><span class="flaticon-signs"></span> Bandaranayake Mawatha, Katubedda, Moratuwa.</li>
          </ul>
        </div><!-- banner-content -->
      </div><!-- overlay -->
    </section>
    <!-- banner end here -->


    <!-- About start here -->
    <section id="about" class="about about-two">
      <div class="container">
        <div class="row">
          <!--<div class="col-md-4 col-sm-12 col-xs-12">
            
          </div>-->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="content padding-120">
              <div class="section-header">
                <h2>About Exmo 2017</h2>
                <p><em>Zenith of Innovation & Excellence</em></p>
                <div class="image">
              <img src="images/logo_large.png" alt="about iamge" class="img-responsive">
            </div>
              </div>
              <p>University of Moratuwa – Faculty of engineering proudly presents Exmo 2017 -
                 the majestic engineering and technological exhibition of the era which will soon be open to the public, 
                 industrial professionals and school children. A massive collection of innovative ideas, research projects, 
                 design projects and student inventions is to be expected.</p>
              <ul class="about-button">
                <li><a href="#" class="default-button">read more</a></li>
                <!--<li><a href="#" class="default-button">buy ticket</a></li>-->
              </ul>
            </div>
          </div>
        </div>
      
      </div><!-- container -->
    </section>
    <!-- About end here -->




    <!-- Sponsor start here -->
    <!--<section id="partner" class="sponsor sponsor-two padding-120">
      <div class="container">
        <a href="#" class="sponsor-button default-button">become a partner</a>
      </div>
    </section>-->
    <!-- Sponsor end here -->


    <!-- Map start here -->
    <section class="home-map">
      <div id="home-map" class="map"></div>
    </section>
    <!-- Map end here -->


        <!-- contact start here -->
    <section id="contact" class="contact padding-120">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="contact-form">
              <h3>Get in Touch</h3>
              
              <form action="https://www.elformo.com/forms/189046d3-3c51-43bf-8557-d0de06c05dcc"
      method="POST" >
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="name" placeholder="Full Name" class="contact-input">
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="email" name="email" placeholder="Email Address" class="contact-input">
                  </div>
                </div><!-- row -->
                <input type="text" name="subject" placeholder="Subject" class="contact-input">
                <textarea rows="5" class="contact-input" placeholder="Massage" ></textarea>
                <input type="submit" name="submit" value="Send Message" class="contact-submit">
              </form>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="contact-info">
              <h3>Contact Info</h3>
              <ul class="info">
                <li>
                  <div class="icon flaticon-signs-1"></div>
                  <div class="content">
                    <p> Bandaranayake Mawatha, Katubedda, </p>
                    <p>Moratuwa, Sri Lanka</p>
                  </div>
                </li>
                <!--<li>
                  <div class="icon flaticon-technology"></div>
                  <div class="content">
                    <p>7:30am - 5:30pm</p>
                    <p>10:00am - 7:30pm</p>
                  </div>
                </li>-->
                <li>
                  <div class="icon flaticon-phone-call"></div>
                  <div class="content">
                    <p>011 2 650534</p>
                  </div>
                </li>
                <li>
                  <div class="icon flaticon-message"></div>
                  <div class="content">
                    <p><a href="mailto:exmo@mrt.ac.lk">exmo@mrt.ac.lk</a></p>
                    <p><a href="http://exmo.mrt.ac.lk">http://exmo.mrt.ac.lk</a></p>
                  </div>
                </li>
              </ul>
              <ul class="event-social">
                <li><a href="https://www.facebook.com/EXMOUOM/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              </ul>
            </div><!-- contact-info -->
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </section><!-- contact -->
    <!-- contact end here -->



    <!-- Footer Start here -->
    <!--<footer class="footer-two">
      <div style="padding: 110px 0px">
        <div class="container">
          <h2> <img src="images/logo_large.png" alt="about iamge" class="img-responsive"></h2>
          <ul class="event-social">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
          </ul>
          <p>Copyright &copy; 2017. Design and Development by <a href="https://www.codexcoder.com/">LabArtisan</a></p>
        </div>
      </div>
    </footer>-->
    <!-- Footer End here -->



    <!-- jQuery -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/jquery-migrate-1.4.1.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Coundown -->
    <script src="assets/js/coundown.js"></script>

    <!--Swiper-->
    <script src="assets/js/swiper.jquery.min.js"></script>

    <!--Masonry-->
    <script src="assets/js/masonry.pkgd.min.js"></script>

    <!--Lightcase-->
    <script src="assets/js/lightcase.js"></script>

    <!--modernizr-->
    <script src="assets/js/modernizr.js"></script>

    <!--velocity-->
    <script src="assets/js/velocity.min.js"></script>

    <!--quick-view-->
    <script src="assets/js/quick-view.js"></script>

    <!--nstSlider-->
    <script src="assets/js/jquery.nstSlider.js"></script>
    <script src="assets/js/nstfunctions.js"></script>

    <!--flexslider-->
    <script src="assets/js/flexslider-min.js"></script>
    <script src="assets/js/flexfunctions.js"></script>

    <!-- Google Map -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAQlXnmyNPAeN3c3HNyWoUMqDk6bDF31Cg"></script>
    <script src="assets/js/map_functions.js"></script>

    <!-- Custom -->
    <script src="assets/js/custom.js"></script>   

  </body>
</html>