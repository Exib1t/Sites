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

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant&family=Josefin+Sans&display=swap" rel="stylesheet">

  <!--<meta name="theme-color" content="#ed1c24" />-->

  <link rel="stylesheet" href="assets/css/main.min.css?<?php echo filemtime( 'assets/css/main.min.css' ); ?>" />
</head>
<body class="l-body -page_<?php echo $uri; ?><?php echo ( ! $isHomepage ) ? ' -page_inner' : ''; ?>">

  <div class="l-wrapper">
    <header class="l-siteHeader">
        <!--        SITE HEADER TOP      -->
      <div class="b-siteHeaderTop">
        <button class="b-siteHeaderTop__button">Call - 123 456 789</button>

        <!--        SITE LOGO         -->
        <div class="l-siteLogo">
          <?php
          $siteLogo__tag  = $isHomepage ? 'h1' : 'div';
          $siteLogo__link = $isHomepage ? '' : ' href="index.html"';
          ?>
          <<?php echo $siteLogo__tag; ?> class="b-siteLogo" itemscope itemtype="http://schema.org/Organization">
          <a class="b-siteLogo__link"<?php echo $siteLogo__link; ?> itemprop="url">
            <img class="b-siteLogo__icon" src="assets/img/blocks/siteLogo/siteLogo-logo.svg" alt="<?php echo $siteName; ?>" title="<?php echo $siteName; ?>" itemprop="logo" />
          </a>
        </<?php echo $siteLogo__tag; ?>>
      </div>

        <button class="b-siteHeaderTop__button">Reservation</button>
      </div>

      <div class="l-siteHeaderBottom">
        <div class="b-siteHeaderBottom">
          <!--      SITE NAV-->
          <nav class="l-mainNavigation">
            <ul class="b-mainNavigation">
              <li class="b-mainNavigation__item<?php echo ( $uri == 'home' ) ? ' -state_active' : ''; ?>">
                <a class="b-mainNavigation__link" href="index.html">Home</a>
              </li>
              <li class="b-mainNavigation__item<?php echo ( $uri == 'home' ) ? ' -state_active' : ''; ?>">
                <a class="b-mainNavigation__link" href="index.html">About Us</a>
              </li>
              <li class="b-mainNavigation__item<?php echo ( $uri == 'home' ) ? ' -state_active' : ''; ?>">
                <a class="b-mainNavigation__link" href="index.html">Our Menu</a>
              </li>
              <li class="b-mainNavigation__item<?php echo ( $uri == 'home' ) ? ' -state_active' : ''; ?>">
                <a class="b-mainNavigation__link" href="index.html">Pages</a>
              </li>
              <li class="b-mainNavigation__item<?php echo ( $uri == 'home' ) ? ' -state_active' : ''; ?>">
                <a class="b-mainNavigation__link" href="index.html">Blog</a>
              </li>
              <li class="b-mainNavigation__item<?php echo ( $uri == 'home' ) ? ' -state_active' : ''; ?>">
                <a class="b-mainNavigation__link" href="index.html">Contact Us</a>
              </li>
            </ul>

            <ul class="b-navigationSocial">
              <li class="b-navigationSocial__item<?php echo ( $uri == 'home' ) ? ' -state_active' : ''; ?>">
                <a class="b-navigationSocial__link" href="index.html"><img src="assets/img/blocks/siteHeaderBottom/socials/instagram-logo.svg" alt="" class="b-mainNavigationSocials__img"></a>
              </li>
              <li class="b-navigationSocial__item<?php echo ( $uri == 'home' ) ? ' -state_active' : ''; ?>">
                <a class="b-navigationSocial__link" href="index.html"><img src="assets/img/blocks/siteHeaderBottom/socials/facebook-logo.svg" alt="" class="b-mainNavigationSocials__img"></a>
              </li>
              <li class="b-navigationSocial__item<?php echo ( $uri == 'home' ) ? ' -state_active' : ''; ?>">
                <a class="b-navigationSocial__link" href="index.html"><img src="assets/img/blocks/siteHeaderBottom/socials/twitter-logo.svg" alt="" class="b-mainNavigationSocials__img"></a>
              </li>
              <li class="b-navigationSocial__item<?php echo ( $uri == 'home' ) ? ' -state_active' : ''; ?>">
                <a class="b-navigationSocial__link" href="index.html"><img src="assets/img/blocks/siteHeaderBottom/socials/pinterest-logo.svg" alt="" class="b-mainNavigationSocials__img"></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>

    </header>

    <div class="l-content">
