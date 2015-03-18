<?php
  $page = "shows_and_events";
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


<!-- BEGIN Bass & Dubstep CATEGORY -->

        <article class="home-category"> 
          
          <div class="home-category-header">
            <a name="bass"><h3>Bass &amp; Dubstep</h3></a>
          </div>
          

          <div class="page-div">

            <div class="side-div">
              <!--<div><img class="img-side-div" src="images/shows/bass.jpg" /></div>-->
              <h1 class="page-h1">Top Venues for Bass &amp; Dubstep</h1>
              <div class="venue-menu"><!-- Begin "Shows and Events" Left JQuery Menu  -->
                <ul class="idTabs"> 
                  <li><a href="#lpr"><h1>Le Poisson Rouge</h1></a></li>
                  <li><a href="#terminal5"><h1>Terminal 5</h1></a></li>
                  <li><a href="#brooklynbowl"><h1>Brooklyn Bowl</h1></a></li>
                  <li><a href="#highline"><h1>Highline Ballroom</h1></a></li>
                  <li><a href="#websterhall"><h1>Webster Hall</h1></a></li>
                  <li><a href="#glasslands"><h1>Glasslands</h1></a></li>
                  <li><a href="#musichall"><h1>Music Hall Of Williamsburg</h1></a></li>
                </ul>
              </div><!-- End "Shows and Events" Left JQuery Menu  -->
            </div> <!-- End side-div -->

            <div class="main-div">
              <!-- Begin Results for JQuery selections -->
              <div id="lpr">
                <h1 class="page-h1">Le Poisson Rouge</h1>
                <img src="images/shows/venues/1_lpr.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  158 Bleecker St</br>
                  Greenwich Village</br>
                  New York</br>
                </p>
              </div>

              <div id="terminal5">
                <h1 class="page-h1">Terminal 5</h1>
                <img src="images/shows/venues/2_t5.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  610 W 56th St</br>
                  Midtown West</br>
                  New York</br>
                </p>
              </div>

              <div id="brooklynbowl">
                <h1 class="page-h1">Brooklyn Bowl</h1>
                <img src="images/shows/venues/3_bb.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  61 Wythe Ave</br>
                  Williamsburg</br>
                  Brooklyn 11211</br>
                </p>
              </div>

              <div id="highline">
                <h1 class="page-h1">Highline Ballroom</h1>
                <img src="images/shows/venues/4_web.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  431 W 16th St</br>
                  Chelsea</br>
                  New York</br>
                </p>
              </div>

              <div id="websterhall">
                <h1 class="page-h1">Webster Hall</h1>
                <img src="images/shows/venues/5_highline.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  125 E 11th St</br>
                  East Village</br>
                  New York</br>
                </p>
              </div>

              <div id="glasslands">
                <h1 class="page-h1">Glasslands</h1>
                <img src="images/shows/venues/6_glass.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  289 Kent Ave</br>
                  Williamsburg</br>
                  Brooklyn 11249</br>
                </p>                
              </div>

              <div id="musichall">
                <h1 class="page-h1">Music Hall Of Williamsburg</h1>
                <img src="images/shows/venues/7_musichall.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  66 North 6th St</br>
                  Williamsburg</br>
                  Brooklyn</br>
                </p>                
              </div>

            </div> <!-- End main-div -->

          </div> <!-- end page-div -->

          <div class="clear"></div>  

        </article>

        <div class="clear"></div>  

<!-- END Bass & Dubstep CATEGORY -->



