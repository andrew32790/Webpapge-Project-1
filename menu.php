<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="css/menu.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="video.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
    <div class="menu-wrapper" role="navigation">
      <ul class="nav" role="menubar">
        <li role="menuitem">
          <a href="#">Menu</a>
          <div class="mega-menu" aria-hidden="true" role="menu">
            <div class="nav-column">
              <h3>Websites</h3>
              <ul>
                <li role="menuitem"><a href="https://www.youtube.com/">Youtube</a></li>
                <li role="menuitem"><a href="https://en.wikipedia.org/wiki/Main_Page">Wikipedia</a></li>
                <li role="menuitem"><a href="http://www.imdb.com/">IMDB</a></li>
                <li role="menuitem"><a href="https://www.facebook.com/">Facebook</a></li>
                <li role="menuitem"><a href="https://twitter.com/?lang=en">Twitter</a></li>
                <li role="menuitem"><a href="https://www.forbes.com/#4c9227b02254">Forbes</a></li>
                <li role="menuitem"><a href="https://www.reddit.com/">reddit</a></li>
              </ul>
            </div>
            <div class="nav-column">
              <h3 class="highlight">Shop</h3>
              <ul>
                <li role="menuitem"><a href="https://www.amazon.com/">Amazon</a></li>
                <li role="menuitem"><a href="https://altex.ro/">Altex</a></li>
              </ul>
              <h3 class="highlight">Currency</h3>
              <ul>
                <li role="menuitem"><a href="https://www.cursbnr.ro/">Curs BNR</a></li>
                <li role="menuitem"><a href="http://www.xe.com/">XE</a></li>
              </ul>
            </div>
          </div>
        </li>
        <li role="menuitem"><a href="#">Time</a>
                  <div class="mega-menu" aria-hidden="true" role="menu">
                    <div class="nav-column">
                     
                     <iframe src="http://free.timeanddate.com/clock/i62kavw3/n5664/tlro/fn14/fs17/ftb/tt0/ta1/tb4" frameborder="0" width="279" height="44"></iframe>


                      
                

</div>


        </li>
        <li role="menuitem"><a href="#">Weather</a>
<div class="mega-menu" aria-hidden="true" role="menu">
                    <div class="nav-column">
                   <a href="https://www.accuweather.com/ro/ro/bacau/272041/weather-forecast/272041" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1516106692917" class="aw-widget-current"  data-locationkey="1-272041_18_AL" data-unit="c" data-language="ro" data-useip="false" data-uid="awcc1516106692917"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
                      </div>
        </li>
        <li role="menuitem"><a href="#">Design</a>
          <div class="mega-menu" aria-hidden="true" role="menu">
                    <div class="nav-column">
          <video width="320" height="240" controls playsinline autoplay muted loop poster="4.mp4">
  <source src="4.mp4" type="video/mp4">
  
</video>
<video width="320" height="240" controls playsinline autoplay muted loop poster="3.mp4">
  <source src="3.mp4" type="video/mp4">
  
</video>
</div>
        </li>
        <li role="menuitem"><a href="#">Newsletter</a>
<div class="mega-menu" aria-hidden="true" role="menu">
<div class="nav-column">
  <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="Name" name="name" required />
      <input type="email" placeholder="Email" name="email" required />
      
      <input type="submit" value="Submit" name="submit" class="btn btn-block btn-primary" />
      <div class="g-recaptcha" data-sitekey="6LdYXD8UAAAAAJTnaLFx52tDs37Ii5c31oaE9G4m"></div>
    </form>
</div>
        </li>
        <li role="menuitem" class="nav-search">
          <form method="get" action="http://www.google.com/search">
            <label for="search"></label>
            <input type="text" name="q" size="25" maxlength="255" value="" title="Search..." placeholder="Search...">
            <input type="submit" value="">
          </form>
        </li>
      </ul>
    </div>
    
</div>
<video playsinline autoplay muted loop poster="2.mp4" id="bgvid">
    
    <source src="2.mp4" type="video/mp4">
</video>




  </body>
  <style>
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #231204  ;
    color: white;
    text-align: center;
}
</style>

<div class="footer">
  <p></p>
</div>
</html>

