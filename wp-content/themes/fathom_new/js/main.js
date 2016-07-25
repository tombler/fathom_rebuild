

/**
 * Author: Heather Corey
 * jQuery Simple Parallax Plugin
 * http://www.bootply.com/aec7t8scMC
 */

 
(function($) {
 
    $.fn.parallax = function(options) {
 
        var windowHeight = $(window).height();
 
        // Establish default settings
        var settings = $.extend({
            speed        : 0.15
        }, options);
 
        // Iterate over each object in collection
        return this.each( function() {
 
          // Save a reference to the element
          var $this = $(this);
 
          // Set up Scroll Handler
          $(document).scroll(function(){
 
                var scrollTop = $(window).scrollTop();
                      var offset = $this.offset().top;
                      var height = $this.outerHeight();
 
        // Check if above or below viewport
      if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
        return;
      }
 
      // if(adjustment) {var total = offset - scrollTop + adjustment}
      // else {var total = offset - scrollTop}
      var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
 
                 // Apply the Y Background Position to Set the Parallax Effect
          $this.css('background-position', 'center ' + yBgPosition + 'px');
                
          });
        });
    }
}(jQuery));


$(document).ready(function() {
  // $('#fullpage').fullpage({
  //   //Scrolling
  //   css3: true,
  //   // scrollingSpeed: 700,
  //   autoScrolling: false,
  //   fitToSection: false,

  //   //Design
  //   paddingTop: '3em',
  //   paddingBottom: '10px',
  //   responsiveWidth: 0,
  //   responsiveHeight: 0,
  // });



  // navbar fade in
  if (window.location.pathname == '/')
  {
    //jQuery to collapse the navbar on scroll
    $(window).scroll(function() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("fadeIn");
        } else {
            $(".navbar-fixed-top").removeClass("fadeIn");
        }
    });
  }
  else
  {
    $(".navbar").removeClass("fadeIn");
    // $(".navbar").removeClass("navbar-fixed-top")
    $(".navbar").css('opacity', 1);
  }

  

  // smooth scroll
  // https://css-tricks.com/snippets/jquery/smooth-scrolling/
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length && target.selector.indexOf("carousel") < 0 ) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

  // project hovers
  $('.proj-link').hover(
    function () {
      $('.project-desc', this).show();
      $('.overlay', this).show();
    },
    function () {
      $('.project-desc', this).hide();
      $('.overlay', this).hide();
    }
  );

  // $('.bg-1,.bg-3').css('background-position', 'center');

  $('.bg-1,.bg-3').parallax({
    speed : 0.15
  });

  $('.bg-2').parallax({
    speed : 0.25
  });

  $('#fullpage').fullpage({
      //Scrolling
      css3: true,
      // scrollingSpeed: 700,
      autoScrolling: false,
      fitToSection: false,

      //Design
      paddingTop: '3em',
      paddingBottom: '10px'
      // scrollOverflow: true
      // responsiveWidth: 1000,
      // responsiveHeight: 0
    });

  // insert element after each input to create material-design-like form inputs
  $('input').after('<span class="bar"></span>');

});



