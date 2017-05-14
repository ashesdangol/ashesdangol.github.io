// MAIN.JS
//--------------------------------------------------------------------------------------------------------------------------------
//This is main JS file that contains custom JS scipts and initialization used in this template*/
// -------------------------------------------------------------------------------------------------------------------------------
// Template Name: Glissando.
// Author: Unbranded.
// Version 1.0 - Initial Release
// Website: http://www.unbranded.co 
// Copyright: (C) 2013 
// -------------------------------------------------------------------------------------------------------------------------------

/*global $:false */
/*global window: false */

(function(){
  "use strict";

$(function ($) {

     //Detecting viewpot dimension
     var vH = $(window).height();
     var vW = $(window).width();

     //Adjusting Intro Components Spacing based on detected screen resolution
     $('.full-height').css('height',vH);
      //$('.home.full-height').css('height',vH+90);
   
    //Vertical Centering of natural content spcific elements (non-images)
      $(window).bind('load', function () {
              /*if your element is an image then please use $(window).load() instead tha above function wrap, because we want the coding to take
              effect when the image is loaded. */
              $('.vertical-center').each(function(){
                //get the width of the parent
                var parent_height = $(this).parent().height();
                var image_height = $(this).height();
                
                var top_margin = (parent_height - image_height)/2;
                
                //center it
                $(this).css( 'padding-top' , top_margin);
                //uncomment the following if ithe element to be centered is an image
                $('.vertical-center-img').css( 'margin-top' , top_margin);

              });
              
       });


    $('#about').waypoint(function (event, direction) {
      
        if (direction === 'down') 
        {
            $('.header').addClass('solid-bg');            
        } 
        else 
        {
           $('.header').removeClass('solid-bg');   
        }
    },{ offset: 100 });


    $(document).ready(function() {  

         $(".slider-1").owlCarousel({
            navigation : true,
            navigationText : false,
            pagination : false,
            singleItem: true,
            items : 1,
            itemsDesktop: [3000,1],
            itemsDesktopSmall: [1440,1],
            itemsTablet:[1024,1],
            itemsTabletSmall: [600,1],
            itemsMobile: [360,1]
    
        });
     
        $(".slider-2").owlCarousel({
            navigation : true,
            navigationText : false,
            pagination : false,
            items : 3,
            itemsDesktop : [1199,3],
            itemsTablet: [768,2],
            itemsMobile : [479,1]
  
        });

        $(".slider-3").owlCarousel({
            navigation : true,
            navigationText : false,
            pagination : false,
            items : 3,
            itemsDesktop : [1199,3],
            itemsTablet: [768,2],
            itemsMobile : [479,1]
        });


        $(".testimonial-owl").owlCarousel({
            navigation : false,
            navigationText : false,
            pagination : true,
            singleItem: true,
            items : 1,
            itemsDesktop : [1199,1],
            itemsTablet: [768,1],
            itemsMobile : [479,1],
            afterInit: testimonial_icon_dump
        });

        $(".blog-post-slider").owlCarousel({
            navigation : false,
            navigationText : false,
            pagination : true,
            items : 1,
            itemsDesktop : [1199,1],
            itemsTablet: [768,1],
            itemsMobile : [479,1]
        });

        $(".pagination-slider").owlCarousel({
            navigation : false ,
            navigationText : false,
            pagination : true,
            singleItem: true,
            items : 1,
            itemsDesktop : [1199,1],
            itemsTablet: [768,1],
            itemsMobile : [479,1]
        });

        $(".pagination-slider-1").owlCarousel({
            navigation : false ,
            navigationText : false,
            pagination : true,
            items : 5,
            itemsDesktop: [3000,5],
            itemsDesktopSmall: [1440,4],
            itemsTablet:[1024,4],
            itemsTabletSmall: [600,3],
            itemsMobile: [360,2]
        
        });
        
        $(".blog-inner-page-image-slider").owlCarousel({
            navigation : false,
            navigationText : false,
            pagination : true,
            items : 1,
            itemsDesktop : [1199,1],
            itemsTablet: [768,1],
            itemsMobile : [479,1]
  
        });
        $(".recent-works-slider").owlCarousel({
            navigation : true,
            navigationText : false,
            pagination : false,
            items : 3,
            itemsDesktop : [1199,3],
            itemsTablet: [768,2],
            itemsMobile : [479,1]
        });


      function testimonial_icon_dump(){
        $('.testimonial-owl .testimonial').each(function(){
          var testimonial_img = $(this).find('.testimonial-icon').html();
          var testimonial_order = $(this).find('.testimonial-icon').data('order');

          $('.testimonial-owl .owl-pagination .owl-page:nth-child('+testimonial_order+')').find('span').html(testimonial_img);
        });
      }
    });
        

});
// $(function ($)  : ends

})();
//  JSHint wrapper $(function ($)  : ends







  

