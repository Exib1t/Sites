// Authors: %Author Name%

$(function() {
  slider();
  hamburger();
});

$(window).on('resize', function() {

});

$(window).on('load', function() {

});

function slider() {
  $('.js-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 1366,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });
}

function hamburger() {
  const hamburger = document.querySelector('.hamburger');
  const list = document.querySelector('.l-mainNavigation');

  hamburger.addEventListener('click', toggleClass);

  function toggleClass() {
    hamburger.classList.toggle('is-active');
    list.classList.toggle('-state-open');
  }

  window.onresize = function () {
    if (window.innerWidth > 992) {
      document.querySelector('.hamburger').classList.remove('is-active');
      document.querySelector('.l-mainNavigation').classList.remove('-state-open');
    }
  };
}
