(function() {
  $(function() {
    var top;
    top = $(window).scrollTop();
    return $(window).bind('scroll', function() {
      var newTop;
      newTop = $(this).scrollTop();
      return $(this).scrollTop(top).scrollTo(newTop);
    });
  });
}).call(this);
