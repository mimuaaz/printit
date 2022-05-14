<?php

define('DIR','');
require_once DIR .'config.php';

$control = new Controller();

$admin = new Admin();
$id=$_GET['id'];

                                
                                   


$stmts = $admin -> ret("SELECT * FROM `product` WHERE `p_id` = '$id'");
$row = $stmts -> fetch(PDO::FETCH_ASSOC);

$name = $row['pro_name'];
$price = $row['price'];
$category = $row['ptype'];
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

    <div class="site-section" style="padding-left:500px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Customize your design</h2>
          </div>
          <div class="col-md-7">

            <form action="controller/cdform.php" method="post" enctype="multipart/form-data">

              <input type="hidden" name="price" value="<?php echo $price ?>">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Product Name</label>
                    <input type="text" value="<?php echo $name ?>" class="form-control" id="c_subject" name="type" readonly="">

                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Custom text</label>
                    <textarea name="text" id="c_message" cols="30" rows="7" class="form-control" placeholder="Write your customize text"></textarea>
                  </div>
                </div>   
                 <?php if($category == 2 or $category == 3){?>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Size</label>
         <select class="form-control" name="size">
              <option>Select Size</option>
              <option value="s">S</option>
              <option value="m">M</option>
              <option value="l">L</option>
              <option value="xl">XL</option>
              <option value="xxl">XXL</option>
            </select>
                  </div>
                </div>
                <?php } ?>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Upload customize design</label>
                    <input type="file" class="form-control" id="c_subject" name="image">
                  </div>
                </div>

      
                
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="add" value="Upload">
                  </div>
                </div>
              </div>
            </form>
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