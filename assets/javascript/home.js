// JavaScript Document
jQuery(document).ready(function($){
	//Scrool Appli
	var windowScroll;
	var page=1;
	var maxPage=6;
	var height;
	var fixedLimit = $('.mainMenu').offset().top - parseFloat($('#auxiliarMenu').height());
	
	$(window).resize(function() {
        height=window.innerHeight-($('.mainMenu').height()+$('#accessMenuAux').height()+2)
		$('.offContenu').css('height', height);
		$('#mainContainer').css('height', window.innerHeight*(40/100)-$('.mainMenu').height()-2);
		
		$('#textAnnounce').css('font-size',$('#recover').height()-70);
		if($('.magasin').hasClass('pos'))
		{
			magasinAcess.resize(height);
		}	
    });
	$(window).trigger('resize');
	
	scrollw.init();
	scrollw.position();
	
	//AlertBox
	if($.jCookies({ get:'DoereaCook'})['alertBoxChoice'])
	{
		$('#backAlert').hide();
	}
	var stateAlertBox = false;
	$('#choiceRead').change(function () {
		if ($('#choiceRead').is(':checked')) 
		{
			stateAlertBox = true;
		} 
		else 
		{
			stateAlertBox = false;
		}
	});
	$('#buttonAlert').on('click','',function(event)
	{
		$('#buttonAlert').fadeOut(200);
		$('#timer').delay(200).fadeIn(200);
		$('#textAlert > p').fadeOut(200).queue(function(){$('#textAlert > p').text('Merci de votre compréhention.').stop(true).fadeIn(200)});
		var index = 3;
		$('#timer > p').text(index);
		var timer = setInterval(function(){
			$('#timer > p').text(index);
			if(index==0)
			{
				$('#backAlert').fadeOut(300);
				if(stateAlertBox)
				{
					$.jCookies({
						name : 'DoereaCook',
						value : { alertBoxChoice : true}
					});
				}
				clearInterval(timer);
			}
			index--;
		},1000);
	});
	
	//Event
	$('.produit').on('click','',function(event)
	{
		if(!$('.produits').hasClass('pos'))
		{
			//Repose
			$('.elemMenu').removeClass('pos');
			$('.produit').addClass('pos');
			$('.offContenu, .produits').stop(true).fadeIn(300).removeClass('hide');
		}
	});
	
	$('.event').on('click','',function(event)
	{
		if(!$('.event').hasClass('pos'))
		{
			//Repose
			$('.elemMenu').removeClass('pos');
			$('.event').addClass('pos');
			$('.offContenu, .events').stop(true).fadeIn(300).removeClass('hide');
		}
	});
	
	//Magasin
	$('.magasin').on('click','',function(event)
	{
		if(!$('.magasin').hasClass('pos'))
		{
			magasinAcess.init(height, fixedLimit);
		}
	});
	
	//URL Detector Access
	var extenssion = window.location.pathname.split('/')[1].replace('.html','');
	if(extenssion=='magasin')
	{
		$('.magasin').trigger('click');
	}
	
	$('.accueil, .event, .produit, .specialite').on('click','',function(event)
	{
		if(extenssion=='magasin')
		{
			magasinAcess.leave();
		}
	});
});

var scrollw = 
{
	init:function()
	{
		var page=0;
		var wheelevt='DOMMouseScroll, mousewheel, wheel';
		
		$(window).bind(wheelevt, function(event) {
			//Page
			if(page==0)
			{
				if(event.originalEvent.deltaY>0)
				{
					$('#imgMenu').stop(true)
						.animate({
							height:$('#auxiliarMenu').height()
						},500,"linear");
				}
				else
				{
					$('#imgMenu').stop(true)
						.animate({
							height:window.innerHeight*(60/100)
						},500,"linear");
				}
			}
			else
			{
				if(event.originalEvent.deltaY>0)
				{
					if($('.mainMenu').hasClass('scrollMenu') && page<= maxPage)
					{
						$('.page'+page).stop(true,true)
						.animate({
							top: -height
						},{
							duration: 500
						}).queue(function(){
							page++;
						});
					}
				}
				else
				{
					if($('.mainMenu').hasClass('scrollMenu') && page<= maxPage)
					{
						;
						$('.page'+page-1).stop(true,true)
						.animate({
							top: 83
						},{
							duration: 500
						}).queue(function(){
							page--;
						});
					}
				}
			}
		});
	},
	
	position:function()
	{
		
	}
};

