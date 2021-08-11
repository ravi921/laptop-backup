// version : 1.2


$(document).ready(function() {
    var $header = $("header"),
        $clone = $header.before($header.clone().addClass("clone"));
    
    $(window).on("scroll", function() {
        var fromTop = $(window).scrollTop();
        $("body").toggleClass("down", (fromTop > 400));
    });
	
//new-requirements-form
$('.form-tabs span.wpcf7-list-item').click(function () {
        $('.form-tabs span.wpcf7-list-item').removeClass('active');
        $(this).addClass('active');
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
        width: 991,
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
        var windowWidth = jQuery(document).width();
        // alert(windowWidth);
    jQuery('#sidebar').simplerSidebar({
        opener: '#toggle-sidebar, #toggle-sidebar1',
            sidebar: {
                align: 'left',
                // width: windowWidth,
                closingLinks: '.close-sidebar'
            },
            mask: {
                opacity: 0.75
            }
        });

    jQuery('.mobile-menubtn > div').click(function(){
        jQuery('#sidebar').addClass('sidebar-wrapperd-box');
    });

    jQuery('.sidebar-offcanvas-menu .sidebar-close-btn a').click(function(){
        jQuery("#sidebar").removeClass('sidebar-wrapperd-box');
    });


})


// var windowWidth = $(window).width();
// if(windowWidth < 991){

//     $(function(){
//         var children=$('.menu-item-has-children > a').filter(function(){return $(this).nextAll().length>0})
//         $('<span class="toChild"><i class="fa fa-angle-down"></i></span>').insertAfter(children)
//         $('.menu-item-has-children .toChild').click(function (e) {
//             $(this).next().slideToggle(300);
//               return false;
//         });
//     })
// }

var windowWidth=jQuery(window).width();
if(windowWidth<991){
    jQuery('.menu-item-has-children .sub-menu').hide();
    jQuery('li').click(function(event){event.stopPropagation();jQuery('> ul',this).toggle();});
    jQuery('.menu-item-has-children .sub-menu').hide();
    jQuery('li.search-header').click(function(event){event.stopPropagation();
        jQuery('.dropdown-menu.dropdown-menu-right',this).toggle();});
}


// $('.bottom-header-sec nav#wp-megamenu-main-menu .wpmm-nav-wrap.wpmm-main-wrap- ul#menu-main-menu').find('> li').click(function() {
//     $('.bottom-header-sec nav#wp-megamenu-main-menu .wpmm-nav-wrap.wpmm-main-wrap- ul#menu-main-menu > li').not(this).find('ul').fadeToggle();
//     $(this).find('ul').stop(true, true).fadeToggle(400);
//     return false;
// });

jQuery('ul.services-tabs li').click(function(){
	var tab_id = jQuery(this).find('a').attr('data-tab');
	jQuery('ul.services-tabs li').removeClass('active');
	jQuery('.tab-pane').removeClass('in active');
	jQuery(this).addClass('active');
	jQuery("#"+tab_id).addClass('in active');
});


// Top bar Logo
jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 300) {
        jQuery(".top-haeder-sec").addClass("top-haeder-logo");
    } else {
        jQuery(".top-haeder-sec").removeClass("top-haeder-logo");
    }
});

$(".nav-call-btnbox a").click(function(){
    $("html").addClass("overhidden");
});

$(".modal-content .close").click(function(){
    $("html").removeClass("overhidden");
});

// Add Class Clearfix
$(function(){
    $(".service-single-page ul").addClass("clearfix");
});


    jQuery('.center').slick({
    centerMode: true,
    centerPadding: '25px',
    slidesToShow: 5,
    autoplay: true,
    autoplaySpeed: 2000,
    asNavFor: '.slider-for',
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '30px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 767,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '20px',
          slidesToShow: 1
        }
      },
    {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '20px',
          slidesToShow: 1
        }
    }
    ]
  });

  jQuery('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.center'
  });

jQuery("#client").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });

jQuery('#send-form').validate({
            rules: { 
            //compound rule
            name: { 
            required: true, 
            }, 
            company: { 
            required: true,
            },
            interested: {
            required: true,
            },
            email: {
            required: true,
            email: true 
            } 
            },
            submitHandler: function (form) {
            jQuery.ajax({
            type: "POST",
            url: "<?php echo home_url(); ?>/ajaxsubmit.php",
            data: jQuery("#send-form").serialize(),
            cache: false,
            success: function(result){
            jQuery('#hidden-div').hide();
            jQuery('#response').text(result);   
            jQuery('#send-form')[0].reset();
            window.location.href = "https://www.codeflies.com/thank-you/";
            return false;
            }
            });
            return false;
            }
            }); 

        //     jQuery(document).ready(function(){

           

        // })