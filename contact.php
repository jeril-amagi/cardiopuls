<!DOCTYPE html>
<html class="no-js" lang="en">
<?php require 'head.php'; ?>
<body>
  <!--Start Preloader-->
  <div class="pre3" id="preloader">
    <div class="preloader-container">
    <img alt="" class="preload-gif" src=""></div>
  </div><!--End Preloader-->


  <!--Main Content Wrapper-->
  <div class="mcare-main-container content-wrap content home">


    <?php require 'header.php'; ?>
    
    <?php require 'call2action.php'; ?>

    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="padding: 30px">

      <?php if(isset($_GET['sent']) && $_GET['sent'] == 1): ?>
        <div class="alert alert-success" id="contactSuccess">
          Your message was sent successfully
        </div>
      <?php elseif(isset($_GET['sent']) && $_GET['sent'] == 0) : ?>
        <div class="alert alert-danger" id="contactError">
          There was an error while sending your message
        </div>
      <?php endif; ?>

    </div><!--Form Start-->

    <section class="mcare-Contact1-form contact-page">
      <div class="container">
        <div class="row">
        
          <!--Contact Form-->
          <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12 padding-spacer-left">
            <h4 class="border-title">Contact Us</h4>

            <?php require 'contact_form.php'; ?>

          </div><!--Schedule-->


					<div class="col-md-5 col-lg-5 col-sm-5 col-xs-12 padding-spacer-left">
						<h4 class="border-title">For Licensing Inquiries</h4>
						<br>
						<div class="text-content contact-info">
						<span>
							<i class="ion-ios-home"></i>
							<div style="margin-left: 40px; margin-top: -25px">
                <div>BRUCE K. LAGERMAN</div>
                <div>11921 FREEDOM DRIVE</div>
                <div>SUITE 550</div>
                <div>RESTON, VIRGINIA 20190</div>
                <div>USA</div>
							</div>
						</span>
              <span><i class="ion-email"></i><a href="mailto:blagerman@cardiopuls.com">blagerman@cardiopuls.com</a></span>
              <span><i class="ion-android-call"></i>703-217-3169</span>
            </div>

					</div>


        </div>
      </div>
    </section><!--Icon Boxes Flip-->

    <?php require 'footer.php'; ?>
    
  </div><!--JS Inclution-->


  <?php require 'scripts.php'; ?>
</body>
</html>