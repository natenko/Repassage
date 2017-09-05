window.onload = function() {
    //Plugin Function
    $.fn.action = function (options) {
        var elements = [],
            defaults = {
                before: function (el) {
                },
                after: function (el) {
                },
                viewportFactor: 1
            },
            settings = $.extend({}, defaults, options),
            view_height;
        this.each(function () {
            var $this = $(this);
            var top_sect = $this.offset().top +  $this.outerHeight(true)/2;
            elements.push({
                obj: $this,
                top: top_sect,
                height: $this.outerHeight(true),
                inView: false
            });
            settings.before(this);
        });

        function initTopPosition() {
            if (settings.viewportFactor > 1) {
                view_height = settings.viewportFactor;
            } else if (settings.viewportFactor < 0) {
                view_height = $(window).height() + settings.viewportFactor;
            } else {
                view_height = $(window).height() * settings.viewportFactor;
            }
        }

        initTopPosition();

        function initTopPoints() {
            initTopPosition();
            for (var key in elements) {
                elements[key].top = elements[key].obj.offset().top;
                elements[key].height = elements[key].obj.outerHeight(true);
            }
        }

        $(window).resize(function () {
            initTopPoints();
        });

        function whenScroll() {
            var win_top = $(window).scrollTop();
            for (var key in elements) {
                if (!elements[key].inView) {
                    if (elements[key].top + elements[key].height > win_top && win_top + view_height > elements[key].top) {
                        elements[key].inView = true;
                        settings.after(elements[key].obj);
                        elements.splice(key, 1);
                    }
                }
            }
        }

        $(window).scroll(function () {
            whenScroll();
        });
        $(function () {
            setTimeout(whenScroll, 5);
        });
    }
    /*
     *********************************************************
     action
     *********************************************************
     */
$(document).ready(function(){
if($(window).width() > 1040){

    $('.info-our-company').action({
        before: function() {
          $('.info-our-company').css({
            opacity: 0,
            top: 90
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top: 0
          }, 800);
        }
    });

    $('.services-home ul li:first-child').action({
        before: function() {
          $('.services-home ul li:first-child').css({
            opacity: 0,
            top: 50
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top: 0
          }, 800);
        }
    });

    $('.services-home ul li:nth-child(2)').action({
        before: function() {
          $('.services-home ul li:nth-child(2)').css({
            opacity: 0,
            top: 70
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top: 0
          }, 800);
        }
    });

    $('.services-home ul li:nth-child(3)').action({
        before: function() {
          $('.services-home ul li:nth-child(3)').css({
            opacity: 0,
            top: 90
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top: 0
          }, 800);
        }
    });

    $('.services-home ul li:nth-child(4)').action({
        before: function() {
          $('.services-home ul li:nth-child(4)').css({
            opacity: 0,
            top: 100
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top: 0
          }, 900);
        }
    });

    $('.services-home ul li:nth-child(5)').action({
        before: function() {
          $('.services-home ul li:nth-child(5)').css({
            opacity: 0,
            top: 120
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top: 0
          }, 900);
        }
    });

    $('.services-home ul li:nth-child(6)').action({
        before: function() {
          $('.services-home ul li:nth-child(6)').css({
            opacity: 0,
            top: 140
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top: 0
          }, 900);
        }
    });

    $('.works-items-home').action({
        before: function() {
          $('.works-items-home').css({
            opacity: 0,
            left: 600
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            left: 0
          }, 800);
        }
    });

    $('.items-info-content').action({
        before: function() {
          $('.items-info-content').css({
            opacity: 0
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1
          }, 1500);
        }
    });

    $('.home-blog .list-blog li:nth-child(1)').action({
        before: function() {
          $('.home-blog .list-blog li:nth-child(1)').css({
            opacity: 0,
            top:70
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top:0
          }, 900);
        }
    });

    $('.home-blog .list-blog li:nth-child(2)').action({
        before: function() {
          $('.home-blog .list-blog li:nth-child(2)').css({
            opacity: 0,
            top:100
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top:0
          }, 900);
        }
    });

     $('.home-blog .list-blog li:nth-child(3)').action({
        before: function() {
          $('.home-blog .list-blog li:nth-child(3)').css({
            opacity: 0,
            top:120
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top:0
          }, 900);
        }
    });

    $('.contact').action({
        before: function() {
          $('.contact').css({
            opacity: 0,
            top:130
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top:0
          }, 1000);
        }
    });

    $('.seo-text').action({
        before: function() {
          $('.seo-text').css({
            opacity: 0,
            right:1000
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            right:0
          }, 1000);
        }
    });

    $('.list-blog li:nth-child(6)').action({
        before: function() {
          $('.list-blog li:nth-child(6)').css({
            opacity: 0,
            top:120
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top:0
          }, 600);
        }
    });

    $('.list-blog li:nth-child(7)').action({
        before: function() {
          $('.list-blog li:nth-child(7)').css({
            opacity: 0,
            top:120
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top:0
          }, 600);
        }
    });

    $('.list-blog li:nth-child(8)').action({
        before: function() {
          $('.list-blog li:nth-child(8)').css({
            opacity: 0,
            top:120
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top:0
          }, 600);
        }
    });

    $('.list-blog li:nth-child(10)').action({
        before: function() {
          $('.list-blog li:nth-child(10)').css({
            opacity: 0,
            top:120
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top:0
          }, 600);
        }
    });

    $('.list-blog li:nth-child(11)').action({
        before: function() {
          $('.list-blog li:nth-child(11)').css({
            opacity: 0,
            top:120
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top:0
          }, 600);
        }
    });

    $('.list-blog li:nth-child(12)').action({
        before: function() {
          $('.list-blog li:nth-child(12)').css({
            opacity: 0,
            top:120
          });
        },
        after: function(el) {
          el.animate({
            opacity: 1,
            top:0
          }, 600);
        }
    });


} else{}

});

};