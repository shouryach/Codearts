// JavaScript Document
jQuery('#custom-owl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
jQuery('#project-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:3
      }
  }
})


jQuery('#technology-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots:false,
  navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
  responsive:{
      0:{
          items:2
      },  
      576:{
        items:3

     },
      992:{
        items:4

     },
      1200:{
        items:5

     },
      1400:{
          items:6

      }
  }
});
jQuery('#brand-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots:false,
  navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
  responsive:{
      0:{
          items:1
      },
      576:{
          items:3
      },
      992:{
          items:4
      }
  }
});

jQuery('#team-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        768:{
            items:2
        }
    }
  })

jQuery('#blog-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        768:{
            items:2
        },
        1200:{
            items:3
        }
    }
  })

  
  jQuery('#pricing-inner-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        768:{
            items:2
        },
        1200:{
            items:3
        }
    }
  })

  jQuery('#delhi-bangalore-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        768:{
            items:1
        },
        992:{
            items:2
        }
    }
  })
  
    jQuery('#service-type-bnr-caro').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        768:{
            items:1
        },
        992:{
            items:1
        }
    }
  })

jQuery('.js-accordion__item').on('click', function () {
  jQuery(this).parent().find('.state-active').removeClass('state-active');
  jQuery(this).removeClass('state-collapsed').addClass('state-active');
  jQuery('.js-accordion__item').not(this).addClass('state-collapsed');
});



jQuery(document).ready(function() {
    jQuery('.custom-navbar-toggle').click(function() {
      jQuery(this).toggleClass('menu-open')
      jQuery('.custom-navbar-nav .has-children').removeClass('on-click')
    })
    setTimeout(() => {
        jQuery(".owl-images .card-img-top").hover(function(){
            jQuery(this).attr("src", function(index, attr){
                return attr.replace(".png", "-colored.png");
            });
        },
         function(){
            jQuery(this).attr("src", function(index, attr){
                return attr.replace("-colored.png", ".png");
            });
        });
    }, 1000)
});
jQuery(document).ready(function() {
    // jQuery('.custom-navbar-nav .nav-item').hover(function() {
    //     if(jQuery(this).hasClass("has-children"))   {

    //         jQuery(".custom-navbar-nav .has-children").removeClass('on-hover')
    //         jQuery(this).addClass('on-hover', 1000)
    //         jQuery(".custom-navbar-nav").addClass('nav-border-top')
    //     }   else    {
    //         jQuery(".custom-navbar-nav .has-children").removeClass('on-hover')
    //         jQuery(".custom-navbar-nav").removeClass('nav-border-top')
    //     }
    // })
    if(jQuery(window).width() > 991) {

        

            jQuery('.custom-navbar-nav .has-children').hover(function() {
                jQuery(this).toggleClass('on-hover')
                jQuery(".custom-navbar-nav").toggleClass('nav-border-top')
            })
    } else  {
        jQuery('.custom-navbar-nav .has-children').click(function() {
            // jQuery('.custom-navbar-nav').find('.has-children').removeClass('on-click')
            jQuery(this).toggleClass('on-click')
            // jQuery(this).addClass('on-click')
            // jQuery(".custom-navbar-nav").addClass('nav-border-top')
        })
    }
    
});

jQuery(document).ready(function() {
    jQuery('.count-number').each(function () {
        jQuery(this).prop('Counter',0).animate({
            Counter: jQuery(this).text()
        }, {
            
            //chnage count up speed here
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                jQuery(this).text(Math.ceil(now));
            }
        });
    });
    });



jQuery(document).ready(function() {
    jQuery(".offcanvas-body a").addClass("nav-link");
    jQuery(".offcanvas-body ul li").hover(
        function () {
          jQuery(this).toggleClass("on-hover");
          jQuery(".offcanvas-body ul").toggleClass("nav-border-top");
        },
    );
     jQuery(".footer-column nav ul").addClass("links");

   // jQuery("#menu-primary-menu li.menu-item-has-children").addClass("nav-item has-children ms-0");

    // if (jQuery('#menu-primary-menu li').hasClass('menu-item-has-children')){
    //     jQuery('#menu-primary-menu li').addClass('nav-item has-children ms-0'); 
    // } else {
    //     jQuery('#menu-primary-menu li').addClass('nav-item ms-0');
    //   }
  


});
