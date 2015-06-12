// JavaScript Document
jQuery(document).ready(function($){
	var i = 0;
		$('input').change(function(){
		$(this).parents('tr').addClass('altered');
	});
	
	$('body').on('click','.deleteButton',function(){
		$(this).parents('tr').addClass('delete');
		$(this).hide();
		$(this).parent().find('.restaureButton').fadeIn('500');
		$(this).parents('tr').find('input').removeAttr('name');
	});
	
	$('body').on('click','.restaureButton',function(){
		$(this).parents('tr').removeClass('delete');
		$(this).hide();
		$(this).parent().find('.deleteButton').fadeIn('500');
		$(this).parents('tr').find('.key').attr('name','key_'+$(this).parents('tr').find('.key').val());
		$(this).parents('tr').find('.fr').attr('name','fr_'+$(this).parents('tr').find('.key').val());
		$(this).parents('tr').find('.en').attr('name','en_'+$(this).parents('tr').find('.key').val());
		$(this).parents('tr').find('.es').attr('name','es_'+$(this).parents('tr').find('.key').val());
		$(this).parents('tr').find('.eus').attr('name','eus_'+$(this).parents('tr').find('.key').val());
	});
	
	$('.addButton').on('click',function(){
		$("tbody").append("<tr class='lign'><td><input class='tar key' type='text' name='key_"+i+"' value=''/></td><td><input class='tar fr' type='text' name='fr_"+i+"' value=''/></td><td><input class='tar en' type='text' name='en_"+i+"' value=''/></td><td><input class='tar es' type='text' name='es_"+i+"' value=''/></td><td><input class='tar eus' type='text' name='eus_"+i+"' value=''/></td><td><button class='deleteButton' type='button'>DELETE</button><button class='restaureButton' style='display: none;' type='button'>RESTAURE</button></td></tr>");
		$('tr:last-child').addClass('altered');
		$("html, body").stop(true).animate({ scrollTop: $(document).height() }, 1);
		i++;
	});
});