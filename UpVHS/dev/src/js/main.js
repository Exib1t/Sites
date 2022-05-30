// Authors: %Author Name%

$(function() {
  // initFunctionExample();
  hamburger();
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
    if (window.innerWidth > 945) {
      document.querySelector('.hamburger').classList.remove('is-active');
      document.querySelector('.b-mainNavigation').classList.remove('-state-open');
    }
  };
}
