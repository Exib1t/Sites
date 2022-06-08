// Authors: %Author Name%

$(function() {
  slider();
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
