<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: product.php");
  exit;
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FOODIES</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
  <!-- admin login section start -->
  <section>

    <div id="id01" class="modal-admin">

      <form class="modal-content-admin animate" action="login.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="img/admin-user/admin.png" alt="Avatar" class="avatar card-img-top">
        </div>
        <div class="container">
          <label for="uname"><b>Admin Username</b></label>
          <input type="text" placeholder="Enter Admin Username" name="username" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>

          <button type="submit" name="submit">Login</button>
          <!-- <p>Don't have an account? <a href="register.php">Sign up now</a>.</p> -->
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>
  </section>

<!-- Admin button -->
  <section>
    <div class="r ">
      <div class=" px-4">
        <div class="card" style="width: 18rem;">
          <img src="./img/admin-user/admin.png" class="card-img-top" alt="...">
          <div class="card-body">
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn btn-primary px-4 d-flex justify-content-center mx-auto">ADMIN</button>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="modal fade" id="loginPageModal" tabindex="-1" aria-labelledby="loginPageModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginPageModalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="admin.php" method="POST">
            <div id="phone-details" class="modal-body d-flex justify-content-center text-center">

            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <script src="./js/main.js"></script>
</body>

</html>