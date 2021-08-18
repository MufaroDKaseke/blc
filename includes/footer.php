<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="footer-about">
          <img src="<?php echo ROOT;?>/img/logo/logo-text.png" alt="" class="img-fluid">
          <p class="small">BLC provides high quality language instruction, cultural programming and academice exchange.</p>
          <div class="footer-social">
            <ul class="nav justify-content-center">
              <li>
                <a href="<?php echo SOCIAL_LINK['facebook'];?>"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="<?php echo SOCIAL_LINK['twitter'];?>"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="<?php echo SOCIAL_LINK['instagram'];?>"><i class="fab fa-instagram"></i></a>
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
              <a href="<?=ROOT;?>/home" class="nav-link"><i class="fa fa-angle-right"></i>Home</a>
            </li>
            <li class="nav-item">
              <a href="<?=ROOT;?>/about/" class="nav-link"><i class="fa fa-angle-right"></i>About</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="fa fa-angle-right"></i>Services</a>
            </li>
            <li class="nav-item">
              <a href="<?=ROOT;?>/pricing/" class="nav-link"><i class="fa fa-angle-right"></i>Pricing</a>
            </li>
            <li class="nav-item">
              <a href="<?=ROOT;?>/library/" class="nav-link"><i class="fa fa-angle-right"></i>Library</a>
            </li>
            <li class="nav-item">
              <a href="<?=ROOT;?>/events/" class="nav-link"><i class="fa fa-angle-right"></i>Events</a>
            </li>
            <li class="nav-item">
              <a href="<?=ROOT;?>/contact/" class="nav-link"><i class="fa fa-angle-right"></i>Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="footer-contact">
          <h4>Contact Us</h4>
          <ul class="nav flex-column">
            <li><i class="fa fa-envelope"></i><a href="mailto:info@blc.co.zw">info@blc.co.zw</a></li>
            <li><i class="fa fa-phone"></i><a href="#">+263 87 934 43483</a></li>
            <li><i class="fa fa-map-marked"></i><a href="#">13F Fraser St, Parktown</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="footer-subscribe">
          <h4>Sign Up For Updates</h4>
          <p>Subscribe to our newsletter to get updates on latest courses</p>
          <form action="<?php echo ROOT;?>/mailing/subscribe.php">
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
</footer>