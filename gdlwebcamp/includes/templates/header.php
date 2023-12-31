<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="content-type" content="text/html; charset=iso8859-1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&family=Oswald:wght@300;500;700&family=PT+Sans:ital@1&display=swap" rel="stylesheet">


  <?php 
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);
      if($pagina == 'invitados' || $pagina == 'index'){
        echo '<link rel="stylesheet" href="css/colorbox.css">';
      } else if($pagina == 'conferencia') {
        echo '<link rel="stylesheet" href="css/lightbox.css">';
      } 
  ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina; ?>">


  <header class="site-header">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </nav>
        <div class="informacion-evento">
          <div class="clearfix">
            <p class="fecha"><i class="fa-solid fa-calendar-days"></i> 19-22-Dic</p>
            <p class="ciudad"><i class="fa-solid fa-location-dot"></i> Rosario, Santa Fe, ARG</p>
          </div> 

            <h1 class="nombre-sitio">GdlWebCamp</h1>
            <p class="slogan">La mejor conferencia de <span>Diseño Web</span></p>
        </div><!--.informacion evento-->

      </div>
    </div><!--.hero-->

  </header>

  <div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
        <a href="index.php">
        <img src="img/logo.svg" alt="logo GdlWebCamp">
        </a>
      </div>

      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="navegacion-principal clearfix">
        <a href="conferencia.php">Conferencia</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitados.php">Invitados</a>
        <a href="registro.php">Reservaciones</a>
      </nav>
    </div><!--.contenedor.-->
  </div><!--.barra.-->