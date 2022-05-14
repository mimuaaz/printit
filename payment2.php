<?php
define('DIR', '');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();


if(!isset($_SESSION["cid"])) {
       header("location:index.php");
}


$id=$_GET['id'];

$stmts = $admin -> ret("SELECT * FROM `cdesign` WHERE `cd_id` = '$id'");
$row = $stmts -> fetch(PDO::FETCH_ASSOC);

$price = $row['price'];
$pro = $row['pro_name'];
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
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
             <form action="controller/order2.php" method="POST">
              <input type="hidden" name="price" value="<?php echo $price ?>">
            <h2 class="h3 mb-3 text-black">Billing Details</h2>
            <div class="p-3 p-lg-5 border">
             
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Full Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="name">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="c_lname" name="email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_companyname" class="text-black">Phone </label>
                  <input type="text" class="form-control" id="c_companyname" name="phone">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="address" placeholder="Street address">
                </div>
              </div>

            
              <div class="form-group row">
          
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">City <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="city">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">State  <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="state">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Pincode <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="pincode" placeholder="Phone Number">
                </div>
              </div>

              <div class="form-group">
                <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="radio"  id="c_create_account" name="co" value="COD"> COD</label>
                <div class="collapse" id="create_an_account">
                  <div class="py-2">
           
                    
                  </div>
                </div>
              </div>


              <div class="form-group">
                <label for="c_ship_different_address" class="text-black" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="radio"  id="c_ship_different_address" name="co" value="online">Online</label>
                <div class="collapse" id="ship_different_address">
                  <div class="py-2">


                    <div class="form-group row mb-5">
                      <div class="col-md-6">
                        <img src="images/22.png" height="200px" width="200px" />
                      </div>
                      <div class="col-md-6">
                        <label for="c_diff_email_address" class="text-black">Enter Transaction ID <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_email_address" name="trans">
                      </div>
                      
                    </div>

                  </div>

                </div>
              </div>

             
            </div>
          </div>
         
            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td>Customized &nbsp;<?php echo $row['pro_name']; ?> <strong class="mx-2"></strong>   </td>
                        <td>Rs <?php echo $row['price']; ?></td>
                        
                      </tr>
                     
            
                     
                    </tbody>
                  </table>

                 

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="window.location='thankyou.php'">Place Order</button>
                  </div>
</form>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
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