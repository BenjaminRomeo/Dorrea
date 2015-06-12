// JavaScript Document
jQuery(document).ready(function($){
	$(window).resize(function() {
		height=window.innerHeight-82;
		$('#mainContainer, #back, #centerer').css('height',height);
	});
	$(window).resize();
	
	$('.idArrea').change(function(){
		if (!$(this).val().match(/[a-z0-9_\-\.]+@[a-z0-9_\-\.]+\.[a-z]+/i))
		{
			$(this).removeClass('true');
			$(this).addClass('error');
			$('.errorText').removeClass('hide');
		}
		else
		{
			$(this).removeClass('error');
			$(this).addClass('true');
			//$('.errorText').addClass('hide');
		}
	});
	
	var list;
	preload(Array('https://www.user.boulangerie-patisserie-dorrea.fr/assets/images/system/bUser.png'), function complete(list){
		$('#back').fadeIn(1000);
	});
	
	$('.register').on('click',function(){
		$('.connect, .inscription').stop(true).fadeOut(500).queue(function(){
			$(this).remove();
		});
		loadjscssfile('user/userRegister.css','css');
		loadjscssfile('user/userRegister.js','js');
		$('#back').stop(true)
			.animate({
				'left':-250-((((2400*height)/8154))/2)
			},500)
			.queue(function(){
				$('.registerForm').fadeIn(500);
			});
	});
	
	$('.buttonValid').on('click',function(){
			$('form').submit();
	});
});