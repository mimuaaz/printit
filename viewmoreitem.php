<?php

define('DIR','');
require_once DIR .'config.php';

$control = new Controller();

$admin = new Admin();
$id=$_GET['id'];

                                        $astmt=$admin->ret("SELECT * FROM `category`");
                                        while($arow=$astmt->fetch(PDO::FETCH_ASSOC)):

                                            $d_arr[$arow['cid']]=$arow['cname'];
                                            endwhile;
                                   
$uid = $_SESSION['cid'];

$stmts = $admin -> ret("SELECT * FROM `product` WHERE `p_id` = '$id'");
$row = $stmts -> fetch(PDO::FETCH_ASSOC);

$name = $row['pro_name'];
$price = $row['price'];
$image = $row['image'];
$category = $row['ptype'];
?>

<?php


                    $stmh=$admin -> ret("SELECT * FROM `review` WHERE `p_id`='$id'");
                    $sum=0;
                   while($rowsh=$stmh->fetch(PDO::FETCH_ASSOC)){
                     $rate=$rowsh['review'];
                     $sum=$sum+$rate;
                   }

?>



 <?php


$stmtssf = $admin -> ret("SELECT COUNT(*) FROM `review` WHERE `p_id`='$id'");
$rowssg = $stmtssf -> fetch(PDO::FETCH_ASSOC);
$ab = implode($rowssg);

?>








<?php 



if ($ab == 0) {
  $per = 0;
} else {
  $per = $sum / $ab;
}
 


//error solving for 0 in php.
// if ($c == 0) {
//   $a = 0;
// } else {
//   $a = $b / $c;
// }
 
//$per=$sum/$ab;




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
  <body>
  
  <div class="site-wrap">
    
<?php include "header.php" ?>
         
        </div>
      </div>
    </div>
    
   

    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="item-entry">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="admin/controller/<?php echo $image ?>" alt="Image" class="img-fluid">
              </a>
              
            </div>

          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $name?></h2>
            <p><?php echo $row['desc']?></p>
            <p><strong class="text-primary h4"><i class="fa fa-rupee"></i><?php echo $price?></strong></p>
                 <div class="rating1">

            <a href="review.php?rev=<?php echo $row['p_id']; ?>">Reviews:<span class="starRating"></span></a>
              </div>
<!--  <input id="rating5" type="radio" name="rating" value="5">
              <label for="rating5">5</label>
              <input id="rating4" type="radio" name="rating" value="4">
              <label for="rating4">4</label>
              <input id="rating3" type="radio" name="rating" value="3" checked="">
              <label for="rating3">3</label>
              <input id="rating2" type="radio" name="rating" value="2">
              <label for="rating2">2</label>
              <input id="rating1" type="radio" name="rating" value="1">
              <label for="rating1">1</label> -->
              <!-- <div class="rating">
              <span style="color:orange">★</span><span style="color:orange">★</span><span style="color:orange">★</span><span style="color:orange">★</span><span>★</span>:<?php echo $per; ?>
              <div> -->
              <div class="rating">
                            <i style="color:orange" class="fa fa-star"></i>
                            <i style="color:orange" class="fa fa-star"></i>
                            <i style="color:orange" class="fa fa-star"></i>
                            <i style="color:orange" class="fa fa-star"></i>
                            <i style="color:orange" class="fa fa-star-half-o"></i>
                            <span>  <?php echo $per; ?></span>
                        </div>
            
            <a href="rate.php?rate=<?php echo $row['p_id']; ?>" style="color: blue;">Rate Us</a>

         
<form action="controller/addtocart.php" method="post">
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder="" name="quantity" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>

            </div>
            <?php if($category == 2 or $category == 3){?>
            <select class="" name="size">
              <option>Select Size</option>
              <option value="s">S</option>
              <option value="m">M</option>
              <option value="l">L</option>
              <option value="xl">XL</option>
              <option value="xxl">XXL</option>
            </select>
             <!-- <input type="text" class="form-control text-center"  placeholder="enter size" name="size" aria-label="Example text with button addon" aria-describedby=""> -->
            <?php } ?>

 <input type="hidden" name="vid" value="<?php echo $id;?>">

                   <input type="hidden" name="uid" value="<?php echo $uid;?>">  

               
                   <input type="hidden" name="name" value="<?php echo $name;?>"> 

                   <input type="hidden" name="i" value="<?php echo $image;?>">  
            </div>
                 <p><input type="submit" name="add" value="Add to cart" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary"></p>

          </div>
        </form>
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