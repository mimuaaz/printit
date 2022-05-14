<?php

define('DIR','');
require_once DIR .'config.php';

$control = new Controller();

$admin = new Admin();
if(!isset($_SESSION["cid"])) {
        header("location:form.php");
}
$id=$_GET['id'];
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    

    <?php include "header.php" ?>
    
    <div class="site-blocks-cover inner-page" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#PrintIt Collection</h2>
            <h1>Enjoy Shopping</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/ig1.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-1">

            <div class="row align">
              <div class="col-md-12 mb-5">
                
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                   <!--  <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button> -->
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Men</a>
                      <a class="dropdown-item" href="#">Women</a>
                      <a class="dropdown-item" href="#">Children</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <!-- <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuReference" data-toggle="dropdown">Reference</button> -->
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             
            <div class="row mb-5">
            <?php 
                                        $astmt=$admin->ret("SELECT * FROM `category`");
                                        while($arow=$astmt->fetch(PDO::FETCH_ASSOC)):

                                            $d_arr[$arow['cid']]=$arow['cname'];
                                            endwhile;
                                        $stmt=$admin->ret("SELECT * FROM `product` where `ptype`=".$id);
                                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>

              <div class="col-lg-6 col-md-6 item-entry mb-4">

                <a href="viewmoreitem.php?id=<?php echo $row['p_id']?>" class="product-item md-height bg-gray d-block">
                  <img src="admin/controller/<?php echo $row['image']?>" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="viewmoreitem.php?id=<?php echo $row['p_id']?>"><?php echo $row['pro_name']?></a></h2>
                <strong class="item-price"><i class="fa fa-rupee"></i><?php echo $row['price']?></strong>
                <a href="viewmoreitem.php?id=<?php echo $row['p_id']?>" style="margin-left:50px"><i class="fa fa-eye"></i></a>
              </div>
                 <?php }?>
             </div>
          
         
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  
                </div>
              </div>
            </div>
          </div>
             

          <div class="col-md-3 order-2 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
                         <?php 
                                        $xstmt=$admin->ret("SELECT * FROM `category`");
                                        while($xrow=$xstmt->fetch(PDO::FETCH_ASSOC)){?>
                <li class="mb-1"><a href="catview.php?id=<?php echo $xrow['cid']?>" class="d-flex"><span><?php echo $xrow['cname']?></span> <span class="text-black ml-auto"></span></a></li>
              <?php } ?>
               
              </ul>
            </div>

           

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