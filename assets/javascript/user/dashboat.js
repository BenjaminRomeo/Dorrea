// JavaScript Document
jQuery(document).ready(function($){
	$(window).resize(function() {
		height=window.innerHeight-82;
		$('#back').css('left',-215-((((2400*height)/3454))/2));
		$('#mainContainer, #back, #areaCenter').css('height',height);
	});
	$(window).resize();
});