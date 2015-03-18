<?php
  $page = "articles";
?>



<?php

//make a connection to the database

$mysqli = new mysqli( 
  "mysql.nycindub.com", 
  "chagig", 
  "ChaGig1977", 
  "nycindubdatabase"
);

//run the query
$result = $mysqli->query("SELECT * FROM articlesnycindub WHERE 1 ORDER BY currentdate DESC");

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



<!-- BEGIN ARTICLES CATEGORY -->
        <article class="home-category" id="home-shows">
          <div class="home-category-header"><a href="articles.php"><h3>Top Articles</h3></a></div>
          <!-- <div class="home-category-content">BEGIN home-category-content -->


<!-- ***************************************SIDE DIV BEGINS*********************************************** -->
            <div class="side-div">
                <div class="side-div-header">
                  <h4>Our current top stories</h4>
                </div>


              <div class="articles-menu"><!-- Begin "Articles" Left JQuery Menu  -->

                <ul class="idTabs"> 

                  <li> <!-- List Item Begin -->
                    <div class="side-div-content-box">
                      <div class="img-gallery-div">
                        <a href="#baths-article">
                          <img class="small-img" src="images/features/bathsalts.jpg"/>
                        </a>
                      </div>

                      <div class="side-div-content-box-text">
                        <a href="#baths-article">
                          <h1 class="side-div-h1">Baths Announces Ocean Death EP, Shares Title Track</h1>
                        </a>
                      </div>
                    </div><!-- End side-div-content-box -->
                  </li> <!-- List Item End -->


                  <li> <!-- List Item Begin -->
                    <div class="side-div-content-box">
                      <div class="img-gallery-div">
                        <a href="#portishead-article">
                          <img class="small-img" src="images/features/beth.jpg"/>
                        </a>
                      </div>

                      <div class="side-div-content-box-text">
                        <a href="#portishead-article">
                          <h1 class="side-div-h1">Portishead's Beth Gibbons Covers Black Sabbath</h1>
                        </a>
                      </div>
                    </div><!-- End side-div-content-box -->
                  </li> <!-- List Item End -->


                  <li> <!-- List Item Begin -->
                    <div class="side-div-content-box">
                      <div class="img-gallery-div">
                        <a href="#horrors-article">
                          <img class="small-img" src="images/features/horrors.jpg"/>
                        </a>
                      </div>

                      <div class="side-div-content-box-text">
                        <a href="#horrors-article">
                          <h1 class="side-div-h1">The Horrors Cover Frankie Knuckles' "Your Love"</h1>
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

              <div id="baths-article">
                <article class="main-article">
                    <div class="article-img-div"><img class="article-img" src="images/articles/baths.jpg" /></div>
                    <p>Electronic artist Will Wiesenfeld, aka Baths, is following up his excellent 2013 LP Obsidian with a new EP. It's called Ocean Death, and it's out May 6 via Anticon. Stream the title track above.
                    In a press release, Ocean Death is referred to as a "companion piece" to Obsidian, "the Dia De Los Muertos to Obsidian’s Halloween." The five-track EP is 20 minutes long.
                    Baths is also on tour now. Read our Update interview with Baths from last year here.</br>
                    Will Wiesenfeld is taking Baths on the road for another tour in support of his great 2013 album Obsidian. In addition to some dates in Australia and New Zealand, he'll head across North America alongside Young Fathers. Check out the dates below.</br>
                    Baths:</br>
                    02-07 Los Angeles, CA - Natural History Museum</br>
                    02-15 Tlaltizapan, Mexico - Parque Natural Las Estacas</br>
                    03-14 Wellington, New Zealand - Bodega</br>
                    03-15 Auckland, New Zealand - The Kings Arms</br>
                    03-16 Adelaide, Australia - Rocket Bar</br>
                    03-20 Brisbane, Australia - Alhambra Lounge</br>
                    03-21 Sydney, Australia - Oxford Art Factory</br>
                    03-22 Melbourne, Australia - Corner Hotel</br>
                    </p>
                </article>
              </div>

              <div id="portishead-article">
                <article class="main-article">
                    <div class="article-img-div"><img class="article-img" src="images/articles/portishead.jpg" /></div>
                    <p>Portishead singer Beth Gibbons has contributed vocals to UK metal band Gonga's cover of Black Sabbath's "Black Sabbath". Fittingly, their version is called "Black Sabbeth". The video matches the song to visuals from—go figure—Black Sabbath, the 1963 Mario Bava-directed horror movie. Watch it below, via Stereogum.</br>
                    It's been 10 years since the last Portishead record, 1998's live recording of a show at the New York Roseland Ballroom. In that time Beth Gibbons, Geoff Barrow, and Adrian Utley have variously and individually collapsed from exhaustion, founded record labels, made solo records, started families, bought a lot of old recording equipment, and gradually, painfully slowly, thought their way round to making a third record. Now they've reemerged and the world's press have descended on them: questioning their every motivation, demanding they account for their long absence and explain their strange new sound worlds. All things considered, they seem to be taking it remarkably well. Maybe it's because Third is a triumph, genuinely invigorated with reinvention and fresh purpose, but Geoff Barrow and Adrian Utley are on rare form, talking with wonderful ebullience and enthusiasm, finishing each other's sentences, freewheeling through the dilemmas of Lara Croft, the life-changing impact of Public Enemy, the coolness of Michael Caine, and the mystery of the sonic unconscious.</br>
                    </p>
                    <div><iframe width="420" height="315" src="//www.youtube.com/embed/n-mc7D6hs5U" frameborder="0" allowfullscreen></iframe></div>
                </article>
              </div>

              <div id="horrors-article">
                <article class="main-article">
                    <div class="article-img-div"><img class="article-img" src="images/articles/horrors.jpg" /></div>
                    <p>Last night, The Horrors stopped by BBC Radio 1's studio at Maida Vale to play a couple songs from their forthcoming album, Luminous ("So Now You Know" and "In and Out of Sight"). They also covered "Your Love" by the late Frankie Knuckles and Jamie Principle. Listen to it below. ("Your Love" starts at the eighteen minute mark.)
                    Update: A previous version of this story indicated that "Your Love" was originally by Frankie Knuckles. It was acutally by Frankie Knuckles and Jamie Principle.</br>
                    The Horrors have a new album on the way, their first since 2011's Skying. It's called Luminous and out on May 5 via XL. That's the album cover up there. First song "I See You" will be played on Zane Lowe's show on Radio 1 in the UK and KCRW's "Morning Becomes Eclectic" in the U.S. today.</br>
                    </p>
                </article>
              </div>

            </div><!-- End Main Div -->    
            

          <!-- </div>End home-category-content -->

        </article>
        <div class="clear"></div>

