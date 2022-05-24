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

  <section class="l-contentMenu">
    <div class="b-contentMenu">
      <h3 class="b-contentMenu__title">Menu</h3>

      <div class="b-contentMenu__content">
        <div class="b-contentMenu__special">
          <h2 class="b-menuSpecial__title">Try Our Special dishes</h2>
          <p class="b-menuSpecial__text b-text">Every time you perfectly dine with us, it should happy for great inspired food in an environment designed with individual touches unique to the local area.</p>
          <img src="assets/img/blocks/contentMenu/image_1.svg" alt="" class="b-menuSpecial__img">
          <button class="b-menuSpecial__button">See all dishes</button>
        </div>

        <div class="b-contentMenu__list">
          <h3 class="b-menuList__title">Starters</h3>
          <ul class="b-menuList__list">
            <li class="b-menuList__item -raw_scallops">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Raw Scallops from Erquy</h5>
                <p class="b-itemText__text b-text">Shuck the scallop to that used for oysters <span>________________________</span> $40</p>
              </div>
            </li>

            <li class="b-menuList__item -spring_roll">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Spring Roll</h5>
                <p class="b-itemText__text b-text">Add oil to a hot pan spring onion whites <span>________________________</span> $20</p>
              </div>
            </li>

            <li class="b-menuList__item -french_onion">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">French Onion Soup</h5>
                <p class="b-itemText__text b-text">Wheat flour, apple cider vinegar, bread <span>_________________________</span> $25</p>
              </div>
            </li>

            <li class="b-menuList__item -tomato_bruschetta">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Tomato Bruschetta</h5>
                <p class="b-itemText__text b-text">Bread, olive oil, garlic, black pepper <span>____________________________</span> $30</p>
              </div>
            </li>
          </ul>

          <h3 class="b-menuList__title">Main Dish</h3>
          <ul class="b-menuList__list">
            <li class="b-menuList__item -grilled_salmon">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Grilled Salmon with Dill Sauce</h5>
                <p class="b-itemText__text b-text">Brown sugar, salmon fillet, Dijon mustard <span>________________________</span> $40</p>
              </div>
            </li>

            <li class="b-menuList__item -roast_beef">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Roast Beef with Vegetable</h5>
                <p class="b-itemText__text b-text">Green beans, rib eye, olive oil, beef <span>_____________________________</span> $20</p>
              </div>
            </li>

            <li class="b-menuList__item -marrkesh_curruy">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Marrkesh Vegetetarian Curruy</h5>
                <p class="b-itemText__text b-text">Sweet potato, eggplant, garbanzo bean <span>_________________________</span> $25</p>
              </div>
            </li>

            <li class="b-menuList__item -spicy_potato">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Spicy Vegan Potato Curry</h5>
                <p class="b-itemText__text b-text">Coconut milk, beans, potatoes, curry powder <span>______________________</span> $35</p>
              </div>
            </li>
          </ul>

          <h3 class="b-menuList__title">Dessert</h3>
          <ul class="b-menuList__list">
            <li class="b-menuList__item -apple_pie">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Apple Pie with Cream</h5>
                <p class="b-itemText__text b-text">Whipping cream, egg white, cinnamon <span>___________________________</span> $15</p>
              </div>
            </li>

            <li class="b-menuList__item -lemon_pie">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Lemon Meringue Pie</h5>
                <p class="b-itemText__text b-text">Frozen pie crust, meringue, lemon <span>______________________________</span> $30</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="l-contentComments">
    <div class="b-contentComments">
      <h2 class="b-contentComments__title">Testimonial</h2>

      <h3 class="b-contentComments__subtitle">our clients say</h3>
      <p class="b-contentComments__text b-text">We love to hear from customers, so please leave a comment or say hello in an email.</p>

      <div class="b-contentComments__reviews">
        <div class="b-commentsReview__review">
          <div class="b-commentsReview__about">
            <img src="assets/img/blocks/contentComments/natashaD.svg" alt="" class="b-commentsReview__avatar">
            <div class="b-commentsReview__info">
              <p class="b-commentsReview__name">Natasha D</p>
              <p class="b-commentsReview__place">Newyork</p>
            </div>
          </div>

          <p class="b-commentsReview__text b-text">They known for its fabulous taste and food. Anywhere you go your hunger is satisfied. The best chicken & burgers those are yummy.</p>
        </div>

        <div class="b-commentsReview__review">
          <div class="b-commentsReview__about">
            <img src="assets/img/blocks/contentComments/JackS.svg" alt="" class="b-commentsReview__avatar">
            <div class="b-commentsReview__info">
              <p class="b-commentsReview__name">Jack Sparrow</p>
              <p class="b-commentsReview__place">Salt Lake City</p>
            </div>
          </div>

          <p class="b-commentsReview__text b-text">I have visited this fantastic restaurant on several occasions, food is absolutely outstanding & attention to detail is in league of its own.</p>
        </div>

        <div class="b-commentsReview__review">
          <div class="b-commentsReview__about">
            <img src="assets/img/blocks/contentComments/Martin.svg" alt="" class="b-commentsReview__avatar">
            <div class="b-commentsReview__info">
              <p class="b-commentsReview__name">Martin</p>
              <p class="b-commentsReview__place">San Diego</p>
            </div>
          </div>

          <p class="b-commentsReview__text b-text">Perfectly known for its fabulous taste and food. Anywhere your hunger is satisfied. They give best fried chicken and burgers those are yummy.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="l-contentImage"></section>
</main>

<?php require( 'inc/footer.php' ); ?>
