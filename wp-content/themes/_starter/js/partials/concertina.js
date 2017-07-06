// ------------------------------------------------------------
// Hero
// ------------------------------------------------------------
var concertinaComponent = (function ($) {

  var $concertinaItem = $('.concertina-item'),
      $concertinaDesc = $('.concertina-item__desc'),
      concertinaOpenClass = $('concertina-item--open');
  
  $concertinaItem.click(function(){
    $(this).toggleClass(concertinaOpenClass).find($concertinaDesc).slideToggle();
  });

})(jQuery);