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
  <title>Admin - Events</title>
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
              if ($_GET['action'] == 'delete_event') {
                if (deleteEvent($conn, $_GET['code'])) {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-success">success</span></strong> Successfully deleted event <strong>#<?php echo $_GET['code'];?></strong>
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
                        <strong><span class="badge badge-pill badge-danger">error</span></strong> Failed to delete event <strong>#<?php echo $_GET['code'];?></strong>
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
              if ($_POST['action'] == 'create_event') {
                $eventCode = generateId();

                $formData = $_POST;
                $formData['code'] = $eventCode;
                $formData['date'] = formatDate($formData['date']);
                $formData['caption'] = uploadEventCaption($_FILES['caption'], $eventCode);
                $formData['description'] = trim($formData['description']);

                if (insertNewEvent($conn, $formData)) {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-success">success</span></strong> Successfully created new event <strong>#<?php echo $eventCode?></strong>
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
                        <strong><span class="badge badge-pill badge-danger">error</span></strong> Failed to create new event <strong>#<?php echo $eventCode?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>             
                    </div>
                  </div>
                  <?php
                }
              } else if ($_POST['action'] == 'update_event') {
                $formData = $_POST;

                if (isset($_FILES['caption']) && $_FILES['caption']['tmp_name'] !== '') {
                  if ($formData['caption'] !== '') deleteFiles(['../uploads/captions/' . $formData['caption']]);
                  $formData['caption'] = uploadEventCaption($_FILES['caption'], $formData['code']);
                }

                if (updateEvent($conn, $formData)) {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-success">success</span></strong> Successfully updated event <strong>#<?php echo $formData['code'];?></strong>
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
                        <strong><span class="badge badge-pill badge-danger">error</span></strong> Failed to updat event <strong>#<?php echo $formData['codde'];?></strong>
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
                  <h4>Events</h4>
                  <div class="dash-panel-action">
                    <!-- Button trigger modal -->
                    <a href="" data-toggle="modal" data-target="#createEventModal">Add Event</a>
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
                        <th scope="col">Date</th>
                        <th scope="col">Link</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!--<tr>
                        <th scope="row">1</th>
                        <td><img src="../uploads/captions/example.jpg" alt="" width="70px"></td>
                        <td>The Best Event</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum consectetur modi nemo velit voluptates blanditiis.</td>
                        <td>27/29/1221 12:21:12</td>
                        <td><a href="#">https://events/thebestevent</a></td>
                        <td>
                          <a href="#" class="btn btn-sm btn-success">Update</a>
                          <a href="?action=delete_event&code=328992" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>-->
                      <?php
                      foreach (getAllEvents($conn) as $event) {
                        $event =  (object) $event;
                        ?>
                        <tr>
                          <th scope="row"><?php echo $event->code;?></th>
                          <td><img src="../uploads/captions/<?php echo $event->caption;?>" alt="" width="70px"></td>
                          <td><?php echo $event->title;?></td>
                          <td><?php echo $event->description;?></td>
                          <td><?php echo $event->date;?></td>
                          <td><a href="<?php echo $event->link;?>" target="_blank">Open</a></td>
                          <td>
                            <button class="btn btn-sm btn-success" onclick="updateEvent('<?php echo $event->code;?>')">Update</button>
                            <a href="events.php?action=delete_event&code=<?php echo $event->code;?>" class="btn btn-sm btn-danger">Delete</a>
                          </td>
                        </tr>
                        <?php
                      }
                      ?>
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

    <!-- Create Event Modal -->
    <div class="modal fade" id="createEventModal" tabindex="-1" aria-labelledby="createEventModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="createEventModalLabel">Create Event</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="col-lg-6">
                  <label for="">Title</label>
                  <input type="text" name="title" id="" class="form-control form-control-sm mb-2" placeholder="Event Title">
                </div>
                <div class="col-lg-6">
                  <label for="">Caption</label>
                  <input type="file" name="caption" id="" class="form-control-file mb-2" placeholder="Event Caption">
                </div>
                <div class="col-lg-6">
                  <label for="">Date</label>
                  <input type="datetime-local" name="date" id="" class="form-control form-control-sm mb-2">
                </div>
                <div class="col-lg-6">
                  <label for="">Link</label>
                  <input type="text" name="link" id="" class="form-control form-control-sm mb-2" placeholder="Event Link">
                </div>
                <div class="col-12">
                  <label for="">Description</label>
                  <textarea name="description" id="" cols="30" rows="10" class="form-control form-control-sm mb-2" placeholder="Event Description"></textarea>
                </div>
                <div class="col-12">
                  <hr class="my-3">
                  <button type="submit" name="action" value="create_event" class="btn btn-success btn-block">Create</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Update Modal -->
    <div class="modal fade" id="updateEventModal" tabindex="-1" aria-labelledby="updateEventModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="updateEventModalLabel">Update Event</h5>
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
    
    // Callout Event Update Data
    function updateEvent(code) {

      let updateModal = $('#updateEventModal');
      let resultContainer = $('#updateEventModal .modal-body');

      $.ajax({
        url: './includes/update_event.php',
        type: 'GET',
        dataType: 'html',
        data: {action: 'update_event', code: code},
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