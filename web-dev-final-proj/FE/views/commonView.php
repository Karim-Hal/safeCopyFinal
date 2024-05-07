   <?php
function get_header(){
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 50%;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="indexClient.php" class="active">Home</a></li>
                      <li><a href="shopClient.php">View Our Platters</a></li>
                      
                      <li><a href="contactClient.php">Contact Us</a></li>
                     
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>

<?php
}
function get_footer(){
    ?>
    <div class="container">
    <div class="col-lg-12">
      <p>Copyright © 2048 LUGX Gaming Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
    </div>
  </div>
  <?php
}

function get_header_CMS(){


?>
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
                            <li><a href="../cmsindex.php" class="active">Home</a></li>
                            <li><a href="addItem.php">Add Item</a></li>
                            <li><a href="activate.php">Activate/Deactivate Item</a></li>
                            <li><a href="addAdmin.php">Add Admin</a></li>
                            <li><a href="../indexClient.php">View Client Side</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>


    <?php
}
?>


