<?php
require '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Babbel Language Center | Library</title>
  <!-- Libraries -->
  <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/library.css">
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
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="libraryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Library <span class="sr-only">(current)</span>
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
          <h1 class="pageheader-title">Library</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="library">
    <div class="library-filters">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-3">
            <div class="filter-container filter-search">
              <div class="input-group">
                <input type="search" class="form-control form-control-sm" placeholder="Search...">
                <div class="input-group-append">
                  <button type="submit" class="search-btn btn btn-sm"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="filter-container">
              <select class="form-control form-control-sm">
                <option selected>Type</option>
                <option value="Books">Books</option>
                <option value="Notes">Notes</option>
                <option value="Story">Story</option>
              </select>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="filter-container">
              <select class="form-control form-control-sm">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="filter-container">
              <select class="form-control form-control-sm">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="library-books">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 col-lg-2">
            <div class="material-container">
              <img src="../img/material.jpg" width="100%" alt="" class="img-fluid material-img">
              <a href="#" class="material-name">That That</a>
              <span class="material-author">Tha that that</span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="footer-about">
            <img src="../img/logo.png" alt="" class="img-fluid">
            <p class="small">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo itaque maxime temporibus, quisquam voluptas praesentium corporis quaerat eveniet impedit reiciendis.</p>
            <div class="footer-social">
              <ul class="nav justify-content-center">
                <li>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </li>                         
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="footer-links">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="#" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Services</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Pricing</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Library</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Events</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="footer-contact">
            <h4>Contact Us</h4>
            <ul class="nav flex-column">
              <li><i class="fa fa-envelope"></i><a href="#">info@blc.co.zw</a></li>
              <li><i class="fa fa-phone"></i><a href="#">+263 87 934 43483</a></li>
              <li><i class="fa fa-map-marked"></i><a href="#">13F Fraser St, Parktown</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="footer-subscribe">
            <h4>Sign Up For Updates</h4>
            <form action="">
              <input type="email" name="email" id="" class="form-control" placeholder="Email*">
              <button type="submit" class="blc-btn btn">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="footer-copyright text-center">
            <span>&copy; All Right Preserved</span> | <span>by <a href="#">Mufaro D Kaseke</a></span>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="../lib/jquery/jquery-3.6.0.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>