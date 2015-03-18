<?php

//make a connection to the database

$mysqli = new mysqli( 
  "mysql.nycindub.com", 
  "chagig", 
  "ChaGig1977", 
  "nycindubdatabase"
);

//run the query
$result = $mysqli->query("SELECT * FROM songsnycindub WHERE 1 ORDER BY currentdate DESC LIMIT 1");

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


<!-- ****************************************************************************************************************** -->
        <div class="carousel-large"> <!-- BEGIN CAROUSEL -->

          <script type="text/javascript">
            $(document).ready(function(){
                  $('.carousel-large').slick({
                    autoplay: true,
                    autoplaySpeed: 4000,
                    dots: true,
                    arrows: false
                  });
                });
          </script>

          <div><a href="photos.php" title="285 Kent"><img src="images/carousel/285kent1.jpg" /><div class="carousel-overlay"><p>Check out our exclusive photos from famed Williamsburg event space, 285 Kent.</p></div></a></div>
          <div><a href="features.php" title="East Village Radio"><img src="images/carousel/evr.jpg" /><div class="carousel-overlay"><p>Rest in peace, East Village Radio :(</p></div></a></div>
          <div><a href="reviews.php" title="Innergaze on Minimal Wave Records"><img src="images/carousel/innergazephoto.jpg" /><div class="carousel-overlay"><p>“Innergaze drag us slightly further back into the glorious cradle of dance music."</p></div></a></div>
          <div><a href="photos.php" title="285 Kent"><img src="images/carousel/285kent2.jpg" /><div class="carousel-overlay"><p>Check out our exclusive photos from famed Williamsburg event space, 285 Kent.</p></div></a></div>
          <div><a href="showsandevents.php#records" title="Williamsburg's Rough Trade"><img src="images/carousel/roughtrade.jpg" /><div class="carousel-overlay"><p>Say hello to Brooklyn's newest (and biggest) record shop: Rough Trade NYC</p></div></a></div>
          <div><a href="photos.php" title="285 Kent"><img src="images/carousel/285kent3.jpg" /><div class="carousel-overlay"><p>Check out our exclusive photos from famed Williamsburg event space, 285 Kent.</p></div></a></div>


        </div><!-- END CAROUSEL -->

        <div class="clear"></div>

<!-- ****************************************************************************************************************** -->        

<!-- BEGIN NEW Features CATEGORY-->
        <article class="home-category" id="home-features">
          <div class="home-category-header"><a href="features.php"><h3>Features</h3></a></div>
            
            <div class="side-div">
              <div class="home-category-content-image">
                <a href="features.php"><img src="images/features/veronica_vasicka.jpg" /></a>
              </div>
            </div>
            
            <div class="main-div">
              <div class="home-category-content-textbox">
                <h4><em>Cover Story: Veronica Vasicka</em></h4>
                <p>In 2007, after finding an out-of-print album by Z-Factor, a house-music pioneer, on eBay, she promptly tracked down the group’s frontman in Chicago, remastered the original vinyl pressing and reissued 1,000 copies — which she did while living in her mother’s apartment on the Upper East Side.</p>
                <p>"My mom helped me insert the band posters," Ms. Vasicka, 36, said the other day. She was sitting in her home studio in Greenpoint, Brooklyn, in a vintage wool sweater, Oak jeans and lavender cashmere socks, surrounded by analog synthesizers and boxes of '80s techno tapes.</p>
                <p>Since founding Minimal Wave, a seven-year-old label dedicated to re-releasing obscure electronic music from the 1970s and ’80s, Ms. Vasicka has become an unwitting ambassador for the current synth revival, typified by so-called chillwave acts like Ariel Pink and Neon Indian.</p>
                <a href="cover-story.php"><div class="button"><span class="button-text"><p class="button-text-p">Read More</p></span></div></a></p>
              </div>
            </div>

        </article>
        <div class="clear"></div>
<!-- END NEW Features CATEGORY -->

<!-- ****************************************************************************************************************** -->

<!-- BEGIN REVIEWS CATEGORY -->
        <article class="home-category" id="home-reviews">
          <div class="home-category-header">
            <a href="reviews.php">
              <h3>Reviews</h3>
            </a>
          </div>

          <div class="page-div">
          
          <div class="side-div">
            <div class="home-category-content-textbox">
              <h1>THIS WEEK'S FEATURED ALBUM REVIEWS</h1>
              <p>Armand Van Helden and A-Trak have spent a large part of this decade acting as big-box dance music's merry pranksters, following their clown-nosed muses to the most illogically comical endpoints. Minimal Wave's Cititrax sub-label introduces the no wave techno styles of Douglas Lee's An-i alias.</p>
            </div>
            <div class="clear"></div>

            <div class="carousel-small">

              <script type="text/javascript">
                $(document).ready(function(){
                      $('.autoplay').slick({
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        arrows: false,
                        pauseOnHover: true,
                      });
                    });
              </script>

              <div class="autoplay"><!-- Begin Images in Carousel -->
                <div><a href="reviews.php" title="Orchid Tapes"><img class="small-img" src="images/reviews/comp_orchid_tapes.jpg" /></a></div>
                <div><a href="reviews.php" title="David Lynch"><img class="small-img" src="images/reviews/david_lynch.jpg" /></a></div>
                <div><a href="reviews.php" title="Heterotic"><img class="small-img" src="images/reviews/heterotic.jpg" /></a></div>
                <div><a href="reviews.php" title="LCD Soundsystem"><img class="small-img" src="images/reviews/lcd.jpg" /></div>
                <div><a href="reviews.php" title="Nas"><img class="small-img" src="images/reviews/Nas-Illmatic.jpg" /></a></div>
                <div><a href="reviews.php" title="Ratking"><img class="small-img" src="images/reviews/Ratking.jpg" /></a></div>
                <div><a href="reviews.php" title="TEEN"><img class="small-img" src="images/reviews/TEEN.jpg" /></a></div>
                <div><a href="reviews.php" title="Floor"><img class="small-img" src="images/reviews/Floor.jpg" /></div>
                <div><a href="reviews.php" title="Doss"><img class="small-img" src="images/reviews/Doss.jpg" /></a></div>
                <div><a href="reviews.php" title="Thee Oh Sees"><img class="small-img" src="images/reviews/Thee_Oh_Sees.jpg" /></a></div>                
                <div><a href="reviews.php" title="Mica_Levi"><img class="small-img" src="images/reviews/Mica_Levi.jpg" /></a></div>
                <div><a href="reviews.php" title="Plague_Vendor"><img class="small-img" src="images/reviews/Plague_Vendor.jpg" /></a></div>
                <div><a href="reviews.php" title="Lockah"><img class="small-img" src="images/reviews/Lockah.jpg" /></a></div>
                <div><a href="reviews.php" title="SZA"><img class="small-img" src="images/reviews/SZA.jpg" /></a></div>
                <div><a href="reviews.php" title="J_Spaceman"><img class="small-img" src="images/reviews/J_Spaceman.jpg" /></a></div>
                <div><a href="reviews.php" title="Life_Without_Buildings"><img class="small-img" src="images/reviews/Life_Without_Buildings.jpg" /></a></div>
                <div><a href="reviews.php" title="Kool_AD"><img class="small-img" src="images/reviews/Kool_AD.jpg" /></a></div>
                <div><a href="reviews.php" title="Space_Project"><img class="small-img" src="images/reviews/Space_Project.jpg" /></a></div>
                <div><a href="reviews.php" title="Tourist"><img class="small-img" src="images/reviews/Tourist.jpg" /></a></div>
                <div><a href="reviews.php" title="Death"><img class="small-img" src="images/reviews/Death.jpg" /></a></div>
                <div><a href="reviews.php" title="Fear_of_Men"><img class="small-img" src="images/reviews/Fear_of_Men.jpg" /></a></div>
                <div><a href="reviews.php" title="Pharoahe_Monch"><img class="small-img" src="images/reviews/Pharoahe_Monch.jpg" /></a></div>
                <div><a href="reviews.php" title="Songs_Ohia"><img class="small-img" src="images/reviews/Songs_Ohia.jpg" /></a></div>
                <div><a href="reviews.php" title="Old_Wainds"><img class="small-img" src="images/reviews/Old_Wainds.jpg" /></a></div>
                <div><a href="reviews.php" title="Beach_Slang"><img class="small-img" src="images/reviews/Beach_Slang.jpg" /></a></div>
                <div><a href="reviews.php" title="A_Minor_Forest"><img class="small-img" src="images/reviews/A_Minor_Forest.jpg" /></a></div>
              </div><!-- End Images in Carousel -->

            </div> <!-- End carousel-small -->

          </div> <!-- End side-div -->


          <figure>
            <a href="reviews.php">
              <img class="review-img" src="images/reviews/duck.jpg" />
              <figcaption><h4>Duck Sauce</h4><p>Quack</p></figcaption>
            </a>
          </figure>

          <figure>
            <a href="reviews.php">
              <img class="review-img" src="images/reviews/kinoi.jpg" />
              <figcaption><h4>An-i</h4><p>Kino-i</p></figcaption>
            </a>
          </figure>

        </div>

        </article>

        <div class="clear"></div>
<!-- END REVIEWS CATEGORY -->

<!-- ****************************************************************************************************************** -->

<!-- BEGIN SONGS CATEGORY -->


        <article class="home-category" id="home-songs">
          <div class="home-category-header"><a href="songs.php"><h3>Songs</h3></a></div>


<?php while ($row = $result->fetch_assoc()) : ?>

              <div class="page-div">

                <div class="side-div">
                    <div class="standard-div">
                      <div class="home-category-content-textbox">
                        <h1>THIS WEEK'S FEATURED SONG REVIEWS</h1>
                        <p>From the spare isolation of Carter Tutti to the juke-inspired future bass of FaltyDL, NYCinDUB presents a variety of incredible new tracks this week.</p>
                      </div>
                      <a href="songs.php"><div class="button"><span class="button-text"><p class="button-text-p">More Songs</p></span></div></a>
                    </div>
                </div>

                <div class="main-div" id="soundcloud-div">
                    <div><h2>Latest review: <?php echo $row['title']; ?></h2></div>
                    <div class="clear"></div>
                    <?php echo $row['iframe']; ?>
                </div>
                <div class="clear"></div>
                      
              </div> <!-- end page-div -->
              <div class="clear"></div>

<?php endwhile; ?>
        
        </article>

        <div class="clear"></div>  


<!-- END SONGS CATEGORY -->

<!-- ****************************************************************************************************************** -->


<!-- BEGIN ARTISTS CATEGORY -->
        <article class="home-category" id="home-artists">
          
          <div class="home-category-header">
            <a href="artists.php"><h3>Artists</h3></a>
          </div>
          

            <div class="carousel-artists"> <!-- BEGIN CAROUSEL -->

                <script type="text/javascript">
                  $(document).ready(function(){
                        $('.carousel-artists').slick({
                          autoplay: true,
                          autoplaySpeed: 4000,
                          dots: true,
                          arrows: false
                        });
                      });
                </script>


                <div class="artist"><!-- Begin Artist Div -->
                  
                  <div class="side-div">
                    <div class="artist-description"><!-- Begin Artist Description Div -->
                      <h4>Featured Artist: Ike Yard</h4>
                      <p>Ike Yard is an electronic band founded in 1979 in New York. Members are Stuart Argabright, Kenny Compton (bass/vocals), Fred Szymanski (synthesizers/ programming) and Michael Diekmann (guitar). Together they recorded for labels like Disques du Crépuscule and Factory. Ike Yard dissolved at the beginning of 1983. Although Ike Yard dissolved by the beginning of 1983, the band reformed as a three piece unit with original members Stuart Argabright, Kenneth Compton and Michael Diekmann in 2007, only a year after Acute records released a well received career anthology titled Ike Yard: 1980-82 Collected. After a hiatus of roughly 28 years, Danish/Swedish imprint Phisteria released Öst, a limited edition 10", which was followed by their latest full length Nord, Phisteria licensing the album to Desire Records for worldwide distribution.
                      <a href="artists.php"><div class="button"><span class="button-text"><p class="button-text-p">Read More</p></span></div></a>
                      </p>
                    </div><!-- End Artist Description Div -->  
                  </div> <!-- Side Main Div -->
                                   
                    <div class="main-div">
                      <a href="artists.php">
                        <img class="artist-image" src="images/artists/ikeyard.jpg" />
                      </a>
                    </div><!-- End Main Div -->
                  
                </div><!-- End Artist Div -->


                <div class="artist"><!-- Begin Artist Div -->                  
                  <div class="side-div">
                    <div class="artist-description"><!-- Begin Artist Description Div -->
                      <h4>Featured Artist: Cibo Matto</h4>
                      <p>Cibo Matto (meaning crazy food in Italian is a New York City-based band formed by two Japanese women, Yuka Honda and Miho Hatori, in 1994. Initially, the lyrics in their songs were primarily concerned with food, before expanding into broader subject matter following the addition of Sean Lennon, Timo Ellis, and Duma Love to the band, showcased on their second studio album. While the two founding members of the group are Japanese expatriates, the group is not especially popular in Japan; the group did not gain nearly as large a following in Japan as it did in the United States. According to Billboard, their first album Viva! La Woman sold only 20,000 copies in Japan but over 74,000 copies in the U.S. Japanese listeners did not understand the appeal of the group.
                      <a href="artists.php"><div class="button"><span class="button-text"><p class="button-text-p">Read More</p></span></div></a>
                      </p>
                    </div><!-- End Artist Description Div -->  
                  </div> <!-- Side Main Div -->
                                   
                    <div class="main-div">
                      <a href="artists.php">
                        <img class="artist-image" src="images/artists/cibomatto.jpg" />
                      </a>
                    </div><!-- End Main Div -->                  
                </div><!-- End Artist Div -->

                <div class="artist"><!-- Begin Artist Div -->                  
                  <div class="side-div">
                    <div class="artist-description"><!-- Begin Artist Description Div -->
                      <h4>Featured Artist: Vampire Weekend</h4>
                      <p>Vampire Weekend is an American rock band from New York City, formed in 2006. They are currently signed to XL Recordings. The band consists of lead vocalist and guitarist Ezra Koenig, guitarist/keyboardist and backing vocalist Rostam Batmanglij, drummer and percussionist Chris Tomson and bassist and backing vocalist Chris Baio. The band released its first album Vampire Weekend in 2008, which included the singles "Mansard Roof", "A-Punk", "Oxford Comma", "Cape Cod Kwassa Kwassa" and "The Kids Don't Stand a Chance". The band's second album, Contra, was released in 2010. Their third studio album, Modern Vampires of the City, was released on May 14, 2013. It won them a Grammy Award for Best Alternative Music Album in 2014.
                      <a href="artists.php"><div class="button"><span class="button-text"><p class="button-text-p">Read More</p></span></div></a>
                      </p>
                    </div><!-- End Artist Description Div -->  
                  </div> <!-- Side Main Div -->
                                   
                    <div class="main-div">
                      <a href="artists.php">
                        <img class="artist-image" src="images/artists/vampireweekend.jpg" />
                      </a>
                    </div><!-- End Main Div -->                  
                </div><!-- End Artist Div -->

            </div><!-- END ARTISTS CAROUSEL -->

        </article>

        <div class="clear"></div>  

<!-- END ARTISTS CATEGORY -->

<!-- ****************************************************************************************************************** -->

<!-- BEGIN SHOWS CATEGORY -->
        <article class="home-category" id="home-shows">
          <div class="home-category-header"><a href="showsandevents.php"><h3>Shows &amp; Events</h3></a></div>
          <!-- <div class="home-category-content">BEGIN home-category-content -->
            
            <div class="shows-menu"><!-- Begin "Shows and Events" Left JQuery Menu  -->
              <ul class="idTabs"> 
                <li><a href="#bass"><h1>Bass &amp; Dubstep</h1></a></li>
                <li><a href="#dance"><h1>House &amp; Dance</h1></a></li>
                <li><a href="#experimental"><h1>Experimental</h1></a></li>  
                <li><a href="#indie"><h1>Indie Rock</h1></a></li>
                <li><a href="#reggae"><h1>Reggae &amp; Dub</h1></a></li> 
                <li><a href="#hiphop"><h1>Hip-Hop</h1></a></li> 
                <li><a href="#jazz"><h1>Jazz</h1></a></li>
                <li><a href="#records"><h1>Record Stores</h1></a></li>
              </ul>
            </div><!-- End "Shows and Events" Left JQuery Menu  -->

            <div class="shows-content"> <!-- Begin "Shows and Events" Main Content DIV -->

              <div class="shows-content-box" id="bass">
                <div class="shows-img-container">
                  <a href="showsandevents.php#bass">
                    <img class="shows-image" src="images/shows/bass.jpg" />
                    <div class="shows-image-bottom"><h4>Bass &amp; Dubstep</h4></div>
                  </a>
                </div>
                <div class="shows-copy-container">
                  <p>Bass &amp; Dubstep music show information in New York City and beyond. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  <a href="showsandevents.php#bass"><div class="button"><span class="button-text"><p class="button-text-p">Read More</p></span></div></a>
                </p>

                </div>
              </div>

              <div class="shows-content-box" id="dance">
                <div class="shows-img-container">
                  <a href="showsandevents.php#dance">
                    <img class="shows-image" src="images/shows/dance.jpg" />
                    <div class="shows-image-bottom"><h4>House &amp; Dance</h4></div>
                  </a>
                </div>
                <div class="shows-copy-container">
                  <p>Dance music show information in New York City and beyond. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  <a href="showsandevents.php#dance"><div class="button"><span class="button-text"><p class="button-text-p">Read More</p></span></div></a>
                </p>
                </div>
              </div>

              <div class="shows-content-box" id="experimental">
                <div class="shows-img-container">
                  <a href="showsandevents.php#experimental">
                    <img class="shows-image" src="images/shows/experimental.jpg" />
                    <div class="shows-image-bottom"><h4>Experimental</h4></div>
                  </a>
                </div>
                <div class="shows-copy-container">
                  <p>Experimental music show information in New York City and beyond. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  <a href="showsandevents.php#experimental"><div class="button"><span class="button-text"><p class="button-text-p">Read More</p></span></div></a>
                </p>
                </div>
              </div>

              <div class="shows-content-box" id="indie">
                <div class="shows-img-container">
                  <a href="showsandevents.php#indie">
                    <img class="shows-image" src="images/shows/indie.jpg" />
                    <div class="shows-image-bottom"><h4>Indie Rock</h4></div>
                  </a>
                </div>
                <div class="shows-copy-container">
                  <p>Indie rock music show information in New York City and beyond. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  <a href="showsandevents.php#indie"><div class="button"><span class="button-text"><p class="button-text-p">Read More</p></span></div></a>
                </p>
                </div>
              </div>

              <div class="shows-content-box" id="reggae">
                <div class="shows-img-container">
                  <a href="showsandevents.php#reggae">
                    <img class="shows-image" src="images/shows/reggae.jpg" />
                    <div class="shows-image-bottom"><h4>Reggae &amp; Dub</h4></div>
                  </a>
                </div>
                <div class="shows-copy-container">
                  <p>Reggae and Dub music show information in New York City and beyond. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  <a href="showsandevents.php#reggae"><div class="button"><span class="button-text"><p class="button-text-p">Read More</p></span></div></a>
                </p>
                </div>
              </div>

              <div class="shows-content-box" id="hiphop">
                <div class="shows-img-container">
                  <a href="showsandevents.php#hiphop">
                    <img class="shows-image" src="images/shows/hiphop.jpg" />
                    <div class="shows-image-bottom"><h4>Hip-Hop</h4></div>
                  </a>
                </div>
                <div class="shows-copy-container">
                  <p>Hip-Hop music show information in New York City and beyond. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  <a href="showsandevents.php#hiphop"><div class="button"><span class="button-text"><p class="button-text-p">Read More</p></span></div></a>
                </p>
                </div>
              </div>

              <div class="shows-content-box" id="jazz">
                <div class="shows-img-container">
                  <a href="showsandevents.php#jazz">
                    <img class="shows-image" src="images/shows/jazz.jpg" />
                    <div class="shows-image-bottom"><h4>Jazz</h4></div>
                  </a>
                </div>
                <div class="shows-copy-container">
                  <p>Jazz music show information in New York City and beyond. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  <a href="showsandevents.php#jazz"><div class="button"><span class="button-text"><p class="button-text-p">Read More</p></span></div></a>
                </p>
                </div>
              </div>

              <div class="shows-content-box" id="records">
                <div class="shows-img-container">
                  <a href="showsandevents.php#records">
                    <img class="shows-image" src="images/shows/records.jpg" />
                    <div class="shows-image-bottom"><h4>Record Stores</h4></div>
                  </a>
                </div>
                <div class="shows-copy-container">
                  <p>Record store event information in New York City and beyond. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  <a href="showsandevents.php#records"><div class="button"><span class="button-text"><p class="button-text-p">Read More</p></span></div></a>
                </p>
                </div>
              </div>

            </div><!-- End "Shows and Events" Main Content DIV -->
            

          <!-- </div>End home-category-content -->
        </article>
        <div class="clear"></div>
<!-- END SHOWS CATEGORY -->


<!-- ****************************************************************************************************************** -->

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