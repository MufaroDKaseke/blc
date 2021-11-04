<?php
require '../includes/config.php';
require '../includes/db_connect.php';
require '../includes/events_processes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Babbel Language Center | Events</title>
  <meta name="description" content="Coming Up Events. We have a variety of language events and seminars lined up for the year, you can rsvp to learn and explore language opportunities.">
  <meta name="keywords" content="events,seminars,coming,up,Babbel,Language,Center,German,language,lesssons,learn,read,write,speak,Harare,Zimbabwe">
  <!-- Libraries -->
  <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/events.css">
  <!-- Favicons -->
  <?php DISPLAY_ICONS();?>

  <!-- Indexing Details -->
  <link href="https://blc.co.zw/events/" rel="canonical" />
  <!-- Required Open Graph data -->
  <meta property="og:title" content="Babbel Language Center - Language School" />
  <meta property="og:type" content="article" />
  <meta property="og:image" content="<?=ROOT;?>/img/logo/logo-text.png" />
  <meta property="og:url" content="<?=ROOT;?>" />
  <!-- Optional Open Graph data -->
  <!--<meta property="og:audio" content="https://example.com/guide.mp3." />-->
  <meta property="og:description" content="Coming Up Events. We have a variety of language events and seminars lined up for the year, you can rsvp to learn and explore language opportunities." />
  <meta property="og:site_name" content="Babbel Language Center" />
  <meta property="og:locale" content="en_us" />
  <!--<meta property="og:video" content="https://example.com/guide.mp4" />-->
  <!-- Find additional markup on https://ogp.me -->
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@babbellanguagecenter">
  <meta name="twitter:domain" content="<?=ROOT;?>">
  <meta name="twitter:title" content="Babbel Language Center | Events">
  <meta name="twitter:description" content="Coming Up Events. We have a variety of language events and seminars lined up for the year, you can rsvp to learn and explore language opportunities.">
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
                <a class="dropdown-item" href="<?=ROOT;?>/library/">All Materials</a>
                <a class="dropdown-item" href="<?=ROOT;?>/library/A1-German.php">A1 German</a>
                <a class="dropdown-item" href="<?=ROOT;?>/library/A2-German.php">A2 German</a>
                <a class="dropdown-item" href="<?=ROOT;?>/library/B1-German.php">B1 German</a>
              </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?=ROOT;?>/events/">Events <span class="sr-only">(current)</span></a>
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
          <h1 class="pageheader-title">Events</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="events">
    <div class="container">
      <div class="row">
        <?php

        $events = getAllEvents($conn);

        if ($events !== false) {
          $events = array_slice($events, 0, 3);
          foreach ($events as $event) {
            $event = (object) $event;
            ?>
            <div class="col-lg-4">
              <div class="event-container">
                <div class="card">
                  <img src="<?=ROOT;?>/uploads/captions/<?=$event->caption;?>" alt="" class="event-img card-img-top">
                  <div class="event-date">
                    <span class="month"><?=getMonth($event->date);?></span>
                    <span class="day"><?=getDay($event->date);?></span>
                  </div>
                  <div class="card-body">
                    <a href="<?=$event->link;?>" class="event-name h4 card-title"><?=$event->title;?></a>
                    <p class="event-desc small"><?=$event->description;?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
        } else {
          ?>
          <div class="col">
            <p class="text-muted text-center">No Events Yet</p>
          </div>
          <?php
        }
        ?>
    <!--<div class="col-lg-4">
          <div class="event-container">
            <div class="card">
              <img src="../img/hero.jpg" alt="" class="event-img card-img-top">
              <div class="event-date">
                <span class="month">OCT</span>
                <span class="day">23</span>
              </div>
              <div class="card-body">
                <a href="#" class="event-name h4 card-title">The best of events</a>
                <p class="event-desc small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, molestiae.</p>
              </div>
            </div>
          </div>
        </div>-->  
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