<?php

define('DIR','');
require_once DIR .'config.php';

$control = new Controller();

$admin = new Admin();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PrintIt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <style type="text/css">
  
  /* CSS reset */
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td { 
  margin:0;
  padding:0;
}
html,body {
  margin:0;
  padding:0;
}
table {
  border-collapse:collapse;
  border-spacing:0;
}
fieldset,img { 
  border:0;
}
input{
  border:1px solid #b0b0b0;
  padding:3px 5px 4px;
  color:#979797;
  width:190px;
}
address,caption,cite,code,dfn,th,var {
  font-style:normal;
  font-weight:normal;
}
ol,ul {
  list-style:none;
}
caption,th {
  text-align:left;
}
h1,h2,h3,h4,h5,h6 {
  font-size:100%;
  font-weight:normal;
}
q:before,q:after {
  content:'';
}
abbr,acronym { border:0;
}
/* General Demo Style */
body{
  font-family: "helvetica neue", helvetica;
  background: #fff;
  font-weight: 400;
  font-size: 15px;
  color: #aa3e03;
  overflow-y: scroll;
  overflow-x: hidden;

}
.ie7 body{
  overflow:hidden;
}
a{
  color: #333;
  text-decoration: none;
}
.container{
  position: relative;
  text-align: center;
}
.clr{
  clear: both;
}
.container > header{
  padding: 30px 30px 10px 20px;
  margin: 0px 20px 10px 20px;
  position: relative;
  display: block;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
    text-align: left;
}
.container > header h1{
  font-family: "helvetica neue", helvetica;
  font-size: 35px;
  line-height: 35px;
  position: relative;
  font-weight: 400;
  color: #fff;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    padding: 0px 0px 5px 0px;
}
.container > header h1 span{

}
.container > header h2, p.info{
  font-size: 16px;
  font-style: italic;
  color: #f8f8f8;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.6);
}

