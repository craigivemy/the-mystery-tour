function getUrlParameter(name) {
  name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
  var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
  var results = regex.exec(location.search);
  return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
}

$(document).ready(function() {
  $('#js-ready-trigger').click(function() {
    $('.hero-overlay').fadeOut('slow', function() {
      $('.content').fadeIn('slow');
      $('.locations-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      });
    });
  });

  $('#js-expand-all-itinerary').click(function() {
    $(this).toggleClass('expanded');
    if ($(this).hasClass('expanded')) {
      $(this).text('Collapse All');
    } else {
      $(this).text('Expand All');
    }
  });

  $('a[href*="#"]')
  // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });

    if (getUrlParameter('back')) {
      $('.locations-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      });
    }

});
