jQuery(document).ready(function($){
  
  var mobile_device = false;
  var check_device = function () {
    if (/Mobi/.test(navigator.userAgent)) {
        mobile_device = true;
        $('body').addClass('is-mobile');        
    }
  }
  check_device();


  /* $.scrollify({
      section:".section",
      interstitialSection : "",
      scrollbars:true,
      easing: "swing",
      offset : 0,
      setHeights: true,
      before:function(i,panels) {
        
        var ref = panels[i].attr("data-section-name");
        $(".nav-menu .active").removeClass("active");

        var $target = $(".nav-menu").find("a[href*=\"#" + ref + "\"]");
            $target.addClass("active");
            $target.parent().addClass("active");
        
        if(i != 0) {
          $("#inner-header.home-part").removeClass("home-part");
        }else{
          $("#inner-header").addClass("home-part");
        }

      },
      afterRender:function() {
        $("#inner-header").addClass("home-part");
        $(".nav-menu a").on("click",function() {
          $.scrollify.move(this.hash);
        });

      },
      afterResize: function () {
        var current = $.scrollify.current().attr('data-section-name');
        $.scrollify.move('#'+current);
      }
    });*/
   

  if ($('body').hasClass('home')) {

    /********** Main slider **********/
      var owl = $('.owl-carousel.main_slider');
      owl.owlCarousel({
          loop:true,
          nav:true,
          dots:false,
          navText:'',
          rtl:true,
          items:1
      })
      
    /********** End Main slider **********/
  }


/****************************************************************************************************/

  /********** Game Page Size  **********/
 /*   var height_size = function () {
      if ($(window).width() > 950) {
        $("#inner-game-page").css('height' , $(window).height());
      }else{
        $("#inner-game-page").css('height' , 'auto');
      }
    }
    height_size();

    function debounce(func, wait, immediate) {
      var timeout;
      return function() {
        var context = this,
          args = arguments;
        var later = function() {
          timeout = null;
          if (!immediate) {
            func.apply(context, args);
          }
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) {
          func.apply(context, args);
        }
      };
    };

    $(window).resize(debounce(function() {
      
      height_size();
      check_device();

      if ( $('body').hasClass('home') && 
        ( (mobile_device && (window.innerWidth >= 1024))   || (!mobile_device && (window.innerWidth > 824)) ) ) {
              $.scrollify.enable();
      }else{
              $.scrollify.disable();$.scrollify.update();

      }

    }, 50));

    $(window).trigger('resize');*/

  /********** End Game Page Size  **********/


});




