<?php
require '../includes/config.php';
require '../includes/db_connect.php';
require './includes/login_process.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Login</title>
  <!-- Libraries -->
  <link rel="stylesheet" href="<?php echo ROOT?>/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo ROOT?>/lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo ROOT?>/admin/css/admin.css">
</head>
<body>

  <section class="login">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6">
          <div class="login-form-container">
            <h1 class="login-title">Login</h1>
            <?php

            if (isset($_GET['result'])) {
              if ($_GET['result'] === 'not_logged_in') {
                ?>
                <p class="login-result"><span class="text-danger"><i class="fa fa-exclamation-triangle"></i> Not Logged In</span></p>
                <?php
              }
            }

            if (isset($_GET['action'])) {
              if ($_GET['action'] === 'logout_student') {
                ?>
                <p class="login-result"><span class="text-warning"><i class="fa fa-exclamation-triangle"></i> Logged Out</span></p>
                <?php
              }
            }
            ?>
            <form action="login.php" method="post">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" name="username" id="" class="form-control" placeholder="Username">
              </div>
              <label for="password">Password</label>
              <div class="input-group">
                <input type="password" name="password" id="" class="form-control" placeholder="Password">
              </div>
              <button type="submit" name="action" value="login_student" class="blc-btn btn">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="<?php echo ROOT?>/lib/jquery/jquery-3.6.0.min.js"></script>
  <script src="<?php echo ROOT?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo ROOT?>/admin/js/admin.js"></script>
</body>
</html>