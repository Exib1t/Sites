    </div><!--content-->

    <footer class="l-siteFooter">
      <div class="b-siteFooter">
        <div class="b-siteFooter__column">
          <div class="b-siteFooter__columnHashtag b-text">#TheTastEat</div>

          <h3 class="b-siteFooter__columnTitle">Contact</h3>
          <ul class="b-siteFooter__columnList">
            <li class="b-siteFooter__columnItem">
              <a href="#" class="b-siteFooter__columnLink -whiteText">5 Rue Dalou, 75015 Paris</a>
            </li>
            <li class="b-siteFooter__columnItem">
              <a href="#" class="b-siteFooter__columnLink g-tel">+123 456 789</a>
            </li>
            <li class="b-siteFooter__columnItem">
              <a href="#" class="b-siteFooter__columnLink">josefin@gmail.com</a>
            </li>
          </ul>
        </div>

        <div class="b-siteFooter__column -centerColumn">
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

          <div class="b-siteFooter__columnText b-text">Join our mailing list for updates, Get news & offers events.</div>

          <form action="" class="b-siteFooter__form">
            <label for="">
              <input type="email" placeholder="Email">
              <button>Subscribe</button>
            </label>
          </form>
        </div>

        <div class="b-siteFooter__column -lastColumn">
          <h3 class="b-siteFooter__columnTitle">Working Hours</h3>
          <ul class="b-siteFooter__columnList">
            <li class="b-siteFooter__columnItem">
              <p class="b-siteFooter__columnLink">Mon – Fri: <span class="-whiteText">7.00am – 6.00pm</span></p>
            </li>
            <li class="b-siteFooter__columnItem">
              <p class="b-siteFooter__columnLink">Sat: <span class="-whiteText">7.00am – 6.00pm</span></p>
            </li>
            <li class="b-siteFooter__columnItem">
              <p class="b-siteFooter__columnLink">Sun: <span class="-whiteText">8.00am – 6.00pm</span></p>
            </li>
          </ul>
        </div>
      </div>
    </footer>

    <div class="l-bottomNavigation">
      <div class="b-bottomNavigation">
        <div class="b-bottomNavigation__text b-text">© Copyright - TastEat | Designed by <a href="#" class="-yellowText">VictorFlow</a> - Powered by <a href="#" class="-yellowText">Webflow</a></div>

        <ul class="b-bottomNavigation__list">
          <li class="b-bottomNavigation__item">
            <a href="#" class="b-bottomNavigation__link">Styleguide</a>
          </li>
          <li class="b-bottomNavigation__item">
            <a href="#" class="b-bottomNavigation__link">Licenses</a>
          </li>
          <li class="b-bottomNavigation__item">
            <a href="#" class="b-bottomNavigation__link">Protected</a>
          </li>
          <li class="b-bottomNavigation__item">
            <a href="#" class="b-bottomNavigation__link">Not Found</a>
          </li>
        </ul>
      </div>
    </div>
  </div><!--wrapper-->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.6.0.min.js"><\/script>')</script>

  <script src="assets/js/scripts.js?<?php echo filemtime( 'assets/js/scripts.js' ); ?>"></script>

  <!-- Global site tag (gtag.js) - Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXX-Y"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-XXXXX-Y');
  </script>

</body>
</html>
