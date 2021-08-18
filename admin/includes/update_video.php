<?php
require '../../includes/db_connect.php';
require './functions.php';

if (isset($_GET['action']) && $_GET['action'] === 'update_video') {

  $video = getVideo($conn, $_GET['code']);
  $video = (object) $video;

  ?>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-row">
      <div class="col-12">
        <label for="">Title</label>
        <input type="text" name="title" value="<?php echo $video->title;?>" id="" class="form-control form-control-sm mb-2" placeholder="Video Title">
      </div>
      <div class="col-lg-6">
        <label for="">Video Caption</label>
        <input type="file" name="caption" value="<?php echo $video->caption;?>" id="" class="form-control-file mb-2" placeholder="">
        <!-- Previous Caption -->
        <input type="hidden" name="caption" value="<?php echo $video->caption;?>">
      </div>
      <div class="col-12">
        <label for="">Video Description</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control form-control-sm mb-2" placeholder="Video Description"><?php echo $video->description;?></textarea>
      </div>
      <div class="col-12">
        <hr class="my-3">
        <!-- Video Code -->
        <input type="hidden" name="code" value="<?php echo $video->code?>">
        <button type="submit" name="action" value="update_video" class="btn btn-success btn-block">Update Video</button>
      </div>
    </div>
  </form>
  <?php
}
?>