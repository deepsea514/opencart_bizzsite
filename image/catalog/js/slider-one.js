(function ($) {
 "use strict";
/*--------------------------------
 slide product
---------------------------------- */   
     $(".slide-product").owlCarousel({
      navigation : true, 
      pagination : false,
      slideSpeed : 600,
      paginationSpeed : 400,
      items : 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,2], 
      itemsTablet: [767,2], 
      itemsMobile : [480,1],
      navigationText : ['<i class="icon-left-open"><i class="fa fa-angle-left"></i></i>','<i class="icon-right-open"><i class="fa fa-angle-right"></i></i>'] 
  });
/*--------------------------------
 featured item
---------------------------------- */
     $(".testimonial-item").owlCarousel({
      navigation : false,
      pagination : true,
	  autoplay : true,
      slideSpeed : 600,
      paginationSpeed : 400,
      items : 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,2], 
      itemsTablet: [767,3], 
      itemsMobile : [480,1],
      navigationText : ['<i class="icon-left-open"><i class="fa fa-angle-left"></i></i>','<i class="icon-right-open"><i class="fa fa-angle-right"></i></i>'] 
  });    
/*--------------------------------
 camera-camcord
---------------------------------- */
     $(".camera-slide").owlCarousel({
      navigation : true,
      pagination : false,
      slideSpeed : 600,
      paginationSpeed : 400,
      items : 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,2], 
      itemsTablet: [767,1], 
      itemsMobile : [480,1],
      navigationText : ['<i class="icon-left-open"><i class="fa fa-angle-left"></i></i>','<i class="icon-right-open"><i class="fa fa-angle-right"></i></i>'] 
  }); 
/*--------------------------------
 popular tab product
---------------------------------- */
$(".popular-tab-product").owlCarousel({
      navigation : true,
      pagination : false,
      slideSpeed : 600,
      paginationSpeed : 400,
      items : 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,2], 
      itemsTablet: [767,2], 
      itemsMobile : [480,1],
      navigationText : ['<i class="icon-left-open"><i class="fa fa-angle-left"></i></i>','<i class="icon-right-open"><i class="fa fa-angle-right"></i></i>']
  });
/*--------------------------------
 popular tab product
---------------------------------- */
    var owl = $(".popular-tab-product-4");
      owl.owlCarousel({
      navigation:true,
      slideSpeed : 600,
      pagination : false,
      addClassActive : true,
      lazyLoad : true,
      items :2,
      itemsDesktop : [1024,2],
      itemsDesktopSmall : [980,2], 
      itemsTablet: [767,2], 
      itemsMobile : [480,1],
      navigationText : ['<i class="icon-left-open"><i class="fa fa-angle-left"></i></i>','<i class="icon-right-open"><i class="fa fa-angle-right"></i></i>']
  });      
/*--------------------------------
 brand-logo
---------------------------------- */
     $(".brand-logo").owlCarousel({
      navigation : true,
      pagination : false,
      slideSpeed : 600,
      paginationSpeed : 400,
      items : 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,2], 
      itemsTablet: [767,3], 
      itemsMobile : [480,1],
      navigationText : ['<i class="icon-left-open"><i class="fa fa-angle-left"></i></i>','<i class="icon-right-open"><i class="fa fa-angle-right"></i></i>'] 
  });
/*--------------------------------
 blog-box
---------------------------------- */
     $(".blog-box").owlCarousel({
      navigation : true,
      pagination : false,
      slideSpeed : 600,
      paginationSpeed : 400,
      items : 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,2], 
      itemsTablet: [767,2], 
      itemsMobile : [480,1],
      navigationText : ['<i class="icon-left-open"><i class="fa fa-angle-left"></i></i>','<i class="icon-right-open"><i class="fa fa-angle-right"></i></i>'] 
  });
/*--------------------------------
 blog-box
---------------------------------- */
     $(".tab-info-product").owlCarousel({
      navigation : false,
      pagination : false,
      slideSpeed : 600,
      paginationSpeed : 400,
      items : 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,2], 
      itemsTablet: [767,2], 
      itemsMobile : [480,1],
  });
/*--------------------------------
 about-su-active
---------------------------------- */
    $(".about-us-slide").owlCarousel({
      autoPlay:10000,
      paginationSpeed : 1000,
      pagination : false,
      items : 1,
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [979,1],
      itemsTablet: [767,1]

    });
/*--------------------------------
 viewproduct
---------------------------------- */
    $("#viewproduct").owlCarousel({
      autoPlay:10000,
      paginationSpeed : 1000,
      pagination : false,
      items : 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,2],
      itemsTablet: [767,4],
      itemsMobile : [480,2]
    });   
/*--------------------------------
 mobile menu tab
---------------------------------- */
  jQuery('nav#dropdown').meanmenu();          
/*--------------------------------
 nivoSlider
---------------------------------- */     
  $('#slider').nivoSlider({
        effect: 'random',
        slices: 15,
        boxCols: 8,
        boxRows: 4,
        animSpeed: '600',
        pauseTime: '6000000',
        startSlide: 0,
        directionNav: 1,
        controlNav: 1,
        controlNavThumbs: false,
        pauseOnHover: false,
        manualAdvance: false,
        prevText: '<i class="fa fa-angle-left nivo-prev-icon"></i>',
        nextText: '<i class="fa fa-angle-right nivo-next-icon"></i>'
    });
/*--------------------------------
 tabs
---------------------------------- */  
  $('#tabs2').tab();
/*---------------------
 scrollUp
--------------------- */  
  $.scrollUp({
      scrollText: '<i class="fa fa-angle-double-up"></i>',
      easingType: 'linear',
      scrollSpeed: 900,
      animation: 'fade'
  });
/*--------------------------------
 owlCarousel5
---------------------------------- */
  $('.fancybox').fancybox();  
   
})(jQuery);    