.slideshow,
.slideshow:after {
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    z-index: 0;
}
.slideshow:after {
    content: '';
    background: transparent url(../images/pattern.png) repeat top left;
}
.slideshow li span {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    color: transparent;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: none;
    opacity: 0;
    z-index: 0;
  -webkit-backface-visibility: hidden;
    -webkit-animation: imageAnimation 36s linear infinite 0s;
    -moz-animation: imageAnimation 36s linear infinite 0s;
    -o-animation: imageAnimation 36s linear infinite 0s;
    -ms-animation: imageAnimation 36s linear infinite 0s;
    animation: imageAnimation 36s linear infinite 0s;
}
.slideshow li div {
    /*z-index: 1000;
    /*position: absolute;*/
    /*bottom: 30px;*/
    left: 0px;*/
    width: 100%;
    text-align: center;
    opacity: 0;
    -webkit-animation: titleAnimation 36s linear infinite 0s;
    -moz-animation: titleAnimation 36s linear infinite 0s;
    -o-animation: titleAnimation 36s linear infinite 0s;
    -ms-animation: titleAnimation 36s linear infinite 0s;
    animation: titleAnimation 36s linear infinite 0s;
}
.slideshow li div h3 {
  font-family: "helvetica neue", helvetica;
  text-transform: uppercase;
  font-size: 80px;
  padding: 0;
  /*line-height: 200px;*/
  color: rgba(255,255,255, 0.8);
}
.slideshow li:nth-child(1) span { background-image: url('images/m4.png') }
.slideshow li:nth-child(2) span {
    background-image: url('images/pisl1.png');
    -webkit-animation-delay: 6s;
    -moz-animation-delay: 6s;
    -o-animation-delay: 6s;
    -ms-animation-delay: 6s;
    animation-delay: 6s;
}
.slideshow li:nth-child(3) span {
    background-image: url('images/pisl2.png');
    -webkit-animation-delay: 12s;
    -moz-animation-delay: 12s;
    -o-animation-delay: 12s;
    -ms-animation-delay: 12s;
    animation-delay: 12s;
}
.slideshow li:nth-child(4) span {
    background-image: url('images/pisl3.png');
    -webkit-animation-delay: 18s;
    -moz-animation-delay: 18s;
    -o-animation-delay: 18s;
    -ms-animation-delay: 18s;
    animation-delay: 18s;
}
.slideshow li:nth-child(5) span {
    background-image: url('images/pislide0.png');
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s;
}
.slideshow li:nth-child(6) span {
    background-image: url('images/ms1.png');
    -webkit-animation-delay: 30s;
    -moz-animation-delay: 30s;
    -o-animation-delay: 30s;
    -ms-animation-delay: 30s;
    animation-delay: 30s;
}
.slideshow li:nth-child(2) div {
    -webkit-animation-delay: 6s;
    -moz-animation-delay: 6s;
    -o-animation-delay: 6s;
    -ms-animation-delay: 6s;
    animation-delay: 6s;
}
.slideshow li:nth-child(3) div {
    -webkit-animation-delay: 12s;
    -moz-animation-delay: 12s;
    -o-animation-delay: 12s;
    -ms-animation-delay: 12s;
    animation-delay: 12s;
}
.slideshow li:nth-child(4) div {
    -webkit-animation-delay: 18s;
    -moz-animation-delay: 18s;
    -o-animation-delay: 18s;
    -ms-animation-delay: 18s;
    animation-delay: 18s;
}
.slideshow li:nth-child(5) div {
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s;
}
.slideshow li:nth-child(6) div {
    -webkit-animation-delay: 30s;
    -moz-animation-delay: 30s;
    -o-animation-delay: 30s;
    -ms-animation-delay: 30s;
    animation-delay: 30s;
}
/* Animation for the slideshow images */
@-webkit-keyframes imageAnimation { 
  0% {
      opacity: 0;
      -webkit-animation-timing-function: ease-in;
  }
  8% {
      opacity: 1;
      -webkit-transform: scale(1.05);
      -webkit-animation-timing-function: ease-out;
  }
  17% {
      opacity: 1;
      -webkit-transform: scale(1.1);
  }
  25% {
      opacity: 0;
      -webkit-transform: scale(1.1);
  }
  100% { opacity: 0 }
}
@-moz-keyframes imageAnimation { 
  0% {
      opacity: 0;
      -moz-animation-timing-function: ease-in;
  }
  8% {
      opacity: 1;
      -moz-transform: scale(1.05);
      -moz-animation-timing-function: ease-out;
  }
  17% {
      opacity: 1;
      -moz-transform: scale(1.1);
  }
  25% {
      opacity: 0;
      -moz-transform: scale(1.1);
  }
  100% { opacity: 0 }
}
@-o-keyframes imageAnimation { 
  0% {
      opacity: 0;
      -o-animation-timing-function: ease-in;
  }
  8% {
      opacity: 1;
      -o-transform: scale(1.05);
      -o-animation-timing-function: ease-out;
  }
  17% {
      opacity: 1;
      -o-transform: scale(1.1);
  }
  25% {
      opacity: 0;
      -o-transform: scale(1.1);
  }
  100% { opacity: 0 }
}
@-ms-keyframes imageAnimation { 
  0% {
      opacity: 0;
      -ms-animation-timing-function: ease-in;
  }
  8% {
      opacity: 1;
      -ms-transform: scale(1.05);
      -ms-animation-timing-function: ease-out;
  }
  17% {
      opacity: 1;
      -ms-transform: scale(1.1);
  }
  25% {
      opacity: 0;
      -ms-transform: scale(1.1);
  }
  100% { opacity: 0 }
}
@keyframes imageAnimation { 
  0% {
      opacity: 0;
      animation-timing-function: ease-in;
  }
  8% {
      opacity: 1;
      transform: scale(1.05);
      animation-timing-function: ease-out;
  }
  17% {
      opacity: 1;
      transform: scale(1.1);
  }
  25% {
      opacity: 0;
      transform: scale(1.1);
  }
  100% { opacity: 0 }
}
/* Animation for the title */
@-webkit-keyframes titleAnimation { 
  0% {
      opacity: 0;
      -webkit-transform: translateY(200px);
  }
  8% {
      opacity: 1;
      -webkit-transform: translateY(0px);
  }
  17% {
      opacity: 1;
      -webkit-transform: scale(1);
  }
  19% { opacity: 0 }
  25% {
      opacity: 0;
      -webkit-transform: scale(10);
  }
  100% { opacity: 0 }
}
@-moz-keyframes titleAnimation { 
  0% {
      opacity: 0;
      -moz-transform: translateY(200px);
  }
  8% {
      opacity: 1;
      -moz-transform: translateY(0px);
  }
  17% {
      opacity: 1;
      -moz-transform: scale(1);
  }
  19% { opacity: 0 }
  25% {
      opacity: 0;
      -moz-transform: scale(10);
  }
  100% { opacity: 0 }
}
@-o-keyframes titleAnimation { 
  0% {
      opacity: 0;
      -o-transform: translateY(200px);
  }
  8% {
      opacity: 1;
      -o-transform: translateY(0px);
  }
  17% {
      opacity: 1;
      -o-transform: scale(1);
  }
  19% { opacity: 0 }
  25% {
      opacity: 0;
      -o-transform: scale(10);
  }
  100% { opacity: 0 }
}
@-ms-keyframes titleAnimation { 
  0% {
      opacity: 0;
      -ms-transform: translateY(200px);
  }
  8% {
      opacity: 1;
      -ms-transform: translateY(0px);
  }
  17% {
      opacity: 1;
      -ms-transform: scale(1);
  }
  19% { opacity: 0 }
  25% {
      opacity: 0;
      -webkit-transform: scale(10);
  }
  100% { opacity: 0 }
}
@keyframes titleAnimation { 
  0% {
      opacity: 0;
      transform: translateY(200px);
  }
  8% {
      opacity: 1;
      transform: translateY(0px);
  }
  17% {
      opacity: 1;
      transform: scale(1);
  }
  19% { opacity: 0 }
  25% {
      opacity: 0;
      transform: scale(10);
  }
  100% { opacity: 0 }
}
/* Show at least something when animations not supported */
.no-cssanimations .slideshow li span{
  opacity: 1;
}
@media screen and (max-width: 1140px) { 
  .slideshow li div h3 { font-size: 100px }
}
@media screen and (max-width: 600px) { 
  .slideshow li div h3 { font-size: 50px }
}</style>
  <body >
  
  <div class="site-wrap">
    

    <?php include "header.php" ?>
    <ul class="slideshow">
  <li><span>Image 01</span><!-- <div><h3>Welcome to PrintIt</h3></div> --></li>
  <li><span>Image 02</span></li>
  <li><span>Image 03</span></li>
  <li><span>Image 04</span></li>
  <li><span>Image 05</span></li>
  <li><span>Image 06</span></li>
