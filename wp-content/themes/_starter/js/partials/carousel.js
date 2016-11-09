// ------------------------------------------------------------
// Carousel
// ------------------------------------------------------------
var carousel = (function ($) {

  $('.example').slick({
    dots: true,
    arrows: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    focusOnSelect: false,
    adaptiveHeight: false,
    accessibility: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      }
    ]
  });

})(jQuery);