<!-- BEGIN House & Dance CATEGORY -->

        <article class="home-category">
          
          <div class="home-category-header">
            <a name="dance"><h3>House &amp; Dance</h3></a>
          </div>
          

          <div class="page-div">

            <div class="side-div">
              <!--<div><img class="img-side-div" src="images/shows/bass.jpg" /></div>-->
              <h1 class="page-h1">Top Venues for House &amp; Dance</h1>
              <div class="venue-menu"><!-- Begin "Shows and Events" Left JQuery Menu  -->
                <ul class="idTabs"> 
                  <li><a href="#santos"><h1>Santos Party House</h1></a></li>
                  <li><a href="#terminal52"><h1>Terminal 5</h1></a></li>
                  <li><a href="#brooklynbowl2"><h1>Brooklyn Bowl</h1></a></li>
                  <li><a href="#highline2"><h1>Highline Ballroom</h1></a></li>
                  <li><a href="#websterhall2"><h1>Webster Hall</h1></a></li>
                  <li><a href="#glasslands2"><h1>Glasslands</h1></a></li>
                  <li><a href="#musichall2"><h1>Music Hall Of Williamsburg</h1></a></li>
                </ul>
              </div><!-- End "Shows and Events" Left JQuery Menu  -->
            </div> <!-- End side-div -->

            <div class="main-div">
              <!-- Begin Results for JQuery selections -->
              <div id="santos">
                <h1 class="page-h1">Santos Party House</h1>
                <img src="images/shows/venues/santos.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  158 Bleecker St</br>
                  Greenwich Village</br>
                  New York</br>
                </p>
              </div>

              <div id="terminal52">
                <h1 class="page-h1">Terminal 5</h1>
                <img src="images/shows/venues/2_t5.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  610 W 56th St</br>
                  Midtown West</br>
                  New York</br>
                </p>
              </div>

              <div id="brooklynbowl2">
                <h1 class="page-h1">Brooklyn Bowl</h1>
                <img src="images/shows/venues/3_bb.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  61 Wythe Ave</br>
                  Williamsburg</br>
                  Brooklyn 11211</br>
                </p>
              </div>

              <div id="highline2">
                <h1 class="page-h1">Highline Ballroom</h1>
                <img src="images/shows/venues/4_web.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  431 W 16th St</br>
                  Chelsea</br>
                  New York</br>
                </p>
              </div>

              <div id="websterhall2">
                <h1 class="page-h1">Webster Hall</h1>
                <img src="images/shows/venues/5_highline.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  125 E 11th St</br>
                  East Village</br>
                  New York</br>
                </p>
              </div>

              <div id="glasslands2">
                <h1 class="page-h1">Glasslands</h1>
                <img src="images/shows/venues/6_glass.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  289 Kent Ave</br>
                  Williamsburg</br>
                  Brooklyn 11249</br>
                </p>                
              </div>

              <div id="musichall2">
                <h1 class="page-h1">Music Hall Of Williamsburg</h1>
                <img src="images/shows/venues/7_musichall.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  66 North 6th St</br>
                  Williamsburg</br>
                  Brooklyn</br>
                </p>                
              </div>

            </div> <!-- End main-div -->

          </div> <!-- end page-div -->

          <div class="clear"></div>  

        </article>

        <div class="clear"></div>  

<!-- END House & Dance CATEGORY -->



<!-- BEGIN Experimental CATEGORY -->

        <article class="home-category">
          
          <div class="home-category-header">
            <a name="experimental"><h3>Experimental</h3></a>
          </div>
          

          <div class="page-div">

            <div class="side-div">
              <!--<div><img class="img-side-div" src="images/shows/bass.jpg" /></div>-->
              <h1 class="page-h1">Top Venues for Experimental</h1>
              <div class="venue-menu"><!-- Begin "Shows and Events" Left JQuery Menu  -->
                <ul class="idTabs"> 
                  <li><a href="#autoparts"><h1>Above the Auto Parts Store</h1></a></li>
                  <li><a href="#monster"><h1>Monster Island Basement</h1></a></li>
                  <li><a href="#bruarfalls"><h1>Bruar Falls</h1></a></li>
                  <li><a href="#sheastadium"><h1>Shea Stadium</h1></a></li>
                  <li><a href="#websterhall3"><h1>Webster Hall</h1></a></li>
                  <li><a href="#glasslands3"><h1>Glasslands</h1></a></li>
                  <li><a href="#musichall3"><h1>Music Hall Of Williamsburg</h1></a></li>
                </ul>
              </div><!-- End "Shows and Events" Left JQuery Menu  -->
            </div> <!-- End side-div -->

            <div class="main-div">
              <!-- Begin Results for JQuery selections -->
              <div id="autoparts">
                <h1 class="page-h1">Above the Auto Parts Store</h1>
                <img src="images/shows/venues/autoparts.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  158 Bleecker St</br>
                  Greenwich Village</br>
                  New York</br>
                </p>
              </div>

              <div id="monster">
                <h1 class="page-h1">Monster Island Basement</h1>
                <img src="images/shows/venues/2_t5.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  610 W 56th St</br>
                  Midtown West</br>
                  New York</br>
                </p>
              </div>

              <div id="bruarfalls">
                <h1 class="page-h1">Bruar Falls</h1>
                <img src="images/shows/venues/3_bb.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  61 Wythe Ave</br>
                  Williamsburg</br>
                  Brooklyn 11211</br>
                </p>
              </div>

              <div id="sheastadium">
                <h1 class="page-h1">Shea Stadium</h1>
                <img src="images/shows/venues/4_web.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  431 W 16th St</br>
                  Chelsea</br>
                  New York</br>
                </p>
              </div>

              <div id="websterhall3">
                <h1 class="page-h1">Webster Hall</h1>
                <img src="images/shows/venues/5_highline.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  125 E 11th St</br>
                  East Village</br>
                  New York</br>
                </p>
              </div>

              <div id="glasslands3">
                <h1 class="page-h1">Glasslands</h1>
                <img src="images/shows/venues/6_glass.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  289 Kent Ave</br>
                  Williamsburg</br>
                  Brooklyn 11249</br>
                </p>                
              </div>

              <div id="musichall3">
                <h1 class="page-h1">Music Hall Of Williamsburg</h1>
                <img src="images/shows/venues/7_musichall.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  66 North 6th St</br>
                  Williamsburg</br>
                  Brooklyn</br>
                </p>                
              </div>

            </div> <!-- End main-div -->

          </div> <!-- end page-div -->

          <div class="clear"></div>  

        </article>

        <div class="clear"></div>  

