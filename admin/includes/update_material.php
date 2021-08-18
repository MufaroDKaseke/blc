<?php
require '../../includes/db_connect.php';
require './functions.php';

if (isset($_GET['action']) && $_GET['action'] === 'update_material') {

  $material = getMaterial($conn, $_GET['code']);
  $material = (object) $material;

  ?>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-row">
      <div class="col-lg-6">
        <label for="">Preview</label>
        <input type="file" name="preview" id="" class="form-control-file mb-2" placeholder="Preview">
        <!-- Previous Preview -->
        <input type="hidden" name="preview" value="<?php echo $material->preview;?>">
      </div>
      <div class="col-lg-6">
        <label for="">Title</label>
        <input type="text" name="title" value="<?php echo $material->title;?>" id="" class="form-control form-control-sm mb-2" placeholder="Title" minlength="2" required>
      </div>
      <div class="col-12">
        <label for="">Author</label>
        <input type="text" name="author" value="<?php echo $material->author;?>" id="" class="form-control form-control-sm mb-2" placeholder="Author" minlength="2" required>
      </div>
      <div class="col-12">
        <label for="">Publication Date</label>
        <input type="datetime-local" name="pub_date" value="<?php echo deformatDate($material->pub_date);?>" id="" class="form-control form-control-sm mb-2" required>
      </div>
      <div class="col-12">
        <label for="">Category</label>
        <select name="category" class="form-control mb-2" id="exampleFormControlSelect1">
          <option value="<?php echo $material->category;?>"><?php echo $material->category;?></option>
          <option value="Any">Any</option>
          <option value="Book">Books</option>
          <option value="Notes">Notes</option>
          <option value="Story">Story</option>
        </select>
      </div>
      <div class="col-12">
        <hr class="my-3">
        <!-- Material Code -->
        <input type="hidden" name="code" value="<?php echo $material->code?>">
        <button type="submit" name="action" value="update_material" class="btn btn-success btn-block">Update Material</button>
      </div>
    </div>
  </form>
  <?php
}
?>