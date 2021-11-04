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
  <title>Admin - Users</title>
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


            // Get Actions
            if (isset($_GET['action'])) {
              // Delete Student
              if ($_GET['action'] == 'delete_user') {
                if (deleteUser($conn, $_GET['user_id'])) {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-success">success</span></strong> Successfully deleted user <strong>#<?php echo $_GET['user_id'];?></strong>
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
                        <strong><span class="badge badge-pill badge-danger">error</span></strong> Failed to delete user <strong>#<?php echo $_GET['user_id'];?></strong>
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

            // Post Actions
            if (isset($_POST['action'])) {
              // Add New User
              if ($_POST['action'] == 'add_user') {

                $userId = generateId();
                $formData = $_POST;
                $formData['user_id'] = $userId;


                if (insertNewUser($conn, $formData)) {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-success">success</span></strong> Successfully added new user <strong>#<?php echo $userId;?></strong>
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
                        <strong><span class="badge badge-pill badge-danger">error</span></strong> Failed to add user <strong>#<?php echo $userId;?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <?php
                }       
              } else if ($_POST['action'] == 'update_user') {

                $formData = $_POST;

                if (updateUser($conn, $formData)) {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-success">success</span></strong> Successfully updated user <strong>#<?php echo $formData['user_id'];?></strong>
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
                        <strong><span class="badge badge-pill badge-danger">error</span></strong> Failed to update user <strong>#<?php echo $formData['user_id'];?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <?php
                }
              } else {
                // Nothing
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
                  <h4>Users <span class="text-muted">(admins)</span></h4>
                  <div class="dash-panel-action">
                    <!-- Button trigger modal -->
                    <a href="" data-toggle="modal" data-target="#addUserModal"><i class="fa fa-plus"></i> Add New</a>
                  </div>
                </div>
                <div class="dash-panel-content">
                  <table class="table table-sm table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      $users = getAllUsers($conn);

                      if ($users !== false) {
                        foreach ($users as $user) {
                          $user = (object) $user;
                          ?>
                          <tr>
                            <th scope="row">
                              <?php

                              echo $user->user_id;

                              if ($_SESSION['user_id'] === $user->user_id) {
                                ?>
                                <span class="badge badge-pill badge-warning">current</span>
                                <?php
                              }
                              ?>
                                
                              </th>
                            <td><?php echo $user->name;?></td>
                            <td><?php echo $user->username;?></td>
                            <td><?php echo $user->password;?></td>
                            <td>
                              <button class="btn btn-sm btn-success" onclick="updateUser('<?php echo $user->user_id?>')">Update</button>
                              <a href="
                              <?php
                              if ($_SESSION['user_id'] !== $user->user_id) {
                                echo 'users.php?action=delete_user&user_id=' . $user->user_id;
                              }
                              ?>
                              " class="btn btn-sm btn-danger">Delete</a>
                            </td>
                          </tr>
                          <?php
                        }
                      } else {
                        ?>
                        <tr>
                          <th colspan="5" class="text-muted text-center">No users yet</th>
                        </tr>
                        <?php
                      }
                      ?>
                    <!--<tr>
                        <th scope="row">3344434</th>
                        <td>Mark Otto</td>
                        <td>mufarodarlington</td>
                        <td>mufarokaseke</td>
                        <td>
                          <button class="btn btn-sm btn-success" onclick="updateStudent('6102101e96d15')">Update</button>
                          <a href="students.php?action=delete_student&student_id=293828392" class="btn btn-sm btn-danger">Delete</a>
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

    <!-- Add Student Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="./users.php" method="post">
              <div class="form-row">
                <div class="col-12">
                  <label for="">Name Of User</label>
                  <input type="text" name="name" id="" class="form-control form-control-sm mb-2" placeholder="Name">
                </div>
                <div class="col-12">
                  <label for="">Username</label>
                  <input type="text" name="username" id="" class="form-control form-control-sm mb-2" placeholder="Username">
                </div>
                <div class="col-12">
                  <label for="">Password</label>
                  <input type="password" name="password" id="" class="form-control form-control-sm mb-2" placeholder="Password">
                </div>
                <div class="col-12">
                  <hr class="my-3">
                  <input type="hidden" name="action" value="add_user">
                  <button type="submit" name="action" value="add_user" class="btn btn-success btn-block">Add User</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Update Modal -->
    <div class="modal fade" id="updateUserModal" tabindex="-1" aria-labelledby="updateUserModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="updateUserModalLabel">Update User</h5>
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


    // Callout Student Update Data
    function updateUser(userId) {

      let userUpdateModal = $('#updateUserModal');
      let resultContainer = $('#updateUserModal .modal-body');

      $.ajax({
        url: './includes/update_user.php',
        type: 'GET',
        dataType: 'html',
        data: {action: 'update_user', user_id: userId},
        beforeSend: function() {

        },
        success: function(data) {
          resultContainer.html(data);
          userUpdateModal.modal('show');
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