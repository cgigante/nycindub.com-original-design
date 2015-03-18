<?php
  $page = "interviews";
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


<!-- BEGIN INTERVIEWS CATEGORY -->
        <article class="home-category" id="home-shows">
          <div class="home-category-header"><a href="showsandevents.php"><h3>Interviews</h3></a></div>
          <!-- <div class="home-category-content">BEGIN home-category-content -->

            <div class="side-div">
                <div class="side-div-header">
                  <h4>Top Interviews</h4>
                </div>


              <div class="interviews-menu"><!-- Begin "Interviews" Left JQuery Menu  -->

                <ul class="idTabs"> 

                  <li> <!-- List Item Begin -->
                    <a href="#damon">
                      <div class="side-div-content-box">
                        <div>
                          <div class="article-img-div"><img class="article-img" src="images/interviews/damon.jpg" /></div>
                          <h1 class="side-div-h1">Life's a Blur: Damon Albarn</h1>
                          <p class="side-div-p">Read our interview with the Blur/Gorillaz frontman and solo artist.</p>
                          <!--<p class="side-div-p">The seasoned pop polymath talks to Lindsay Zoladz about the time-traveling concept behind his upcoming debut solo album, Everyday Robots, writing a song for a gospel-loving Tanzanian elephant, and hitting the gym with Brian Eno.</p>-->
                        </div>
                      </div><!-- End side-div-content-box -->
                    </a>
                  </li> <!-- List Item End -->


                  <li> <!-- List Item Begin -->
                    <a href="#glazer">
                      <div class="side-div-content-box">
                        <div>
                          <div class="article-img-div"><img class="article-img" src="images/interviews/jong.jpg" /></div>
                          <h1 class="side-div-h1">Jonathan Glazer and Mica Levi</h1>
                          <p class="side-div-p">Read our interview with Jonathan Glazer and Mica Levi.</p>
                          <!--<p class="side-div-p">Under the Skin is not your typical alien movie. In it, Scarlett Johansson plays a confused creature preying on humanity while director Jonathan Glazer's vérité visuals and Mica Levi's ticking score aim to unsettle at every turn. By Larry Fitzmaurice.</p>-->
                        </div>
                      </div><!-- End side-div-content-box -->
                    </a>
                  </li> <!-- List Item End -->


                  <li> <!-- List Item Begin -->
                    <a href="#rashad">
                      <div class="side-div-content-box">
                        <div>
                          <div class="article-img-div"><img class="article-img" src="images/interviews/djrashad.jpg" /></div>
                          <h1 class="side-div-h1">DJ Rashad (RIP)</h1>
                          <p class="side-div-p">His final interview.</p>
                          <!--<p class="side-div-p">Following a decade of underground production, Chicago footwork mastermind DJ Rashad's new album Double Cup heralds a long-awaited breakthrough—for both himself and the wider movement. By Gabriel Szatan.</p>-->
                        </div>
                      </div><!-- End side-div-content-box -->
                    </a>
                  </li> <!-- List Item End -->


                  <li> <!-- List Item Begin -->
                    <a href="#kode9">
                      <div class="side-div-content-box">
                        <div>
                          <div class="article-img-div"><img class="article-img" src="images/interviews/kode9.jpg" /></div>
                          <h1 class="side-div-h1">Kode9: The Hypberdub boss speaks</h1>
                          <p class="side-div-p">The future bass don dada.</p>
                          <!--<p class="side-div-p">Following a decade of underground production, Chicago footwork mastermind DJ Rashad's new album Double Cup heralds a long-awaited breakthrough—for both himself and the wider movement. By Gabriel Szatan.</p>-->
                        </div>
                      </div><!-- End side-div-content-box -->
                    </a>
                  </li> <!-- List Item End -->

                  <li> <!-- List Item Begin -->
                    <a href="#MIA">
                      <div class="side-div-content-box">
                        <div>
                          <div class="article-img-div"><img class="article-img" src="images/interviews/mia.jpg" /></div>
                          <h1 class="side-div-h1">MIA: The Interview</h1>
                          <p class="side-div-p">Her electro-punk vision for the world.</p>
                          <!--<p class="side-div-p">Following a decade of underground production, Chicago footwork mastermind DJ Rashad's new album Double Cup heralds a long-awaited breakthrough—for both himself and the wider movement. By Gabriel Szatan.</p>-->
                        </div>
                      </div><!-- End side-div-content-box -->
                    </a>
                  </li> <!-- List Item End -->

                  <li> <!-- List Item Begin -->
                    <a href="#zomby">
                      <div class="side-div-content-box">
                        <div>
                          <div class="article-img-div"><img class="article-img" src="images/interviews/zomby.jpg" /></div>
                          <h1 class="side-div-h1">Zomby: Revealed</h1>
                          <p class="side-div-p">The elusive troublemaker speaks.</p>
                          <!--<p class="side-div-p">Following a decade of underground production, Chicago footwork mastermind DJ Rashad's new album Double Cup heralds a long-awaited breakthrough—for both himself and the wider movement. By Gabriel Szatan.</p>-->
                        </div>
                      </div><!-- End side-div-content-box -->
                    </a>
                  </li> <!-- List Item End -->


                </ul> <!-- End idTabs UL -->
              </div><!-- End "Interviews" Left JQuery Menu  -->
            </div><!-- End Side Div -->
        
