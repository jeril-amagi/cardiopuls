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

            Fill out the requested information and press the "submit" button below. If Arrhythmia is present, the calculation is not valid. 

            <br>





<form id="f1" name="f" method="post"  onsubmit="return fnValidate(this)" action="user.php">

<table class="table table-striped table-bordered">

  <tr>

    <td align="left">Date of Test: </td>

    <td align="left"><input class="form-control" type="text" name="date" size="15" maxlength="20" /></td>

    <td><img src="spacer.gif" width="40" height="1" border="0" alt="" /></td>

    <td align="left">* % SaO2: </td>

    <td align="left"><input class="form-control" type="text" name="percent_sao2" size="15" maxlength="20" /></td>

    <td></td>

  </tr>

  <tr>

    <td align="left">Date of Birth: </td>

    <td align="left"><input class="form-control" type="text" name="dob" size="15" maxlength="20"/></td>

    <td><img src="spacer.gif" width="40" height="1" border="0" alt="" /></td>

    <td align="left">* Hemoglobin in g/dl: </td>

    <td align="left"><input class="form-control" type="text" name="hemoglobin" size="15" maxlength="20" /></td>

    <td></td>

  </tr>

  <tr>

    <td align="left">User No: </td>

    <td align="left"><input class="form-control" type="text" name="user_no" size="15" maxlength="20" /></td>

    <td><img src="spacer.gif" width="40" height="1" border="0" alt="" /></td>

    <td align="left">Weight: </td>

    <td align="left"><input class="form-control" type="text" name="weight" size="15" maxlength="20" /></td>

    <td align="left"><select class="form-control" name="weight_measure">

      <option value="kg">kg</option>

      <option value="lb">lb</option>

    </select>

    </td>

  </tr>

  <tr>

    <td align="left" valign="top">Gender: </td>

    <td align="left" valign="top"><input type="radio" name="gender" value="male" />

      Male<br />

      <input type="radio" name="gender" value="female" />

      Female</td>

    <td><img src="spacer.gif" width="40" height="1" border="0" alt="" /></td>

    <td align="left">Height (specify cm/in): </td>

    <td align="left"><input class="form-control" type="text" name="height" size="15" maxlength="20" /></td>

    <td align="left"><select class="form-control" name="weight_measure">

      <option value="cm">cm</option>

      <option value="in">in</option>

    </select>

    </td>

  </tr>

  <tr>

    <td colspan="6"><br />

        <br />

        <div align="center"> <em>* not obligatory if not available, calculation will be made with the average ideal value</em> </div></td>

  </tr>

</table>

<br />

<table class="table table-striped table-bordered">

  <tr>

    <td align="left" valign="top">Body Frame: </td>

    <td align="left" valign="top"><input type="radio" name="body_frame" value="small" />

      Small<br />

      <input type="radio" name="body_frame" value="small-medium" />

      Small/Medium<br />

      <input type="radio" name="body_frame" value="medium" />

      Medium<br />

      <input type="radio" name="body_frame" value="medium-large" />

      Medium/Large<br />

      <input type="radio" name="body_frame" value="large" />

      Large </td>

    <td><img src="spacer.gif" width="90" height="1" border="0" alt="" /></td>

    <td align="left" valign="top">Activity: </td>

    <td align="left" valign="top"><input type="radio" name="activity" value="inactive" />

      Inactive<br />

      <input type="radio" name="activity" value="sedentary" />

      Sedentary<br />

      <input type="radio" name="activity" value="moderately_active" />

      Moderately Active<br />

      <input type="radio" name="activity" value="very_active"/>

      Very Active </td>

  </tr>

</table>

<br />

<table class="table table-striped table-bordered">

  <tr>

    <td align="left" rowspan="3" width="160"><p><strong>Resting&nbsp;&nbsp;Supine</strong></p>

      <p><strong>(Mandatory)</strong></p></td>

    <td align="left">Systolic Blood Pressure (mmHg): </td>

    <td align="left"><input class="form-control" type="text" name="resting_supine_systolic_blood_pressure" size="15" maxlength="20" /></td>

  </tr>

  <tr>

    <td align="left">Diastolic Blood Pressure (mmHg): </td>

    <td align="left"><input class="form-control" type="text" name="resting_supine_diastolic_blood_pressure" size="15" maxlength="20" /></td>

  </tr>

  <tr>

    <td align="left">Heart Rate (beat/min): </td>

    <td align="left"><input class="form-control" type="text" name="resting_supine_heart_rate" size="15" maxlength="20" /></td>

  </tr>

</table>

<div align="center"><br />

    <table class="table table-striped table-bordered">

      <tr>

        <td align="left" rowspan="3" width="160"><p><strong>Resting&nbsp;&nbsp;Upright</strong></p>

        <p><strong>(Optional)</strong></p></td>

        <td align="left">Systolic Blood Pressure (mmHg): </td>

        <td align="left"><input class="form-control" type="text" name="resting_upright_systolic_blood_pressure" size="15" maxlength="20" /></td>

      </tr>

      <tr>

        <td align="left">Diastolic Blood Pressure (mmHg): </td>

        <td align="left"><input class="form-control" type="text" name="resting_upright_diastolic_blood_pressure" size="15" maxlength="20" /></td>

      </tr>

      <tr>

        <td align="left">Heart Rate (beat/min): </td>

        <td align="left"><input class="form-control" type="text" name="resting_upright_heart_rate" size="15" maxlength="20"/></td>

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