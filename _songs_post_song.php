<!DOCTYPE html>

<html>
  <head>
    <title>Post a Song to NYCinDUB</title>
    <link type="text/css" rel="stylesheet" href="css/main.css" />
  </head>

  <body>


        <article class="home-category">
          <div class="home-category-header">
            <a href="articles.php"><h3>Post a Song</h3></a>
          </div>

          <div class="submission-form-container-div">
            <h1>Please enter the requested information below.</h1>

            <form method="POST" action="_songs_create_song.php">

              <label for="title"><strong>Song Review Title</strong> (we recommend using the artist and title i.e. Beatles - "Yesterday"):</label><br /> 
              <input class="input-width" type="text" id="title" name="title" />

              <br /> 
              <br />

              <label for="bodycopy"><strong>Song Review Copy:</strong></label>
              <br />
              <textarea class="textarea-width" type="text" id="bodycopy" name="bodycopy"></textarea>

              <br />
              <br />

              <label for="iframe"><strong>Song embed code</strong> (iframe preferred):</label><br /> 
              <textarea class="iframe-width" type="text" id="iframe" name="iframe" /></textarea>

              <br />
              <br />

              <label for="author"><strong>Author Name:</strong></label><br /> 
              <input class="input-width" type="text" id="author" name="author" />

              <br />

              <input type="submit" value="Post your song" />

            </form>
          </div>

        </article>
        <div class="clear"></div>







  </body>
</html>