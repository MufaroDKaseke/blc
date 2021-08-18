<?php
  
define('ROOT', 'http://' . $_SERVER['SERVER_NAME'] . '/blc');
define('SOCIAL_LINK', array('facebook' => 'https://facebook.com/babbellanguagecenter', 'twitter' => 'https://twitter.com/babbellanguagecenter', 'instagram' => 'https://instagram.com/babbellanguagecenter'));
function DISPLAY_ICONS(){
  ?>
  <!-- Favicons -->
  <link href="<?php echo ROOT;?>/img/logo/icon.png" rel="shortcut icon" type="image/png">
  <link href="<?php echo ROOT;?>/img/logo/icon.png" rel="apple-touch-icon">
  <?php
}
?>