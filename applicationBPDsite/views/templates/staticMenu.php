<div id="header">
	<div id='auxiliarMenu'>
    	<div id='accessMenuAux'> 
            <?php if($this->session->has_userdata('logged_in')):?><a href=""><div class='elemMenuAux panier'><div class='subElem'><?=strtoupper($this->lang->line('panier_menu'))?></div>
            <div class='blockNumber nbPanier'>0</div>
            </div></a><?php endif;?>
            <a href=""><div class='elemMenuAux favori'><div class='subElem'><?=strtoupper($this->lang->line('preference_menu'))?></div>
            <div class='blockNumber nbFavori'>99+</div>
            </div></a>
            <a href=""><div class='elemMenuAux connexion'>
            	<div class='subElem'><?php if(!$this->session->has_userdata('logged_in')):?><?=strtoupper($this->lang->line('connexion_menu'))?><?php else:?><?=strtoupper($this->lang->line('my_account'))?><?php endif;?></div>
            </div> 
            </a>
            <a href=""><div class='elemMenuAux aide'>
				<div class='subElem'><?=strtoupper($this->lang->line('aide_menu'))?></div>
            </div>
            </a>
            <a href=""><div class='elemMenuAux langue'>
            	<div class='subElem'><?=strtoupper($this->lang->line('langue_menu').': ')?></div>
                <div class="flagOver flag<?=$this->lang->line('lang_spec')?>"></div>
            </div>
            </a>
         </div>
         <div class='listeLangue hide liste'>
         	<div class='subMenuAux'>
                <div class='lg'><div class='flag flagFR'></div><a href="<?=URLPrefix('fr')?>"> Français </a></div>
                <div class='lg'><div class='flag flagEN'></div><a href="<?=URLPrefix('en')?>"> English </a></div>
                <div class='lg'><div class='flag flagES'></div><a href="<?=URLPrefix('es')?>"> Español </a></div>
                <div class='lg'><div class='flag flagEUS'></div><a href="<?=URLPrefix('eus')?>"> Euskal </a></div>
            </div>
        </div>
         <div class='listeAide hide liste'>
         	<div class='subMenuAux'>
                <div class='secuPaye lgB'><div class='flag flagPAY'></div><a href=""> <?=$this->lang->line('security_menu')?> </a></div>
                <div class='protecData lgB'><div class='flag flagPROT'></div><a href=""> <?=$this->lang->line('protectData_menu')?> </a></div>
                <div class='infoLegal lgB'><div class='flag flagINFO'></div><a href=""> <?=$this->lang->line('info_menu')?> </a></div>
                </div>
        </div>
         <div class='listeConnexion hide liste'>
         	<div class='subMenuAux'>
            	<?php if(!$this->session->has_userdata('logged_in')):?>
                    <div class='log lgB'><div class='flag flagLOG'></div><a href="<?=base_url_secSsl().strtolower($this->lang->line('lang_spec')).''?>/"> <?=$this->lang->line('connect_menu')?> </a></div>
                    <div class='suscribSite lgB'><div class='flag flagREGI'></div><a href="<?=base_url_secSsl().strtolower($this->lang->line('lang_spec'))?>/register.html"> <?=$this->lang->line('register_menu')?> </a></div>
                    <div class='suscribeNews lgB'><div class='flag flagNEWSL'></div><a href=""> <?=$this->lang->line('newsLetter_menu')?> </a></div>
            	<?php else:?>
                	 <div class='suscribSite lgB'><div class='flag flagREGI'></div><a href="<?=base_url_secSsl().strtolower($this->lang->line('lang_spec'))?>/"> <?=$this->lang->line('profil_menu')?> </a></div>
                     <div class='suscribSite lgB'><div class='flag flagREGI'></div><a href="<?=base_url_secSsl().strtolower($this->lang->line('lang_spec'))?>/logout"> <?=$this->lang->line('logout_menu')?> </a></div>
				<?php endif;?>
            </div>
        </div>
    </div>
    <div class="mainMenu">
    	<div id='accessMenu'> 
        	<img src='<?php echo base_url();?>assets/images/system/icone.png'/>
        	<span class='elemMenu accueil'><?=strtoupper($this->lang->line('accueil_menu'))?></span>
            <span class='elemMenu specialite'><?=strtoupper($this->lang->line('spe_menu'))?></span>
            <span class='elemMenu produit'><?=strtoupper($this->lang->line('produits_menu'))?></span>
            <span class='elemMenu event'><?=strtoupper($this->lang->line('event_menu'))?></span>
            <span class='elemMenu magasin'><?=strtoupper($this->lang->line('magasin_menu'))?></span>
            <span class='elemMenu contact'><?=strtoupper($this->lang->line('contact_menu'))?></span>
        </div>
        <div id='rightMenu'>
            <div id='acceeOut'>
                <div class='instagram'></div>
                <div class='twiter'></div>
                <div class='facebook'></div>
            </div>
            <div class='search closeSearch'>
                    <input class='entrySearch' VALUE='<?=$this->lang->line('recherche_menu')?>'></input>
                    <button class='loupe'></button>
                    <button class='close hideClose'></button>
            </div>
        </div>
        <div class='subMenu'>
        	<div class='naviGauche'></div>
            <div class='naviDroite'></div>
        </div>
    </div>
</div>