<?php
  if ( empty( $_SERVER['HTTPS'] ) || $_SERVER['HTTPS'] === 'off' ) {
    $protocol = 'http://';
  } else {
    $protocol = 'https://';
  }
  $BASE_URL = $protocol . $_SERVER['SERVER_NAME'] . dirname( $_SERVER['PHP_SELF'] );

  $isHomepage = ( basename( $_SERVER['PHP_SELF'] ) == 'index.php' );
  $title = $isHomepage ? $siteName : $pageName . ' : ' . $siteName;
?>
<!doctype html>
<html class="l-html no-js" lang="">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php echo $title; ?></title>
  <meta name="description" content="" />

  <!-- <meta property="og:image" content="<?php echo $BASE_URL; ?>/img/userfiles/og-image.png" /> -->

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">

  <!--<meta name="theme-color" content="#ed1c24" />-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/main.min.css?<?php echo filemtime( 'assets/css/main.min.css' ); ?>" />
</head>
<body class="l-body -page_<?php echo $uri; ?><?php echo ( ! $isHomepage ) ? ' -page_inner' : ''; ?>">

  <div class="l-wrapper">
    <header class="l-siteHeader">
      <div class="b-siteHeader">
        <div class="l-headerNavigation">
          <div class="l-siteLogo">
            <img src="../assets/img/blocks/siteLogo/siteLogo.svg" alt="logo" class="b-siteLogo">
          </div>
          <div class="l-headerNavigationLinks">
            <a href="#" class="b-headerNavigationLink">Kurse</a>
            <a href="#" class="b-headerNavigationLink">Verband</a>
            <a href="#" class="b-headerNavigationLink">Grundkompetenzen</a>
          </div>
        </div>
        <div class="l-headerText">
          <p class="b-headerTextLeft">Kursportal der Volkshochschulen der Schweiz | Portail des Universités Populaires Suisses</p>
          <p class="b-headerTextRight">Portale delle Università Popolari Svizzere | Portals da las Universitads Popularas Svizras</p>
        </div>
        <form action="search" method="post" class="l-headerSearchForm">
          <input type="text" placeholder="Kurse finden" class="b-headerSearchInput">
          <button type="submit" class="b-headerSearchButton hvr-shutter-out-horizontal">Suchen</button>
        </form>
      </div>
    </header>

    <div class="l-content">
