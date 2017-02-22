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

          <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 padding-spacer-right">
            <h4 class="border-title">User Questionnaire for Resting</h4>

            <br><br>

            <strong>Fill out the requested information and press the "submit" button below. If Arrhythmia is present, the calculation is not valid</strong>

            <br>





<form id="f1" name="f" method="post"  onsubmit="return fnValidate(this)" action="user.php">
<table class="table table-striped table-bordered">
  <tr>
    <td align="left">Date of Test: </td>
    <td align="left"><input class="form-control" type="text" name="date" required /></td>
    <td><img src="spacer.gif" width="40" height="1" border="0" alt="" /></td>
    <td align="left">* % SaO2: </td>
    <td align="left"><input class="form-control" type="text" name="percent_sao2" /></td>
    <td></td>
  </tr>

  <tr>
    <td align="left">Date of Birth: </td>
    <td align="left"><input class="form-control" type="text" name="dob" required/></td>
    <td><img src="spacer.gif" width="40" height="1" border="0" alt="" /></td>
    <td align="left">* Hemoglobin in g/dl: </td>
    <td align="left"><input class="form-control" type="text" name="hemoglobin" /></td>
    <td></td>
  </tr>

  <tr>
    <td align="left">User No: </td>
    <td align="left"><input class="form-control" type="text" name="user_no" required /></td>
    <td><img src="spacer.gif" width="40" height="1" border="0" alt="" /></td>
    <td align="left">Weight: </td>
    <td align="left"><input class="form-control" type="text" name="weight" required /></td>
    <td align="left">
      <select class="form-control" name="weight_measure" required>
        <option value="kg">kg</option>
        <option value="lb">lb</option>
      </select>
    </td>
  </tr>

  <tr>
    <td align="left" valign="top">Gender: </td>
    <td align="left" valign="top"><input type="radio" name="gender" value="male" required />
      Male<br />
      <input type="radio" name="gender" value="female"  />
      Female</td>
    <td><img src="spacer.gif" width="40" height="1" border="0" alt="" /></td>
    <td align="left">Height (specify cm/in): </td>
    <td align="left"><input class="form-control" type="text" name="height" required /></td>
    <td align="left">
    <select class="form-control" name="weight_measure">
      <option value="cm">cm</option>
      <option value="in">in</option>
    </select>
    </td>
  </tr>

  <tr>
    <td colspan="6">
        <div align="center"> 
          <em>* not obligatory if not available, calculation will be made with the average ideal value</em> 
        </div>
    </td>
  </tr>

</table>

<br />

<table class="table table-striped table-bordered">
  <tr>
    <td align="left" valign="top">Body Frame: </td>
    <td align="left" valign="top">
      <input type="radio" name="body_frame" value="small" required />Small<br />
      <input type="radio" name="body_frame" value="small-medium" required />Small/Medium<br />
      <input type="radio" name="body_frame" value="medium" required />Medium<br />
      <input type="radio" name="body_frame" value="medium-large" required />Medium/Large<br />
      <input type="radio" name="body_frame" value="large" required />Large 
    </td>
    <td><img src="spacer.gif" width="90" height="1" border="0" alt="" /></td>
    <td align="left" valign="top">Activity: </td>
    <td align="left" valign="top">
      <input type="radio" name="activity" value="inactive" required />Inactive<br />
      <input type="radio" name="activity" value="sedentary" required />Sedentary<br />
      <input type="radio" name="activity" value="moderately_active" required/>Moderately Active<br />
      <input type="radio" name="activity" value="very_active" required/>Very Active 
    </td>
  </tr>
</table>

<br />

<table class="table table-striped table-bordered">
  <tr>
    <td align="left" rowspan="3" width="160"><p><strong>Resting&nbsp;&nbsp;Supine</strong></p>
      <p><strong>(Mandatory)</strong></p></td>
    <td align="left">Systolic Blood Pressure (mmHg): </td>
    <td align="left"><input class="form-control" type="text" name="resting_supine_systolic_blood_pressure"/></td>
  </tr>

  <tr>
    <td align="left">Diastolic Blood Pressure (mmHg): </td>
    <td align="left"><input class="form-control" type="text" name="resting_supine_diastolic_blood_pressure" /></td>
  </tr>

  <tr>
    <td align="left">Heart Rate (beat/min): </td>
    <td align="left"><input class="form-control" type="text" name="resting_supine_heart_rate" /></td>
  </tr>
</table>

<div align="center"><br />
    <table class="table table-striped table-bordered">
      <tr>
        <td align="left" rowspan="3" width="160"><p><strong>Resting&nbsp;&nbsp;Upright</strong></p>
        <p><strong>(Optional)</strong></p></td>
        <td align="left">Systolic Blood Pressure (mmHg): </td>
        <td align="left"><input class="form-control" type="text" name="resting_upright_systolic_blood_pressure" /></td>
      </tr>

      <tr>
        <td align="left">Diastolic Blood Pressure (mmHg): </td>
        <td align="left"><input class="form-control" type="text" name="resting_upright_diastolic_blood_pressure"/></td>
      </tr>

      <tr>
        <td align="left">Heart Rate (beat/min): </td>
        <td align="left"><input class="form-control" type="text" name="resting_upright_heart_rate"/></td>
      </tr>
    </table>

    <br />

</div>

<br />

<table class="table table-striped table-bordered">
  <tr>
    <td width="182" align="right"><b>Your E-mail Address</b>:&nbsp; </td>
    <td width="1032"><input class="form-control" type="text" name="email" size="30" />
    </td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td width="182" align="right"><b>Your Fax Number</b>:&nbsp; </td>
    <td><input class="form-control" type="text" name="fax_number" size="30" />
    </td>
  </tr>
</table>

<div align="center"><br />
  <input type="submit" name="Submit" value="Submit" />
  &nbsp;
  <input type="reset" name="Submit2" value=" Clear " />
  <input name="Submit3" type="hidden" id="Submit" value="Submit" />
</div>

</form>



          </div>

          <!--Contact Form-->
          <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 padding-spacer-left">
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