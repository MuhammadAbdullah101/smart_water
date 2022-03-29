 (function ($) {
    "use strict";


 jQuery(window).load(function () {
        jQuery('.preloader').delay(3200).fadeOut();
        jQuery('.preloader-spinner').delay(3000).fadeOut('fast');
        jQuery('body').removeClass('loader-active');
       
    }); //window load End


}(jQuery));