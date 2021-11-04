<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="tools-nav">
    <ul class="nav">
      <li class="nav-item">
        <button id="toggleSidebar" class="btn">
          <span class="navbar-toggler-icon"></span>
        </button>
      </li>
      <!--<li class="nav-item">
        <a href="<?php echo ROOT;?>/admin/notifications.php" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-pill badge-success">6</span></a>
      </li>-->
      <li class="nav-item">
        <a href="<?php echo ROOT;?>/webmail" target="_blank" class="nav-link"><i class="fa fa-envelope"></i><!--<span class="badge badge-pill badge-success">20+</span>--></a>
      </li>
    </ul>
  </div>
  <div class="user-nav">
    <div class="dropdown">
      <a class="dropdown-toggle" href="#" id="libraryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="libraryDropdown">
        <a class="dropdown-item" href="<?php echo ROOT;?>/admin/profile.php">Profile</a>
        <a class="dropdown-item" href="<?php echo ROOT;?>/admin/login.php?action=logout_admin"><span>Logout</span> <i class="fa fa-sign-out"></i></a>
      </div>
    </div>
  </div>
</nav>