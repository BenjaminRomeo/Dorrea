// JavaScript Document
jQuery(document).ready(function($){
	//Header AuxMenu width
	$('.listeLangue').css('width',$(window).innerWidth()-$('.langue').offset().left);
	$('.listeConnexion').css('width',$(window).innerWidth()-$('.connexion').offset().left);
	$('.listeAide').css('width',$(window).innerWidth()-$('.aide').offset().left);
	
	//Recherche
	$('.closeSearch').on('click',function(event){
		if($('.search').hasClass('closeSearch'))
		{
			$('.search').removeClass('closeSearch');
			$('.entrySearch:text').val('');
			$('.entrySearch').addClass('showBorderSearch');
			$('.close').removeClass('hideClose');
			$('.entrySearch').stop(true,false)
				.animate({
					'width': -26+$('.mainMenu').width()-
							($('.contact').position().left+$('.contact').width()+
								parseInt($('.contact').css('padding-left').replace('px',''))+
								parseInt($('.contact').css('padding-right').replace('px',''))*2+
								parseInt($('.loupe').css('width').replace('px','')))
				},{
					duration: 300
				});
			$('.loupe').stop(true,false)
			.animate({
				'right': $('.mainMenu').width()-
						($('.contact').position().left+$('.contact').width()+
							parseInt($('.contact').css('padding-left').replace('px',''))+
							parseInt($('.contact').css('padding-right').replace('px',''))*2+
							parseInt($('.loupe').css('width').replace('px','')))+3
			},{
				duration: 300
			});
		}
	});
	
	$('.close').on('click',function(event){
		
		$('.close').addClass('hideClose');
		$('.entrySearch:text').val('Recherche');
		$('.entrySearch').stop(true,false)
			.animate({
				'width': '74px'
			},{
				duration: 300
			}).queue(function(){
				$('.search').addClass('closeSearch');
				$('.entrySearch').removeClass('showBorderSearch');
			});
			
		$('.loupe').stop(true,false)
		.animate({
			'right': '76px'
		},{
			duration: 300
		});
	});
	
	//AuxiliarMenu
	$(document).on('mouseenter', '.elemMenuAux' ,function(){
		$('.liste').addClass('hide');
		$('.elemMenuAux').removeClass('black');
		if($(this).hasClass('langue'))
		{
			$('.listeLangue').removeClass('hide');
			$('.langue').addClass('black');
		}
		else
		{
			if($(this).hasClass('aide'))
			{
				$('.listeAide').removeClass('hide');
				$('.aide').addClass('black');
			}
			else
			{
				if($(this).hasClass('connexion'))
				{
					$('.listeConnexion').removeClass('hide');
					$('.connexion').addClass('black');
				}
				else
				{
					if($(this).hasClass('favori'))
					{
						$('.favori').addClass('black');
					}
					else
					{
						if($(this).hasClass('panier'))
						{
							$('.panier').addClass('black');
						}
					}
				}
			}
		}
	});
	
	$('.elemMenuAux').on('mouseleave',function(event){
		if(event.pageY <= 0)
		{
			$('.liste').addClass('hide');
			$('.elemMenuAux').removeClass('black');
		}
	});
	
	$('.langue').on('mouseleave',function(event){
		var bordureGauche = $('.langue').position().left; 
		var bordureDroite = $('.langue').position().left + $('.langue').width(); 	
		if(	!$('.listeLangue').hasClass('hide') &&
			(event.pageX < bordureGauche 		||
			 event.pageX > bordureDroite)			
		)
		{
			$('.listeLangue').addClass('hide');
			$('.langue').removeClass('black');
		}
	});
	$('.listeLangue').on('mouseleave',function(event){
		var bordureGauche = $('.langue').position().left; 
		var bordureBas = $('.listeLangue').height(); 	
		if(	!$('.listeLangue').hasClass('hide') &&
			(event.pageX < bordureGauche 		||
			 event.pageY > bordureBas)		
		)
		{
			$('.listeLangue').addClass('hide');
			$('.langue').removeClass('black');
		}
	});
	$('.aide').on('mouseleave',function(event){
		var bordureGauche = $('.aide').position().left; 
		var bordureDroite = $('.aide').position().left + $('.aide').width(); 	
		if(	!$('.listeAide').hasClass('hide') &&
			(event.pageX < bordureGauche 		||
			 event.pageX > bordureDroite)			
		)
		{
			$('.listeAide').addClass('hide');
			$('.aide').removeClass('black');
		}
	});
	$('.listeAide').on('mouseleave',function(event){
		var bordureGauche = $('.aide').position().left; 
		var bordureBas = $('.listeAide').height(); 	
		if(	!$('.listeAide').hasClass('hide') &&
			(event.pageX < bordureGauche 		||
			 event.pageY > bordureBas)			
		)
		{
			$('.listeAide').addClass('hide');
			$('.aide').removeClass('black');
		}
	});
	$('.connexion').on('mouseleave',function(event){
		var bordureGauche = $('.connexion').position().left; 
		var bordureDroite = $('.connexion').position().left + $('.connexion').width(); 	
		if(	!$('.listeConnexion').hasClass('hide') &&
			(event.pageX < bordureGauche 		||
			 event.pageX > bordureDroite)		
		)
		{
			$('.listeConnexion').addClass('hide');
			$('.connexion').removeClass('black');
		}
	});
	$('.listeConnexion').on('mouseleave',function(event){
		var bordureGauche = $('.connexion').position().left; 
		var bordureBas = $('.listeConnexion').height(); 	
		if(	!$('.listeConnexion').hasClass('hide') &&
			(event.pageX < bordureGauche 		||
			 event.pageY > bordureBas)		
		)
		{
			$('.listeConnexion').addClass('hide');
			$('.connexion').removeClass('black');
		}
	});
	$('.favori, .panier').on('mouseleave',function(event){
			$(this).removeClass('black');
	});
});
