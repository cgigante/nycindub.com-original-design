<!DOCTYPE html>

<html>
  <head>
    <title>Post a Featured News article to NYCinDUB</title>
    <link type="text/css" rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <h1>Post a Featured News Article</h1>
    <p>Please enter the requested information below.</p>


    <form method="POST" action="_articles_create_article.php">

      <label for="title"><strong>Article Title:</strong></label><br /> 
      <input class="input-width" type="text" id="title" name="title" />

      <br /> 

      <label for="body"><strong>Article Main Body:</strong></label><br /> 
      <textarea class="textarea-width" type="text" id="body" name="body"></textarea>

      <br />
<!--
      <label for="urlthumb">Thumbnail Image URL (100x100 jpg only):</label><br /> 
      <input type="text" id="urlthumb" name="urlthumb" />

      <br />
-->
      <label for="urlmainimg"><strong>Main Image URL (max width: 500px):</strong></label><br /> 
      <input class="input-width" type="text" id="urlmainimg" name="urlmainimg" />

      <br />

      <input type="submit" value="Post your article" />

    </form>

  </body>
</html>