

<?php  include "../be/common/session.php";
ensureLoggedInIndex();

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Walter White</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->


  </head>

 

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="cmsindex.php" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="cmsindex.php" class="active">Home</a></li>
                      <li><a href="CMS/addItem.php">Add Item</a></li>
                      <li><a href="CMS/activate.php">Activate/Deactive Item</a></li>
                      
                      <li><a href="CMS/AddAdmin.php">Add Admin</a></li>

                      <li><a href="indexClient.php">View Client Side</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Welcome to </h6>
            <?php
           // $username = $_SESSION['username']; // Retrieve the username from the session
    //   echo "Hello, $username! Welcome back to the Admin Page. Here you can add, activate, and deactivate items." 
    // ?>
            
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
            <img src="assets/images/banner-image.jpg" alt="">
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="features">
    <h2>Here are the features of being admin! </h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="addItem.php">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Add Item</h4>
              
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="CMS/activate.php">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Activate Item</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="CMS/activate.php">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
              </div>
              <h4>De activate Item</h4>
            </div>
          </a>
        </div>
        
        <div class="col-lg-3 col-md-6">
        <a href="CMS/addAdmin.php">
        <div class="item">
            <div class="image">
                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
            </div>
            <h4>Add Admin</h4>
        </div>
    </a>
</div>

      </div>
    </div>
  </div>

 
  
        

  

 

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>