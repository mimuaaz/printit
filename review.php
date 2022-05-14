<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
define('DIR', '');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();


if(!isset($_SESSION["cid"])) {
       header("location:form.php");
}

$rev=$_GET['rev'];


?>
<!DOCTYPE html>
<html>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
<body>
<!-- header -->
	<?php include "header.php" ?>
	<!-- //header -->
<!-- navigation -->

		
<!-- //navigation -->
<!-- breadcrumbs -->

<br><br><br><br><br><br><br><br><br><br>
	<div class="brands">
		<div class="container">
		<center><h3 style="color:black">view all user review</h3></center>
			<div class="brands-agile">
				
	
 <table class="table" style="margin: 1px 330px;">
                                        <!-- <thead>
                                            <tr>
                                               
                                                <th>user name:</th>
                                                <th>review</th>
                                                
                                            </tr>
                                        </thead> -->
                                        
               <?php



$stmts = $admin -> ret("SELECT * FROM `review` WHERE `p_id` = '$rev'");
while($rows = $stmts -> fetch(PDO::FETCH_ASSOC)){


    ?>

    <tbody>
<tr>
    

    <td style="color:black">user:<?php echo $rows['name']; ?></td>
    <td style="color:black"><?php echo $rows['review']; ?> <i class="fa fa-star"></i></td>
</tr>

    </tbody>

<?php } ?>
</table>



    
			
		</div>
	</div>	
</div>






	
<!-- new -->
	
<!-- //new -->
<!-- //footer -->
<?php include "footer.php" ?>

<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 

</body>
</html>