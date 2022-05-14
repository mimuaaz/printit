
<?php

define('DIR','');
require_once DIR .'config.php';

$control = new Controller();

$admin = new Admin();
if(!isset($_SESSION["cid"])) {
        header("location:form.php");
}

$uid = $_SESSION['cid'];
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
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Thank You</strong></div>
        </div>
      </div>
    </div>  
<h3>View Your Orders</h3>
     <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                    
                                                <th>Order Id</th>
                                                <th>Quantity</th>
                                                <th>Title</th>
                                                <th>Product name</th>
                                           
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                          <?php 
                                        $astmt=$admin->ret("SELECT * FROM `product`");
                                        while($arow=$astmt->fetch(PDO::FETCH_ASSOC)):

                                            $d_arr[$arow['p_id']]=$arow['pro_name'];
                                            endwhile;
                                        $stmt=$admin->ret("SELECT * FROM `orderedproduct` where `u_id`=".$uid);
                                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['or_id'] ?> </td>
                                                <td><?php echo $row['quantity'] ?></td>
                                                <td><span class="badge badge-primary px-2"><?php echo $row['title'] ?></span>
                                                </td>
                                                <td><?php echo $d_arr[$row['p_id']] ?></td>
                                               
                                                <td><img src="admin/controller/<?php echo $row['image'] ?>" height="120px" width="120px"></td>
                                                <td class="color-primary"><?php echo $row['date'] ?></td>
                                                <td class="color-primary"><?php echo $row['status'] ?></td>
                                                
                                            </tr>
                                           
                                        </tbody>
                                         <?php } ?>
                                    </table>
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