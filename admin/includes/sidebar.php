<div id="sidebar" class="sidebar-wrapper">
  <div class="sidebar-heading">
    <h4>Admin</h4>
  </div>
  <ul class="sidebar-nav nav flex-column">
    <li class="nav-item active">
      <a href="<?php echo ROOT;?>/admin/" class="nav-link">Home</a>
    </li>
    <li class="nav-item">
      <a href="<?php echo ROOT;?>/admin/events.php" class="nav-link">Events</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="libraryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span>Material</span><i class="fa fa-angle-right"></i>
      </a>
      <div class="dropdown-menu" aria-labelledby="libraryDropdown">
        <a class="dropdown-item" href="<?php echo ROOT;?>/admin/materials.php">Private</a>
        <a class="dropdown-item" href="<?php echo ROOT;?>/admin/public-materials.php">Public</a>
      </div>
    </li>
    <li class="nav-item">
      <a href="<?php echo ROOT;?>/admin/videos.php" class="nav-link">Videos</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="libraryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span>Users</span><i class="fa fa-angle-right"></i>
      </a>
      <div class="dropdown-menu" aria-labelledby="libraryDropdown">
        <a class="dropdown-item" href="<?php echo ROOT;?>/admin/users.php">Admins</a>
        <a class="dropdown-item" href="<?php echo ROOT;?>/admin/students.php">Students</a>
      </div>
    </li>
  </ul>
</div>