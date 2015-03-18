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


$articleId = $_GET['article_id'];
//$title = $_POST['title'];
//$body = $_POST['body'];
//$urlmainimg = $_POST['urlmainimg'];
//$authorname = $_POST['authorname'];


//run the query
$result = $mysqli->query("SELECT * FROM articlesnycindub WHERE id={$articleId} ORDER BY currentdate DESC");

$row = $result->fetch_assoc()

?>



<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Edit a Featured News article on NYCinDUB</title>
    <link rel="shortcut icon" href="images/icon.jpg" />
    <link rel="stylesheet" type="text/css" href="css/main.css" /> <!-- Main CSS file -->

  </head>

  <body>




    <h1>Edit a Featured News Article</h1>
    
    <form method="POST" action="_update_article.php">

      <input type="hidden" name="article_id" value="<?php echo $row['id']; ?>" />

      <label for="title"><strong>Article Title:</strong></label><br /> 
      <input class="input-width" type="text" id="title" name="title" value="<?php echo $row['title']; ?>" />

      <br /> 

      <label for="bodycopy"><strong>Article Main Body:</strong></label><br /> 
      <textarea class="textarea-width" type="text" id="bodycopy" name="bodycopy"><?php echo $row['bodycopy']; ?></textarea>

      <br />
<!--
      <label for="urlthumb">Thumbnail Image URL (100x100 jpg only):</label><br /> 
      <input type="text" id="urlthumb" name="urlthumb" />

      <br />
-->
      <label for="mainimage"><strong>Main Image URL (max width: 500px):</strong></label><br /> 
      <input class="input-width" type="text" id="mainimage" name="mainimage" value="<?php echo $row['mainimage']; ?>" />

      <br />

      <label for="author"><strong>Author Name:</strong></label><br /> 
      <input class="input-width" type="text" id="author" name="author" value="<?php echo $row['author']; ?>" />

      <br />


      <input type="submit" value="Post your edits" />

    </form>


      </div>  <!-- END BODY DIV -->


  
  </body>

</html>