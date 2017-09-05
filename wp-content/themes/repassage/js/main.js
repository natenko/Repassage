$(document).ready(function () {

  $(function() {
        jcf.replaceAll();
  });    

 $( function() {
    $( ".about-tabs" ).tabs();
  });

 $("#site-navigation .menu-item li").on("click",function() {
  $(".popup-menu").removeClass("open");
 });


  $(function(){

     /*if ($(window).scrollTop()>="450") $("#ToTop").fadeIn("slow")
     $(window).scroll(function(){
      if ($(window).scrollTop()<="450") $("#ToTop").fadeOut("slow")
       else $("#ToTop").fadeIn("slow")
     });

     if ($(window).scrollTop()<=$(document).height()-"999") $("#OnBottom").fadeIn("slow")
     $(window).scroll(function(){
      if ($(window).scrollTop()>=$(document).height()-"999") $("#OnBottom").fadeOut("slow")
       else $("#OnBottom").fadeIn("slow")
     });

     $("#ToTop").click(function(){$("html,body").animate({scrollTop:0},"slow")})
     $("#OnBottom").click(function(){$("html,body").animate({scrollTop:$(document).height()},"slow")})*/
     // TODO: remove after revision
  });

setTimeout(function(){
    if($('body').hasClass("home")){
      $('body').addClass('home_page');
    }else{
      $('body').addClass('other_page');
    }
}, 10);

var activeClass = 'slick-active',
    ariaAttribute = 'aria-hidden';
$( '[data-ui="home-slide"]' )
.on( 'init', function() {
    $( '.slick-dots li:first-of-type' ).addClass( activeClass ).attr( ariaAttribute, false );
} )
.on( 'afterChange', function( event, slick, currentSlide ) {
    var $dots = $( '.slick-dots' );
    $( 'li', $dots ).removeClass( activeClass ).attr( ariaAttribute, true );
    $dots.each( function() {
        $( 'li', $( this ) ).eq( currentSlide ).addClass( activeClass ).attr( ariaAttribute, false );
    } );
} );

  var homeSlider = $('[data-ui="home-slide"]').slick({
      infinite: true,
      fade: true,
      slidesToShow: 1,
      appendDots:$(".slick-nav"),
      autoplay: true,
      pauseOnHover:false,
      pauseOnFocus:false,
      autoplaySpeed: 10000,
      dots: true,
      prevArrow: $('.prev-home-arrow'),
      nextArrow: $('.next-home-arrow'),
      slidesToScroll: 1
  });

    // Here is most important part of the code which actually stops the slider
    // homeSlider.on('afterChange', function(event, slick, currentSlide) {
      
    //   // slick - is a slider object with a lot of useful info
    //   // currentSlide - is a current slide index (starts from 0)
    //   if( slick.slideCount === currentSlide + 1 ){
    //     slick.paused = true;
    //   }
    // });

    homeSlider.on('click', 'div', function(e)
{
    e.stopPropagation();
    console.log('hello1');

        homeSlider.paused= true;
});

    //    function stickiService() {
    //   $("[data-ui='service-home'] ul").slick({
    //     infinite: false,
    //     fade: false,
    //     pauseOnHover:false,
    //     pauseOnFocus:false,
    //     arrows: true,
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     adaptiveHeight:true,
    //     dots: false,

    //     responsive: [
    //         {
    //           breakpoint: 768,
    //           settings: "unslick"
    //         }
    //     ]
    //   });
    // }

    // stickiService();
    // $(window).resize(function(){
    //     var $windowWidth = $(window).width();
    //     if ($windowWidth < 768) {
    //       stickiService();   
    //     }
    // });



    function height_window(){
      var window_height = $(window).height();
      $(".home-slide .slick-track").css({"height":window_height});
    }

    $('.time-slider').owlCarousel({
      items:1,
      loop:true,
      startPosition:2,
      rewindNav: true,
      nav:true
    });

    $(".menu-btn").click(function() {
      // $(".popup-menu").toggleClass("open");
      $(".page").toggleClass("page--has-menu");
    });

    $(".close-popup").on('click', function() {
       $(".page").removeClass("page--has-menu");
    });

    $(function() {

        var $container  = $("[data-ui='service-home'] ul"),
        $articles   = $container.children('li'),
        timeout;

        $articles.on( 'mouseenter', function( event ) {

            var $article    = $(this);
            clearTimeout( timeout );
            timeout = setTimeout( function() {

            if( $article.hasClass('active') ) return false;
            $articles.not( $article.removeClass('blur').addClass('active') )
                .removeClass('active')
                .addClass('blur');

            }, 65 );

        });

        $container.on( 'mouseleave', function( event ) {
        clearTimeout( timeout );
        $articles.removeClass('active blur');
        });
    });

    $(function() {
        var $container  = $('.services-group-info ul'),
            $articles   = $container.children('li'),
            timeout;

        $articles.on( 'mouseenter', function( event ) {

            var $article    = $(this);
            clearTimeout( timeout );
            timeout = setTimeout( function() {

                if( $article.hasClass('active') ) return false;
                $articles.not( $article.removeClass('blur').addClass('active') )
                    .removeClass('active')
                    .addClass('blur');

            }, 65 );

        });

        $container.on( 'mouseleave', function( event ) {
            clearTimeout( timeout );
            $articles.removeClass('active blur');
        });
    });

    $(".menu-btn").click(function(){
      //$(".popup-menu").fadeIn("slow"); TODO: remove after revision
      $(".popup-download,.popup-tel,.popup-write").fadeOut("slow");
    });

    $(".download-btn").click(function(){
        //$(".popup-download").fadeIn("slow");
        $(".popup-tel,.popup-menu,.popup-write").fadeOut("slow");
    });

    $(".write-btn").click(function(){
        //$(".popup-write").fadeIn("slow");
        $(".popup-tel,.popup-menu,.popup-download").fadeOut("slow");
    });

    $(".tel-btn").click(function(){
        $(".popup-tel").fadeIn("slow");
        $(".popup-write,.popup-menu,.popup-download").fadeOut("slow");
    });

    $(".next-page-services").click(function(){
      $(".popup-services").fadeIn("slow");
    });

    $(".close-popup").click(function(event){
      event.stopPropagation();
      $(".popup-services").fadeOut("slow");
      $(".popup-maintenance").fadeOut("slow");
    });

    $(".popup-maintenance").click(function (e) {
      e.stopPropagation();
    })

    $("body").click(function(){
      $(".popup-maintenance").fadeOut('slow');
    });

    $(".close-popup,.main").click(function(){
        $(".popup-download,.popup-tel,.popup-write").fadeOut("slow");
        $(".popup-menu").removeClass("open");
    });

    $(".works-items-home li").removeClass("active");

    $(".home-works-tabs li").click(function(){
        $(".home-works-tabs").addClass("move-left");
    });
    $(".home-works-tabs .move-right").click(function(){
        $(".home-works-tabs").removeClass("move-left");
    });

    var mql = window.matchMedia("(orientation: portrait)");

    if(mql.matches) {  
       height_window();
    } else {
        height_window()
    }

    mql.addListener(function(m) {
        if(m.matches) {
          height_window()
        }
        else {
          height_window()
        }
    });

});

