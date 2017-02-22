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
            <h4 class="border-title">User Questionnaire for Exercise</h4>

            <br><br>

            <strong>Fill out the requested information and press the "submit" button below. If Arrhythmia is present, the calculation is not valid</strong>

            <br>

            <!-- Questionnaire Form Begins -->

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
                    <input type="radio" name="body_frame" value="small" required />&nbsp;Small<br />
                    <input type="radio" name="body_frame" value="small-medium" required />&nbsp;Small/Medium<br />
                    <input type="radio" name="body_frame" value="medium" required />&nbsp;Medium<br />
                    <input type="radio" name="body_frame" value="medium-large" required />&nbsp;Medium/Large<br />
                    <input type="radio" name="body_frame" value="large" required />&nbsp;Large 
                  </td>
                  <td><img src="spacer.gif" width="90" height="1" border="0" alt="" /></td>
                  <td align="left" valign="top">Activity: </td>
                  <td align="left" valign="top">
                    <input type="radio" name="activity" value="inactive" required />&nbsp;Inactive<br />
                    <input type="radio" name="activity" value="sedentary" required />&nbsp;Sedentary<br />
                    <input type="radio" name="activity" value="moderately_active" required/>&nbsp;Moderately Active<br />
                    <input type="radio" name="activity" value="very_active" required/>&nbsp;Very Active 
                  </td>
                </tr>
              </table>

              <br />

              <table class="table table-striped table-bordered">
                <tr>
                  <td align="left" rowspan="3" width="197"><strong>Resting&nbsp;&nbsp;Upright</strong><br />
                    (about 40%<br />
                    of Max HR)</td>
                  <td width="686" align="left"><div align="right">Systolic Blood Pressure (mmHg): </div></td>
                  <td width="311" align="left"><input class="form-control" type="text" name="resting_upright_systolic_blood_pressure" required/></td>
                </tr>
                <tr>
                  <td align="left"><div align="right">Diastolic Blood Pressure (mmHg): </div></td>
                  <td align="left"><input type="text" name="resting_upright_diastolic_blood_pressure" class="form-control" required /></td>
                </tr>
                <tr>
                  <td align="left"><div align="right">Heart Rate (beat/min): </div></td>
                  <td align="left"><input type="text" name="resting_upright_heart_rate" class="form-control" required/></td>
                </tr>
              </table>

              <br />

              <table class="table table-striped table-bordered">
                <tr>
                  <td align="left" rowspan="5" width="100"><strong><em>EXERCISE<br />
                          <br />
                    TREADMILL<br />
                    <br />
                    TEST</em></strong></td>
                  <td>
                    <table class="table table-striped table-bordered">
                      <tr>
                        <td align="left" rowspan="3" width="80"><strong><em>Exercise-1</em></strong><br />
                          (about 60%<br />
                          of Max HR)</td>
                        <td width="669" align="left"><div align="right">Systolic Blood Pressure (mmHg): </div></td>
                        <td width="334" align="left"><input type="text" name="exercise_1_systolic_blood_pressure" class="form-control" required/></td>
                      </tr>

                      <tr>
                        <td align="left"><div align="right">Diastolic Blood Pressure (mmHg): </div></td>
                        <td align="left"><input type="text" name="exercise_1_diastolic_blood_pressure" class="form-control" required /></td>
                      </tr>

                      <tr>
                        <td align="left"><div align="right">Heart Rate (beat/min): </div></td>
                        <td align="left"><input type="text" name="exercise_1_heart_rate" class="form-control" required /></td>
                      </tr>

                    </table>
                  </td>
                </tr>

                <tr>
                  <td class="line">&nbsp;</td>
                </tr>

                <tr>
                  <td>
                    <table class="table table-striped table-bordered">
                      <tr>
                        <td align="left" rowspan="3" width="80"><strong><em>Exercise-2</em></strong><br />
                          (about 80%<br />
                          of Max HR)</td>
                        <td width="672" align="left"><div align="right">Systolic Blood Pressure (mmHg): </div></td>
                        <td width="331" align="left"><input type="text" name="exercise_2_systolic_blood_pressure" class="form-control" required /></td>
                      </tr>

                      <tr>
                        <td align="left"><div align="right">Diastolic Blood Pressure (mmHg): </div></td>
                        <td align="left"><input type="text" name="exercise_2_diastolic_blood_pressure" class="form-control" required/></td>
                      </tr>

                      <tr>
                        <td align="left"><div align="right">Heart Rate (beat/min): </div></td>
                        <td align="left"><input type="text" name="exercise_2_heart_rate" class="form-control" required /></td>
                      </tr>

                    </table>
                  </td>
                </tr>

              </table>

              <br />

              <table class="table table-striped table-bordered">
                <tr>
                  <td width="182" align="right"><b>Your E-mail Address</b>:&nbsp; </td>
                  <td width="1032"><input class="form-control" type="text" name="email" required/>
                  </td>
                </tr>

                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>

                <tr>
                  <td width="182" align="right"><b>Your Fax Number</b>:&nbsp; </td>
                  <td><input class="form-control" type="text" name="fax_number" />
                  </td>
                </tr>
              </table>

              <div align="center"><br />
                <input type="submit" value="Submit" />
                &nbsp;
                <input type="reset" value=" Clear " />
              </div>

            </form>

            <!-- Questionnaire Form Ends -->

          </div>


          <!--Contact Form-->
          <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 padding-spacer-left">
            <h4 class="border-title">Contact Us</h4>

            <?php require 'contact_form.php'; ?>

          </div>

        </div>
      </div>
    </section><!--Icon Boxes Flip-->

    <?php require 'footer.php'; ?>
    
  </div><!--JS Inclution-->

  <?php require 'scripts.php'; ?>


</body>
</html>