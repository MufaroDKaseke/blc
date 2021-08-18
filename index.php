<?php
require './includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Babbel Language Center</title>
  <!-- Libraries -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- Favicons -->
  <?php DISPLAY_ICONS();?>
</head>
<body>

  <header class="header">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?=ROOT;?>/img/logo/logo-text.png" width="120" alt="" loading="lazy">
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
  
  
  <section class="hero">
    <div class="container">
      <div class="row align-items-center justify-content-start">
        <div class="col-lg-6">
          <h1 class="hero-heading display-4">We Enter To Learn Leave To Achive</h1>
          <p class="hero-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ea eum excepturi quaerat consectetur quam?</p>
          <a href="#" class="hero-btn btn">Start Learning</a>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="values">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="value-container">
            <i class="value-icon fa fa-handshake"></i>
            <h4 class="value-title">Professionalism</h4>
            <p class="value-p small">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Exercitationem, temporibus.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="value-container">
            <i class="value-icon fa fa-handshake"></i>
            <h4 class="value-title">Professionalism</h4>
            <p class="value-p small">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Exercitationem, temporibus.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="value-container">
            <i class="value-icon fa fa-handshake"></i>
            <h4 class="value-title">Professionalism</h4>
            <p class="value-p small">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Exercitationem, temporibus.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="value-container">
            <i class="value-icon fa fa-handshake"></i>
            <h4 class="value-title">Professionalism</h4>
            <p class="value-p small">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Exercitationem, temporibus.</p>
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
          <h6 class="about-title-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h6>
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
        <div class="col-md-6 col-lg-3">
          <div class="material-container">
            <img src="./img/material.jpg" width="100%" alt="" class="img-fluid material-img">
            <a href="#" class="material-name">That That</a>
            <span class="material-author">Tha that that</span>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="material-container">
            <img src="./img/material.jpg" width="100%" alt="" class="img-fluid material-img">
            <a href="#" class="material-name">That That</a>
            <span class="material-author">Tha that that</span>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="material-container">
            <img src="./img/material.jpg" width="100%" alt="" class="img-fluid material-img">
            <a href="#" class="material-name">That That</a>
            <span class="material-author">Tha that that</span>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="material-container">
            <img src="./img/material.jpg" width="100%" alt="" class="img-fluid material-img">
            <a href="#" class="material-name">That That</a>
            <span class="material-author">Tha that that</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="counters">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="counter-container">
            <span class="counter-number">1000</span>
            <span class="counter-name">Students</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="counter-container">
            <span class="counter-number">1000</span>
            <span class="counter-name">Students</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="counter-container">
            <span class="counter-number">1000</span>
            <span class="counter-name">Students</span>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="counter-container">
            <span class="counter-number">1000</span>
            <span class="counter-name">Students</span>
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
        <div class="col-lg-4">
          <div class="event-container">
            <div class="card">
              <img src="./img/hero.jpg" alt="" class="event-img card-img-top">
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
        </div>
        <div class="col-lg-4">
          <div class="event-container">
            <div class="card">
              <img src="./img/hero.jpg" alt="" class="event-img card-img-top">
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
        </div> 
        <div class="col-lg-4">
          <div class="event-container">
            <div class="card">
              <img src="./img/hero.jpg" alt="" class="event-img card-img-top">
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
        </div>     
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
            <span class="package-plan small">per month</span>
            <ul class="package-items list-unstyled">
              <li>Daily lessons</li>
              <li>3 sessions of revision</li>
              <li>Lorem, ipsum, dolor.</li>
              <li>Lorem ipsum dolor sit amet.</li>
            </ul>
            <a href="#" class="package-btn btn">Get Started</a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="package-container">
            <span class="package-name h5">A2</span>
            <h3 class="package-value">R1750/$250</h3>
            <span class="package-plan small">per month</span>
            <ul class="package-items list-unstyled">
              <li>Daily lessons</li>
              <li>6 sessions of revision</li>
              <li>Lorem, ipsum, dolor.</li>
              <li>Lorem ipsum dolor sit amet.</li>
            </ul>
            <a href="#" class="package-btn btn">Get Started</a>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="package-container">
            <span class="package-name h5">B1</span>
            <h3 class="package-value">R2300/$200</h3>
            <span class="package-plan small">per month</span>
            <ul class="package-items list-unstyled">
              <li>Daily lessons</li>
              <li>9 revision sessions</li>
              <li>Lorem, ipsum, dolor.</li>
              <li>Lorem ipsum dolor sit amet.</li>
            </ul>
            <a href="#" class="package-btn btn">Get Started</a>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="package-container">
            <span class="package-name h5">A1 & A2</span>
            <h3 class="package-value">R2600/$300</h3>
            <span class="package-plan small">per month</span>
            <ul class="package-items list-unstyled">
              <li>Daily lessons</li>
              <li>12 revision sessions</li>
              <li>2 sessions one-on-one</li>
              <li>Lorem ipsum dolor sit amet.</li>
            </ul>
            <a href="#" class="package-btn btn">Get Started</a>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="package-container">
            <span class="package-name h5">A2 & B1</span>
            <h3 class="package-value">$150</h3>
            <span class="package-plan small">per month</span>
            <ul class="package-items list-unstyled">
              <li>Daily lessons</li>
              <li>12 revision sessions</li>
              <li>4 sessions one-on-one</li>
              <li>Lorem ipsum dolor sit amet.</li>
            </ul>
            <a href="#" class="package-btn btn">Get Started</a>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="package-container">
            <span class="package-name h5">A1 - B1</span>
            <h3 class="package-value">R3850/$360</h3>
            <span class="package-plan small">per month</span>
            <ul class="package-items list-unstyled">
              <li>Daily lessons</li>
              <li>12 revision sessions</li>
              <li>15 sessions one-on-one</li>
              <li>Access to extra material</li>
            </ul>
            <a href="#" class="package-btn btn">Get Started</a>
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
  <script src="./js/main.js"></script>
</body>
</html>