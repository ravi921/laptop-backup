// a();
// b();

// function a() { }
// debugger
// var b = function() { }

$(document).ready(function () {
    "use strict";
  
    //------- Initialising Slick Slider
    $(".item-slider").slick({
      arrows: false,
      cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
      slidesToShow: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  
    //------- Custom Arrows click functionality
    $(document).on("click", ".prevSlide", function () {
      $(".item-slider").slick("slickPrev");
    });
  
    $(document).on("click", ".nextSlide", function () {
      $(".item-slider").slick("slickNext");
    });
  
    //------- Click to filter slides according to user's choice
  
    $(document).on("click", ".filter-option li a", function () {
      $(".filter-option li a").removeClass("active");
      $(this).addClass("active");
  
      var cat = $(this).attr("data-category");
  
      if (cat !== "all") {
        $(".item-slider").slick("slickUnfilter");
  
        $(".item-slider li").each(function () {
          $(this).removeClass("slide-shown");
        });
  
        $(".item-slider li[data-match=" + cat + "]").addClass("slide-shown");
  
        $(".item-slider").slick("slickFilter", ".slide-shown");
      } else {
        $(".item-slider li").each(function () {
          $(this).removeClass("slide-shown");
        });
        $(".item-slider").slick("slickUnfilter");
      }
    });
});
  
  
$( window ).scroll(function() {
    if ($(window).scrollTop()>60) {
        $('.main-navbarbox').addClass('stickyNav')
    } else if ($(window).scrollTop()<60) {
        $('.main-navbarbox').removeClass('stickyNav')
    }

});
// slick slider 
$(document).ready(function(){
    $(".project").slick({
        dots: false,
        arrow: true,
        infinite: true,
        autoplay: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]

    });

    $(".trusted-slider").slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    centerMode: false,
                    slidesToScroll: 1
                }
            }
        ]

    });

    $(".service-slides").slick({
        dots: false,
        arrow: true,
        infinite: true,
        autoplay: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                    slidesToScroll: 1
                }
            }
        ]

    });
});

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  $('.project').slick('setPosition');
})

//header js
    
$(function() {
    var header = $(".top-headerboxscroll");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 2) {
            header.removeClass('top-headerboxscroll').addClass("darkHeader");
        } else {
            header.removeClass("darkHeader").addClass('top-headerboxscroll');
        }
    });
});


//header-offcanvas-menu-js
(function($) {
    $.fn.simplerSidebar = function(options) {
        var cfg = $.extend(true, $.fn.simplerSidebar.settings, options);
        return this.each(function() {
            var align, sbw, ssbInit, ssbStyle, maskInit, maskStyle, maskActive,
                maskInactive,
                attr = cfg.attr,
                $sidebar = $(this),
                $opener = $(cfg.opener),
                $links = cfg.sidebar.closingLinks,
                sbMaxW = cfg.sidebar.width,
                gap = cfg.sidebar.gap,
                winMaxW = sbMaxW + gap,
                w = $(window).width(),
                animationStart = {},
                animationEnd = {},
 
                animateOpen = function() {
                    $sidebar
                      .css(animationEnd)
                      .attr('data-' + attr, 'active');
                    $mask.css('display', 'block');
                    setTimeout(function() {
                        $mask.css(maskActive);
                    }, 0);
                },
                animateClose = function() {
                    $sidebar
                      .css(animationStart)
                      .attr('data-' + attr, 'disabled');
                    $mask.css(maskInactive);
                },
                closeSidebar = function() {
                    var isWhat = $sidebar.attr('data-' + attr);
                    if (isWhat === 'active') {
                        animateClose();
                    }
                },
 
                $mask = $('<div>').attr('data-' + attr, 'mask');
 
            //Checking sidebar align

            if (cfg.sidebar.align === undefined || cfg.sidebar.align === 'right') {
                align = 'right';
            } else if (cfg.sidebar.align === 'left') {
                align = 'left';
            }
 
            //Sidebar style

            if (w < winMaxW) {
                sbw = w - gap;
            } else {
                sbw = sbMaxW;
            }

            ssbInit = {
                position: 'fixed',
                top: cfg.top,
                bottom: 0,
                width: sbw
            };

            ssbInit[align] = -sbw;
            animationStart.transform = 'translateX(0)';
            var translateValue = align === 'left' ? sbw : -sbw;
            animationEnd.transform = 'translateX(' + translateValue + 'px)';
 
            cfg.sidebar.css.transition = 'transform ' + cfg.animation.duration +
              ' ' + cfg.animation.easing;
            ssbStyle = $.extend(true, ssbInit, cfg.sidebar.css);
 
            $sidebar.css(ssbStyle)
                .attr('data-' + attr, 'disabled');
            $sidebar.css(animationStart);
 
            //Mask style

            maskInit = {
                position: 'fixed',
                top: cfg.top,
                right: 0,
                bottom: 0,
                left: 0,
                zIndex: cfg.sidebar.css.zIndex - 1,
                display: 'none',
                opacity: 0,
                transition: 'opacity ' + cfg.animation.duration + ' ' +
                    cfg.animation.easing
            };
 
            maskStyle = $.extend(true, maskInit, cfg.mask.css);
            maskActive = {
                display: 'block',
                opacity: cfg.mask.opacity
            };
            maskInactive = {
                opacity: 0
            };
 
            //Appending Mask if mask.display is true

            if (true === cfg.mask.display) {
                $mask.appendTo('body').css(maskStyle);
            }
 
            //Opening and closing the Sidebar when $opener is clicked

            $opener.click(function() {
                var isWhat = $sidebar.attr('data-' + attr);
 
                if (isWhat === 'disabled') {
                    animateOpen();
                } else if (isWhat === 'active') {
                    animateClose();
                }
            });
 
            //Closing Sidebar when the mask is clicked

            $mask.click(closeSidebar);
 
            //Closing Sidebar when a link inside of it is clicked

            $sidebar.on('click', $links, closeSidebar);
 
            // Fully hide mask when transition ends

            $mask.on('transitionend', function() {
                if ($mask.css('opacity') === "0") {
                    $mask.css('display', 'none');
                }
            });
 
            //Adjusting width;

            $(window).resize(function() {
                var rsbw, update,
                    isWhat = $sidebar.attr('data-' + attr),
                    nw = $(window).width();
 
                if (nw < winMaxW) {
                    rsbw = nw - gap;
                } else {
                    rsbw = sbMaxW;
                }
 
                update = {
                    width: rsbw
                };
 
                if (isWhat === 'disabled') {
                    update[align] = -rsbw;
                    $sidebar.css(update);
                } else if (isWhat === 'active') {
                    $sidebar.css(update);
                }
            });
 
        });
    };
 
$.fn.simplerSidebar.settings = {
    attr: 'simplersidebar',
    top: 0,
    animation: {
        duration: '0.6s',
        easing: 'ease-in-out'
    },
    sidebar: {
        width: 300,
        gap: 64,
        closingLinks: 'a',
        css: {
            zIndex: 999999999
        }
    },
    mask: {
        display: true,
        opacity: 0.5,
        css: {
            backgroundColor: 'black',
            filter: 'Alpha(opacity=50)'
        }
    }
};
})(jQuery);