<!-- END Experimental CATEGORY -->



<!-- BEGIN Indie Rock CATEGORY -->

        <article class="home-category">
          
          <div class="home-category-header">
            <a name="indie"><h3>Indie Rock</h3></a>
          </div>
          

          <div class="page-div">

            <div class="side-div">
              <!--<div><img class="img-side-div" src="images/shows/bass.jpg" /></div>-->
              <h1 class="page-h1">Top Venues for Indie Rock</h1>
              <div class="venue-menu"><!-- Begin "Shows and Events" Left JQuery Menu  -->
                <ul class="idTabs"> 
                  <li><a href="#knitting"><h1>Knitting Factory</h1></a></li>
                  <li><a href="#terminal54"><h1>Terminal 5</h1></a></li>
                  <li><a href="#brooklynbowl4"><h1>Brooklyn Bowl</h1></a></li>
                  <li><a href="#highline4"><h1>Highline Ballroom</h1></a></li>
                  <li><a href="#websterhall4"><h1>Webster Hall</h1></a></li>
                  <li><a href="#glasslands4"><h1>Glasslands</h1></a></li>
                  <li><a href="#musichall4"><h1>Music Hall Of Williamsburg</h1></a></li>
                </ul>
              </div><!-- End "Shows and Events" Left JQuery Menu  -->
            </div> <!-- End side-div -->

            <div class="main-div">
              <!-- Begin Results for JQuery selections -->
              <div id="knitting">
                <h1 class="page-h1">Knitting Factory</h1>
                <img src="images/shows/venues/knitting.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  158 Bleecker St</br>
                  Greenwich Village</br>
                  New York</br>
                </p>
              </div>

              <div id="terminal54">
                <h1 class="page-h1">Terminal 5</h1>
                <img src="images/shows/venues/2_t5.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  610 W 56th St</br>
                  Midtown West</br>
                  New York</br>
                </p>
              </div>

              <div id="brooklynbowl4">
                <h1 class="page-h1">Brooklyn Bowl</h1>
                <img src="images/shows/venues/3_bb.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  61 Wythe Ave</br>
                  Williamsburg</br>
                  Brooklyn 11211</br>
                </p>
              </div>

              <div id="highline4">
                <h1 class="page-h1">Highline Ballroom</h1>
                <img src="images/shows/venues/4_web.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  431 W 16th St</br>
                  Chelsea</br>
                  New York</br>
                </p>
              </div>

              <div id="websterhall4">
                <h1 class="page-h1">Webster Hall</h1>
                <img src="images/shows/venues/5_highline.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  125 E 11th St</br>
                  East Village</br>
                  New York</br>
                </p>
              </div>

              <div id="glasslands4">
                <h1 class="page-h1">Glasslands</h1>
                <img src="images/shows/venues/6_glass.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  289 Kent Ave</br>
                  Williamsburg</br>
                  Brooklyn 11249</br>
                </p>                
              </div>

              <div id="musichall4">
                <h1 class="page-h1">Music Hall Of Williamsburg</h1>
                <img src="images/shows/venues/7_musichall.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  66 North 6th St</br>
                  Williamsburg</br>
                  Brooklyn</br>
                </p>                
              </div>

            </div> <!-- End main-div -->

          </div> <!-- end page-div -->

          <div class="clear"></div>  

        </article>

        <div class="clear"></div>  

