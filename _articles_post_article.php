<!DOCTYPE html>

<html>
  <head>
    <title>Post a Featured News article to NYCinDUB</title>
    <link type="text/css" rel="stylesheet" href="css/main.css" />
  </head>

  <body>


        <article class="home-category">
          <div class="home-category-header">
            <a href="articles.php"><h3>Post a Featured News Article</h3></a>
          </div>

          <div class="submission-form-container-div">
            <h1>Please enter the requested information below.</h1>

            <form method="POST" action="_articles_create_article.php">

              <label for="title"><strong>Article Title:</strong></label><br /> 
              <input class="input-width" type="text" id="title" name="title" />

              <br /> 
              <br />

              <label for="bodycopy"><strong>Article Main Body:</strong></label>
              <div class="page-copy-posting-new-content"><h3>NOTE: HTML <code>markup </code><em>is</em> permitted (and required if you have paragraph breaks, links, etc.), but you must remove special characters before submitting article. If you are copying and pasting from, say, a Word document, then paste it first into a plain text file, then copy and paste it from there into this form.</h3></div>
              <br />
              <textarea class="textarea-width" type="text" id="bodycopy" name="bodycopy"></textarea>

              <br />
              <br />

              <label for="mainimage"><strong>Main Image URL (max width: 500px):</strong></label><br /> 
              <input class="input-width" type="text" id="mainimage" name="mainimage" />

        <!--       
              <p>or upload your image here:</p>
              <form action="process_upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file" />
                <br />
                <input type="submit" name="Go!" />
              </form>
        -->
              <br />
              <br />

              <label for="author"><strong>Author Name:</strong></label><br /> 
              <input class="input-width" type="text" id="author" name="author" />

              <br />

              <input type="submit" value="Post your article" />

            </form>
          </div>

        </article>
        <div class="clear"></div>







  </body>
</html>