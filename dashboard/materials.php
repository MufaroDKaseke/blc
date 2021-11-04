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
  <title>Dashboard - Materials</title>
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
              <div class="dash-panel dash-materials">
                <div class="dash-panel-header d-flex justify-content-between">
                  <h4>Materials</h4>
                  <div class="dash-panel-action">
                    <!-- Button trigger modal -->
                    
                  </div>
                </div>
                <div class="dash-panel-content">
                  <div class="row">
                    <?php

                    $materials = getAllMaterials($conn);
                    if ($materials !== false) {
                      foreach ($materials as $material) {
                        $material = (object) $material;
                        ?>
                        <div class="col-md-3 col-lg-2">
                          <div class="dash-material">
                            <img src="<?=ROOT;?>/uploads/captions/<?=$material->preview;?>" width="100%" alt="<?=$material->title;?>" class="img-fluid material-img">
                            <a target="_blank" href="<?=ROOT;?>/uploads/materials/<?=$material->link;?>" class="material-name"><?=$material->title?></a>
                            <span class="material-author"><?=$material->author;?></span>
                          </div>
                        </div>
                        <?php     
                      } 
                    } else {
                      ?>
                      <div class="col">
                        <p class="text-muted text-center">No Materials Yet</p>
                      </div>
                      <?php
                    }
                    ?>
                    
                <!--<div class="col-md-3 col-lg-2">
                      <div class="dash-material">
                        <img src="../img/material.jpg" width="100%" alt="" class="img-fluid material-img">
                        <a href="#" class="material-name">The best ever of all the best</a>
                        <span class="material-author">Tha that that</span>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload Material</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="">
              <label for="preview_img">Preview Image</label>
              <input type="text" name="name" id="" class="form-control form-control-sm" placeholder="Name Of Material">
              <label for="preview_img">Preview Image</label>
              <input type="text" name="author" id="" class="form-control form-control-sm" placeholder="Author">
              <label for="preview_img">Preview Image</label>
              <input type="date" name="" id="" class="form-control form-control-sm" placeholder="Date Of Publication">
              <label for="preview_img">Preview Image</label>
              <input type="file" name="" id="" class="form-control-file" placeholder="Preview Image">
              <label for="preview_img">Material File</label>
              <input type="file" name="" id="" class="form-control-file" placeholder="Material File">

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

  </main>


  <script src="<?php echo ROOT?>/lib/jquery/jquery-3.6.0.min.js"></script>
  <script src="<?php echo ROOT?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo ROOT?>/dashboard/js/dashboard.js"></script>
</body>
</html>