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
            <h4 class="border-title">What is <span class=
            "theme-color-text">Cardiopuls?</span></h4>
            <div>
            <br>
            Cardiopuls™ is a patented computerized clinical decision system which accurately computes stroke volume, cardiac output and numerous other related hemodynamic parameters – in both real-time and/or retrospectively. Cardiopuls can be used for noninvasive (and invasive applications), such as, primary care, ambulatory, critical care, telemedicine, military medicine, emergency room, pre-operative, post-operative care, life & health insurance examinations, and, in general, large scale user screening.<br><br>

            Cardiopuls provides the physician with the capability to diagnose and monitor users with hypertension, heart failure, angina pectoris, and coronary artery disease.<br><br>

            Cardiopuls uses the data input of five dynamic user characteristics, namely systolic and diastolic blood pressure, heart rate, arterial oxygen saturation and hemoglobin. Where certain data is not available, such as, hemoglobin or arterial oxygen saturation, these parameters are computed with the standard sex-dependent values. The required static user characteristics include: date of test, date of birth, gender, height and body weight. The computed hemodynamic parameters are divided by the Body Surface Area (BSA), or "indexed", to be able to compare various users.<br><br>

            The Cardiopuls software applies two algorithm cascades. Through the first algorithm cascade, the ideal stroke volume is calculated. In the second algorithm cascade, the actual stroke volume is computed by an adjustment constant relative to the corresponding ideal stroke volume. The results of the two algorithm cascades are compared and displayed in a series of graphs to allow the medical professional to quickly and comprehensively evaluate the user's hemodynamic condition.
            <br><br>

            Dramatically different from any other noninvasive or invasive cardiac output measurement method, Cardiopuls allows the medical professional to perform a complete hemodynamic analysis without having the user being “hooked up” to the medical device. Because of its high portability, the Cardiopuls diagnostic software tool can be used anywhere. Cardiopuls may be used on any desktop or network computer system and is ideal for both web-based and telemedicine applications.<br><br>
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