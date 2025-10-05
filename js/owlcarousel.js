
$( '.service_owl' ).owlCarousel({
    items: 6,
    margin: 10,
    loop: true,
    nav: true,
    dots:true,
    dotsEach: 3,
    mouseDrag: true,
    responsiveClass: true,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    smartSpeed: 1000, 
    responsive: {
        0:{
          items: 1
        },
        480:{
          items: 2
        },
        767:{
          items: 3
        },
        1024:{
          items: 4
        },
        1300:{
          items: 4
        }
    }
});








$('.advisory_owl').owlCarousel({
  items: 6,
  margin: 10,
  nav: true,
  dots: true,
  loop:false,
  mouseDrag: false,
  responsiveClass: true,
  navText:false,
  autoplayTimeout:3000,
  autoplayHoverPause:true,
  // navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
  responsive: {
      0: {
          items: 1,
          loop:true,
          autoplay: true
      },
      480: {
          items: 2,
          loop:true,
          autoplay: true
      },
      767: {
          items: 3,
          dotsEach: 3,
          loop:true,
          autoplay: true
      },
      1024: {
          items: 4
      },
      1300: {
          items: 4
      }
  }
});






$( '.insurance_owl' ).owlCarousel({
  items: 6,
  margin:10,
  nav: true,
  dots: true,
  loop:false,
  mouseDrag: false,
  responsiveClass: true,
  navText:false,
  autoHeight: true,
  // autoplay:true,
  autoplayTimeout:3000,
  autoplayHoverPause:true,
  responsive: {
      0:{
        items: 1,
        loop:true,
        autoplay: true
      },
      480:{
        items: 2,
        loop:true,
        autoplay: true
      },
      767:{
        items: 3,
        dotsEach: 3,
        loop:true,
        autoplay: true
      },
      1024:{
        items: 4,
        dotsEach: 2
      },
      1300:{
        items: 4,
        dotsEach:2
      }
  }
});

$( '.fund_owl' ).owlCarousel({
  items: 6,
  margin:10,
  nav: true,
  dots: true,
  loop:false,
  mouseDrag: false,
  responsiveClass: true,
  navText:false,
  // autoplay:true,
  autoplayTimeout:3000,
  autoplayHoverPause:true,
  responsive: {
      0:{
        items: 1,
        loop:true,
        autoplay: true
      },
      480:{
        items: 2,
        loop:true,
        autoplay: true
      },
      767:{
        items: 3,
        dotsEach: 3,
        loop:true,
        autoplay: true
      },
      1024:{
        items: 4
      },
      1300:{
        items: 4
      }
  }
});

$( '.testimonial_owl' ).owlCarousel({
  items: 6,
  margin:10,
  nav: true,
  loop:true,
  dots: true,
  autoHeight: true,
  mouseDrag: true,
  responsiveClass: true,
  navText:false,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  smartSpeed: 1000, 
  responsive: {
      0:{
        items: 1,
        dotsEach: 3
      },
      480:{
        items: 1,
        dotsEach: 3
      },
      769:{
        items: 1,
        dotsEach: 3
      }
  }
});

$( '.partner_owl' ).owlCarousel({
  items: 10,
  margin:10,
  nav: true,
  loop:true,
  dots: true,
  dotsEach: 10,
  mouseDrag: true,
  responsiveClass: true,
  navText: false,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  smartSpeed: 1000, 
  stagePadding: 10,
  animateOut: 'linear', 
  animateIn: 'linear', 
  responsive: {
      0:{
        items: 1,
        dotsEach:3
      },
      480:{
        items: 2
      },
      767:{
        items: 3
      },
      1024:{
        items: 4
      },
      1300:{
        items: 4
      }
  }
});