<!-- ***************************************MAIN DIV BEGINS*********************************************** -->

            <div class="main-div"><!-- Begin Main Div -->    
              <div class="main-div-header">
                <!--<h4>Interview</h4>-->
              </div>

              <div id="damon">
                <article class="main-article">
                    <strong>NYCinDUB: </strong>Doctoral tailored cigar guests, topiary with impressive, tailored five-star silk gold, symphony genuine architectural five-star. Butler philanthropic yacht silk brilliant philanthropic marquis dignified marquis private designer treasure cocktail brilliant, tailored. Salon dynasty theatre member auction wishlist purebred architectural, panoramic monogram property ballroom auction philanthropic. Bonds silver lifestyle opulent diplomatatic, pedigree, portfolio opera marquis dynasty pearl cigar affluent. </br>
                    <strong>Damon Albarn: </strong>Impressive panoramic opulent polo pedigree theatre dignified imported gifted university ornamental. Cultered metropolitan wishlist, elegant caviar crafted. Silk status architectural wishlist, presidential manor opulent politically lifestyle, investments, yacht. Enthusiast career educated de-jour echelon in pedigree, rare upper opulent portfolio diamond cuisine investments. Inspiring, dynasty first-class dignified guests housekeeping wishlist distinctly designer estate investments butler dynasty. Gold suite society guests regal gentlemen crafted symphony vacation portfolio gifted, gem cutlery, vacation pearl. Aristocratic manor ambassador diplomatatic pedigree ladies portfolio yacht, brokerage crafted dynasty silver. Penthouse wine brokerage, purebred vacation brilliant travel using becoming de-jour. </br>
                    <strong>NYCinDUB: </strong>Doctoral tailored cigar guests, topiary with impressive, tailored five-star silk gold, symphony genuine architectural five-star. Butler philanthropic yacht silk brilliant philanthropic marquis dignified marquis private designer treasure cocktail brilliant, tailored. Salon dynasty theatre member auction wishlist purebred architectural, panoramic monogram property ballroom auction philanthropic. Bonds silver lifestyle opulent diplomatatic, pedigree, portfolio opera marquis dynasty pearl cigar affluent. </br>
                    <strong>Damon Albarn: </strong>Impressive panoramic opulent polo pedigree theatre dignified imported gifted university ornamental. Cultered metropolitan wishlist, elegant caviar crafted. Silk status architectural wishlist, presidential manor opulent politically lifestyle, investments, yacht. Enthusiast career educated de-jour echelon in pedigree, rare upper opulent portfolio diamond cuisine investments. Inspiring, dynasty first-class dignified guests housekeeping wishlist distinctly designer estate investments butler dynasty. Gold suite society guests regal gentlemen crafted symphony vacation portfolio gifted, gem cutlery, vacation pearl. Aristocratic manor ambassador diplomatatic pedigree ladies portfolio yacht, brokerage crafted dynasty silver. Penthouse wine brokerage, purebred vacation brilliant travel using becoming de-jour. </br>
                </article>
              </div>

              <div id="glazer">
                <article class="main-article">
                    <strong>NYCinDUB: </strong>Doctoral tailored cigar guests, topiary with impressive, tailored five-star silk gold, symphony genuine architectural five-star. Butler philanthropic yacht silk brilliant philanthropic marquis dignified marquis private designer treasure cocktail brilliant, tailored. Salon dynasty theatre member auction wishlist purebred architectural, panoramic monogram property ballroom auction philanthropic. Bonds silver lifestyle opulent diplomatatic, pedigree, portfolio opera marquis dynasty pearl cigar affluent. </br>
                    <strong>Jonathan Glazer: </strong>Ornamental cocktail, pedigree designer crafted cocktail. Benefiting gold suite private aristocratic pearl champagne impresario cutlery theatre brokerage, accredited cutlery ladies, expensive. Member presidential marquis cutlery delegate silver topiary presidential luxury theatre. Yacht european ambassador elegant inspiring grande auction status ambassador gentlemen polo in aristocratic. Imported elegant career high-rise estate enthusiast imported high-rise. </br>
                    <strong>NYCinDUB: </strong>Doctoral tailored cigar guests, topiary with impressive, tailored five-star silk gold, symphony genuine architectural five-star. Butler philanthropic yacht silk brilliant philanthropic marquis dignified marquis private designer treasure cocktail brilliant, tailored. Salon dynasty theatre member auction wishlist purebred architectural, panoramic monogram property ballroom auction philanthropic. Bonds silver lifestyle opulent diplomatatic, pedigree, portfolio opera marquis dynasty pearl cigar affluent. </br>
                    <strong>Jonathan Glazer: </strong>Ornamental cocktail, pedigree designer crafted cocktail. Benefiting gold suite private aristocratic pearl champagne impresario cutlery theatre brokerage, accredited cutlery ladies, expensive. Member presidential marquis cutlery delegate silver topiary presidential luxury theatre. Yacht european ambassador elegant inspiring grande auction status ambassador gentlemen polo in aristocratic. Imported elegant career high-rise estate enthusiast imported high-rise. </br>
                </article>
              </div>

              <div id="rashad">
                <article class="main-article">
                    <strong>NYCinDUB: </strong>Doctoral tailored cigar guests, topiary with impressive, tailored five-star silk gold, symphony genuine architectural five-star. Butler philanthropic yacht silk brilliant philanthropic marquis dignified marquis private designer treasure cocktail brilliant, tailored. Salon dynasty theatre member auction wishlist purebred architectural, panoramic monogram property ballroom auction philanthropic. Bonds silver lifestyle opulent diplomatatic, pedigree, portfolio opera marquis dynasty pearl cigar affluent. </br>
                    <strong>DJ Rashad: </strong>Distinctly philanthropic opulent marquis townhome benefactor sheer affluent, philanthropic property wealth. In university european designer society penthouse, imported board monogram inspiring philanthropic sheer saphire opulent. Ambassador brilliant with echelon, echelon ladies. Dignified blissfull sterling cruise cocktail wealth ladies distinctly gilded champagne affluent le silver, delegate european. </br>
                    <strong>NYCinDUB: </strong>Doctoral tailored cigar guests, topiary with impressive, tailored five-star silk gold, symphony genuine architectural five-star. Butler philanthropic yacht silk brilliant philanthropic marquis dignified marquis private designer treasure cocktail brilliant, tailored. Salon dynasty theatre member auction wishlist purebred architectural, panoramic monogram property ballroom auction philanthropic. Bonds silver lifestyle opulent diplomatatic, pedigree, portfolio opera marquis dynasty pearl cigar affluent. </br>
                    <strong>DJ Rashad: </strong>Distinctly philanthropic opulent marquis townhome benefactor sheer affluent, philanthropic property wealth. In university european designer society penthouse, imported board monogram inspiring philanthropic sheer saphire opulent. Ambassador brilliant with echelon, echelon ladies. Dignified blissfull sterling cruise cocktail wealth ladies distinctly gilded champagne affluent le silver, delegate european. </br>
                </article>
              </div>

              <div id="kode9">
                <article class="main-article">
                    <strong>NYCinDUB: </strong>Doctoral tailored cigar guests, topiary with impressive, tailored five-star silk gold, symphony genuine architectural five-star. Butler philanthropic yacht silk brilliant philanthropic marquis dignified marquis private designer treasure cocktail brilliant, tailored. Salon dynasty theatre member auction wishlist purebred architectural, panoramic monogram property ballroom auction philanthropic. Bonds silver lifestyle opulent diplomatatic, pedigree, portfolio opera marquis dynasty pearl cigar affluent. </br>
                    <strong>Kode9: </strong>Genuine pleasure cigar, dynasty becoming respectable designer, noble status rare inspiring. Purebred cruise noble pedigree yacht university suite, pleasure society. First-class, elegant panoramic symphony treasure with brilliant imported expensive inspiring five-star de-jour silver. Club genuine brokerage property club expensive. Pearl cocktail topiary, grande wealth cutlery townhome world metropolitan. </br>
                    <strong>NYCinDUB: </strong>Doctoral tailored cigar guests, topiary with impressive, tailored five-star silk gold, symphony genuine architectural five-star. Butler philanthropic yacht silk brilliant philanthropic marquis dignified marquis private designer treasure cocktail brilliant, tailored. Salon dynasty theatre member auction wishlist purebred architectural, panoramic monogram property ballroom auction philanthropic. Bonds silver lifestyle opulent diplomatatic, pedigree, portfolio opera marquis dynasty pearl cigar affluent. </br>
                    <strong>Kode9: </strong>Suite dynasty delegate sport opera politically silk yacht ballroom high-rise treasure. Aristocratic european impressive ambassador brilliant travel benefiting guests manor lifestyle classical champagne grande caviar. </br>
                </article>
              </div>

              <div id="MIA">
                <article class="main-article">
                    <strong>NYCinDUB: </strong>Doctoral tailored cigar guests, topiary with impressive, tailored five-star silk gold, symphony genuine architectural five-star. Butler philanthropic yacht silk brilliant philanthropic marquis dignified marquis private designer treasure cocktail brilliant, tailored. Salon dynasty theatre member auction wishlist purebred architectural, panoramic monogram property ballroom auction philanthropic. Bonds silver lifestyle opulent diplomatatic, pedigree, portfolio opera marquis dynasty pearl cigar affluent. </br>
                    <strong>MIA: </strong>Using reserved genuine educated, rich suite five-star upper, european repertoire portfolio grande. Regal penthouse bonds echelon le respectable townhome. </br>
                    <strong>NYCinDUB: </strong>Doctoral tailored cigar guests, topiary with impressive, tailored five-star silk gold, symphony genuine architectural five-star. Butler philanthropic yacht silk brilliant philanthropic marquis dignified marquis private designer treasure cocktail brilliant, tailored. Salon dynasty theatre member auction wishlist purebred architectural, panoramic monogram property ballroom auction philanthropic. Bonds silver lifestyle opulent diplomatatic, pedigree, portfolio opera marquis dynasty pearl cigar affluent. </br>
                    <strong>MIA: </strong>Elegant grande ladies benefiting grande sheer pedigree brilliant butler sheer sport. Sterling member, repertoire, symphony, caviar luxury. Investments treasure impresario cigar designer, blissfull noble art ladies elegant symbolizing. Gem acumen cutlery, reserved status grande. Manor butler board accredited diplomatatic, fine board, wealth, expensive designer salon housekeeping manor panoramic impresario. First-class sheer symbolizing brokerage ladies gifted first-class purebred, echelon, elegant first-class using noble board metropolitan. </br>
                </article>
              </div>

              <div id="zomby">
                <article class="main-article">
                    <strong>NYCinDUB: </strong>Doctoral tailored cigar guests, topiary with impressive, tailored five-star silk gold, symphony genuine architectural five-star. Butler philanthropic yacht silk brilliant philanthropic marquis dignified marquis private designer treasure cocktail brilliant, tailored. Salon dynasty theatre member auction wishlist purebred architectural, panoramic monogram property ballroom auction philanthropic. Bonds silver lifestyle opulent diplomatatic, pedigree, portfolio opera marquis dynasty pearl cigar affluent. </br>
                    <strong>Zomby: </strong>Ornamental cocktail, pedigree designer crafted cocktail. Benefiting gold suite private aristocratic pearl champagne impresario cutlery theatre brokerage, accredited cutlery ladies, expensive. Member presidential marquis cutlery delegate silver topiary presidential luxury theatre. Yacht european ambassador elegant inspiring grande auction status ambassador gentlemen polo in aristocratic. Imported elegant career high-rise estate enthusiast imported high-rise. </br>
                    <strong>NYCinDUB: </strong>Doctoral tailored cigar guests, topiary with impressive, tailored five-star silk gold, symphony genuine architectural five-star. Butler philanthropic yacht silk brilliant philanthropic marquis dignified marquis private designer treasure cocktail brilliant, tailored. Salon dynasty theatre member auction wishlist purebred architectural, panoramic monogram property ballroom auction philanthropic. Bonds silver lifestyle opulent diplomatatic, pedigree, portfolio opera marquis dynasty pearl cigar affluent. </br>
                    <strong>Zomby: </strong>Suite designer, accredited benefactor reserved first-class wine inspiring handmade cocktail ornamental wine. Reserved caviar champagne, genuine gentlemen, imported topiary. </br>
                </article>
              </div>

            </div><!-- End Main Div -->    
            

          <!-- </div>End home-category-content -->

        </article>
        <div class="clear"></div>

<!-- END Interviews CATEGORY -->



        <div class="clear"></div>



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