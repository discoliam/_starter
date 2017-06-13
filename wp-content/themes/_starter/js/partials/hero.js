// ------------------------------------------------------------
// Hero
// ------------------------------------------------------------
var heroComponent = (function ($) {

  var $hero = $('.component--hero .slides');
  
  $hero.slick({
    dots: true,
    arrows: true, 
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });

})(jQuery);