var magasinAcess =
{
	init:function(height, fixedLimit){
		//urlrewrite
		history.pushState('data', '', 'magasin.html');
		
		var that=this;
		this.indexImg = 0;
		this.nbImg = 2;
		var list;
		this.resize(height);
		var ready =false;
		this.rollroverImg;
		this.array=arrayImage(this.nbImg,'http://boulangerie-patisserie-dorrea.fr/assets/images/magasin/mag');
		
		//Repose
		$('.elemMenu').removeClass('pos');
		$('.magasin').addClass('pos');
		
		//Barbare
		$('.mainMenu').stop(true).animate({top: $('#auxiliarMenu').height()},500).queue(function(){
			$('.loadMess').show();
			$('.loadFailed').hide();
			$('.load').show();
			$('.offContenu').stop(true).fadeIn(300).removeClass('hide');
			preload(that.array, function complete(list){
				ready = true;
				$('.magasinArea').stop(true).fadeIn(300).queue(function(){$('.magasinArea > #fond').stop(true).show("slide",{ direction:'right' } ,500)}).removeClass('hide');
				$('.load').hide();
				this.rolloverImg=setInterval(function(){imgRoolOver()},11000);
				imgRoolOver();
			});
			testLoad = setInterval(function(){
				if(!ready)
				{
					$.ajax({
						error: function(xhr, status, error) {
							$('.loadFailed').show();
							$('.loadMess').hide();
							if(error==''||status=='')
							{
								$('#errorNum').append('408');
								$('#errorName').append('Request Timeout');
							}
							clearInterval(testLoad);
						}
					});
				}
				else
				{
					clearInterval(testLoad);
				}
			},6000);
		});
	},
	leave:function(){
		//Repose
		$('.elemMenu').removeClass('pos');
		$('.accueil').addClass('pos');
		$('.magasinArea > #fond').stop(true).hide("slide",{ direction:'right' } ,500);
		$('.offContenu, .magasinArea').stop(true).fadeOut(300).removeClass('hide');
		clearInterval(rolloverImg);
	},
	quickLeave:function(){
	},
	resize:function(height){
		heightText=height-(
				   parseInt($('#textMagasin').css('padding-top').replace('px',''))+$('#textMagasin > h1').height()+ parseInt($('#textMagasin > p').css('margin-top').replace('px',''))+150);
		$('#textMagasin > p').css('height',heightText);
	}
};

function imgRoolOver(act){
	if(magasinAcess.indexImg >= magasinAcess.nbImg-1)
	{
		magasinAcess.indexImg=0;
	}
	$('.magasinDesc2').css('background-image','url('+magasinAcess.array[magasinAcess.indexImg]+')');
	magasinAcess.indexImg++;
	$('.magasinDesc1').css('background-image','url('+magasinAcess.array[magasinAcess.indexImg]+')');
	magasinAcess.indexImg++;
	$('.magasinDesc2').stop(true)
		.animate({
			'background-size': '130%'
		},{
			duration: 5000
		}).queue(function(){
			 $('.magasinDesc1').stop(true).fadeIn(500);
			 $(this).stop(true).fadeOut(500,function(){}).queue(function(){
				 $(this).css('background-size','100%');
				 $('.magasinDesc1').stop(true)
					.animate({
						'background-size': '130%'
					},{
						duration: 5000
					}).queue(function(){
						 $(this).stop(true).fadeOut(500,function(){}).queue(function(){
							$('.magasinDesc1').css('background-size','100%');
						 });
						 $('.magasinDesc2').stop(true).fadeIn(500);
				});
		});
	});
};