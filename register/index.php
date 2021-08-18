<?php
require '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Babbel Language Center | Register</title>
  <!-- Libraries -->
  <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/register.css">
  <!-- Favicons -->
  <?php DISPLAY_ICONS();?>
</head>
<body>

<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="<?=ROOT;?>">
          <img src="<?=ROOT;?>/img/logo/logo-text.png" width="120" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerNav" aria-controls="headerNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="headerNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?=ROOT;?>/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=ROOT;?>/about/">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=ROOT;?>/pricing/">Pricing</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="libraryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Library
              </a>
              <div class="dropdown-menu" aria-labelledby="libraryDropdown">
                <a class="dropdown-item" href="<?=ROOT;?>/library/">Materials</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=ROOT;?>/events/">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=ROOT;?>/contact/">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="d-lg-none">Account</span><i class="fa fa-user-circle d-none d-lg-inline"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="accountDropdown">
                <a class="dropdown-item" href="<?=ROOT;?>/dashboard/login.php">Login</a>
                <a class="dropdown-item" href="<?=ROOT;?>/register/">Register</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
  <section class="pageheader">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="pageheader-title">Register</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="register">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col text-center">
          <a href="./BLC_Registration_Form.pdf" class="blc-btn btn" download="BLC_Registration_Form.pdf"><i class="fa fa-download"></i> Download Registration Form</a>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <?php
  require_once '../includes/footer.php';
  ?>
  <!-- End Of Footer -->
  
  <script src="../lib/jquery/jquery-3.6.0.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>