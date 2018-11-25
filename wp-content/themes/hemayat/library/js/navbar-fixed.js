/*
* Fixed Navbar Scrolling
* Github: https://github.com/ts-de/bootstrap4-fixed-navbar
*/
jQuery(function($){
    // init nav object from dom
    var nav = $('header');
    var navHeight;
    // get heigth of the nav
    //var navHeight = nav.outerHeight();
    if ($(window).width() > 768) {
      navHeight = 420;
    }else{
      navHeight = 75;
    }

    //navHeight = 88
    //console.log(navHeight);

    // click-trigger
    $('a[href*="#"]:not([href="#"])').click(function(event) {
      scrollToSection(this);
      event.preventDefault();
    });

    // scroll-trigger
    $(document).scroll(function() {
      activateCurrentSection();
      if ( nav.hasClass('fixed-menu') ) {
        navHeight = 88;
        //console.log('fixed - 88');
      }else{
        
        navHeight = 425;
        //console.log('not  fixed - 420');
      }
    });

    // get target position and scrolls to it
    function scrollToSection(self) {
      // get the target href
      //var href = $(self).attr('href');

      var href = $(self).attr('href').split("#")[1];
      // get the target position
      var targetPos = $('#'+href).offset().top - navHeight + 5;

      // scroll to target
      $('html, body').animate({
        scrollTop: targetPos
      }, 400);
    }

    /*
    * Updates active section on scroll
    */
    // scroll-trigger
    $(document).scroll(function() {
      activateCurrentSection();
      //console.log('2');
    });

    /*
    * Updates active section on scroll
    */
    function activateCurrentSection() {
      var id; // init the id of the element that will be activated

      // get all sections
      var sections = $('.section');

      // store current position on the page when scroll is triggered
      var pos = $(document).scrollTop();

      /*
      * Exception: if last section is <100% of the screen height
      * make it active when 50% of it is visible.
      * Otherwise the last section would never activate.
      */
      var lastSection = sections[sections.length-1];  // get last section
      var lastSectionTooSmall = $(lastSection).height() < $(window).height();

      if (lastSectionTooSmall) {
        var lastSectionTopPos = $(lastSection).offset().top;
        // lastSectionTriggerPos is true if 50% of the last section is visible
        var lastSectionTriggerPos = $(window).height() + $(document).scrollTop() - ($(lastSection).height()/2);
        var lastSectionInView = lastSectionTriggerPos > lastSectionTopPos;
      }

      if (lastSectionTooSmall && lastSectionInView) {
        id = $(lastSection).attr('id');
      } else {  // else last section is >= 100% of the view check all sections to find the top one
        sections.each(function() {
          var top = $(this).offset().top - navHeight; // get the top & bottom position of the section
          var bottom = top + $(this).outerHeight();

          /*
          * if the current position is higher (deeper on the page) than the top of the section
          * and it is smaller (heiger on the page) than the bottom of the section
          * it is the active section.
          */
          if (pos >= top && pos <= bottom) {
            id = $(this).attr('id');       // store the id of this section
          }
        });
      }

      /*
       if an id was set before, activate the section in the nav
       */
      if (id) {
        nav.find('a').parent().removeClass('active');
        nav.find('a[href*="#' + id + '"]').parent().addClass('active');
      }
    }

});