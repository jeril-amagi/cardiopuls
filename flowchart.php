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

    <section class="mcare-Contact1-form contact-page">
      <div class="container">
        <div class="row">

          <div class="col-md-8 col-lg-8 col-sm-8 col-xs-12 padding-spacer-right">
            <h4 class="border-title">Flowchart of the Non-invasive Hemodynamic Analyzer (NHA)</h4>
              <div class="image-box parent-container-img3">
                <figure class="effect-ming" href="flowchart.jpg">
                  <img alt="img02" src="flowchart.jpg">
                  <figcaption>
                    <p><i class="fa fa-arrows"></i></p>
                    <a href="#">View more</a>
                  </figcaption>
                </figure>
              </div>
          </div>

          <!--Contact Form-->
          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 padding-spacer-left">
            <h4 class="border-title">Contact Us</h4>

            <?php require 'contact_form.php'; ?>

          </div><!--Schedule-->

        </div>
      </div>
    </section><!--Icon Boxes Flip-->

    <?php require 'footer.php'; ?>

  </div><!--JS Inclution-->


  <?php require 'scripts.php'; ?>
</body>
</html>