// Authors: %Author Name%

$(function() {
  // initFunctionExample();
  slider();
});

$(window).on('resize', function() {

});

$(window).on('load', function() {

});

/*
function initFunctionExample() {

}
*/

function slider() {
  $('.js-testimonials').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
  });
}
