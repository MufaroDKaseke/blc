<?php
require '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Babbel Language Center | Contact</title>
  <!-- Libraries -->
  <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/contact.css">
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
            <li class="nav-item active">
              <a class="nav-link" href="<?=ROOT;?>/contact/">Contact <span class="sr-only">(current)</span></a>
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
          <h1 class="pageheader-title">Contact</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="contact-info">
            <h4>Contact Info</h4>
            <ul class="list-unstyled">
              <li>
                <h5><i class="fa fa-map-marker-alt"></i>Address</h5>
                <p>13F Fraser St, Parktown</p>
              </li>
              <li>
                <h5><i class="fa fa-phone"></i>Phone</h5>
                <p>+263 780 948 498</p>
              </li>
              <li>
                <h5><i class="fa fa-envelope"></i>Support</h5>
                <p>info@blc.co.zw</p>
              </li>
            </ul>
          </div>
          <div class="contact-form">
            <h4>Send Message</h4>
            <form action="">
              <input type="text" name="name" id="" class="form-control" placeholder="Name" required>
              <input type="email" name="email" id="" class="form-control" placeholder="Email" required>
              <input type="tel" name="phone_number" id="" class="form-control" placeholder="Phone">
              <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Message" required></textarea>
              <div class="input-group align-items-center justify-content-between">
                <!-- Action -->
                <input type="hidden" name="action" value="send_message">
                <button type="submit" class="blc-btn btn">Send Message</button>
                <p id="message-result" class="mb-0"></p>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3796.412179118472!2d30.97336181452269!3d-17.91291928776563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a1c1f29ea957%3A0x3e3b8b8de0f38d7d!2sOmorfo%20Tech%20Labs!5e0!3m2!1sen!2szw!4v1625899559312!5m2!1sen!2szw" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
  <script>
    
    let contactForm = $('.contact-form form');
    let submitBtn = $('.contact-form button[type="submit"]')
    let resultContainer = $('#message-result');

    contactForm.on('submit', function(e) {
      e.preventDefault();

      $.ajax({
        url: '../includes/send_message.php',
        type: "POST",
        dataType: "html",
        data: contactForm.serialize(),
        beforeSend: function() {
          submitBtn.attr('disabled', true);
          submitBtn.html('Sending');
        },
        success: function(data) {
          resultContainer.html(data);
        },
        error: function(e) {
          resultContainer.html('<span class="text-warning"><i class="fa fa-exclamation-triangle"></i> Connection Error</span>')
          console.log(e);
        }, 
        complete: function() {
          submitBtn.attr('disabled', false);
          submitBtn.html('Send Message');
        }
      });
    });


  </script>
</body>
</html>