
<?php require __dir__ .'/app/src/app.php'?>


<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Pas Romą</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/vstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <nav class="navbar-fixed" role="navigation ">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="site-logo">
        <img src="images/logo/logo21.png" alt="">
      </a>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#faktai">Faktai</a></li>
        <li><a href="#paslaugos">Paslaugos</a></li>
        <li><a href="#atsiliepimai">Atsiliepimai</a></li>
        <li><a href="#foto">Foto</a></li>
        <li><a href="#kontaktai">Žemėlapis/Kontaktai</a></li>
      </ul>

      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Sodyba Pas Romą</h1>
        <div class="row center">
          <h5 class="header col s12 light">Vieta poilsiui ir šventėms šalia namų</h5>
        </div>
        <div class="row center">
          <a href="#faktai" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Apie mus</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="bg"></div>
    <div class="parallax"><img src="images/foto/DSC_0143s.JPG" alt="Unsplashed background img 1"></div>
  </div>
  <div class="container">
    <div class="section">
        <div id="faktai" class="col s12 m4">
          <div class="icon-block" id="p_faktai">
            <h2 class="center brown-text"><i class="material-icons"></i></h2>
            <p><font size="3">  <div class="center">
              tai Vilniaus rajone, 3km nuo Vilniaus, įsikurusi moderniai įrengta sodyba su gražiai sutvarkyta aplinka. Puiki vieta šventėms, pokyliams, vestuvėms, seminarams ar tiesiog draugų susitikimams.
Pagrindiniame name yra erdvi pobuvių salė (iki 50 žmonių), virtuvė su visa reikalinga buitine technika, antrame aukšte įrengti jaukūs miegamieji (16 žmonių). Kieme yra pavėsinė su šašlykine ir  vaikų žaidimo aikštelė. Atskirame pastate Jūsų laukia pirtis ir šalia esantis tvenkinys, kuris pritaikytas maudytis. Jūsų patogumui privažiavimas iki pat sodybos yra asfaltuotas, kursuoja miesto autobusas (stotelė už 100 metrų).
          </div></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="paslaugos" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h1 class="header col s12 light">Paslaugos</h1>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/foto/DSC_0020s.JPG" alt="Unsplashed background img 2"></div>
  </div>
  <div class="col s12 m4">
    <div class="icon-block">
      <h2 class="center brown-text"><i class="material-icons"></i></h2>
      <h5 class="center"></h5>
      <div class="row">
        <div class="col s6 m6">
            <p class="light">
            <li>Sodybos nuoma nuo 250 Eur</li>
            <li>Pirties nuoma nuo 150 Eur</li>
          </p>
        </div>
        <div class="col s6 m6">
          <p class="light">
            <li>Nuolaidos Nedidelėms grupėms ir ilgesniems laikotarpiams</li>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div id="atsiliepimai" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h1 class="header col s12 light">Atsiliepimai</h1>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/foto/DSC_0020s.JPG" alt="Unsplashed background img 2"></div>
  </div>
  <form class="" action="index.php" method="post">
    <div class="container-contact">
      <div class="section">
        <div class="row">
          <div class="col s12 center" align="center">
            <div class="row contact-row">
              <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input value="" name="vardas" id="first_name2" type="text" class="validate" align="left" required>
                <label class="active" for="first_name2">Vardas</label>
              </div>
            </div>
            <div class="row contact-row">
              <div class="input-field col s6">
                <i class="material-icons prefix">mail</i>
                <input id="email" name="email" type="email" class="validate" required>
                <label for="email">Email</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
              </div>
            </div>
            <div class="row contact-row">
              <div class="input-field col s6">
                <i class="material-icons prefix">textsms</i>
                <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
                <label for="textarea1">Atsiliepimas</label>
              </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Siųsti atsiliepmą
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <div class="carousel carousel-slider">
    <div class="carousel-fixed-item center middle-indicator">
    <div class="left">
      <a href="Previo" id="foto" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons left  middle-indicator-text">chevron_left</i></a>
     </div>
     <div class="right">
     <a href="Siguiente" class=" moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons right middle-indicator-text">chevron_right</i></a>
     </div>
    </div>
      <a class="carousel-item center" href="#one">
        <img src="images/foto/DSC_0221.JPG">
      </a>
      <a class="carousel-item center" href="#two">
        <img src="images/foto/DSC_0044.JPG">
      </a>
      <a class="carousel-item center" href="#three">
        <img src="images/foto/DSC_0320.JPG">
      </a>
      <a class="carousel-item center" href="#four">
        <img src="images/foto/DSC_0146.JPG">
      </a>
      <a class="carousel-item center" href="#five">
        <img src="images/foto/PIC_2570.JPG">
      </a>
      <a class="carousel-item center" href="#six">
        <img src="images/foto/DSC_0286.JPG">
      </a>
  </div>
  <footer class="page-footer teal">
    <div id="kontaktai" class="container">
      <div class="row contacts-row">
        <div class="contacts-block col l6 s12">
          <h5 class="white-text">Žemėlapis/Kontaktai</h5>
          <p class="grey-text text-lighten-4"><p>Adresas: A. Mickevičiaus 129, <br> Platiniškių km, Vilniaus raj.</p>
          <p>Telefonas: <a href="tel:+37069847401" class="v-link">+370 698 47401</p></a>
          <p>El-paštas: <a href="mailto:info@pasroma.lt?subject=Mail" class="v-link">info@pasroma.lt</a></p>
          <a href="https://www.facebook.com/SodybaPasRoma/">
            <i style="border-radius: 30% !important" class="fa fa-facebook"></i>
          </a>
        </div>
        <div class="map-div">
          <iframe frameborder="0" src="about:blank" style="z-index: -1; position: absolute; width: 100%; height: 450; top: 0px; left: 0px; border: none; text-align:right;"></iframe>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.622271139715!2d25.111430215814398!3d54.716268480288825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd8df3156da291%3A0xfa137297dbae680d!2zU29keWJhICJQYXMgUm9txIUi!5e0!3m2!1sen!2slt!4v1528390868471" frameborder="0" class="v-map" align="right" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3">Vladas Kalnys</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/v-script.js"></script>

  </body>
</html>
