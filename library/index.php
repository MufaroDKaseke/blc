<?php
require '../includes/config.php';
require '../includes/db_connect.php';
require '../includes/library_processes.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Babbel Language Center | Library</title>
  <meta name="description" content="Free material library you can find resources in A1 German, A2 German and B1 German ,signup with us to get access to extra materials and videos.">
  <meta name="keywords" content="library,materials,books,stories,notes,,Babbel,Language,Center,German,language,lesssons,learn,read,write,speak,Harare,Zimbabwe">
  <!-- Libraries -->
  <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/library.css">
  <!-- Favicons -->
  <?php DISPLAY_ICONS();?>

  <!-- Indexing Details -->
  <link href="https://blc.co.zw/library/" rel="canonical" />
  <!-- Required Open Graph data -->
  <meta property="og:title" content="Babbel Language Center - Language School" />
  <meta property="og:type" content="article" />
  <meta property="og:image" content="<?=ROOT;?>/img/logo/logo-text.png" />
  <meta property="og:url" content="<?=ROOT;?>" />
  <!-- Optional Open Graph data -->
  <!--<meta property="og:audio" content="https://example.com/guide.mp3." />-->
  <meta property="og:description" content="Free material library you can find resources in A1 German, A2 German and B1 German ,signup with us to get access to extra materials and videos." />
  <meta property="og:site_name" content="Babbel Language Center" />
  <meta property="og:locale" content="en_us" />
  <!--<meta property="og:video" content="https://example.com/guide.mp4" />-->
  <!-- Find additional markup on https://ogp.me -->
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@babbellanguagecenter">
  <meta name="twitter:domain" content="<?=ROOT;?>">
  <meta name="twitter:title" content="Babbel Language Center | Library">
  <meta name="twitter:description" content="Free material library you can find resources in A1 German, A2 German and B1 German ,signup with us to get access to extra materials and videos.">
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
            <li class="nav-item">
              <a class="nav-link" href="<?=ROOT;?>/pricing/">Pricing</a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="libraryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Library <span class="sr-only">(current)</span>
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
          <h1 class="pageheader-title">Library</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="library">
    <div class="library-filters">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <?php

          if (isset($_GET['q'])) {
            // Get Searched Materials
            $materials = searchMaterials($conn, $_GET['q']);
          } else {
            // Get the materials
            $materials = getAllMaterials($conn);
          }



          ?>
          <div class="col-lg-3">
            <div class="results-container">
              <p class="text-muted text-center mb-0">
                <?php
                if (isset($_GET['q'])) {
                  echo 'Search for "' . $_GET['q']  . '" ';
                }
                if ($materials !== false) {
                  echo count($materials);
                } else {
                  echo 0;
                }
              ?> results</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="filter-container">
              <select class="form-control form-control-sm" name="filter-category">
                <option disabled selected>Category</option>
                <option value="A1 German">A1 German</option>
                <option value="A2 German">A2 German</option>
                <option value="B1 German">B1 German</option>
              </select>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="filter-container">
              <select class="form-control form-control-sm" name="filter-by">
                <option disabled selected>Filter By</option>
                <option value="recent">Recent</option>
                <option value="title">Title</option>
              </select>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="filter-container filter-search">
              <form action="./">
                <div class="input-group">
                  <input type="search" name="q" value="<?php if(isset($_GET['q'])) echo $_GET['q'];?>" class="form-control form-control-sm" placeholder="Search...">
                  <div class="input-group-append">
                    <button type="submit" class="search-btn btn btn-sm"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="library-books">
      <div class="container">
        <div class="row">
          <?php

          if ($materials !== false) {
            foreach ($materials as $material) {
              $material = (object) $material;
              ?>
              <div class="col-sm-6 col-md-3 col-lg-2">
                <div class="material-container">
                  <img src="<?=ROOT;?>/uploads/captions/<?=$material->preview;?>" width="100%" alt="" class="img-fluid material-img">
                  <a href="<?=ROOT;?>/uploads/materials/<?=$material->link;?>" class="material-name"><?=$material->title;?></a>
                  <span class="material-author"><?=$material->author;?></span>
                </div>
              </div>

              <?php
            }
          } else {
            ?>
            <div class="col">
              <p class="text-muted text-center">Nothing found!!!</p>
            </div>
            <?php
          }
          ?>

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
  <script src="../js/library.js"></script>
</body>
</html>