<?php
require './includes/config.php';
require './includes/db_connect.php';
require './includes/library_processes.php';
require './includes/events_processes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Babbel Language Center</title>
  <meta name="description" content="Babbel Language Center is a language school where you can learn how to write and speak foreign languages and get access to opportunities and programs abroad.">
  <meta name="keywords" content="Babbel,Language,Center,German,language,lesssons,learn,read,write,speak,Harare,Zimbabwe">
  <!-- Libraries -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- Favicons -->
  <?php DISPLAY_ICONS();?>


  <!-- Indexing Details -->
  <link href="https://blc.co.zw" rel="canonical" />
  <!-- Required Open Graph data -->
  <meta property="og:title" content="Babbel Language Center - Language School" />
  <meta property="og:type" content="article" />
  <meta property="og:image" content="<?=ROOT;?>/img/logo/logo-text.png" />
  <meta property="og:url" content="<?=ROOT;?>" />
  <!-- Optional Open Graph data -->
  <!--<meta property="og:audio" content="https://example.com/guide.mp3." />-->
  <meta property="og:description" content="Babbel Language Center is a language school where you can learn how to write and speak foreign languages and get access to opportunities and programs abroad." />
  <meta property="og:site_name" content="Babbel Language Center" />
  <meta property="og:locale" content="en_us" />
  <!--<meta property="og:video" content="https://example.com/guide.mp4" />-->
  <!-- Find additional markup on https://ogp.me -->
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@babbellanguagecenter">
  <meta name="twitter:domain" content="<?=ROOT;?>">
  <meta name="twitter:title" content="Babbel Language Center | Home">
  <meta name="twitter:description" content="Babbel Language Center is a language school where you can learn how to write and speak foreign languages and get access to opportunities and programs abroad..">
  <meta name="twitter:image" content="<?=ROOT;?>/img/logo/logo-text.png">
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <!-- End Of Indexing Details -->


