<?php
require '../../includes/db_connect.php';
require './functions.php';

if (isset($_GET['action']) && $_GET['action'] === 'update_event') {

  $event = getEvent($conn, $_GET['code']);
  $event = (object) $event;

  ?>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-row">
      <div class="col-lg-6">
        <label for="">Title</label>
        <input type="text" name="title" value="<?php echo $event->title;?>" id="" class="form-control form-control-sm mb-2" placeholder="Event Title">
      </div>
      <div class="col-lg-6">
        <label for="">Caption</label>
        <input type="file" name="caption" id="" class="form-control-file mb-2" placeholder="Event Caption">
        <!-- Previous Caption -->
        <input type="hidden" name="caption" value="<?php echo $event->caption;?>">
      </div>
      <div class="col-lg-6">
        <label for="">Date</label>
        <input type="datetime-local" name="date" value="<?php echo deformatDate($event->date);?>" id="" class="form-control form-control-sm mb-2">
      </div>
      <div class="col-lg-6">
        <label for="">Link</label>
        <input type="text" name="link" value="<?php echo $event->link;?>" id="" class="form-control form-control-sm mb-2" placeholder="Event Link">
      </div>
      <div class="col-12">
        <label for="">Description</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control form-control-sm mb-2" placeholder="Event Description"><?php echo $event->description;?></textarea>
      </div>
      <div class="col-12">
        <hr class="my-3">
        <!-- Event Code -->
        <input type="hidden" name="code" value="<?php echo $event->code?>">
        <button type="submit" name="action" value="update_event" class="btn btn-success btn-block">Update Event</button>
      </div>
    </div>
  </form>
  <?php
}
?>