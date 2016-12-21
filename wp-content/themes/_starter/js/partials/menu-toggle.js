// ------------------------------------------------------------
// Menu Toggle
// ------------------------------------------------------------
var menuToggle = (function ($) {

  var $body = $('body');
      $menuToggle = $('#menu-toggle');

  menuToggle.click(function(){
    $body.toggleClass("open");
  });

})(jQuery);