<!-- END ARTICLES CATEGORY -->



<!-- ***************************************BEGIN Featured News MYSQL CATEGORY*********************************************** -->




        <article class="home-category">
          
          <div class="home-category-header">
            <a href="articles.php"><h3>Featured News</h3></a>
          </div>

            <div class="side-div">
                <div class="side-div-header">
                  <h4>Visit NYCinDUB's Sponsors</h4>
                </div>          
            </div><!-- End Side Div -->


            <div class="main-div"><!-- Begin Main Div -->    
              <div class="main-div-header">
                <h4>The Latest</h4>
              </div>
              <div class="clear"></div>




<?php while ($row = $result->fetch_assoc()) : ?>

                <div class="page-div">
                      <div class="standard-div">
                        <h1 class="h1-title"><?php echo $row['title']; ?></h1>
                      </div>
                      <div class="clear"></div>

                      <div class="standard-image-div">
                        <img class="img-mainimage" src="<?php echo $row['mainimage']; ?>"/>
                      </div>
                      
                      <p class="bodycopy-p"><?php echo $row['bodycopy']; ?></p>
                      
                      <h3><strong>Author: <?php echo $row['author'] ?></strong></h3>
                      <p><strong>Date Posted: <?php echo $row['currentdate'] ?></strong></p>
                      <div>
                        <div class="fb-share-button" data-href="http://nycindub.com/articles.php?article_id=<?php echo $row['id']; ?>" data-type="button_count"></div>
                      </div>  

                </div> <!-- end page-div -->
                <div class="clear"></div>

<?php endwhile; ?>


            </div><!-- End Main Div -->


        </article>
        <div class="clear"></div>

<!-- ***************************************END Featured News MYSQL CATEGORY*********************************************** -->





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