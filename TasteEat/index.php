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

      <div class="b-contentComments__reviews js-testimonials">
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

  <section class="l-contentImage" style="background-image: url('assets/img/blocks/contentBG/background_1.svg')"></section>

  <section class="l-contentOffers">
    <div class="b-contentOffers">
      <h2 class="b-contentOffers__title">offers</h2>
      <h3 class="b-contentOffers__subtitle">Our Offer dishes</h3>
      <div class="b-contentOffers__text b-text">Our chefs create melt-in-your-mouth dishes that'll satiate even the fussiest eaters now the dishes are in offers use it based on hunger.</div>

      <div class="b-contentOffers__dishes">
        <div class="b-contentOffers__dish" style="background-image: url('assets/img/blocks/contentOffers/hamburger__bg.svg')">
          <div class="b-contentOffers__dishSide">
            <div class="b-contentOffers__dishPrice -hamburger"><p>Only</p><span>$10</span></div>
            <h4 class="b-contentOffers__dishTitle">50% Offer Going</h4>
            <h3 class="b-contentOffers__dishSubtitle">Chicken Burger</h3>
            <p class="b-contentOffers__dishText">Chicken burger with the tasty toppings and leaves.</p>
          </div>
          <div class="b-contentOffers__dishSide">
            <img src="assets/img/blocks/contentOffers/hamburger__img.svg" alt="" class="b-contentOffers__dishImage">
          </div>
        </div>
        <div class="b-contentOffers__dish" style="background-image: url('assets/img/blocks/contentOffers/pizza__bg.svg')">
          <div class="b-contentOffers__dishSide">
            <div class="b-contentOffers__dishPrice -pizza"><p>Only</p><span>$9</span></div>
            <h4 class="b-contentOffers__dishTitle">50% Offer Going</h4>
            <h3 class="b-contentOffers__dishSubtitle">Chicken Pizza</h3>
            <p class="b-contentOffers__dishText">Pizza with multiple flavor and the toping are mixed.</p>
          </div>
          <div class="b-contentOffers__dishSide">
            <img src="assets/img/blocks/contentOffers/pizza__img.svg" alt="" class="b-contentOffers__dishImage">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="l-contentPopularDishes">
    <div class="b-contentPopularDishes">
      <h2 class="b-contentPopularDishes__title">menu</h2>
      <h3 class="b-contentPopularDishes__subtitle">Popular Dishes</h3>
      <div class="b-contentPopularDishes__text b-text">There is a game between the waiters in restaurant to see who serves the food to each table fastest. That led to attempting the Guinness Record.</div>

      <div class="b-contentPopularDishes__menu">
        <div class="b-contentPopularDishes__dish">
          <img src="assets/img/blocks/contentPopularDishes/chicken.svg" alt="" class="b-contentPopularDishes__dishImage">
          <div class="b-contentPopularDishes__nameAndPrice -bold">
            <h4 class="b-contentPopularDishes__dishName">Chicken Manjoori</h4>
            <p class="b-contentPopularDishes__dishPrice">$15</p>
          </div>
          <div class="b-contentPopularDishes__dishText b-text">Dish relished by all age groups as a starter dish at parties.</div>
        </div>
        <div class="b-contentPopularDishes__dish">
          <img src="assets/img/blocks/contentPopularDishes/hotdog.svg" alt="" class="b-contentPopularDishes__dishImage">
          <div class="b-contentPopularDishes__nameAndPrice">
            <h4 class="b-contentPopularDishes__dishName">Hotdog</h4>
            <p class="b-contentPopularDishes__dishPrice">$10</p>
          </div>
          <div class="b-contentPopularDishes__dishText b-text">Grilled sausage served in the slit of a partially sliced bun.</div>
        </div>
        <div class="b-contentPopularDishes__dish">
          <img src="assets/img/blocks/contentPopularDishes/solmon.svg" alt="" class="b-contentPopularDishes__dishImage">
          <div class="b-contentPopularDishes__nameAndPrice">
            <h4 class="b-contentPopularDishes__dishName">Fresh Salmon</h4>
            <p class="b-contentPopularDishes__dishPrice">$5</p>
          </div>
          <div class="b-contentPopularDishes__dishText b-text">Beat the health blues with our Super Immune Blue Juice Recipe.</div>
        </div>
        <div class="b-contentPopularDishes__dish">
          <img src="assets/img/blocks/contentPopularDishes/burger.svg" alt="" class="b-contentPopularDishes__dishImage">
          <div class="b-contentPopularDishes__nameAndPrice">
            <h4 class="b-contentPopularDishes__dishName">Veg Burger</h4>
            <p class="b-contentPopularDishes__dishPrice">$10</p>
          </div>
          <div class="b-contentPopularDishes__dishText b-text">Burgers may be made from ingredients like beans.</div>
        </div>
      </div>

      <button class="b-contentPopularDishes__button">See all dishes</button>
    </div>
  </section>

  <section class="l-contentServices">
    <div class="b-contentServices">
      <div class="b-contentServices__textSide">
        <h3 class="b-contentServices__textSideTitle">What we offer</h3>
        <h4 class="b-contentServices__textSideSubtitle">Our Great Services</h4>
        <div class="b-contentServices__textSideText b-text">The atmosphere set the stage. It’s about more than just a dining room away from your home. food takes the spotlight as guests.</div>
      </div>
      <div class="b-contentServices__imageSide">
        <div class="b-contentServices__imageSideBlock">
          <img src="assets/img/blocks/contentServices/calendar.svg" alt="" class="b-contentServices__imageSideBlockImage">
          <p class="b-contentServices__imageSideBlockText">Opened 24/7</p>
        </div>
        <div class="b-contentServices__imageSideBlock">
          <img src="assets/img/blocks/contentServices/menu.svg" alt="" class="b-contentServices__imageSideBlockImage">
          <p class="b-contentServices__imageSideBlockText">Special Menus</p>
        </div>
        <div class="b-contentServices__imageSideBlock">
          <img src="assets/img/blocks/contentServices/delivery.svg" alt="" class="b-contentServices__imageSideBlockImage">
          <p class="b-contentServices__imageSideBlockText">Home Delivery</p>
        </div>
      </div>
    </div>
  </section>

  <section class="l-contentBlog">
    <div class="b-contentBlog">
      <h3 class="b-contentBlog__title">Blog</h3>
      <h4 class="b-contentBlog__subtitle">Be First Who Read News</h4>
      <div class="b-contentBlog__text b-text">Explore the latest stories about our dishes, offers, events and future plans here.</div>

      <div class="b-contentBlog__newsBlock">
        <div class="b-contentBlog__news">
          <div class="b-contentBlog__newsImageWrapper">
            <img src="assets/img/blocks/contentBlog/image_1.svg" alt="" class="b-contentBlog__newsImage">
            <button class="b-contentBlog__newsButton">View More</button>
          </div>
          <div class="b-contentBlog__newsText">
            <div class="b-contentBlog__newsTextTop">
              <h3 class="b-contentBlog__newsTextTopTitle">Delicious</h3>
              <h3 class="b-contentBlog__newsTextTopDate">March 19, 2022</h3>
            </div>
            <div class="b-contentBlog__newsTextBottom">
              <h4 class="b-contentBlog__newsTextBottomTitle">The Legend of US Cuisine: The Story of Hungry People</h4>
              <div class="b-contentBlog__newsTextBottomText b-text">Capitalize on low-hanging fruit to identify a ballpark value added matrix economically and the creative activity to beta test override the food quality.</div>
            </div>
          </div>
        </div>
        <div class="b-contentBlog__news">
          <div class="b-contentBlog__newsImageWrapper">
            <img src="assets/img/blocks/contentBlog/image_2.svg" alt="" class="b-contentBlog__newsImage">
            <button class="b-contentBlog__newsButton">View More</button>
          </div>
          <div class="b-contentBlog__newsText">
            <div class="b-contentBlog__newsTextTop">
              <h3 class="b-contentBlog__newsTextTopTitle">Cooking</h3>
              <h3 class="b-contentBlog__newsTextTopDate">March 19, 2022</h3>
            </div>
            <div class="b-contentBlog__newsTextBottom">
              <h4 class="b-contentBlog__newsTextBottomTitle">The Most Popular Delicious Food of Mediterranean Cuisine</h4>
              <div class="b-contentBlog__newsTextBottomText b-text">Strategies on low-hanging fruit to identify a ballpark value added matrix economically and the creative activity to beta test override the food quality.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require( 'inc/footer.php' ); ?>
