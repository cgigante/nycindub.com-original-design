<?php
  $page = "reviews";
?>

<?php

//make a connection to the database

$mysqli = new mysqli( 
  "mysql.nycindub.com", 
  "chagig", 
  "ChaGig1977", 
  "nycindubdatabase"
);

//run query for REVIEWS 
$result1 = $mysqli->query("SELECT * FROM reviewsnycindub WHERE 1 ORDER BY currentdate DESC LIMIT 3");
$result2 = $mysqli->query("SELECT * FROM reviewsnycindub WHERE 1 ORDER BY currentdate DESC LIMIT 20");

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

<!-- BEGIN REVIEWS CATEGORY -->
        <article class="home-category" id="home-reviews">
          <div class="home-category-header">
            <a href="reviews.php">
              <h3>Reviews</h3>
            </a>
          </div>

          <!-- Begin Small Side Category -->          
          <div class="side-div">
            <div class="side-div-header">
              <h4>Featured Reviews</h4>
            </div>
            <div class="featured-reviews-div">
              <!--<h2>NYCinDub reviews Nasty Nas, a couple of goofy Ducks, and a raging techno banger.</h2>
              <p class="side-div-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor.</p>-->
            </div>

            <!-- These three Figures are the Main Reviews on the site in the small left column. -->   
<?php while ($row = $result1->fetch_assoc()) : ?>     
            <figure>
              <a href="reviews.php">
                <img class="review-img" src="<?php echo $row['albummainimage']; ?>" />
                <figcaption><h4><?php echo $row['albumartist']; ?></h4><p><?php echo $row['albumtitle']; ?></p></figcaption>
              </a>
            </figure>
<?php endwhile; ?>

          </div> <!-- End side-div -->
 
          <!-- Begin Large Category -->         
          <div class="main-div">
            <div class="main-div-header">
              <h4>Record Reviews</h4>
            </div>
<?php while ($row = $result2->fetch_assoc()) : ?>
            <div class="img-gallery-div"><a href="#" title="<?php echo $row['albumtitle']; ?>"><img class="medium-review-img" src="<?php echo $row['albummainimage']; ?>" /></a></div>
<?php endwhile; ?>
          </div><!-- End main-div -->
        </article>

        <div class="clear"></div>
<!-- END REVIEWS CATEGORY -->


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