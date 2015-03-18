<?php
  $page = "videos";
?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>NYCinDub | Underground Music in NYC</title>
    <link rel="shortcut icon" href="images/icon.jpg" />
    <script src="js/jquery-2.1.0.min.js"></script> <!-- jQuery -->
    <link rel="stylesheet" type="text/css" href="css/main.css" /> <!-- Main CSS file -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/> <!-- Carousel CSS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css' /> <!-- Roboto Font from Google Webfonts -->
    <script type="text/javascript" src="js/jquery.idTabs.min.js"></script><!-- Tabbed JS -->


    <!-- BEGIN RESPONSE LAYOUTS -->
    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="all and (min-width: 0px) and (max-width: 480px)" />
    <link rel="stylesheet" type="text/css" href="css/tablet.css" media="all and (min-width: 481px) and (max-width: 767px)" />
    <link rel="stylesheet" type="text/css" href="css/desktop.css" media="all and (min-width: 768px)" />
    <!-- END RESPONSIVE LAYOUTS -->

  </head>

  <body>

    <div id="wrapper"><!-- BEGIN Main Wrapper DIV -->

<!-- Header is included via PHP -->
 <?php
  include ("_header.html")
  ?>
<!-- End Header -->



      <div class="clear"></div>



      <div id="main-site-div"> <!-- BEGIN BODY DIV -->

        <div class="line"></div>



<!-- BEGIN VIDEOS CATEGORY -->
        <article class="home-category" id="home-shows">
          <div class="home-category-header"><a href="showsandevents.php"><h3>Videos</h3></a></div>
          <!-- <div class="home-category-content">BEGIN home-category-content -->


<!-- ***************************************SIDE DIV BEGINS*********************************************** -->
            <div class="side-div">
                <div class="side-div-header">
                  <h4>Featured Videos</h4>
                </div>


              <div class="articles-menu"><!-- Begin "Articles" Left JQuery Menu  -->

                <ul class="idTabs"> 

                  <li> <!-- List Item Begin -->
                    <div class="side-div-content-box">
                      <div class="img-gallery-div">
                        <a href="#mikal-cronin">
                          <img class="small-img" src="images/videos/mikal.jpg"/>
                        </a>
                      </div>

                      <div class="side-div-content-box-text">
                        <a href="#mikal-cronin">
                          <h1 class="side-div-h1">Watch: Yours Truly &amp; Adult Swim Present: Mikal Cronin</h1>
                        </a>
                      </div>
                    </div><!-- End side-div-content-box -->
                  </li> <!-- List Item End -->


                  <li> <!-- List Item Begin -->
                    <div class="side-div-content-box">
                      <div class="img-gallery-div">
                        <a href="#tara-jane">
                          <img class="small-img" src="images/videos/tara.jpg"/>
                        </a>
                      </div>

                      <div class="side-div-content-box-text">
                        <a href="#tara-jane">
                          <h1 class="side-div-h1">Watch: Tara Jane O'Neil - Wordless In Woods </h1>
                        </a>
                      </div>
                    </div><!-- End side-div-content-box -->
                  </li> <!-- List Item End -->


                  <li> <!-- List Item Begin -->
                    <div class="side-div-content-box">
                      <div class="img-gallery-div">
                        <a href="#kate-tempest">
                          <img class="small-img" src="images/videos/kate.jpg"/>
                        </a>
                      </div>

                      <div class="side-div-content-box-text">
                        <a href="#kate-tempest">
                          <h1 class="side-div-h1">Watch: Kate Tempest - The Beigeness</h1>
                        </a>
                      </div>
                    </div><!-- End side-div-content-box -->
                  </li> <!-- List Item End -->


                  <li> <!-- List Item Begin -->
                    <div class="side-div-content-box">
                      <div class="img-gallery-div">
                        <a href="#squarepusher">
                          <img class="small-img" src="images/videos/square.jpg"/>
                        </a>
                      </div>

                      <div class="side-div-content-box-text">
                        <a href="#squarepusher">
                          <h1 class="side-div-h1">Watch: Squarepusher x Z-Machines - Making of "Music For Robots"</h1>
                        </a>
                      </div>
                    </div><!-- End side-div-content-box -->
                  </li> <!-- List Item End -->


                  <li> <!-- List Item Begin -->
                    <div class="side-div-content-box">
                      <div class="img-gallery-div">
                        <a href="#heterotic">
                          <img class="small-img" src="images/videos/heterotic.jpg"/>
                        </a>
                      </div>

                      <div class="side-div-content-box-text">
                        <a href="#heterotic">
                          <h1 class="side-div-h1">Watch: Heterotic - Lumber (ft. Vezelay)</h1>
                        </a>
                      </div>
                    </div><!-- End side-div-content-box -->
                  </li> <!-- List Item End -->


                  <li> <!-- List Item Begin -->
                    <div class="side-div-content-box">
                      <div class="img-gallery-div">
                        <a href="#soft-pink-truth">
                          <img class="small-img" src="images/videos/soft.jpg"/>
                        </a>
                      </div>

                      <div class="side-div-content-box-text">
                        <a href="#soft-pink-truth">
                          <h1 class="side-div-h1">Watch: The Soft Pink Truth - Why Do the Heathen Rage?</h1>
                        </a>
                      </div>
                    </div><!-- End side-div-content-box -->
                  </li> <!-- List Item End -->



                </ul> <!-- End idTabs UL -->
              </div><!-- End "Articles" Left JQuery Menu  -->
            </div><!-- End Side Div -->
        
