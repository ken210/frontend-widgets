(function() {
  $(function() {
    var animateHeaderBg, jumpTo;
    $.fn.toggleSlimHeader = function(headerHeight) {
      var scrollHeight;
      scrollHeight = $(window).scrollTop();
      $(this).stop(true, true)[scrollHeight > headerHeight ? 'addClass' : 'removeClass']('show', 300, 'easeInOutQuad');
    };
    animateHeaderBg = function() {
      $('#header').find('.content').animate({
        backgroundPositionY: '-382px'
      }, 30000, 'easeInOutQuad').animate({
        backgroundPositionY: '0'
      }, 30000, 'easeInOutQuad', function() {
        animateHeaderBg();
      });
    };
    jumpTo = function(e, add) {
      var optVal;
      optVal = $(e).val() || $(e).attr('href');
      if (optVal.charAt(0) === '#') {
        $(window)[!!$['scrollTo'] ? 'scrollTo' : 'scrollTop']($(optVal).offset().top + add, 500);
      } else {
        document.location.href = optVal;
      }
    };
    $('.ir').each(function() {
      $(this).attr('title', $.trim($(this).text()));
    });
    $('select.jumpMenu').change(function() {
      jumpTo(this, -72);
    });
    $('aside').find('nav').find('a').click(function() {
      jumpTo(this, -72);
      return false;
    });
    $(window).scroll(function() {
      $('#slimHeader').toggleSlimHeader($('#header').height());
    });
  });
}).call(this);
