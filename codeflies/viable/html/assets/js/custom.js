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
        $('.header').addClass('stickyNav')
    } else if ($(window).scrollTop()<60) {
        $('.header').removeClass('stickyNav')
    }

});
// slick slider 
$(document).ready(function(){
  // $('.project').slick({
  //   infinite: true,
  //   slidesToShow: 4,
  //   slidesToScroll: 3,
  // });
  $(".project").slick({
    dots: false,
    arrow: true,
    infinite: true,
    autoplay: true,
    centerMode: true,
    centerPadding: '90px',
    slidesToShow: 3,
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
});

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  $('.project').slick('setPosition');
})

// $(document).ready(function(){
//   "use strict";
//   $('.project').slick({
//     arrows: false,
//     cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
//     slidesToShow: 4,
//     responsive: [
//     {
//       breakpoint: 1024,
//       settings: {
//         slidesToShow: 3
//       }
//     },
//     {
//       breakpoint: 900,
//       settings: {
//         slidesToShow: 2
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 1
//       }
//     }
//   ]
//   });
  
 
  
  
// });


