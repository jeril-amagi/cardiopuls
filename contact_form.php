            <form action="emailform.php" method="post" name="contactForm">
              <!-- Name Text Box -->
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 no-pad">
                <div class="mcare-field control-group">
                  <i class="ion-person"></i>
                  <input class="form-control" id="name" 
                  name="Name" placeholder="Name" type="text" required>
                </div>
              </div><!-- Email Text Box -->
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 no-pad">
                <div class="mcare-field control-group">
                  <i class="ion-ios-email-outline"></i> 
                  <input class="form-control" id="Email" name="email" placeholder="Email"
                  type="email" required>
                </div>
              </div><!-- Subject Text Box -->
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 no-pad">
                <div class="mcare-field control-group">
                  <i class="ion-android-call"></i> 
                  <input class="form-control" name="Phone" placeholder="Phone" type="text">
                </div>
              </div><!-- Message Text Box -->
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 no-pad">
                <div class="mcare-field control-group">
                  <textarea class="form-control tarea" id="message" name="Message" placeholder="Message" required></textarea>
                </div>
              </div><!-- Button -->
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 no-pad">
                <div class="mcare-field main-but">
                  <div class="inner-out-button">
                    <button class="mcare-button-dark button2 mcare-button-med"
                    data-loading-text="Loading..." type="submit">Send
                    Message</button>
                  </div>
                </div>
              </div>
            </form><!-- Form End -->