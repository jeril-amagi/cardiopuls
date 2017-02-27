    <?php
      function echoActiveClass($tab)
      {
          $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

          if ($current_file_name == 'index' && $tab == 'index') 
          {
            echo 'active';
          }
          elseif ($current_file_name == 'contact' && $tab == 'contact') 
          {
            echo 'active';
          }
          elseif ($current_file_name == 'applications' && $tab == 'applications') 
          {
            echo 'active';
          }
          elseif ( ($current_file_name == 'illustrative_results' ||
            $current_file_name == 'publications' ||
            $current_file_name == 'cardiopuls_innovator' ||
            $current_file_name == 'faqs')
            && $tab == 'resources') 
          {
            echo 'active';
          }
          elseif ( ($current_file_name == 'what_is_cardiopuls' ||
            $current_file_name == 'flowchart')
            && $tab == 'about_us') 
          {
            echo 'active';
          }
      }
    ?>

    <!--Header Of Theme-->
    <header class="clearfix" id="headerstic">
      <div class="mcare-header-bg">

        <!--Top Navigation-->
        <div class="top-nav-wrap">
          <div class="container overflow-visible">
            <div class="row">
              <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button class="navbar-toggle" data-target=
                  "#bs-example-navbar-collapse-1" data-toggle="collapse" type=
                  "button"><span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span> <span class="icon-bar"></span>
                  <span class="icon-bar"></span></button>
                  <div class="column res-men-col">
                    <div class="dl-menuwrapper" id="dl-menu">
                      <button class="dl-trigger">Open Menu</button>
                      <ul class="dl-menu">
                        <li>
                          <a href="index.php">Home</a>
                        </li>
                        <li>
                          <a href="#">About Us</a>
                          <ul class="dl-submenu">
                            <li>
                              <a href="what_is_cardiopuls.php">What is Cardiopuls?</a>
                            </li>
                            <li>
                              <a href="flowchart.php">Flowchart</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="applications.php">Applications</a>
                        </li>

                        <li>
                          <a href="#">Resources</a>
                          <ul class="dl-submenu">
                            <li>
                              <a href="illustrative_results.php">Illustrative Results</a>
                            </li>
                            <li>
                              <a href="publications.php">Publications</a>
                            </li>
                            <li>
                              <a href="cardiopuls_innovator.php">Cardiopuls Innovator</a>
                            </li>
                            <li>
                              <a href="faqs.php">FAQ'S</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href="contact.php">Contact Us</a>
                        </li>
                      </ul>
                    </div><!-- /dl-menuwrapper -->

                  </div><a href="index.php">
                  <div class="logo">
                    <img alt="logo" class="img-responsive" src="images/logo.png" style="padding: 14px 12px 12px 12px; height: 88px; width: 164px">
                  </div></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id=
                "bs-example-navbar-collapse-1">
                  <div class="morphsearch hide-in-small hidden" id="morphsearch">
                    <form class="morphsearch-form">
                      <input class="morphsearch-input" placeholder="Search..."
                      type="search"><i class="ion-ios-search-strong"></i>
                      <button class="morphsearch-submit" type=
                      "submit">Search</button>
                    </form><span class="morphsearch-close"></span>
                  </div><!-- /morphsearch -->


                  <!-- Big screen tabs -->
                  <div class="overlay disable-hover noscroll"></div>
                  <ul class="nav navbar-nav navbar-right title-text top-nav">

                    <li class='<?php echoActiveClass("index"); ?>' >
                      <a href="index.php"><i class="ion-ios-home-outline"></i>Home</a>
                    </li>

                    <li class='dropdown <?php echoActiveClass("about_us"); ?>' >
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="ion-ios-person-outline"></i>About Us<b class="icon-angle-down"></b></a>
                      <ul class="dropdown-menu single-drop">
                        <li>
                          <a href="what_is_cardiopuls.php">What is Cardiopuls?</a>
                        </li>
                        <li>
                          <a href="flowchart.php">Flowchart</a>
                        </li>
                      </ul>
                    </li>

                    <li class='<?php echoActiveClass("applications"); ?>' >
                      <a href="applications.php"><i class="ion-ios-paperplane-outline"></i>Applications</a>
                    </li>

                    <li class='dropdown <?php echoActiveClass("resources"); ?>' >
                      <a class="dropdown-toggle" data-toggle="dropdown" href=
                      "#"><i class="ion-ios-box-outline"></i>Resources</a>
                      <ul class="dropdown-menu single-drop">
                        <li class="dropdown">
                          <a href="illustrative_results.php" tabindex="-1">Illustrative Results</a>
                        </li>
                        <li class="dropdown">
                          <a href="publications.php" tabindex=
                          "-1">Publications</a>
                        </li>
                        <li class="dropdown">
                          <a href="cardiopuls_innovator.php" tabindex="-1">Cardiopuls Innovator</a>
                        </li>
                        <li class="dropdown">
                          <a href="faqs.php" tabindex="-1">FAQ'S</a>
                        </li>
                      </ul>
                    </li>

                    <li class='<?php echoActiveClass("contact"); ?>' >
                      <a href="contact.php"><i class=
                      "ion-ios-location-outline"></i>Contact</a>
                    </li>

                  </ul>
                </div><!-- /.navbar-collapse -->
              </nav>
            </div>
          </div>
        </div><!--Top Navigation End-->
      </div>
    </header><!--Header End-->