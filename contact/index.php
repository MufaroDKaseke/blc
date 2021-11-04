<?php
require '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Babbel Language Center | Contact</title>
  <meta name="description" content="Contact Us. 3 Orkney Road, Eastlea, Harare. info@blc.co.zw . +263 78 536 9204. 8am - 8:30pm">
  <meta name="keywords" content="contact,details,Babbel,Language,Center,German,language,lesssons,learn,read,write,speak,Harare,Zimbabwe">
  <!-- Libraries -->
  <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../lib/font-awesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/contact.css">
  <!-- Favicons -->
  <?php DISPLAY_ICONS();?>

  <!-- Indexing Details -->
  <link href="https://blc.co.zw/contact/" rel="canonical" />
  <!-- Required Open Graph data -->
  <meta property="og:title" content="Babbel Language Center - Language School" />
  <meta property="og:type" content="article" />
  <meta property="og:image" content="<?=ROOT;?>/img/logo/logo-text.png" />
  <meta property="og:url" content="<?=ROOT;?>" />
  <!-- Optional Open Graph data -->
  <!--<meta property="og:audio" content="https://example.com/guide.mp3." />-->
  <meta property="og:description" content="Contact Us. 3 Orkney Road, Eastlea, Harare. info@blc.co.zw . +263 78 536 9204. 8am - 8:30pm" />
  <meta property="og:site_name" content="Babbel Language Center" />
  <meta property="og:locale" content="en_us" />
  <!--<meta property="og:video" content="https://example.com/guide.mp4" />-->
  <!-- Find additional markup on https://ogp.me -->
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@babbellanguagecenter">
  <meta name="twitter:domain" content="<?=ROOT;?>">
  <meta name="twitter:title" content="Babbel Language Center | Contact">
  <meta name="twitter:description" content="Contact Us. 3 Orkney Road, Eastlea, Harare. info@blc.co.zw . +263 78 536 9204. 8am - 8:30pm">
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
                <p>3 Orkney Road, Eastlea<br>Harare</p>
              </li>
              <li>
                <h5><i class="fa fa-phone"></i>Phone</h5>
                <p>+263 78 536 9204</p>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.4151381125885!2d31.071823214846567!3d-17.819163780743875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a5c350a4beef%3A0xbaf84f849fbee7b0!2sBabbel%20Language%20Center!5e0!3m2!1sen!2szw!4v1630519651640!5m2!1sen!2szw" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
          submitBtn.html('Sending...');
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