<!-- END Indie Rock CATEGORY -->



<!-- BEGIN Reggae and Dub CATEGORY -->
        
        <article class="home-category">
          
          <div class="home-category-header">
            <a name="reggae"><h3>Reggae &amp; Dub</h3></a>
          </div>
          

          <div class="page-div">

            <div class="side-div">
              <!--<div><img class="img-side-div" src="images/shows/bass.jpg" /></div>-->
              <h1 class="page-h1">Top Venues for Reggae &amp; Dub</h1>
              <div class="venue-menu"><!-- Begin "Shows and Events" Left JQuery Menu  -->
                <ul class="idTabs"> 
                  <li><a href="#sutra"><h1>Sutra Lounge</h1></a></li>
                  <li><a href="#terminal55"><h1>Terminal 5</h1></a></li>
                  <li><a href="#brooklynbowl5"><h1>Brooklyn Bowl</h1></a></li>
                  <li><a href="#highline5"><h1>Highline Ballroom</h1></a></li>
                  <li><a href="#websterhall5"><h1>Webster Hall</h1></a></li>
                  <li><a href="#glasslands5"><h1>Glasslands</h1></a></li>
                  <li><a href="#musichall5"><h1>Music Hall Of Williamsburg</h1></a></li>
                </ul>
              </div><!-- End "Shows and Events" Left JQuery Menu  -->
            </div> <!-- End side-div -->

            <div class="main-div">
              <!-- Begin Results for JQuery selections -->
              <div id="sutra">
                <h1 class="page-h1">Sutra Lounge</h1>
                <img src="images/shows/venues/sutra.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  158 Bleecker St</br>
                  Greenwich Village</br>
                  New York</br>
                </p>
              </div>

              <div id="terminal55">
                <h1 class="page-h1">Terminal 5</h1>
                <img src="images/shows/venues/2_t5.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  610 W 56th St</br>
                  Midtown West</br>
                  New York</br>
                </p>
              </div>

              <div id="brooklynbowl5">
                <h1 class="page-h1">Brooklyn Bowl</h1>
                <img src="images/shows/venues/3_bb.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  61 Wythe Ave</br>
                  Williamsburg</br>
                  Brooklyn 11211</br>
                </p>
              </div>

              <div id="highline5">
                <h1 class="page-h1">Highline Ballroom</h1>
                <img src="images/shows/venues/4_web.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  431 W 16th St</br>
                  Chelsea</br>
                  New York</br>
                </p>
              </div>

              <div id="websterhall5">
                <h1 class="page-h1">Webster Hall</h1>
                <img src="images/shows/venues/5_highline.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  125 E 11th St</br>
                  East Village</br>
                  New York</br>
                </p>
              </div>

              <div id="glasslands5">
                <h1 class="page-h1">Glasslands</h1>
                <img src="images/shows/venues/6_glass.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  289 Kent Ave</br>
                  Williamsburg</br>
                  Brooklyn 11249</br>
                </p>                
              </div>

              <div id="musichall5">
                <h1 class="page-h1">Music Hall Of Williamsburg</h1>
                <img src="images/shows/venues/7_musichall.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  66 North 6th St</br>
                  Williamsburg</br>
                  Brooklyn</br>
                </p>                
              </div>

            </div> <!-- End main-div -->

          </div> <!-- end page-div -->

          <div class="clear"></div>  

        </article>

        <div class="clear"></div>  

<!-- END Reggae and Dub CATEGORY -->