</head>
<body>

  <!-- Preloader -->
  <?php
  require './includes/preloader.php';
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
            <li class="nav-item active">
              <a class="nav-link" href="<?=ROOT;?>/">Home <span class="sr-only">(current)</span></a>
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
  
  
  <section class="hero">
    <div class="container">
      <div class="row align-items-center justify-content-start">
        <div class="col-lg-6">
          <h1 class="hero-heading display-4">We Enter To Learn Leave To Achive</h1>
          <p class="hero-paragraph">The best language school in teaching you to read, write and speak a language and give you opportunities.</p>
          <a href="<?=ROOT;?>/register/" class="hero-btn btn">Start Learning</a>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="values">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="value-container">
            <i class="value-icon fa fa-heart"></i>
            <h4 class="value-title">Passion</h4>
            <p class="value-p small">The staff is all passionate about working with language and delivering the best service in learning language</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="value-container">
            <i class="value-icon fa fa-tasks"></i>
            <h4 class="value-title">Purpose</h4>
            <p class="value-p small">Language proficiency and sensitivity to cultural differences empowers people from all world regions</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="value-container">
            <i class="value-icon fa fa-lightbulb"></i>
            <h4 class="value-title">Innovation</h4>
            <p class="value-p small">We actively apply new knowledge to our field, and we process recent insights into our services</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="value-container">
            <i class="value-icon fa fa-calendar-day"></i>
            <h4 class="value-title">Flexibility</h4>
            <p class="value-p small">Be able to choose a flexible learning plan for yourself that accomodates your schedule</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="about">
    <div class="container-fluid">
      <div class="row justify-content-end">
        <div class="col-lg-6 about-container">
          <h2 class="about-title">Learn The <span>German</span> Language</h2>
          <h6 class="about-title-p">Opening opportunities for you in foreign countries</h6>
          <p class="about-p">We advance internationalization at BLC by providing high quality language instruction, cultural programming and academice exchange.</p>
          <p class="about-p">We serve students preparing for their career opportunities, through innovative teaching and experiential learning.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="materials">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="materials-title">New Materials</h2>
        </div>
      </div>
      <div class="row">

        <?php

        $materials = getAllMaterials($conn);
        if ($materials !== false) {
          $materials = array_slice($materials, 0, 4);
          foreach ($materials as $material) {
            $material = (object) $material;
            ?>
            <div class="col-md-6 col-lg-3">
              <div class="material-container">
                <img src="<?=ROOT;?>/uploads/captions/<?=$material->preview;?>" width="100%" alt="Material <?=$material->title;?>" class="img-fluid material-img">
                <a href="<?=ROOT;?>/uploads/materials/<?=$material->link;?>" class="material-name"><?=$material->title;?></a>
                <span class="material-author"><?=$material->author;?></span>
              </div>
            </div>
            <?php
          }
        } else {
          ?>
          <div class="col">
            <p class="text-muted text-center">No Materials Yet</p>
          </div>
          <?php
        }
        ?>

    <!--<div class="col-md-6 col-lg-3">
          <div class="material-container">
            <img src="./img/material.jpg" width="100%" alt="" class="img-fluid material-img">
            <a href="#" class="material-name">That That</a>
            <span class="material-author">Tha that that</span>
          </div>
        </div>-->
      </div>
    </div>
  </section>

  <section class="counters">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="counter-container">
            <span class="counter-number countfect" data-num="1200"></span>
            <span class="counter-name">Students</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="counter-container">
            <span class="counter-number countfect" data-num="1200"></span>
            <span class="counter-name">Graduates</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="counter-container">
            <span class="counter-number countfect" data-num="1200"></span>
            <span class="counter-name">Opportunities</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="counter-container">
            <span class="counter-number countfect" data-num="1200"></span>
            <span class="counter-name">Resources</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="events">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="events-title">Upcoming Events</h2>
        </div>
      </div>
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
                  <img src="<?=ROOT;?>/uploads/captions/<?=$event->caption;?>" alt="event <?=$event->title;?>" class="event-img card-img-top">
                  <div class="event-date">
                    <span class="month"><?=getMonth($event->date);?></span>
                    <span class="day"><?=getDay($event->date);?></span>
                  </div>
                  <div class="card-body">
                    <a href="<?=$event->link;?>" class="event-name text-truncate h4 card-title"><?=$event->title;?></a>
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
      </div>
    </div>
  </section>


  <section class="callout">
    <div class="container">

      <div class="callout-container">
        <div class="row">
          <div class="col-lg-6 callout-content">
            <span>Lesson</span>
            <h2>Now Open</h2>
            <p>Enrol with us now and start learning some german</p>
            <a href="<?=ROOT;?>/register/">Register <i class="fas fa-external-link-alt"></i></a>
          </div>
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

  <!--<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="footer-about">
            <img src="./img/logo/babbel_2.png" alt="" class="img-fluid">
            <p class="small">Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Excepturi magni ducimus id quas? Quos, dolores!</p>
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
            <h4>Useful Links</h4>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-angle-right"></i>Home</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-angle-right"></i>About</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-angle-right"></i>Services</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-angle-right"></i>Pricing</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-angle-right"></i>Library</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-angle-right"></i>Events</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-angle-right"></i>Contact</a>
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
            <p>Subscribe to our newsletter to get updates on latest courses</p>
            <form action="./mailing/subscribe.php">
              <input type="email" name="email" id="" class="form-control" placeholder="Email*">
              <button type="submit" name="action" value="confirm_email" class="blc-btn btn">Subscribe</button>
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
  </footer>-->
  <!-- Footer -->
  <?php
  require_once './includes/footer.php';
  ?>
  <!-- End Of Footer -->
  <script src="./lib/jquery/jquery-3.6.0.min.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./lib/jquery-counter/countfect.min.js"></script>
  <script src="./js/main.js"></script>
</body>
</html>