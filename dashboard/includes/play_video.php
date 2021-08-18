<?php

require '../../includes/db_connect.php';
require './functions.php';

if (isset($_GET['action']) && $_GET['action'] === 'play_video') {

  $videoCode = $_GET['code'];

  if($video = getVideo($conn, $videoCode)) {
    $video = (object) $video;

    ?>
      <video src="../uploads/videos/<?php echo $video->link;?>" poster="../uploads/captions/<?php echo $video->caption;?>" controls></video>
    <?php
  }
}

?>