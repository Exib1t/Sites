// Authors: %Author Name%

$(function() {
  // initFunctionExample();
  hamburger();
  slider();
  imageOpacity();
  dataPicker();
});

$(window).on('resize', function() {

});

$(window).on('load', function() {

});

/*
function initFunctionExample() {

}
*/
function hamburger() {
  const hamburger = document.querySelector('.hamburger');
  const list = document.querySelector('.b-mainNavigation');

  hamburger.addEventListener('click', toggleClass);

  function toggleClass() {
    hamburger.classList.toggle('is-active');
    list.classList.toggle('-state-open');
  }

  window.onresize = function () {
    if (window.innerWidth > 992) {
      document.querySelector('.hamburger').classList.remove('is-active');
      document.querySelector('.b-mainNavigation').classList.remove('-state-open');
    }
  };
}

function slider() {
  $('.js-testimonials').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
  });
}

function imageOpacity() {
  $('.b-contentBlog__newsButton').each(function () {

    this.addEventListener('mouseover', function () {
      let elem = this.closest('.b-contentBlog__newsImageWrapper');
      elem.classList.add('-bright');
    });

    this.addEventListener('mouseout', function () {
      let elem = this.closest('.b-contentBlog__newsImageWrapper');
      elem.classList.remove('-bright');
    });

  });
}

function dataPicker() {
  $('.js-inputData').datepicker({
    altField: '#actualDate',

  });
}