<!-- BEGIN Hip-Hop CATEGORY -->

        <article class="home-category">
          
          <div class="home-category-header">
            <a name="hiphop"><h3>Hip-Hop</h3></a>
          </div>
          

          <div class="page-div">

            <div class="side-div">
              <!--<div><img class="img-side-div" src="images/shows/bass.jpg" /></div>-->
              <h1 class="page-h1">Top Venues for Hip-Hop</h1>
              <div class="venue-menu"><!-- Begin "Shows and Events" Left JQuery Menu  -->
                <ul class="idTabs"> 
                  <li><a href="#105rivington"><h1>105 Rivington</h1></a></li>
                  <li><a href="#suziewong"><h1>Suzie Wong</h1></a></li>
                  <li><a href="#brooklynbowl6"><h1>Brooklyn Bowl</h1></a></li>
                  <li><a href="#highline6"><h1>Highline Ballroom</h1></a></li>
                  <li><a href="#websterhall6"><h1>Webster Hall</h1></a></li>
                  <li><a href="#glasslands6"><h1>Glasslands</h1></a></li>
                  <li><a href="#musichall6"><h1>Music Hall Of Williamsburg</h1></a></li>
                </ul>
              </div><!-- End "Shows and Events" Left JQuery Menu  -->
            </div> <!-- End side-div -->

            <div class="main-div">
              <!-- Begin Results for JQuery selections -->
              <div id="105rivington">
                <h1 class="page-h1">105 Rivington</h1>
                <img src="images/shows/venues/105rivington.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  158 Bleecker St</br>
                  Greenwich Village</br>
                  New York</br>
                </p>
              </div>

              <div id="suziewong">
                <h1 class="page-h1">Suzie Wong</h1>
                <img src="images/shows/venues/2_t5.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  610 W 56th St</br>
                  Midtown West</br>
                  New York</br>
                </p>
              </div>

              <div id="brooklynbowl6">
                <h1 class="page-h1">Brooklyn Bowl</h1>
                <img src="images/shows/venues/3_bb.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  61 Wythe Ave</br>
                  Williamsburg</br>
                  Brooklyn 11211</br>
                </p>
              </div>

              <div id="highline6">
                <h1 class="page-h1">Highline Ballroom</h1>
                <img src="images/shows/venues/4_web.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  431 W 16th St</br>
                  Chelsea</br>
                  New York</br>
                </p>
              </div>

              <div id="websterhall6">
                <h1 class="page-h1">Webster Hall</h1>
                <img src="images/shows/venues/5_highline.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  125 E 11th St</br>
                  East Village</br>
                  New York</br>
                </p>
              </div>

              <div id="glasslands6">
                <h1 class="page-h1">Glasslands</h1>
                <img src="images/shows/venues/6_glass.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  289 Kent Ave</br>
                  Williamsburg</br>
                  Brooklyn 11249</br>
                </p>                
              </div>

              <div id="musichall6">
                <h1 class="page-h1">Music Hall Of Williamsburg</h1>
                <img src="images/shows/venues/7_musichall.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  66 North 6th St</br>
                  Williamsburg</br>
                  Brooklyn</br>
                </p>                
              </div>

            </div> <!-- End main-div -->

          </div> <!-- end page-div -->

          <div class="clear"></div>  

        </article>

        <div class="clear"></div>  

<!-- END Hip-Hop CATEGORY -->


<!-- BEGIN Jazz CATEGORY -->

        <article class="home-category">
          
          <div class="home-category-header">
            <a name="jazz"><h3>Jazz</h3></a>
          </div>
          

          <div class="page-div">

            <div class="side-div">
              <!--<div><img class="img-side-div" src="images/shows/bass.jpg" /></div>-->
              <h1 class="page-h1">Top Venues for Jazz</h1>
              <div class="venue-menu"><!-- Begin "Shows and Events" Left JQuery Menu  -->
                <ul class="idTabs"> 
                  <li><a href="#bluenote"><h1>Blue Note Jazz Club</h1></a></li>
                  <li><a href="#birdland"><h1>Birdland Jazz</h1></a></li>
                  <li><a href="#villagevanguard"><h1>Village Vanguard</h1></a></li>
                  <li><a href="#jazzstandard"><h1>Jazz Standard</h1></a></li>
                  <li><a href="#barbes"><h1>Barbes</h1></a></li>
                  <li><a href="#55bar"><h1>55 Bar</h1></a></li>
                  <li><a href="#smalls"><h1>Smalls</h1></a></li>
                </ul>
              </div><!-- End "Shows and Events" Left JQuery Menu  -->
            </div> <!-- End side-div -->

            <div class="main-div">
              <!-- Begin Results for JQuery selections -->
              <div id="bluenote">
                <h1 class="page-h1">Blue Note Jazz Club</h1>
                <img src="images/shows/venues/bluenote.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  158 Bleecker St</br>
                  Greenwich Village</br>
                  New York</br>
                </p>
              </div>

              <div id="birdland">
                <h1 class="page-h1">Birdland Jazz</h1>
                <img src="images/shows/venues/birdland.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  610 W 56th St</br>
                  Midtown West</br>
                  New York</br>
                </p>
              </div>

              <div id="villagevanguard">
                <h1 class="page-h1">Village Vanguard</h1>
                <img src="images/shows/venues/villagevanguard.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  61 Wythe Ave</br>
                  Williamsburg</br>
                  Brooklyn 11211</br>
                </p>
              </div>

              <div id="jazzstandard">
                <h1 class="page-h1">Jazz Standard</h1>
                <img src="images/shows/venues/4_web.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  431 W 16th St</br>
                  Chelsea</br>
                  New York</br>
                </p>
              </div>

              <div id="barbes">
                <h1 class="page-h1">Barbes</h1>
                <img src="images/shows/venues/5_highline.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  125 E 11th St</br>
                  East Village</br>
                  New York</br>
                </p>
              </div>

              <div id="55bar">
                <h1 class="page-h1">55 Bar</h1>
                <img src="images/shows/venues/6_glass.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  289 Kent Ave</br>
                  Williamsburg</br>
                  Brooklyn 11249</br>
                </p>                
              </div>

              <div id="smalls">
                <h1 class="page-h1">Smalls</h1>
                <img src="images/shows/venues/7_musichall.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  66 North 6th St</br>
                  Williamsburg</br>
                  Brooklyn</br>
                </p>                
              </div>

            </div> <!-- End main-div -->

          </div> <!-- end page-div -->

          <div class="clear"></div>  

        </article>

        <div class="clear"></div>  

