<?php
require '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Babbel Language Center | About</title>
  <meta name="description" content="Who Are We. About Us. Babbel Language Center is a language school where you can learn how to write and speak foreign languages and get access to opportunities and programs abroad.">
  <meta name="keywords" content="about,who,team,Babbel,Language,Center,German,language,lesssons,learn,read,write,speak,Harare,Zimbabwe">
  <!-- Libraries -->
  <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/about.css">
  <!-- Favicons -->
  <?php DISPLAY_ICONS();?>

  <!-- Indexing Details -->
  <link href="https://blc.co.zw/about/" rel="canonical" />
  <!-- Required Open Graph data -->
  <meta property="og:title" content="Babbel Language Center - Language School" />
  <meta property="og:type" content="article" />
  <meta property="og:image" content="<?=ROOT;?>/img/logo/logo-text.png" />
  <meta property="og:url" content="<?=ROOT;?>" />
  <!-- Optional Open Graph data -->
  <!--<meta property="og:audio" content="https://example.com/guide.mp3." />-->
  <meta property="og:description" content="Who Are We. About Us. Babbel Language Center is a language school where you can learn how to write and speak foreign languages and get access to opportunities and programs abroad." />
  <meta property="og:site_name" content="Babbel Language Center" />
  <meta property="og:locale" content="en_us" />
  <!--<meta property="og:video" content="https://example.com/guide.mp4" />-->
  <!-- Find additional markup on https://ogp.me -->
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@babbellanguagecenter">
  <meta name="twitter:domain" content="<?=ROOT;?>">
  <meta name="twitter:title" content="Babbel Language Center | About">
  <meta name="twitter:description" content="Who Are We. About Us. Babbel Language Center is a language school where you can learn how to write and speak foreign languages and get access to opportunities and programs abroad.">
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
            <li class="nav-item active">
              <a class="nav-link" href="<?=ROOT;?>/about/">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=ROOT;?>/pricing/">Pricing</a>
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
          <h1 class="pageheader-title">About</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="aboutus">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="aboutus-img">
            <img src="../img/about.jpg" alt="about babbel image" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-7">
          <div class="aboutus-content">
            <h2 class="aboutus-title">What We Do</h2>
            <p class="aboutus-paragraph">Babbel Language Center is a language school where you can learn how to write and speak foreign languages and get access to opportunities and programs abroad.</p>
          </div><p class="aboutus-paragraph">We advance internationalization at BLC by providing high quality language instruction, cultural programming and academice exchange. We serve students preparing for their career opportunities, through innovative teaching and experiential learning.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="team">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="team-title">Our Team</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="team-member">
            <div class="team-member-img">
              <img src="../img/22.jpg" alt="">
              <div class="team-member-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
            <div class="team-member-info">
              <a href="#" class="team-member-name">Tafadzwa</a>
              <span class="team-member-title">Director</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="team-member">
            <div class="team-member-img">
              <img src="../img/22.jpg" alt="">
              <div class="team-member-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
            <div class="team-member-info">
              <a href="#" class="team-member-name">Mercy</a>
              <span class="team-member-title">Marketing &amp; Placement</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="team-member">
            <div class="team-member-img">
              <img src="../img/22.jpg" alt="">
              <div class="team-member-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
            <div class="team-member-info">
              <a href="#" class="team-member-name">Ruth</a>
              <span class="team-member-title">Senior Teacher</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="team-member">
            <div class="team-member-img">
              <img src="../img/22.jpg" alt="">
              <div class="team-member-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
            <div class="team-member-info">
              <a href="#" class="team-member-name">Name Surname</a>
              <span class="team-member-title">Position</span>
            </div>
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