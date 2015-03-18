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


$songId = $_GET['song_id'];
//$title = $_POST['title'];
//$body = $_POST['body'];
//$urlmainimg = $_POST['urlmainimg'];
//$authorname = $_POST['authorname'];


//run the query
$result = $mysqli->query("SELECT * FROM songsnycindub WHERE id={$songId} ORDER BY currentdate DESC");

$row = $result->fetch_assoc()

?>



<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Edit a Featured Song on NYCinDUB</title>
    <link rel="shortcut icon" href="images/icon.jpg" />
    <link rel="stylesheet" type="text/css" href="css/main.css" /> <!-- Main CSS file -->

  </head>

  <body>




    <h1>Edit a Featured Song</h1>
    
    <form method="POST" action="_update_song.php">

      <input type="hidden" name="song_id" value="<?php echo $row['id']; ?>" />

      <label for="title"><strong>Song Review Title:</strong></label><br /> 
      <input class="input-width" type="text" id="title" name="title" value="<?php echo $row['title']; ?>" />

      <br /> 

      <label for="bodycopy"><strong>Song Review Copy:</strong></label><br /> 
      <textarea class="textarea-width" type="text" id="bodycopy" name="bodycopy"><?php echo $row['bodycopy']; ?></textarea>

      <br />
<!--
      <label for="urlthumb">Thumbnail Image URL (100x100 jpg only):</label><br /> 
      <input type="text" id="urlthumb" name="urlthumb" />

      <br />
-->
      <label for="iframe"><strong>Song embed code:</strong></label><br /> 
      <textarea class="iframe-width" type="text" id="iframe" name="iframe" value=""><?php echo $row['iframe']; ?></textarea>
      <br />

      <label for="author"><strong>Author Name:</strong></label><br /> 
      <input class="input-width" type="text" id="author" name="author" value="<?php echo $row['author']; ?>" />

      <br />


      <input type="submit" value="Post your edits" />

    </form>


      </div>  <!-- END BODY DIV -->


  
  </body>

</html>