<!-- END Hip-Hop CATEGORY -->



<!-- BEGIN Record Stores CATEGORY -->

        <article class="home-category">
          
          <div class="home-category-header">
            <a name="records"><h3>Record Stores</h3></a>
          </div>
          

          <div class="page-div">

            <div class="side-div">
              <!--<div><img class="img-side-div" src="images/shows/bass.jpg" /></div>-->
              <h1 class="page-h1">Top Record Stores</h1>
              <div class="venue-menu"><!-- Begin "Shows and Events" Left JQuery Menu  -->
                <ul class="idTabs"> 
                  <li><a href="#other"><h1>Other Music</h1></a></li>
                  <li><a href="#permanent"><h1>Permanent Records</h1></a></li>
                  <li><a href="#academyannex"><h1>Academy Annex</h1></a></li>
                  <li><a href="#halcyon"><h1>halcyon the shop</h1></a></li>
                  <li><a href="#thething"><h1>The Thing</h1></a></li>
                  <li><a href="#roughtrade"><h1>Rough Trade NYC</h1></a></li>
                  <li><a href="#blackgold"><h1>Black Gold</h1></a></li>
                </ul>
              </div><!-- End "Shows and Events" Left JQuery Menu  -->
            </div> <!-- End side-div -->

            <div class="main-div">
              <!-- Begin Results for JQuery selections -->
              <div id="other">
                <h1 class="page-h1">Other Music</h1>
                <img src="images/shows/venues/othermusic.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  158 Bleecker St</br>
                  Greenwich Village</br>
                  New York</br>
                </p>
              </div>

              <div id="permanent">
                <h1 class="page-h1">Permanent Pecords</h1>
                <img src="images/shows/venues/permanentrecords.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  610 W 56th St</br>
                  Midtown West</br>
                  New York</br>
                </p>
              </div>

              <div id="academyannex">
                <h1 class="page-h1">Academy Annex</h1>
                <img src="images/shows/venues/academyannex.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  610 W 56th St</br>
                  Midtown West</br>
                  New York</br>
                </p>
              </div>

              <div id="halcyon">
                <h1 class="page-h1">halcyon the shop</h1>
                <img src="images/shows/venues/halcyon.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  61 Wythe Ave</br>
                  Williamsburg</br>
                  Brooklyn 11211</br>
                </p>
              </div>

              <div id="thething">
                <h1 class="page-h1">The Thing</h1>
                <img src="images/shows/venues/thething.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  431 W 16th St</br>
                  Chelsea</br>
                  New York</br>
                </p>
              </div>

              <div id="roughtrade">
                <h1 class="page-h1">Rough Trade NYC</h1>
                <img src="images/shows/venues/roughtrade.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  125 E 11th St</br>
                  East Village</br>
                  New York</br>
                </p>
              </div>

              <div id="blackgold">
                <h1 class="page-h1">Black Gold</h1>
                <img src="images/shows/venues/blackgold.jpg" />
                <p class="page-p">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
                </p>
                <p class="page-p">
                  289 Kent Ave</br>
                  Williamsburg</br>
                  Brooklyn 11249</br>
                </p>                
              </div>



            </div> <!-- End main-div -->

          </div> <!-- end page-div -->

          <div class="clear"></div>  

        </article>

        <div class="clear"></div>  

<!-- END Hip-Hop CATEGORY -->




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