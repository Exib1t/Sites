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
        <div class="b-contentGreetingText__text b-text"><p>The people, food and the prime locations make the perfect place good friends & family to come together and have great time.</p></div>
        <a class="b-contentGreetingText__button b-button" href="#menu">View Menu</a>
      </div>
      <div class="b-contentGreetingImg">
        <img src="assets/img/blocks/contentGreeting/contentGreeting__image.png" alt="" class="b-contentGreetingImg__img">
      </div>
    </div>
  </section>

  <section class="l-contentInfo">
    <div class="b-contentInfo">
      <div class="b-contentInfo__block -location">
        <img src="assets/img/blocks/contentInfo/Location.png" alt="" class="b-contentInfo__blockImg">
        <div class="b-contentInfoBlock__text">
          <h4 class="b-infoBlock__title">Locate Us</h4>
          <p class="b-infoBlock__text">Riverside 25, San Diego, California</p>
        </div>
      </div>
      <div class="b-contentInfo__block -hours">
        <img src="assets/img/blocks/contentInfo/TimeOpen.png" alt="" class="b-contentInfo__blockImg">
        <div class="b-contentInfoBlock__text">
          <h4 class="b-infoBlock__title">Open Hours</h4>
          <p class="b-infoBlock__text">Mon To Fri 9:00 AM - 9:00 PM</p>
        </div>
      </div>
      <div class="b-contentInfo__block -reservation">
        <img src="assets/img/blocks/contentInfo/Reservation.png" alt="" class="b-contentInfo__blockImg">
        <div class="b-contentInfoBlock__text">
          <h4 class="b-infoBlock__title">Reservation</h4>
          <p class="b-infoBlock__text">restaurantate@gmail.com</p>
        </div>
      </div>
    </div>
  </section>

  <section class="l-contentStory">
    <div class="b-contentStory">

      <img src="assets/img/blocks/contentStory/image__1.jpg" alt="" class="b-contentStory__img">

      <div class="b-contentStoryText">
        <h4 class="b-contentStoryText__title">The Delicious Story</h4>

        <div class="b-contentStoryText__text b-text"><p>The people, food and the prime locations make the perfect place for the friends & family to come together and have great time.</p></div>

        <div class="b-contentStoryText__dates">
          <div class="b-storyTextDates__block">
            <h5 class="b-storyTextDates__date">2018</h5>
            <div class="b-storyTextDates__text b-text"><p>Plan for this restaurant to deliver healthy food.</p></div>
          </div>

          <div class="b-storyTextDates__block">
            <h5 class="b-storyTextDates__date">2022</h5>
            <div class="b-storyTextDates__text b-text"><p>Happily in the fourth year by fulfill the motto.</p></div>
          </div>
        </div>

        <p class="b-contentStory__name">JOSEFINE</p>

        <img src="assets/img/blocks/contentStory/image__2.svg" alt="" class="b-contentStory__signature">

      </div>
    </div>
  </section>

  <section class="l-contentMenu" id="menu">
    <div class="b-contentMenu">
      <h3 class="b-contentMenu__title">Menu</h3>

      <div class="b-contentMenu__content">
        <div class="b-contentMenu__special">
          <h2 class="b-menuSpecial__title">Try Our Special dishes</h2>
          <div class="b-menuSpecial__text b-text"><p>Every time you perfectly dine with us, it should happy for great inspired food in an environment designed with individual touches unique to the local area.</p></div>
          <img src="assets/img/blocks/contentMenu/image_1.jpg" alt="" class="b-menuSpecial__img">
          <a class="b-menuSpecial__button" href="#">See all dishes</a>
        </div>

        <div class="b-contentMenu__list">
          <h3 class="b-menuList__title">Starters</h3>
          <ul class="b-menuList__list">
            <li class="b-menuList__item -raw_scallops">
              <img src="assets/img/blocks/contentMenu/raw-scallops.png" alt="" class="b-menuList__img">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Raw Scallops from Erquy</h5>
                <div class="b-itemTextWrapper">
                  <p class="b-itemText__text">Shuck the scallop to that used for oysters</p>
                  <p class="b-itemText__price">$40</p>
                </div>
              </div>
            </li>

            <li class="b-menuList__item -spring_roll">
              <img src="assets/img/blocks/contentMenu/spring-roll.png" alt="" class="b-menuList__img">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Spring Roll</h5>
                <div class="b-itemTextWrapper">
                  <p class="b-itemText__text">Add oil to a hot pan spring onion whites</p>
                  <p class="b-itemText__price">$20</p>
                </div>
              </div>
            </li>

            <li class="b-menuList__item -french_onion">
              <img src="assets/img/blocks/contentMenu/french-onion.png" alt="" class="b-menuList__img">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">French Onion Soup</h5>
                <div class="b-itemTextWrapper">
                  <p class="b-itemText__text">Wheat flour, apple cider vinegar, bread</p>
                  <p class="b-itemText__price">$25</p>
                </div>
              </div>
            </li>

            <li class="b-menuList__item -tomato_bruschetta">
              <img src="assets/img/blocks/contentMenu/tomato-bruschetta.png" alt="" class="b-menuList__img">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Tomato Bruschetta</h5>
                <div class="b-itemTextWrapper">
                  <p class="b-itemText__text">Bread, olive oil, garlic, black pepper</p>
                  <p class="b-itemText__price">$30</p>
                </div>
              </div>
            </li>
          </ul>

          <h3 class="b-menuList__title">Main Dish</h3>
          <ul class="b-menuList__list">
            <li class="b-menuList__item -grilled_salmon">
              <img src="assets/img/blocks/contentMenu/grilled-salmon.png" alt="" class="b-menuList__img">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Grilled Salmon with Dill Sauce</h5>
                <div class="b-itemTextWrapper">
                  <p class="b-itemText__text">Brown sugar, salmon fillet, Dijon mustard</p>
                  <p class="b-itemText__price">$40</p>
                </div>
              </div>
            </li>

            <li class="b-menuList__item -roast_beef">
              <img src="assets/img/blocks/contentMenu/roast-beef.png" alt="" class="b-menuList__img">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Roast Beef with Vegetable</h5>
                <div class="b-itemTextWrapper">
                  <p class="b-itemText__text">Green beans, rib eye, olive oil, beef</p>
                  <p class="b-itemText__price">$20</p>
                </div>
              </div>
            </li>

            <li class="b-menuList__item -marrkesh_curruy">
              <img src="assets/img/blocks/contentMenu/marrkesh-curruy.png" alt="" class="b-menuList__img">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Marrkesh Vegetetarian Curruy</h5>
                <div class="b-itemTextWrapper">
                  <p class="b-itemText__text">Sweet potato, eggplant, garbanzo bean</p>
                  <p class="b-itemText__price">$25</p>
                </div>
              </div>
            </li>

            <li class="b-menuList__item -spicy_potato">
              <img src="assets/img/blocks/contentMenu/spicy-potato.png" alt="" class="b-menuList__img">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Spicy Vegan Potato Curry</h5>
                <div class="b-itemTextWrapper">
                  <p class="b-itemText__text">Coconut milk, beans, potatoes, curry powder</p>
                  <p class="b-itemText__price">$35</p>
                </div>
              </div>
            </li>
          </ul>

          <h3 class="b-menuList__title">Dessert</h3>
          <ul class="b-menuList__list">
            <li class="b-menuList__item -apple_pie">
              <img src="assets/img/blocks/contentMenu/apple-pie.png" alt="" class="b-menuList__img">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Apple Pie with Cream</h5>
                <div class="b-itemTextWrapper">
                  <p class="b-itemText__text">Whipping cream, egg white, cinnamon</p>
                  <p class="b-itemText__price">$15</p>
                </div>
              </div>
            </li>

            <li class="b-menuList__item -lemon_pie">
              <img src="assets/img/blocks/contentMenu/lemon-pie.png" alt="" class="b-menuList__img">
              <div class="b-listItem__text">
                <h5 class="b-itemText__title">Lemon Meringue Pie</h5>
                <div class="b-itemTextWrapper">
                  <p class="b-itemText__text">Frozen pie crust, meringue, lemon</p>
                  <p class="b-itemText__price">$30</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="l-contentComments">
    <div class="b-contentComments">
      <div class="b-contentComments__top">
        <h2 class="b-contentComments__title">Testimonial</h2>
        <h3 class="b-contentComments__subtitle">our clients say</h3>
        <div class="b-contentComments__text b-text"><p>We love to hear from customers, so please leave a comment or say hello in an email.</p></div>
      </div>

      <div class="b-contentComments__reviews js-testimonials">
        <div class="b-commentsReview__wrapper">
          <div class="b-commentsReview__review">
            <div class="b-commentsReview__about">
              <img src="assets/img/blocks/contentComments/natashaD.png" alt="" class="b-commentsReview__avatar">
              <div class="b-commentsReview__info">
                <p class="b-commentsReview__name">Natasha D</p>
                <p class="b-commentsReview__place">Newyork</p>
              </div>
            </div>

            <div class="b-commentsReview__text b-text"><p>They known for its fabulous taste and food. Anywhere you go your hunger is satisfied. The best chicken & burgers those are yummy.</p></div>
          </div>
        </div>

        <div class="b-commentsReview__wrapper">
          <div class="b-commentsReview__review">
            <div class="b-commentsReview__about">
              <img src="assets/img/blocks/contentComments/JackS.png" alt="" class="b-commentsReview__avatar">
              <div class="b-commentsReview__info">
                <p class="b-commentsReview__name">Jack Sparrow</p>
                <p class="b-commentsReview__place">Salt Lake City</p>
              </div>
            </div>

            <div class="b-commentsReview__text b-text"><p>I have visited this fantastic restaurant on several occasions, food is absolutely outstanding & attention to detail is in league of its own.</p></div>
          </div>
        </div>

        <div class="b-commentsReview__wrapper">
          <div class="b-commentsReview__review">
            <div class="b-commentsReview__about">
              <img src="assets/img/blocks/contentComments/Martin.png" alt="" class="b-commentsReview__avatar">
              <div class="b-commentsReview__info">
                <p class="b-commentsReview__name">Martin</p>
                <p class="b-commentsReview__place">San Diego</p>
              </div>
            </div>

            <div class="b-commentsReview__text b-text"><p>Perfectly known for its fabulous taste and food. Anywhere your hunger is satisfied. They give best fried chicken and burgers those are yummy.</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="l-contentImage" style="background-image: url('assets/img/blocks/contentBG/background_1.jpg')"></section>

  <section class="l-contentOffers">
    <div class="b-contentOffers">
      <h2 class="b-contentOffers__title">offers</h2>
      <h3 class="b-contentOffers__subtitle">Our Offer dishes</h3>
      <div class="b-contentOffers__text b-text"><p>Our chefs create melt-in-your-mouth dishes that'll satiate even the fussiest eaters now the dishes are in offers use it based on hunger.</p></div>

      <div class="b-contentOffers__dishes">
        <div class="b-contentOffers__dish" style="background-image: url('assets/img/blocks/contentOffers/hamburger__bg.jpg')">
          <div class="b-contentOffers__dishSide">
            <div class="b-contentOffers__dishPrice -hamburger"><p>Only</p><span>$10</span></div>
            <h4 class="b-contentOffers__dishTitle">50% Offer Going</h4>
            <h3 class="b-contentOffers__dishSubtitle">Chicken Burger</h3>
            <div class="b-contentOffers__dishText b-text"><p>Chicken burger with the tasty toppings and leaves.</p></div>
          </div>
          <div class="b-contentOffers__dishSide">
            <img src="assets/img/blocks/contentOffers/hamburger__img.png" alt="" class="b-contentOffers__dishImage">
          </div>
        </div>
        <div class="b-contentOffers__dish" style="background-image: url('assets/img/blocks/contentOffers/pizza__bg.jpg')">
          <div class="b-contentOffers__dishSide">
            <div class="b-contentOffers__dishPrice -pizza"><p>Only</p><span>$9</span></div>
            <h4 class="b-contentOffers__dishTitle">50% Offer Going</h4>
            <h3 class="b-contentOffers__dishSubtitle">Chicken Pizza</h3>
            <div class="b-contentOffers__dishText b-text"><p>Pizza with multiple flavor and the toping are mixed.</p></div>
          </div>
          <div class="b-contentOffers__dishSide">
            <img src="assets/img/blocks/contentOffers/pizza__img.png" alt="" class="b-contentOffers__dishImage">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="l-contentPopularDishes">
    <div class="b-contentPopularDishes">
      <h2 class="b-contentPopularDishes__title">menu</h2>
      <h3 class="b-contentPopularDishes__subtitle">Popular Dishes</h3>
      <div class="b-contentPopularDishes__text b-text"><p>There is a game between the waiters in restaurant to see who serves the food to each table fastest. That led to attempting the Guinness Record.</p></div>

      <div class="b-contentPopularDishes__menu">
        <div class="b-contentPopularDishes__dish">
          <img src="assets/img/blocks/contentPopularDishes/chicken.jpg" alt="" class="b-contentPopularDishes__dishImage">
          <div class="b-contentPopularDishes__nameAndPrice -bold">
            <h4 class="b-contentPopularDishes__dishName">Chicken Manjoori</h4>
            <p class="b-contentPopularDishes__dishPrice">$15</p>
          </div>
          <div class="b-contentPopularDishes__dishText b-text"><p>Dish relished by all age groups as a starter dish at parties.</p></div>
        </div>
        <div class="b-contentPopularDishes__dish">
          <img src="assets/img/blocks/contentPopularDishes/hotdog.jpg" alt="" class="b-contentPopularDishes__dishImage">
          <div class="b-contentPopularDishes__nameAndPrice">
            <h4 class="b-contentPopularDishes__dishName">Hotdog</h4>
            <p class="b-contentPopularDishes__dishPrice">$10</p>
          </div>
          <div class="b-contentPopularDishes__dishText b-text"><p>Grilled sausage served in the slit of a partially sliced bun.</p></div>
        </div>
        <div class="b-contentPopularDishes__dish">
          <img src="assets/img/blocks/contentPopularDishes/solmon.jpg" alt="" class="b-contentPopularDishes__dishImage">
          <div class="b-contentPopularDishes__nameAndPrice">
            <h4 class="b-contentPopularDishes__dishName">Fresh Salmon</h4>
            <p class="b-contentPopularDishes__dishPrice">$5</p>
          </div>
          <div class="b-contentPopularDishes__dishText b-text"><p>Beat the health blues with our Super Immune Blue Juice Recipe.</p></div>
        </div>
        <div class="b-contentPopularDishes__dish">
          <img src="assets/img/blocks/contentPopularDishes/burger.jpg" alt="" class="b-contentPopularDishes__dishImage">
          <div class="b-contentPopularDishes__nameAndPrice">
            <h4 class="b-contentPopularDishes__dishName">Veg Burger</h4>
            <p class="b-contentPopularDishes__dishPrice">$10</p>
          </div>
          <div class="b-contentPopularDishes__dishText b-text"><p>Burgers may be made from ingredients like beans.</p></div>
        </div>
      </div>

      <a class="b-contentPopularDishes__button" href="#">See all dishes</a>
    </div>
  </section>

  <section class="l-contentServices">
    <div class="b-contentServices">
      <div class="b-contentServices__textSide">
        <h3 class="b-contentServices__textSideTitle">What we offer</h3>
        <h4 class="b-contentServices__textSideSubtitle">Our Great Services</h4>
        <div class="b-contentServices__textSideText b-text"><p>The atmosphere set the stage. It’s about more than just a dining room away from your home. food takes the spotlight as guests.</p></div>
      </div>
      <div class="b-contentServices__imageSide">
        <div class="b-contentServices__imageSideBlock">
          <img src="assets/img/blocks/contentServices/calendar.png" alt="" class="b-contentServices__imageSideBlockImage">
          <p class="b-contentServices__imageSideBlockText">Opened 24/7</p>
        </div>
        <div class="b-contentServices__imageSideBlock">
          <img src="assets/img/blocks/contentServices/menu.png" alt="" class="b-contentServices__imageSideBlockImage">
          <p class="b-contentServices__imageSideBlockText">Special Menus</p>
        </div>
        <div class="b-contentServices__imageSideBlock">
          <img src="assets/img/blocks/contentServices/delivery.png" alt="" class="b-contentServices__imageSideBlockImage">
          <p class="b-contentServices__imageSideBlockText">Home Delivery</p>
        </div>
      </div>
    </div>
  </section>

  <section class="l-contentBlog">
    <div class="b-contentBlog">
      <h3 class="b-contentBlog__title">Blog</h3>
      <h4 class="b-contentBlog__subtitle">Be First Who Read News</h4>
      <div class="b-contentBlog__text b-text"><p>Explore the latest stories about our dishes, offers, events and future plans here.</p></div>

      <div class="b-contentBlog__newsBlock">
        <div class="b-contentBlog__news">
          <div class="b-contentBlog__newsImageWrapper">
            <img src="assets/img/blocks/contentBlog/image_1.jpg" alt="" class="b-contentBlog__newsImage">
            <a class="b-contentBlog__newsButton">View More</a>
          </div>
          <div class="b-contentBlog__newsText">
            <div class="b-contentBlog__newsTextTop">
              <h3 class="b-contentBlog__newsTextTopTitle">Delicious</h3>
              <h3 class="b-contentBlog__newsTextTopDate">March 19, 2022</h3>
            </div>
            <div class="b-contentBlog__newsTextBottom">
              <h4 class="b-contentBlog__newsTextBottomTitle">The Legend of US Cuisine: The Story of Hungry People</h4>
              <div class="b-contentBlog__newsTextBottomText b-text"><p>Capitalize on low-hanging fruit to identify a ballpark value added matrix economically and the creative activity to beta test override the food quality.</p></div>
            </div>
          </div>
        </div>
        <div class="b-contentBlog__news">
          <div class="b-contentBlog__newsImageWrapper">
            <img src="assets/img/blocks/contentBlog/image_2.jpg" alt="" class="b-contentBlog__newsImage">
            <a class="b-contentBlog__newsButton">View More</a>
          </div>
          <div class="b-contentBlog__newsText">
            <div class="b-contentBlog__newsTextTop">
              <h3 class="b-contentBlog__newsTextTopTitle">Cooking</h3>
              <h3 class="b-contentBlog__newsTextTopDate">March 19, 2022</h3>
            </div>
            <div class="b-contentBlog__newsTextBottom">
              <h4 class="b-contentBlog__newsTextBottomTitle">The Most Popular Delicious Food of Mediterranean Cuisine</h4>
              <div class="b-contentBlog__newsTextBottomText b-text"><p>Strategies on low-hanging fruit to identify a ballpark value added matrix economically and the creative activity to beta test override the food quality.</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="l-contentReservation" id="reservation" style="background-image: url('assets/img/blocks/contentReservation/background.jpg')">
    <div class="b-contentReservation">
      <div class="b-contentReservation__wrapper">
        <h3 class="b-contentReservation__title">reservation</h3>
        <h4 class="b-contentReservation__subtitle">Book Your Table</h4>
        <form action="" class="b-contentReservation__form">
          <div class="b-contentReservation__formRow">
            <label for="">
              <input type="text" placeholder="Name">
            </label>
            <label for="">
              <input type="email" placeholder="Email">
            </label>
          </div>
          <div class="b-contentReservation__formRow">
            <label for="">
              <input type="number" placeholder="Persons">
            </label>
            <label for="">
              <input type="text" placeholder="Timing" class="js-timePicker">
            </label>
            <label for="">
              <input type="text" placeholder="Date" class="js-inputData">
            </label>
          </div>
          <button class="b-contentReservation__button">Book A Table</button>
        </form>
      </div>
    </div>
  </section>
</main>

<?php require( 'inc/footer.php' ); ?>