$(window).load(function () {

    if ($(window).width() < 751) {
      $(".items-info-slider").slick({
        infinite: false,
      pauseOnHover:false,
      pauseOnFocus:false,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false
      });
    } else {}

    if ($(window).width() < 766) {
    var i = 0; 
      $(".btn-map").on('click', function(){ 
      if (i == 0) { 
      $(this).text('скрыть карту'); 
      $(this).addClass("active");
      i = 1; 
      } else { 
      $(this).text("на карте"); 
      $(this).removeClass("active");
      i = 0; 
    }
    });
  } else{
    var i = 0; 
      $(".btn-map").on('click', function(){ 
      if (i == 0) { 
      $(this).text('скрыть местоположение офиса нашей компании'); 
      $(this).addClass("active");
      i = 1; 
      } else { 
      $(this).text("показать местоположение офиса нашей компании"); 
      $(this).removeClass("active");
      i = 0; 
    }
    });
  }

    if ($(window).width() < 751) {
      $(".list-blog").slick({
        infinite: true,
      pauseOnHover:false,
      pauseOnFocus:false,
        fade: true,
        adaptiveHeight:true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false
      });
    } else {}

    if ($(window).width() < 768) {
      $("[data-ui='service-home'] ul").slick({
        infinite: false,
        fade: false,
        pauseOnHover:false,
        pauseOnFocus:false,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight:true,
        dots: false
      });

      var maql = window.matchMedia("(orientation: portrait)");


    if(maql.matches) {  
      setTimeout(function(){
       $('[data-ui="service-home"] ul').slick('refresh');
      },100);
    } else {
        setTimeout(function(){
       $('[data-ui="service-home"] ul').slick('refresh');
      },100);
    }

    maql.addListener(function(m) {
        if(m.matches) {
          setTimeout(function(){
       $('[data-ui="service-home"] ul').slick('refresh');
      },100);
        }
        else {
          setTimeout(function(){
       $('[data-ui="service-home"] ul').slick('refresh');
      },100);
        }
    });
    } else {}

    if ($(window).width() > 766) {
      $("b").insertBefore(".catalog-blog .list-blog li:nth-child(3n+1)");
    } else {}

    if ($(window).width() < 751) {
      $('[data-ui="works-slider"]').slick({ //$(".works-items-home .tabs-works ul")
        infinite: false,
        fade: false,
        arrows: true,
        pauseOnHover:false,
        pauseOnFocus:false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false
      });

    } else {

      function setEqualHeight(columns){
       var tallestcolumn = 0;
       columns.each(
           function()
           {
               currentHeight = $(this).height();
               if(currentHeight > tallestcolumn)
               {
                  tallestcolumn = currentHeight;
               }
           }
       );
       columns.height(tallestcolumn);
      }
      setEqualHeight($(".works-items.works-items-home ul li"));
    }

    if ($(window).width() < 766) {
      $(".btn-map").text("на карте");
    } else {}


    $(".works-items-home .tabs-works li").removeClass("active");
  });

$(window).on('load', function () {
    var $preloader = $('#page-preloader'),
        $spinner   = $preloader.find('.spinner'),
        $maintenancePopup = $('.popup-maintenance');
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow');
    $maintenancePopup.delay(350).fadeIn('slow');
});