// JavaScript Document
jQuery(document).ready(function($){
	$(window).resize(function() {
		height=window.innerHeight-82;
		$('#back').css('left',-215-((((2400*height)/3454))/2));
		$('#mainContainer, #back, #areaCenter').css('height',height);
	});
	$(window).resize();
	var current = 1;
	var enable=true;
	
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
			$('.errorText').addClass('hide');
		}
	});
	
	var list;
	preload(Array('https://www.user.boulangerie-patisserie-dorrea.fr/assets/images/system/bUser.png'), function complete(list){
		$('#back').fadeIn(1000);
	});
	
	$('.buttonValid').on('click',function(){
		if(current <3 && enable)
		{
			enable=false;
			move(current,++current);
		}	
		if(current==3 && enable)
		{
			$('form').submit();
		}	
	});
	
	$('body').on('click','.done',function(){
		if(enable)
		{
			if(!$(this).hasClass('current'))
			{
				enable=false;
				var target;
				for(var i=1; i<=3; i++)
				{
					if($(this).hasClass('st_'+i))
					{
						target=i;
					}
				}
				move(current,target);
				current=target;
			}
		}
	});
	
    $('input').bind('cut copy paste', function (e) {
       e.preventDefault();
    });

	$('input').on('change, click, keyup',function(){
		if ($(this).val()!=''&&(!$('input[name="email"]').val().match(/[a-z0-9_\-\.]+@[a-z0-9_\-\.]+\.[a-z]+/i)))
		{
			$(this).removeClass('true');
			$(this).addClass('errorInput');
			$(this).parent().find('.errorVoid').addClass('hide');
			$(this).parent().find('.errorSyntax').removeClass('hide');
		}
		else
		{
			if ($(this).val()=='')
			{
				$(this).removeClass('true');
				$(this).addClass('errorInput');
				$(this).parent().find('.errorSyntax').addClass('hide');
				$(this).parent().find('.errorVoid').removeClass('hide');
			}
			else
			{
				$(this).removeClass('errorInput');
				$(this).addClass('true');
				$(this).parent().find('.errorVoid, .errorSyntax').addClass('hide');
			}
		}
		if ((!$(this).val()=='')&&$('input[name="emailConfirm"]').val()!=$('input[name="email"]').val())
			{
				$('input[name="emailConfirm"]').removeClass('true');
				$('input[name="emailConfirm"]').addClass('errorInput');
				$('input[name="emailConfirm"]').parent().find('.errorVoid').addClass('hide');
				$('input[name="emailConfirm"]').parent().find('.errorSyntax').removeClass('hide');
			}
	});
	
	function move(curr,obj)
	{
		if(obj ==3)
		{
			$('#leg').stop(true).animate({opacity:0},500);
		}
		else
		{
			$('#leg').stop(true).delay(500).animate({opacity:1},500);	
		}
		$('.st_'+curr).removeClass('current');
		$('.p'+curr).stop(true).animate({opacity:0},500).queue(function(){
			$('.p'+curr).hide();
			if(!$('.st_'+obj).addClass('done'))
			{
				$('.st_'+obj).addClass('done');
			}
			$('.st_'+obj).addClass('current');
			$('.p'+obj).show().stop(true).animate({opacity:1},500).queue(function(){enable=true});
		});
	};
});
