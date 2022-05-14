
<?php
define('DIR', '');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();


if(!isset($_SESSION["cid"])) {
        header("location:form.php");
}

$uid = $_SESSION['cid'];
$iddd=$_SESSION['cid'];

$total='';


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
     <script language="javascript" type="text/javascript">
function changeRate(id,pos) {

var qu = document.getElementsByName("quantity")[pos].value;
window.location.href="controller/updatecart.php?id="+id+"&q="+qu;

}

function contShop() {

window.location.href="index.php";
checkOut
}

// function checkOut(uid,totammount) {

// window.location.href="firstuserpage4.php?id="+uid+"&ta="+totammount;

// }

// function dlt(id) {
  

// window.location.href="Controller/dltcart.php?id="+id;

// }

</script>
  
  <div class="site-wrap">
    

  <?php include "header.php" ?>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>

                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <?php 
                       
           $stmt = $admin -> ret("SELECT * FROM `cart` WHERE `c_id` = '$uid'");
           $xstmt = $admin -> ret("SELECT COUNT(*) FROM `cart` WHERE `c_id` = '$uid'");
           $xrow = $xstmt -> fetch(PDO::FETCH_ASSOC);
           
                         $a= implode($xrow);
                        
                        $b = 0;
                        $i = 0;

           while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
                
                $cid = $row['cart_id'];    
                       
               $vid = $row['p_id'];
               $size = $row['size'];

                $astmt = $admin-> ret("SELECT * FROM `product` WHERE `p_id` = '$vid'");
                $arow = $astmt -> fetch(PDO::FETCH_ASSOC);

                $qun = $row['quantity'];

               


                 $pri = $arow['price'];

                

                $totqp = $qun * $pri;
               
              $image = $arow['image'];
              $image = substr($image,3);
             

              $b = $totqp + $b;
              $total = $b + 50;




                            

                        ?>
                <tbody>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="admin/controller/<?php echo $arow['image']; ?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $arow['pro_name']; ?></h2>
                    </td>
                    <td>₹ <?php echo $arow['price'] ?></td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                       <input size="1"  type="number" name="quantity" class="form-control text-center"  id="<?php echo $row['cart_id']; ?>" onChange="changeRate(<?php echo $cid;?>,<?php echo $i; ?>)" min="1" max="100" value="<?php echo $row['quantity']; ?>">
                      </div>

                    </td>
                    <td>₹ <?php echo $totqp.".00" ; ?></td>
                    <td><a title="Remove this item" class="remove" href="controller/deletecart.php?id=<?= $row['cart_id']; ?>"> X</td>
                  </tr>

              
                </tbody>
                <?php 
          ++$i;
      } ?>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              
            
            </div>
            <div class="row">
              
              
              
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">₹ <?php echo $b.".00";?></strong>
                  </div>
                </div><div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Delivery</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">&nbsp ₹ 50</strong>
                  </div>
                </div>
         
                <div class="row mb-5">
         
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">₹ <?php echo $total.".00"; ?></strong>
                  </div>
                    <?php 
                            $_SESSION['ammount'] = $total;
                            
                            
                            ?> 
                          
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.php?id=<?php echo $uid ?> & m=<?php echo $size ?> & tot=<?php echo $total ?>'">Proceed To Checkout</button>
                  </div>
                </div>
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