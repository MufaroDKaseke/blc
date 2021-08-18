<?php
require '../includes/config.php';
require '../includes/db_connect.php';
require '../includes/mailist_processes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscribe</title>
  <!-- Libraries -->
  <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/mailing.css">
</head>
<body>

  <section class="subscribe">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <?php

        if (isset($_GET['action'])) {
          if ($_GET['action'] === 'confirm_email') {
            ?>
            <div class="col-md-6 col-lg-5">
              <div class="confirm-container">
                <h2 class="subscribe-title">Confirm Email</h2>
                <form action="">
                  <label for="">Email Address</label>
                  <input type="email" name="confirmed-email" id="" class="form-control" placeholder="Email Address">
                  <hr class="my-2">
                  <!-- Email -->
                  <input type="hidden" name="email" value="<?php echo $_GET['email'];?>">
                  <button type="submit" name="action" value="subscribe" class="blc-btn btn btn-block">Subscribe</button>
                </form>
              </div>
            </div> 
            <?php
          } else if ($_GET['action'] === 'subscribe') {
            if ($_GET['confirmed-email'] === $_GET['email']) {
              if (insertNewEmail($conn, $_GET)) {
                ?>
                <h1 class="text-success">Successfully subscribed</h1>
                <?php
              } else {
                ?>
                <h1 class="text-danger">Failed to subscribe</h1>
                <?php
              }
            } else {
              ?>
              <h1 class="text-danger">Confirmed email is not the same</h1>
              <?php
            }
          } else {
            ?>
            <h1 class="text-danger">No result</h1>
            <?php
          }
        } else {
          ?>
          <h1 class="text-danger">No result</h1>
          <?php
        }
        ?>
      </div>
    </div>
  </section>
  


  <script src="../lib/jquery/jquery-3.6.0.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>