<?php
  $page = "songs";
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
$result = $mysqli->query("SELECT * FROM songsnycindub WHERE 1 ORDER BY currentdate DESC");

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


<!-- BEGIN SONGS CATEGORY -->


        <article class="home-category" id="home-songs">
          <div class="home-category-header"><a href="songs.php"><h3>Featured Songs</h3></a></div>

          <div>
            <center><a href="_songs_post_song.php"><h1>To post a new song, click here.</h1></a></center>
            <center><a href="admin_interface.php"><h3>Go back to admin interface.</h3></a></center>
          </div>



<?php while ($row = $result->fetch_assoc()) : ?>

              <div class="page-div">

                <div class="side-div">
                    <div class="standard-div">
                      <h1 class="header"><?php echo $row['title']; ?></h1>
                      <h3><?php echo $row['bodycopy']; ?></h3>
                    </div>
                    <h4><strong>Author: <?php echo $row['author'] ?></strong></h4>
                    <p><strong>Date Posted: <?php echo $row['currentdate'] ?></strong></p>
                </div>

                <div class="main-div" id="soundcloud-div">
                    <?php echo $row['iframe']; ?>
                </div>
                <div class="clear"></div>
                      
                
                <div>
                  <div class="fb-share-button" data-href="http://nycindub.com/songs.php?song_id=<?php echo $row['id']; ?>" data-type="button_count"></div>
                </div>  


<!-- Songs Admin Interface Buttons begins -->
                <div class="article-div">
                  <!-- BEGIN EDIT BUTTON -->
                  <a href="songs_admin_edit_song.php?song_id=<?php echo $row['id']; ?>" title="Edit this song">
                    <img class="edit_icon" src="images/edit.png" />
                  </a>
                  <!-- END EDIT BUTTON -->
                  
                  <!-- BEGIN DELETE BUTTON -->
                  <a href="songs_admin_delete_song.php?song_id=<?php echo $row['id']; ?>" title="Delete this song">
                    <img class="delete_icon" src="images/delete.png" />
                  </a>
                  <!-- END DELETE BUTTON -->
                </div>
<!-- Songs Admin Interface Buttons ends -->




              </div> <!-- end page-div -->
              <div class="clear"></div>

<?php endwhile; ?>

        </article>

        <div class="clear"></div>  


<!-- END SONGS CATEGORY -->



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