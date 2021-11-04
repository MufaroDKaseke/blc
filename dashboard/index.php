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
  <title>Dashboard</title>
  <!-- Libraries -->
  <link rel="stylesheet" href="<?php echo ROOT?>/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo ROOT?>/lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo ROOT?>/dashboard/css/dashboard.css">
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
                      <strong><span class="badge badge-pill badge-success"><i class="fa fa-check"></i></span></strong> Logged in as <strong>@<?php echo $_SESSION['username'];?></strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>             
                  </div>
                </div>
                <?php
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
              <div class="dash-panel dash-welcome">
                <div class="dash-panel-header d-flex justify-content-between">
                  <h4>Dashboard</h4>
                  <div class="dash-panel-action">
                    <!-- Button trigger modal -->
                    
                  </div>
                </div>
                <div class="dash-panel-content">
                  <div class="row">

                    <div class="col-md-6 col-lg-3">
                      <div class="dash-welcome-msg">
                        <i class="fa fa-home"></i>
                        <h4>Welcome ,<?php echo $_SESSION['name'];?></h4>
                        <p>Get familiar with the student dashboard, here are some ways to get started</p>
                      </div> 
                    </div>

                    <div class="col-md-6 col-lg-3">
                      <div class="small-box dash-welcome-info">
                        <div class="inner">
                          <h3>
                            <?php
                            $videos = getAllVideos($conn);
                            if ($videos !== false) {
                              echo count($videos);
                            } else {
                              echo '0';
                            }
                            ?>
                          </h3>
                          <p>Videos</p>
                        </div>
                        <a href="<?=ROOT;?>/dashboard/videos.php" class="small-box-footer">Start  Watching <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                      <div class="small-box dash-welcome-info">
                        <div class="inner">
                          <h3>
                            <?php
                            $materials = getAllMaterials($conn);
                            if ($materials !== false) {
                              echo count($materials);
                            } else {
                              echo '0';
                            }
                            ?>
                          </h3>
                          <p>Materials</p>
                        </div>
                        <a href="<?=ROOT;?>/dashboard/materials.php" class="small-box-footer">Start Reading <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                      <div class="small-box dash-welcome-info">
                        <div class="inner">
                          <h3>
                            <?php
                            $events = getAllEvents($conn);
                            if ($events !== false) {
                              echo count($events);
                            } else {
                              echo '0';
                            }
                            ?>
                          </h3>
                          <p>Events</p>
                        </div>
                        <a href="<?=ROOT;?>/dashboard/events.php" class="small-box-footer">See Events <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
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
  <script src="<?php echo ROOT?>/dashboard/js/dashboard.js"></script>
</body>
</html>