$ ->
	top = $(window).scrollTop()
	$(window).bind 'scroll', ->
		newTop = $(this).scrollTop()
		$(this).scrollTop(top).scrollTo(newTop)
		