jQuery(document).ready(function() {
    jQuery('#sidebar').simplerSidebar({
        opener: '#toggle-sidebar, #toggle-sidebar1',
            sidebar: {
                align: 'right',
                width: 350,
                closingLinks: '.close-sidebar'
            },
            mask: {
                opacity: 0.75
            }
        });

    jQuery('#toggle-sidebar').click(function(){
        jQuery('#sidebar').addClass('sidebar-wrapperd-box');
    });
})


//--Sidebar menu js
var windowWidth = $(window).width();
if(windowWidth < 992){
   $('.menu-item-has-children .sub-menu').hide();

    $('li').click(function(event) {
        event.stopPropagation();
        $('> ul', this).toggle();
    });

    $('.menu-item-has-children .sub-menu').hide();

    $('li.search-header').click(function(event) {
        event.stopPropagation();
        $('.dropdown-menu.dropdown-menu-right', this).toggle();
    });
}

// add class
$(function() {
    $('.sitemap-structure .col-md-6:nth-child(2n)').addClass('offset-md-6');
});

// accordion tabs
jQuery('.project-acc h4').click(function(){
    jQuery(this).toggleClass('active');
    jQuery(this).next('div').slideToggle();
});

// add class on radio check
var $radioButtons = $('input[type="radio"]');
$radioButtons.click(function() {
    $radioButtons.each(function() {
        $(this).parent().toggleClass('radiochecked', this.checked);
    });
});


jQuery(document).ready(function($){
  $("ul.nav-tabs a").click(function (e) {
  e.preventDefault();
  $(this).tab('show');
  });
});



var windowWidth = $(window).width();
if(windowWidth > 1200){

 const txts=document.querySelector(".hero_section .hero_contentin").children,
       txtsLen=txts.length;
   let index=0;
  const textInTimer=11000,
        textOutTimer=9800;

 function animateText() {
    for(let i=0; i<txtsLen; i++){
      txts[i].classList.remove("text-in","text-out");  
    }
    txts[index].classList.add("text-in");

    setTimeout(function(){
        txts[index].classList.add("text-out");              
    },textOutTimer)

    setTimeout(function(){

      if(index == txtsLen-1){
          index=0;
        }
       else{
           index++;
         }
        animateText();
    },textInTimer); 
 }
 
 window.onload=animateText;
}


// Case study page number coutner

$(document).ready(function() {

  var counters = $(".number-item h3, .counter-num");
  var countersQuantity = counters.length;
  var counter = [];

  for (i = 0; i < countersQuantity; i++) {
    counter[i] = parseInt(counters[i].innerHTML);
  }

  var count = function(start, value, id) {
    var localStart = start;
    setInterval(function() {
      if (localStart < value) {
        localStart++;
        counters[id].innerHTML = localStart;
      }
    }, 40);
  }

  for (j = 0; j < countersQuantity; j++) {
    count(0, counter[j], j);
  }
});


