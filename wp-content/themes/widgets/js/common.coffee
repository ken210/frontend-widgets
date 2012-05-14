# using jQuery, jQuery UI effects

$ ->
	$.fn.toggleSlimHeader = (headerHeight) ->
		scrollHeight = $(window).scrollTop()
		$(this).stop(true, true)[if scrollHeight > headerHeight then 'addClass' else 'removeClass'] 'show', 300, 'easeInOutQuad'
		return
		
	animateHeaderBg = () ->
		$('#header').find('.content')
			.animate(
				backgroundPositionY : '-382px'
				30000, 'easeInOutQuad')
			.animate(
				backgroundPositionY : '0'
				30000, 'easeInOutQuad', ->
					do animateHeaderBg
					return
				)
		return
		
	
	jumpTo = (e, add) ->
		# enhanced if has jquery.scrollTo plugin 
		optVal = $(e).val() || $(e).attr('href')
		if optVal.charAt(0) == '#'
			$(window)[if !!$['scrollTo'] then 'scrollTo' else 'scrollTop']($(optVal).offset().top + add, 500)
		else
			document.location.href = optVal
		return
	
	$('.ir').each ->
		$(this).attr('title', $.trim $(this).text())
		return
	
	$('select.jumpMenu').change ->
		jumpTo(this, -72)
		return
		
	$('aside').find('nav').find('a').click ->
		jumpTo(this, -72)
		return false
	
	$(window).scroll ->
		$('#slimHeader').toggleSlimHeader $('#header').height()
		return
	
	#do animateHeaderBg
	
	return