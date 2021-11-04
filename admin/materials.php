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
  <title>Admin - Materials</title>
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
              // Delete Material
              if ($_GET['action'] == 'delete_material') {
                if (deleteMaterial($conn, $_GET['code'])) {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-success">success</span></strong> Successfully deleted material <strong>#<?php echo $_GET['code'];?></strong>
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
                        <strong><span class="badge badge-pill badge-danger">error</span></strong> Failed to delete material <strong>#<?php echo $_GET['code'];?></strong>
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
              if ($_POST['action'] == 'upload_material') {
                $materialCode = generateId();

                $formData = $_POST;
                $formData['code'] = $materialCode;
                $formData['link'] = uploadMaterial($_FILES['material'], $materialCode);
                $formData['preview'] = uploadMaterialPreview($_FILES['preview'], $materialCode);
                $formData['pub_date'] = formatDate($formData['pub_date']);

                if (insertNewMaterial($conn, $formData)) {
                  ?>
                  <div class="col-12">
                    <div class="notification">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><span class="badge badge-pill badge-success">success</span></strong> Successfully uploaded material <strong>#<?php echo $materialCode;?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <?php
                } else {
                  ?>
                ?>
                <div class="col-12">
                  <div class="notification">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong><span class="badge badge-pill badge-danger">error</span></strong> Failed to upload material <strong>#<?php echo $materialCode;?></strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                </div>
                <?php
              }
            } else if($_POST['action'] == 'update_material') {
              $formData = $_POST;

              if (isset($_FILES['preview']) && $_FILES['preview']['tmp_name'] !== '') {
                if ($formData['preview'] !== '') deleteFiles(['../uploads/captions/' . $formData['preview']]);
                $formData['preview'] = uploadMaterialPreview($_FILES['preview'], $formData['code']);
              }

              $formData['pub_date'] = formatDate($formData['pub_date']);

              if (updateMaterial($conn, $formData)) {
                ?>
                <div class="col-12">
                  <div class="notification">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong><span class="badge badge-pill badge-success">success</span></strong> Successfully updated material <strong>#<?php echo $formData['code'];?></strong>
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
                      <strong><span class="badge badge-pill badge-danger">error</span></strong> Failed to update material <strong>#<?php echo $formData['code'];?></strong>
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
                <h4>Materials</h4>
                <div class="dash-panel-action">
                  <!-- Button trigger modal -->
                  <a href="" data-toggle="modal" data-target="#uploadMaterialModal"><i class="fa fa-upload"></i> Upload</a>
                </div>
              </div>
              <div class="dash-panel-content">
                <table class="table table-sm table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Preview</th>
                      <th scope="col">Title</th>
                      <th scope="col">Author</th>
                      <th scope="col">Publication Date</th>
                      <th scope="col">Category</th>
                      <th scope="col">Link</th>
                      <th scope="col">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $materials = getAllMaterials($conn);

                    if ($materials !== false) {
                      foreach ($materials as $material) {
                        $material = (object) $material;
                        ?>
                        <tr>
                          <th scope="row"><?php echo $material->code;?></th>
                          <td><img src="../uploads/captions/<?php echo $material->preview;?>" alt="" width="30px"></td>
                          <td><?php echo $material->title;?></td>
                          <td><?php echo $material->author;?></td>
                          <td><?php echo $material->pub_date;?></td>
                          <td><?php echo $material->category;?></td>
                          <td><a href="../uploads/materials/<?php echo $material->link;?>" target="_blank">View</a></td>
                          <td>
                            <button class="btn btn-sm btn-success" onclick="updateMaterial('<?php echo $material->code;?>')">Update</button>
                            <a href="materials.php?action=delete_material&code=<?php echo $material->code;?>" class="btn btn-sm btn-danger">Delete</a>
                          </td>
                        </tr>
                        <?php
                      }
                    } else {
                      ?>
                      <tr>
                        <th colspan="8" class="text-muted text-center">No materials yet</th>
                      </tr>
                      <?php
                    }
                    ?>
                      <!--
                      <tr>
                        <th scope="row">434341</th>
                        <td><img src="../uploads/captions/example-book.jpg" alt="" width="30px"></td>
                        <td>The Awakening</td>
                        <td>Mufaro D Kaseke</td>
                        <td>32/32/3233 32:32:23</td>
                        <td>Book</td>
                        <td><a href="#">View</a></td>
                        <td>
                          <a href="#" class="btn btn-sm btn-success">Update</a>
                          <a href="materials.php?action=delete_material&code=deededed" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                    -->
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
  <div class="modal fade" id="uploadMaterialModal" tabindex="-1" aria-labelledby="uploadMaterialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="uploadMaterialModalLabel">Upload Material</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="./materials.php" method="post" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col-lg-6">
                <label for="">Material</label>
                <input type="file" name="material" id="" class="form-control-file mb-2" placeholder="Material" required>
              </div>
              <div class="col-lg-6">
                <label for="">Preview</label>
                <input type="file" name="preview" id="" class="form-control-file mb-2" placeholder="Preview" required>
              </div>
              <div class="col-lg-6">
                <label for="">Title</label>
                <input type="text" name="title" id="" class="form-control form-control-sm mb-2" placeholder="Title" minlength="2" required>
              </div>
              <div class="col-lg-6">
                <label for="">Author</label>
                <input type="text" name="author" id="" class="form-control form-control-sm mb-2" placeholder="Author" minlength="2" required>
              </div>
              <div class="col-12">
                <label for="">Publication Date</label>
                <input type="datetime-local" name="pub_date" id="" class="form-control form-control-sm mb-2" required>
              </div>
              <div class="col-12">
                <label for="">Category</label>
                <select name="category" class="form-control mb-2" id="exampleFormControlSelect1" required="">
                  <option value="A1 German">A1 German</option>
                  <option value="A2 German">A2 German</option>
                  <option value="B1 German">B1 German</option>
                </select>
              </div>
              <div class="col-12">
                <hr class="my-3">
                <button type="submit" name="action" value="upload_material" class="btn btn-success btn-block">Upload</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Update Modal -->
  <div class="modal fade" id="materialUpdateModal" tabindex="-1" aria-labelledby="materialUpdateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="materialUpdateModalLabel">Update Material</h5>
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
  function updateMaterial(code) {

    let updateModal = $('#materialUpdateModal');
    let resultContainer = $('#materialUpdateModal .modal-body');

    $.ajax({
      url: './includes/update_material.php',
      type: 'GET',
      dataType: 'html',
      data: {action: 'update_material', code: code},
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