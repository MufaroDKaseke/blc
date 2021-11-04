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
  <title>Dashboard - Videos</title>
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
              <div class="dash-panel dash-videos">
                <div class="dash-panel-header d-flex justify-content-between">
                  <h4>Videos</h4>
                  <div class="dash-panel-action">
                    <!-- Button trigger modal -->
                    
                  </div>
                </div>
                <div class="dash-panel-content">
                  <div class="row">
                    <?php

                    $videos = getAllVideos($conn);

                    if ($videos !== false) {
                      foreach ($videos as $video) {
                        $video = (object) $video;
                        ?>
                        <div class="col-sm-6 col-lg-3">
                          <div class="dash-video">
                            <div class="card">
                              <a class="video-caption" onclick="playVideo('<?=$video->code;?>')">
                                <img src="<?=ROOT;?>/uploads/captions/<?=$video->caption;?>" class="card-img-top" alt="<?=$video->title;?>">
                                <i class="fa fa-play-circle"></i>
                              </a>
                              <div class="card-body p-3">
                                <h5 class="card-title video-title"><?=$video->title;?></h5>
                                <p class="card-text video-date"><small class="text-muted">Uploaded <?=getMonth($video->entry_date);?> <?=getDay($video->entry_date);?></small></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                      }
                    } else {
                      ?>
                      <div class="col">
                        <p class="text-muted text-center">No Videos Yet</p>
                      </div>
                      <?php
                    }

                    ?>

                <!--<div class="col-sm-6 col-lg-3">
                      <div class="dash-video">
                        <div class="card">
                          <a class="video-caption" onclick="playVideo('6104abeebc675')">
                            <img src="../img/hero.jpg" class="card-img-top" alt="...">
                            <i class="fa fa-play-circle"></i>
                          </a>
                          <div class="card-body">
                            <h5 class="card-title video-title">The best video</h5>
                            <p class="card-text video-date"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                      </div>
                    </div>-->
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

    <!-- Modal -->
    <div class="modal fade" id="videoPlayModal" tabindex="-1" aria-labelledby="videoPlayModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        </div>
      </div>
    </div>

  </main>


  <script src="<?php echo ROOT?>/lib/jquery/jquery-3.6.0.min.js"></script>
  <script src="<?php echo ROOT?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo ROOT?>/dashboard/js/dashboard.js"></script>
  <script>

    let videoPlayModal = $('#videoPlayModal');
    let resultContainer = $('#videoPlayModal .modal-content');


    // Play Video
    function playVideo(videoCode) {


      $.ajax({
        url: './includes/play_video.php',
        type: 'GET',
        dataType: 'html',
        data: {action: 'play_video', code: videoCode},
        beforeSend: function() {
        },
        success: function(data) {
          resultContainer.html(data);
          videoPlayModal.modal('show');
        },
        error: function(e) {
          console.log(e);
        }, 
        complete: function() {
        }
      });
    }

    // Close Video On Modal Close
    videoPlayModal.on('hidden.bs.modal', function (e) {
      resultContainer.html('');
    });
  </script>
</body>
</html>