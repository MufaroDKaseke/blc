<?php
require '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Babbel Language Center | Pricing</title>
  <meta name="description" content="Pricing. View our learning packages from A1 German to B1 German with flexible time schedule and extra benefits on all top packages.">
  <meta name="keywords" content="pricing,packages,pay,Babbel,Language,Center,German,language,lesssons,learn,read,write,speak,Harare,Zimbabwe">
  <!-- Libraries -->
  <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/pricing.css">
  <!-- Favicons -->
  <?php DISPLAY_ICONS();?>

  <!-- Indexing Details -->
  <link href="https://blc.co.zw/pricing/" rel="canonical" />
  <!-- Required Open Graph data -->
  <meta property="og:title" content="Babbel Language Center - Language School" />
  <meta property="og:type" content="article" />
  <meta property="og:image" content="<?=ROOT;?>/img/logo/logo-text.png" />
  <meta property="og:url" content="<?=ROOT;?>" />
  <!-- Optional Open Graph data -->
  <!--<meta property="og:audio" content="https://example.com/guide.mp3." />-->
  <meta property="og:description" content="Pricing. View our learning packages from A1 German to B1 German with flexible time schedule and extra benefits on all top packages." />
  <meta property="og:site_name" content="Babbel Language Center" />
  <meta property="og:locale" content="en_us" />
  <!--<meta property="og:video" content="https://example.com/guide.mp4" />-->
  <!-- Find additional markup on https://ogp.me -->
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@babbellanguagecenter">
  <meta name="twitter:domain" content="<?=ROOT;?>">
  <meta name="twitter:title" content="Babbel Language Center | Pricing">
  <meta name="twitter:description" content="Pricing. View our learning packages from A1 German to B1 German with flexible time schedule and extra benefits on all top packages.">
  <meta name="twitter:image" content="<?=ROOT;?>/img/logo/logo-text.png">
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <!-- End Of Indexing Details -->
  
</head>
<body>

  <!-- Preloader -->
  <?php
  require '../includes/preloader.php';
  ?>

  <!-- Header -->
  <header class="header">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="<?=ROOT;?>">
          <img src="<?=ROOT;?>/img/logo/logo-text.png" width="120" alt="Babbel Language Center logo" loading="lazy">
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
            <li class="nav-item active">
              <a class="nav-link" href="<?=ROOT;?>/pricing/">Pricing <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="libraryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Library
              </a>
              <div class="dropdown-menu" aria-labelledby="libraryDropdown">
                <a class="dropdown-item" href="<?=ROOT;?>/library/">All Materials</a>
                <a class="dropdown-item" href="<?=ROOT;?>/library/A1-German.php">A1 German</a>
                <a class="dropdown-item" href="<?=ROOT;?>/library/A2-German.php">A2 German</a>
                <a class="dropdown-item" href="<?=ROOT;?>/library/B1-German.php">B1 German</a>
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
          <h1 class="pageheader-title">Pricing</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="package">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="package-title">Our Plans</h2>
        </div>
      </div>
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="package-container">
            <span class="package-name h5">A1</span>
            <h3 class="package-value">R1400/$100</h3>
            <span class="package-plan small">per semester</span>
            <ul class="package-items list-unstyled">
              <li>Daily lessons</li>
              <li>3 sessions of revision</li>
              <li>Lorem, ipsum, dolor.</li>
              <li>Lorem ipsum dolor sit amet.</li>
            </ul>
            <a href="<?=ROOT;?>/register/" class="package-btn btn">Get Started</a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="package-container">
            <span class="package-name h5">A2</span>
            <h3 class="package-value">R1750/$250</h3>
            <span class="package-plan small">per semester</span>
            <ul class="package-items list-unstyled">
              <li>Daily lessons</li>
              <li>6 sessions of revision</li>
              <li>Lorem, ipsum, dolor.</li>
              <li>Lorem ipsum dolor sit amet.</li>
            </ul>
            <a href="<?=ROOT;?>/register/" class="package-btn btn">Get Started</a>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="package-container">
            <span class="package-name h5">B1</span>
            <h3 class="package-value">R2300/$200</h3>
            <span class="package-plan small">per semester</span>
            <ul class="package-items list-unstyled">
              <li>Daily lessons</li>
              <li>9 revision sessions</li>
              <li>Lorem, ipsum, dolor.</li>
              <li>Lorem ipsum dolor sit amet.</li>
            </ul>
            <a href="<?=ROOT;?>/register/" class="package-btn btn">Get Started</a>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="package-container">
            <span class="package-name h5">A1 & A2</span>
            <h3 class="package-value">R2600/$300</h3>
            <span class="package-plan small">per semester</span>
            <ul class="package-items list-unstyled">
              <li>Daily lessons</li>
              <li>12 revision sessions</li>
              <li>2 sessions one-on-one</li>
              <li>Lorem ipsum dolor sit amet.</li>
            </ul>
            <a href="<?=ROOT;?>/register/" class="package-btn btn">Get Started</a>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="package-container">
            <span class="package-name h5">A2 & B1</span>
            <h3 class="package-value">$150</h3>
            <span class="package-plan small">per semester</span>
            <ul class="package-items list-unstyled">
              <li>Daily lessons</li>
              <li>12 revision sessions</li>
              <li>4 sessions one-on-one</li>
              <li>Lorem ipsum dolor sit amet.</li>
            </ul>
            <a href="<?=ROOT;?>/register/" class="package-btn btn">Get Started</a>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="package-container">
            <span class="package-name h5">A1 - B1</span>
            <h3 class="package-value">R3850/$360</h3>
            <span class="package-plan small">per semester</span>
            <ul class="package-items list-unstyled">
              <li>Daily lessons</li>
              <li>12 revision sessions</li>
              <li>15 sessions one-on-one</li>
              <li>Access to extra material</li>
            </ul>
            <a href="<?=ROOT;?>/register/" class="package-btn btn">Get Started</a>
          </div>
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