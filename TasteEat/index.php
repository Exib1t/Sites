<?php
$pageName = 'Home';
$siteName = 'TasteEat';
$uri      = 'home';
require( 'inc/header.php' );
?>

<main class="l-contentText">

  <section class="l-contentGreeting">
    <div class="b-contentGreeting">
      <div class="b-contentGreetingText">
        <h2 class="b-contentGreetingText__title">Welcome to Restaurant</h2>
        <p class="b-contentGreetingText__text b-text">The people, food and the prime locations make the perfect place good friends & family to come together and have great time.</p>
        <button class="b-contentGreetingText__button b-button">View Menu</button>
      </div>
      <div class="b-contentGreetingImg">
        <img src="assets/img/blocks/contentGreeting/contentGreeting__image.svg" alt="" class="b-contentGreetingImg__img">
      </div>
    </div>
  </section>

  <section class="l-contentInfo">
    <div class="b-contentInfo">
      <div class="b-contentInfo__block -location">
        <div class="b-contentInfoBlock__text">
          <h4 class="b-infoBlock__title">Locate Us</h4>
          <p class="b-infoBlock__text">Riverside 25, San Diego, California</p>
        </div>
      </div>
      <div class="b-contentInfo__block -hours">
        <div class="b-contentInfoBlock__text">
          <h4 class="b-infoBlock__title">Open Hours</h4>
          <p class="b-infoBlock__text">Mon To Fri 9:00 AM - 9:00 PM</p>
        </div>
      </div>
      <div class="b-contentInfo__block -reservation">
        <div class="b-contentInfoBlock__text">
          <h4 class="b-infoBlock__title">Reservation</h4>
          <p class="b-infoBlock__text">restaurantate@gmail.com</p>
        </div>
      </div>
    </div>
  </section>

  <section class="l-contentStory">
    <div class="b-contentStory">

      <img src="assets/img/blocks/contentStory/image__1.svg" alt="" class="b-contentStory__img">

      <div class="b-contentStoryText">
        <h4 class="b-contentStoryText__title">The Delicious Story</h4>

        <p class="b-contentStoryText__text b-text">The people, food and the prime locations make the perfect place for the friends & family to come together and have great time.</p>

        <div class="b-contentStoryText__dates">
          <div class="b-storyTextDates__block">
            <h5 class="b-storyTextDates__date">2018</h5>
            <p class="b-storyTextDates__text">Plan for this restaurant to deliver healthy food.</p>
          </div>

          <div class="b-storyTextDates__block">
            <h5 class="b-storyTextDates__date">2022</h5>
            <p class="b-storyTextDates__text">Happily in the fourth year by fulfill the motto.</p>
          </div>
        </div>

        <p class="b-contentStory__name">JOSEFINE</p>

        <img src="assets/img/blocks/contentStory/image__2.svg" alt="" class="b-contentStory__signature">

      </div>
    </div>
  </section>

</main>

<?php require( 'inc/footer.php' ); ?>
