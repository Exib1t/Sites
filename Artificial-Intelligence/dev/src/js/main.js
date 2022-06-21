// Authors: %Author Name%

$(function() {
  slider();
  hamburger();
  scrollAnimation();
  formStyler();
});

$(window).on('resize', function() {

});

$(window).on('load', function() {
  classRemover();
});

function slider() {
  $('.js-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 1560,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1270,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 678,
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
    scrollDisable();
  }

  function scrollDisable() {
    if(hamburger.classList.contains('is-active')) {
      document.body.style.overflow = 'hidden';
    } else {
      document.body.style.overflow = 'auto';
    }
  }

  window.onresize = function () {
    scrollDisable();
    if (window.innerWidth > 992) {
      document.querySelector('.hamburger').classList.remove('is-active');
      document.querySelector('.l-mainNavigation').classList.remove('-state-open');
    }
  };
}

function classRemover() {
  $('.b-mainNavigation__item.-state_active > .b-mainNavigation__link').removeClass('.hvr-underline-from-left');
}

function scrollAnimation() {
  AOS.init();
}

function formStyler() {
  $('.js-select').styler();
}