<!-- ***************************************MAIN DIV BEGINS*********************************************** -->

            <div class="main-div"><!-- Begin Main Div -->    
              <div class="main-div-header">
                <!--<h4>Article</h4>-->
              </div>


              <div id="mikal-cronin">
                <article class="main-article">
                    <!--<iframe src="//player.vimeo.com/video/65015425" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/65015425">Yours Truly & Adult Swim Present: Mikal Cronin</a> from <a href="http://vimeo.com/yourstruly">Yours Truly</a> on <a href="https://vimeo.com">Vimeo</a>.</p>-->
                    <iframe src="//player.vimeo.com/video/65015425" width="700" height="393" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/65015425">Yours Truly & Adult Swim Present: Mikal Cronin</a> from <a href="http://vimeo.com/yourstruly">Yours Truly</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </article>
              </div>

              <div id="tara-jane">
                <article class="main-article">
                    <iframe src="//player.vimeo.com/video/93532043" width="700" height="393" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/93532043">Tara Jane O'Neil - Wordless In Woods (Stereogum Premiere)</a> from <a href="http://vimeo.com/stereogum">stereogum</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </article>
              </div>

              <div id="kate-tempest">
                <article class="main-article">
                    <iframe src="//player.vimeo.com/video/93358071" width="700" height="393" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/93358071">Kate Tempest - 'The Beigeness'</a> from <a href="http://vimeo.com/ninjatune">Ninja Tune</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </article>
              </div>

              <div id="squarepusher">
                <article class="main-article">
                    <iframe src="//player.vimeo.com/video/92124413" width="700" height="393" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/92124413">Squarepusher x Z-Machines - Making of 'Music For Robots'</a> from <a href="http://vimeo.com/warprecords">Warp Records</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </article>
              </div>

              <div id="heterotic">
                <article class="main-article">
                    <iframe src="//player.vimeo.com/video/90972267" width="700" height="525" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/90972267">Heterotic - Lumber (ft. Vezelay)</a> from <a href="http://vimeo.com/planetmu">Planet Mu</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </article>
              </div>

              <div id="soft-pink-truth">
                <article class="main-article">
                    <iframe src="//player.vimeo.com/video/93313290" width="700" height="525" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/93313290">The Soft Pink Truth - Why Do the Heathen Rage?</a> from <a href="http://vimeo.com/thrilljockey">Thrill Jockey Records</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </article>
              </div>

            </div><!-- End Main Div -->    
            

          <!-- </div>End home-category-content -->

        </article>
        <div class="clear"></div>

<!-- END VIDEOS CATEGORY -->



      </div>  <!-- END BODY DIV -->


<!-- Footer is included via PHP -->
 <?php
  include ("_footer.html")
  ?>
<!-- End Footer -->

    </div><!-- END Wrapper DIV -->

    <!-- Begin Javascript for the Carousel -->
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script type="text/javascript" src="slick/slick.min.js"></script>
    <!-- End Javascript for the Carousel -->    
  
  </body>

</html>