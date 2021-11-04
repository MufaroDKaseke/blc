<?php
require '../includes/config.php';
require './includes/user_session.php';
require '../includes/db_connect.php';
require './includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <!-- Libraries -->
  <link rel="stylesheet" href="<?php echo ROOT?>/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo ROOT?>/lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo ROOT?>/admin/css/admin.css">
  <!-- Favicons -->
  <?php DISPLAY_ICONS();?>
</head>
<body>

  <main class="wrapper">

    <!-- Sidebar -->
    <?php
    require './includes/sidebar.php';
    ?>
    <!-- End Of Sidebar -->
    
    <!-- Page Content -->
    <div class="page-content-wrapper">
      <!-- Navbar -->
      <?php
      require './includes/header.php';
      ?>
      <!-- End Of Header -->

      <!-- Notification Panel -->
      <section class="notification-panel">
        <div class="container-fluid">
          <div class="row">
            <?php

            // Get Action
            if (isset($_GET['result'])) {
              if ($_GET['result'] === 'login_success') {
                ?>
                <div class="col-12">
                  <div class="notification">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong><span class="badge badge-pill badge-success"><i class="fa fa-check"></i></span></strong> Logged in as <?php echo $_SESSION['name'];?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>             
                  </div>
                </div>
                <?php
              }
            }

            // Post Action
            if (isset($_POST['action'])) {
              if ($_POST['action'] === 'update_admin_profile') {

                $formData = $_POST;
                $prevData = getUser($conn, $formData['user_id']);
                $formData['name'] = $prevData['name'];

                if (isset($formData['new-password']) && $formData['new-password'] !== "") {
                  if ($formData['new-password'] !== $formData['confirm-password']) {
                    ?>
                    <div class="col-12">
                      <div class="notification">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong><span class="badge badge-pill badge-danger">error</span></strong> New password does not match confirmed password!!!
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>             
                      </div>
                    </div>
                    <?php
                    $formData['password'] = $prevData['password'];
                  } else {
                    $formData['password'] = $formData['new-password'];
                  }
                } else {
                  $formData['password'] = $prevData['password'];
                }

                if (updateUser($conn, $formData)) {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-success">success</span></strong> Successfully updated your profile</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <?php
                  $_SESSION['username'] = $formData['username'];
                  $_SESSION['password'] = $formData['password'];
                } else {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-danger">error</span></strong> Failed to update your profile</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <?php
                }
              }

            }
            ?>
          </div>
        </div>
      </section>
      <!--End Of Notification Panel -->

      <section class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <!-- Dash Panel -->
              <div class="dash-panel dash-profile">
                <div class="dash-panel-header d-flex justify-content-between">
                  <h4>Profile</h4>
                  <div class="dash-panel-action">
                    <!-- Button trigger modal -->
                    
                  </div>
                </div>
                <div class="dash-panel-content">
                  <div class="row">
                    <?php
                    $user = (object) $_SESSION;
                    ;?>

                    <div class="col-md-6 col-lg-4">
                      <p>Admin Id : <strong><?=$user->user_id;?></strong></p>

                      <form action="./profile.php" method="post">
                        <div class="form-row">
                          <div class="col-12 form-group">
                            <label for="">Fullname</label>
                            <input type="text" name="name" value="<?=$user->name;?>" class="form-control form-control-sm" placeholder="Fullname" disabled>
                          </div>
                          <div class="col-12 form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" value="<?=$user->username;?>" class="form-control form-control-sm" placeholder="Username">
                          </div>
                          <div class="col-12 form-group">
                            <label for="">New Password</label>
                            <input type="password" name="new-password" class="form-control form-control-sm" placeholder="New Password" autocomplete="new-password">
                          </div>
                          <div class="col-12 form-group">
                            <label for="">Confirm New Password</label>
                            <input type="password" name="confirm-password" class="form-control form-control-sm" placeholder="Confirm New Password" autocomplete="new-password">
                          </div>
                          <div class="col-12 form-group">
                            <!-- User Id -->
                            <input type="hidden" name="user_id" value="<?=$user->user_id;?>">
                            <button type="action" name="action" value="update_admin_profile" class="btn blc-btn btn-sm">Save</button>
                          </div>

                        </div>
                      </form>
                    </div>

                  </div>

                </div>
              </div>
              <!-- End Of Dash Panel -->
            </div>
          </div>
        </div>
      </section>       
    </div>
    <!-- End Of Page Content -->

  </main>


  <script src="<?php echo ROOT?>/lib/jquery/jquery-3.6.0.min.js"></script>
  <script src="<?php echo ROOT?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo ROOT?>/admin/js/admin.js"></script>
</body>
</html>