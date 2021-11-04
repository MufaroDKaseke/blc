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
  <title>Dashboard - Events</title>
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
          </div>
        </div>
      </section>
      <!--End Of Notification Panel -->

      <section class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <!-- Dash Panel -->
              <div class="dash-panel dash-events">
                <div class="dash-panel-header d-flex justify-content-between">
                  <h4>Events</h4>
                  <div class="dash-panel-action">
                    <!-- Button trigger modal -->
                    
                  </div>
                </div>
                <div class="dash-panel-content">
                  <div class="row">

                    <?php

                    $events = getAllEvents($conn);

                    if($events !== false) {
                      foreach ($events as $event) {
                        $event = (object) $event;
                        ?>
                        <div class="col-md-6 col-lg-3">
                          <div class="event-container">
                            <div class="card">
                              <img src="<?=ROOT;?>/uploads/captions/<?=$event->caption;?>" alt="" class="event-img card-img-top">
                              <div class="event-date">
                                <span class="month"><?=getMonth($event->date);?></span>
                                <span class="day"><?=getDay($event->date);?></span>
                              </div>
                              <div class="card-body">
                                <a href="<?=$event->link;?>" class="event-name text-truncate h4 card-title"><?=$event->title;?></a>
                                <p class="event-desc small"><?=$event->description;?></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php    
                      }
                    } else {
                      ?>
                      <div class="col">
                        <p class="text-muted text-center">No Events Yet</p>
                      </div>
                      <?php
                    }
                    ?>


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