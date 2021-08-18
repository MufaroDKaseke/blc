<?php
require '../includes/config.php';
require '../includes/db_connect.php';
require './includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Videos</title>
  <!-- Libraries -->
  <link rel="stylesheet" href="<?php echo ROOT?>/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo ROOT?>/lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo ROOT?>/admin/css/admin.css">
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
            if (isset($_GET['action'])) {
              // Delete Event
              if ($_GET['action'] === 'delete_video') {
                if (deleteVideo($conn, $_GET['code'])) {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-success">success</span></strong> Successfully deleted video <strong>#<?php echo $_GET['code'];?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <?php
                } else {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-danger">error</span></strong> Failed to delete video <strong>#<?php echo $_GET['code'];?></strong>
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

            // Post Action
            if (isset($_POST['action'])) {
              if ($_POST['action'] === 'upload_video') {
                $videoCode = generateId();

                $formData = $_POST;
                $formData['code'] = $videoCode;
                $formData['caption'] = uploadVideoPreview($_FILES['caption'], $videoCode);
                $formData['link'] = uploadVideo($_FILES['video'], $videoCode);
                $formData['decsription'] = trim($formData['description']);

                if (insertNewVideo($conn, $formData)) {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-success">success</span></strong> Successfully uploaded new video <strong>#<?php echo $videoCode?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>             
                    </div>
                  </div>
                  <?php
                } else {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-danger">error</span></strong> Failed to upload new video <strong>#<?php echo $videoCode?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>             
                    </div>
                  </div>
                  <?php
                }
              } else if ($_POST['action'] === 'update_video') {
                $formData = $_POST;

                if (isset($_FILES['caption']) && $_FILES['caption']['tmp_name'] !== '') {
                  if ($formData['caption'] !== '') deleteFiles(['../uploads/captions/' . $formData['caption']]);
                  $formData['caption'] = uploadVideoPreview($_FILES['caption'], $formData['code']);
                }

                if (updateVideo($conn, $formData)) {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-success">success</span></strong> Successfully updated video <strong>#<?php echo $formData['code'];?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <?php
                } else {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-danger">error</span></strong> Failed to update video <strong>#<?php echo $formData['code'];?></strong>
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
              <div class="dash-panel">
                <div class="dash-panel-header d-flex justify-content-between">
                  <h4>Videos</h4>
                  <div class="dash-panel-action">
                    <!-- Button trigger modal -->
                    <a href="" data-toggle="modal" data-target="#uploadVideoModal">Upload New</a>
                  </div>
                </div>
                <div class="dash-panel-content">
                  <table class="table table-sm table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Caption</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach (getAllVideos($conn) as $video) {
                        $video = (object) $video;
                        ?>
                        <tr>
                          <th scope="row"><?php echo $video->code;?></th>
                          <td><img src="../uploads/captions/<?php echo $video->caption;?>" alt="" width="70px"></td>
                          <td><?php echo $video->title;?></td>
                          <td><?php echo $video->description;?></td>
                          <td>
                            <a href="../uploads/videos/<?php echo $video->link;?>" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-play small"></i> Play</a>
                            <button class="btn btn-sm btn-success" onclick="updateVideo('<?php echo $video->code;?>')">Update</button>
                            <a href="?action=delete_video&code=<?php echo $video->code;?>" class="btn btn-sm btn-danger">Delete</a>
                          </td>
                        </tr>
                        <?php   
                      }
                      ?>

                    <!--<tr>
                        <th scope="row">1</th>
                        <td><img src="../uploads/captions/example.jpg" alt="" width="70px"></td>
                        <td>The Best Event</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, ipsam!</td>
                        <td>
                          <a href="#" class="btn btn-sm btn-success"><i class="fa fa-play small"></i> Play</a>
                          <button class="btn btn-sm btn-success" onclick="updateVideo('<?php echo $video->code;?>')">Update</button>
                          <a href="?action=delete_video&code=8327327" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>-->
                    </tbody>
                  </table>
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
    <div class="modal fade" id="uploadVideoModal" tabindex="-1" aria-labelledby="uploadVideoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="uploadVideoModalLabel">Upload Video</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="col-12">
                  <label for="">Title</label>
                  <input type="text" name="title" id="" class="form-control form-control-sm mb-2" placeholder="Video Title">
                </div>
                <div class="col-lg-6">
                  <label for="">Video Caption</label>
                  <input type="file" name="caption" id="" class="form-control-file mb-2" placeholder="">
                </div>
                <div class="col-lg-6">
                  <label for="">Video</label>
                  <input type="file" name="video" id="" class="form-control-file mb-2" placeholder="">
                </div>
                <div class="col-12">
                  <label for="">Video Description</label>
                  <textarea name="description" id="" cols="30" rows="10" class="form-control form-control-sm mb-2" placeholder="Video Description"></textarea>
                </div>
                <div class="col-12">
                  <hr class="my-3">
                  <button type="submit" name="action" value="upload_video" class="btn btn-success btn-block">Upload Video</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Update Modal -->
    <div class="modal fade" id="videoUpdateModal" tabindex="-1" aria-labelledby="videoUpdateModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="videoUpdateModalLabel">Update Video</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

          </div>
        </div>
      </div>
    </div>


  </main>


  <script src="<?php echo ROOT?>/lib/jquery/jquery-3.6.0.min.js"></script>
  <script src="<?php echo ROOT?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo ROOT?>/admin/js/admin.js"></script>
  <script>

  // Callout Material Update Data
  function updateVideo(code) {

    let updateModal = $('#videoUpdateModal');
    let resultContainer = $('#videoUpdateModal .modal-body');

    $.ajax({
      url: './includes/update_video.php',
      type: 'GET',
      dataType: 'html',
      data: {action: 'update_video', code: code},
      beforeSend: function() {

      },
      success: function(data) {
        resultContainer.html(data);
        updateModal.modal('show');
      },
      error: function(e) {
        console.log(e);
      }, 
      complete: function() {
      }
    });
  }


</script>
</body>
</html>