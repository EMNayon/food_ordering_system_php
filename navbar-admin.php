<?php 
session_start();
?>
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand -0" href="product.php"><img src="img/logo.png" alt="" width="80"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Maintenace <span class="caret"></span></a>
          <ul class="dropdown-menu"> -->
            <li><a href="product.php">Products</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="category.php">Category</a></li>
          <!-- </ul>
        </li> -->
        <li><a href="sales.php">Sales</a></li>
        <li>
          <!-- <a href="admin.php">ADMIN</a> -->
           
              <!-- <?php if(isset($_SESSION['user'])): ?>
                <strong><?php echo $_SESSION['user']['username']; ?></strong>
                <small>
                  <i>(<?php echo ucfirst($_SESSION['user']['usertype']); ?>)</i>
                  <br>
                  <a href="index.php?logout='1'" style="color:red;">Log-out</a>
                </small>
                <?php endif ?> -->
         
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>