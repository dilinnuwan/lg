(function($) {
  'use strict';
  if ($("#lightgallery").length) {
    $("#lightgallery").lightGallery();
  }

  if ($("#lightgallery-without-thumb").length) {
    $("#lightgallery-without-thumb").lightGallery({
      thumbnail: false,
      animateThumb: false,
      showThumbByDefault: false,
      share:false,
      facebook: false,
      width: '1000px',
      height: '670px',
      mode: 'lg-fade',
      addClass: 'fixed-size',
      counter: false,
      download: false,
      startClass: '',
      enableSwipe: false,
      enableDrag: false,
    });
  }

  if ($("#video-gallery").length) {
    $("#video-gallery").lightGallery();
  }
})(jQuery);