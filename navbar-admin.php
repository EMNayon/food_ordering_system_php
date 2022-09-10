<?php 
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: admin.php");
  exit;
}
?>

<header>
  <nav class="navbar navbar-expand-lg navigation-wrap sticky-top">
      <div class="container sticky-top">
                <!-- Brand and toggle get grouped for better mobile display -->
            <div class="row">
                <div class="col-lg-8 d-flex justify-content-between">
                  <a class="navbar-brand" href="product.php"><img src="img/logo.png" alt=""></a>
               </div> 
            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="row justify-content-between">
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="nav navbar-nav ms-auto mb-2 mb-lg-0"">
                    <li class="nav-item">
                      <a class="nav-link active" href="product.php">Products</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="category.php">Category</a>
                    </li class="nav-item">
                    <li class="nav-item">
                      <a class="nav-link" href="sales.php">Sales</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout-admin.php">Logout</a>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
  </nav>
</header>