</ul>
  <!-- <div class="container">
    <header>
      <h1>CSS3 <span>Fullscreen Slideshow</span></h1>
  </header>
</div> -->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="site-section">
      <div class="container">
        <div class="title-section "  style="float:left";>
        <br>
          <h2 class="text-uppercase"><span class="d-block" >Easily add your</span>design to a products</h2>
        </div>
        <div class="row align-items-stretch">
          <div class="col-lg-8">
            <div class="product-item sm-height full-height bg-gray">
              <a href="cdform1.php" class="product-category">T-shirts</a>
              <img src="images/tsht1.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <a href="cdform1.php" class="product-category">Hoodies </a>
              <img src="images/hood1.png" alt="Image" class="img-fluid">
            </div>

            <div class="product-item sm-height bg-gray">
              <a href="cdform1.php" class="product-category">Mobile Cases</a>
              <img src="images/mobilecase.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">Our Popular Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="allproduct.php" class="product-item md-height bg-gray d-block">
              <img src="images/friendst.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="allproduct.php">Friends Unisex T-shirt</a></h2>
            <!-- <strong class="item-price">$20.00</strong> -->
             <div class="star-rating">
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="allproduct.php" class="product-item md-height bg-gray d-block">
              <img src="images/couplehoo.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="allproduct.php">Couple hoodie</a></h2>
            <!-- <strong class="item-price"><del>$46.00</del> $28.00</strong> -->
             <div class="star-rating">
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="allproduct.php" class="product-item md-height bg-gray d-block">
              <img src="images/happyb.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="allproduct.php">Happy Birthday Pillow</a></h2>
            <!-- <strong class="item-price"><del>$46.00</del> $28.00</strong> -->

            <div class="star-rating">
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="allproduct.php" class="product-item md-height bg-gray d-block">
              <img src="images/father.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="allproduct.php">Mugs for Father's day</a></h2>
            <!-- <strong class="item-price"><del>$46.00</del> $28.00</strong> -->
            <div class="star-rating">
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="allproduct.php" class="product-item md-height bg-gray d-block">
              <img src="images/iphone.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="allproduct.php">Manchester United iPhone 11 Pro Case</a></h2>
            <!-- <strong class="item-price"><del>$46.00</del> $28.00</strong> -->
             <div class="star-rating">
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="allproduct.php" class="product-item md-height bg-gray d-block">
              <img src="images/pubg.png" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="allproduct.php">Pubg printed cap</a></h2>
            <!-- <strong class="item-price">$58.00</strong> -->
             <div class="star-rating">
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
            </div>
          </div>

        </div>
      </div>
    </div>
   
  
    <?php include "footer.php" ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>