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
    
    <?php require 'call2action2.php'; ?>

    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="padding: 30px 30px 0px 30px">

      <?php if(isset($_GET['sent']) && $_GET['sent'] == 1): ?>
        <div class="alert alert-success" id="contactSuccess">
          Your data was submitted successfully
        </div>
      <?php elseif(isset($_GET['sent']) && $_GET['sent'] == 0) : ?>
        <div class="alert alert-danger" id="contactError">
          There was an error while submitting your data
        </div>
      <?php endif; ?>

    </div><!--Form Start-->

    <section class="mcare-Contact1-form contact-page">
      <div class="container">
        <div class="row">

          <div class="col-md-8 col-lg-8 col-sm-8 col-xs-12 padding-spacer-right">
            <h4 class="border-title">Try Cardiopuls</h4>

            <br><br>

						<a href="user_resting.php" class="mcare-button button1 light-bg small-bt" target="new" >User Questionnaire <br>for Resting</a>  &nbsp; &nbsp; 

						<a href="user_exercise.php" class="mcare-button button1 light-bg small-bt" target="new">User Questionnaire <br>for Exercise</a>  &nbsp; &nbsp; 

						<br><br>
            We invite you to submit a completed user questionnaire for any user in the resting
            position and/or data from exercise treadmill testing. In response, we will provide a
            comprehensive assessment for that particular user. It is important to consider when
            submitting user data that it be accurately taken (blood pressure and heart rate) and
            ensure the user does not exhibit any cardiac arrhythmias.
            
            <br><br>
            We comply with the guidelines of the 7th Report of the Joint National Committee on
            Prevention, Detection, Evaluation and Treatment of High Blood Pressure and follow
            the ACC/AHA 2002 Guideline update for exercise testing.

            <br><br>
            Submitted data and assessments will not be used for any publications or in any form
            without your permission. We would appreciate if you would call the attention of our
            website www.cardiopuls.com to others.

            <br><br>
            At this time assessment are available only for medical, healthcare and insurance
            professionals at no cost.

            <br><br><br>
            <strong style="color: #ea2424;">Disclaimer</strong>

            <div>
            <br>
            The Cardiopuls heart checkup is not intended to provide medical advice or
            treatment. Only your healthcare provider can do that.
            <br><br>
            We recommend that you consult your healthcare provider before starting a
            physical activity program or making a major lifestyle change. The results of this
            assessment can help you work with your healthcare provider to map a successful
            path to heart health.
            <br><br>
            Our risk assessment tool utilizes the 7th Report of the Joint National Committee
            on Prevention, Detection, Evaluation and Treatment of High Blood Pressure.
            This American Heart Association endorsed report was written by the National
            High Blood Pressure Education Program (NHBPEP) and describes how to
            prevent, detect, evaluate and treat high blood pressure.
            <br><br>
            Work with your healthcare provider to achieve and maintain your heart-healthy
            goals for life.
            </div>
            <br><br>
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