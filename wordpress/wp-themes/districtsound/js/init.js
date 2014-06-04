(function($){


  /**
   * ON DOM LOAD
   *
   */

  $(document).ready(function() {


    /**
     * Menu
     *
     */

    var nb = $('#navbtn');
    var n = $('#topnav #nav');

    $(window).on('resize', function(){

      if($(this).width() < 570 && n.hasClass('keep-nav-closed')) {
        // if the nav menu and nav button are both visible,
        // then the responsive nav transitioned from open to non-responsive, then back again.
        // re-hide the nav menu and remove the hidden class
        $('#topnav #nav').hide().removeAttr('class');
      }
      if(nb.is(':hidden') && n.is(':hidden') && $(window).width() > 820) {
        // if the navigation menu and nav button are both hidden,
        // then the responsive nav is closed and the window resized larger than 820.
        // just display the nav menu which will auto-hide at <820px width.
        $('#topnav #nav').show().addClass('keep-nav-closed');
      }
    });


    //    $('#topnav nav a,#topnav h1 a,#btmnav nav a').on('click', function(e){
    //      e.preventDefault(); // stop all hash(#) anchor links from loading
    //    });

    $('#navbtn').on('click', function(e){
      e.preventDefault();
      $("#topnav #nav").slideToggle(350);
    });


    /**
     * Home page slider
     *
     */

    $('.example2').wmuSlider({
      touch: true,
      animation: 'slide'
    });


    /**
     * Splash
     * Show splash if not cookied
     * Cookie lasts for the duration of the browser session
     *
     * To test: remove cookie via console with:
     * jQuery.removeCookie('hasSplashed', {path: '/'});
     */
    var $splash = $("#splash");
    var hasSplashed = $.cookie('hasSplashed');
    if (hasSplashed) {
      $splash.hide();
    } else {

      // set splash to remove on click
      $splash.on("click", function(){
        $splash.fadeOut(1000);
      });

      // set splash to hide automatically after 2 seconds
      //$splash.delay(2000).fadeOut(1000);

      // set cookie so splash disappears
      $.cookie('hasSplashed', true, { path: '/' });
    }



    /**
     * Tabs
     *
     */
    var $tabs = $(".tab");
    var $tabTriggers = $(".tab-trigger a");

    $tabs.hide();
    $tabs.first().show();

    $tabTriggers.click(function(e){
      e.preventDefault();
      var $trigger = $(this);
      $tabTriggers.closest(".tab-trigger").removeClass('active');

      $trigger.parent().addClass('active');
      var currentTab = $trigger.attr('href');
      $tabs.hide();
      $(currentTab).show();
    });


  });

})(jQuery);
