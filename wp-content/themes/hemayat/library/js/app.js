jQuery(document).ready(function($){
  
  var mobile_device = false;
  var check_device = function () {
    if (/Mobi/.test(navigator.userAgent)) {
        mobile_device = true;
        $('body').addClass('is-mobile');        
    }
  }
  check_device();

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

    /********** partners slider **********/
      var owlp = $('.owl-carousel.partner-slider');
      owlp.owlCarousel({
          loop:false,
          nav:true,
          dots:false,
          navText:'',
          rtl:true,
          margin:12,
          //items:6,
          responsive:{
              0:{
                  items:2
              },
              600:{
                  items:3
              },
              800:{
                  items:4
              },
              1200:{
                  items:6
              }
          }
      })
      
    /********** End partners slider **********/

    /********** category slider **********/
      var owlc = $('.owl-carousel.cat-slider');
      owlc.owlCarousel({
          loop:false,
          nav:true,
          dots:false,
          navText:'',
          rtl:true,
          margin:12,
          //items:6,
          responsive:{
              0:{
                  items:1
              },
              420:{
                  items:2
              },
              650:{
                  items:3
              },
              991:{
                  items:4
              }
          }
      })
      
    /********** End category slider **********/

    /********** Scrollbar in faq tabs **********/
      $(".tab-pane ul").mCustomScrollbar({
         theme: "light-thin",
          mouseWheel: true 
      });
    /********** End Scrollbar in in faq tabs **********/

    /********** recommendation slider **********/
      var owlrecom = $('.owl-carousel.recom-slider');
      owlrecom.owlCarousel({
          items:1,
          loop:false,
          nav:true,
          dots:false,
          navText:'',
          rtl:true,
      })
    /********** End recommendation slider **********/

    /********** media slider **********/
      var owlm = $('.owl-carousel.media-slider');
      owlm.owlCarousel({
          loop:false,
          nav:true,
          dots:false,
          navText:'',
          rtl:true,
          margin:76,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:2
              },
              990:{
                  items:3
              },
              1200:{
                  items:3
              }
          }
      })
      
    /********** End media slider **********/

    /********** Navigation Menu  **********/

    if ($(window).width() > 768) {
      
      var nav     = $('header.header');
      var top_pos = $('.navigation').offset().top;


      $(window).scroll(function () {
        if ($(this).scrollTop() > top_pos -15) {
          nav.addClass("fixed-menu");
        } else {
          nav.removeClass("fixed-menu");
        }
      });

    }else{
      $('header.header').addClass("fixed-menu");
    }


    $(".mobile-meun .navbar-collapse a").click(function(event) {
        $(".navbar-collapse").collapse('hide');
    });

      /*$('#inner-header .navigation a').on('click' , function (e) {
          $("#inner-header .navigation li").removeClass("active");
          $target = $(this);
          $target.parent().addClass("active");
          
          var section = $target.attr('href').split("#")[1];
          $("html, body").animate({
              scrollTop: $('section[data-section-name*='+section+']').offset().top
          },700);
      })  */



      /*$('.navigation .nav-menu , .btn-about a').onePageNav({
          currentClass: 'current',
          changeHash: false,
          scrollSpeed: 750,
          scrollThreshold: 0.25,
          filter: '',
          easing: 'swing',
          begin: function() {
            //I get fired when the animation is starting
          },
          end: function() {
            //I get fired when the animation is ending
          },
          scrollChange: function($currentListItem) {
            console.log($currentListItem);  
            //I get fired when you enter a section and I pass the list item of the section
          }
      });*/

    /********** End Navigation Menu **********/

      $('.faq .nav-tabs a[href="#faq_0"]').tab('show') ;
      $('.our-supports .support-details div:first').addClass('active');

    /********** hegsa effect **********/
      $('.our-supports .hegsa').on('click' , function (e) {
        $target = $('.our-supports .support-details');
        $current_id = $(this).data('id');

        $target.children().removeClass('active');
        $target.find('#post-'+$current_id).addClass('active');
      })
    /********** end hegsa effect **********/
  
  }


});