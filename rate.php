
<?php
define('DIR', '');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();


if(!isset($_SESSION["cid"])) {
       header("location:form.php");
}

$rate=$_GET['rate'];


$stmts = $admin -> ret("SELECT * FROM `product` WHERE `p_id` = '$rate'");
$rows = $stmts -> fetch(PDO::FETCH_ASSOC);



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
  <body class="goto-here">
		<?php include "header.php" ?>
    <!-- END nav -->
<br><br>
   <div class="about" style="padding-left: 500px">
        <div class="w3_agileits_contact_grids">
         
            <div class="col-md-6 w3_agileits_contact_grid_right">
                <h2 class="w3_agile_header">Leave us<span> Rating:</span></h2>

                <form action="controller/rate.php" method="post">


           

                    <span class="input input--ichiro">
                      <label>Your Name</label>
                        <input class="form-control" type="text" id="input-25" name="a" placeholder=" " required="" />
                       
                    </span>
                   
<br><br>

              <label style="color: black">Rate Us:</label>
<input type="radio" name="b" value="1">1
<input type="radio" name="b" value="2">2
<input type="radio" name="b" value="3">3
<input type="radio" name="b" value="4">4
<input type="radio" name="b" value="5">5
                   

                        <input type="hidden" name="c" value="<?php echo $rows['p_id']; ?>">

<br><br>
                    <input type="submit" value="Send" class="btn btn-success" name="add">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>










    <?php include "footer.php" ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>