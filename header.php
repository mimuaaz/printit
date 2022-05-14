

<div class="site-navbar bg-black py-2" style="background-color:black">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="">
              <a href="index.php" class="js-logo-clone"><img src="images/printit1.png" height="50px"></a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="has-children active">
                  <a href="index.php">Home</a>
                 
                </li>
                
                <li><a href="allproduct.php">All Products</a></li>
                <li><a href="orders.php">Orders</a></li>
                <li><a href="cdform1.php">Customize Your Product</a></li>
                
                <li><a href="contact.php">Contact</a></li>
                <?php
                if(!isset($_SESSION['cid'])){?>
                <li><a href="form.php">login</a></li>
                <?php } else {?>
               <li><a href="logout.php">logout</a></li>
               <?php }?>
              </ul>
            </nav>
          </div>
          <div class="icons">
         
           
            <a href="cart.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
