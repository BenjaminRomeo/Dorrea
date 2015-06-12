<div id="header">
	<div id='auxiliarMenu'>
    	<div id='accessMenuAux'> 
            <?php if($this->session->has_userdata('logged_in')):?><a href=""><div class='elemMenuAux panier'><div class='subElem'><?=strtoupper($this->lang->line('panier_menu'))?></div>
            <div class='blockNumber nbPanier'>0</div>
            </div></a><?php endif;?>
            <a href=""><div class='elemMenuAux favori'><div class='subElem'><?=strtoupper($this->lang->line('preference_menu'))?></div>
            <div class='blockNumber nbFavori'>0</div>
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
                <div class='log lgB'><div class='flag flagLOG'></div><a href="<?=base_url_secSsl().strtolower($this->lang->line('lang_spec'))?>/"> 
				<?=$this->lang->line('connect_menu')?> </a></div>
                <div class='suscribSite lgB'><div class='flag flagREGI'></div><a href="<?=base_url_secSsl().strtolower($this->lang->line('lang_spec'))?>/register.html"> <?=$this->lang->line('register_menu')?> </a></div>
                <div class='suscribeNews lgB'><div class='flag flagNEWSL'></div><a href=""> <?=$this->lang->line('newsLetter_menu')?> </a></div>
            </div>
        </div>
    </div>
    <div id="imgMenu"></div>
    <div class="mainMenu">
    	<div id='accessMenu'> 
        	<img src='<?php echo base_url();?>assets/images/system/icone.png'/>
        	<span class='elemMenu accueil pos'><?=strtoupper($this->lang->line('accueil_menu'))?></span>
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
<div id='backAlert'>
    <div id='alert'>
        <div id='alertBox'>
            <div id='textAlert'><h2> /!\ SITE EN CONSTRUCTION /!\ </h2> <p>Le contenu et notamment les images présentent sur ce site son provisoire et ne sont utilisées que dans l'attente de la création proche des notre afin d'avoir un rendu cohérent et proche de l'attente finale.<br/><br/>
            <input type="checkbox" id="choiceRead" name="choiceRead"> Ne plus afficher ce message à l'avenir. </p>         
            </div>
            <div id='buttonAlert'><p> ACCEPTER </p></div>
            <div id='timer'><p></p></div>
         </div>
    </div>
</div>
<div id='mainContainer'>
	<div id='recover'>
    	<div id='textAnnounce'>
 			NOUVEAUTES
        </div>
        <div id='under1'>\/</div>
        <div id='under2'>\/</div>
    </div>
    <div class='page page7'>
        Page1
        <a href=<?= site_url().'pages/view'?> >First dynamic link test</a>
    </div>
    <div class='page page6'>
    	Page2
	</div>
    <div class='page page5'>
    	Page2
	</div>
    <div class='page page4'>
    	Page3
	</div>
    <div class='page page3'>
    	Page4
	</div>
    <div class='page page2'>
    	Page5
	</div>
    <div class='page page1'>
    	Page6
	</div>
</div>

<div class='offContenu hide'>
	<div class='load'>
    	<div class='loadMess'>
            CHARGEMENT EN COURS<br/>
            (VEUILLEZ PATIENTER)
        </div>
        <div class='loadFailed'>
        	<h2>Erreur : <span id='errorNum'></span> - <span id='errorName'></span></h2>
        	Délai de connexion expiré, veuillez vérifier votre connexion Internet.<br/>
        </div>
    </div>
    <div class='produits hide'>
        <table>
            <tr>
                <td id='painContainer' colspan="2"><div id='pain'><div class='productSubCat'><p>ESPACE BOULANGERIE</p></div></div></td>
                <td id='gateauxContainer'><div id='gateaux'><div class='productSubCat'><p>ESPACE PÂTISSERIE</p></div></div></td>
            </tr>
            <tr>       
            	<td id='salesContainer' rowspan="2"><div id='sales'><div class='productSubCat'><p>ESPACE SALÉ</p></div></div></td> 
                <td id='vienoiseriesContainer' rowspan="2"><div id='vienoiseries'><div class='productSubCat'><p>ESPACE VIENNOISERIE</p></div></div></td>
                <td id='confitureContainer'><div id='confiture'><div class='productSubCat'><p>ESPACE CONFISERIE</p></div></div></td>   		
            </tr>
            <tr>       
           		<td id='biscuitContainer'><div id='biscuit'><div class='productSubCat'><p>ESPACE BISCUITERIE</p></div></div></td>
            </tr>
        </table>
    </div>
    <div class='acessApply'>
    	<div class='imgBanner painBanner'></div>
        <div class='underBanner'>
        	NOS PRODUITS > ESPACE BOULANGERIE
        </div>
        <div class='overUnderBanner'>
        </div>
        <div class='apply'>
        </div>
    </div>
    <div class='events hide'>
        <table>
        	<? $auth=false; if($auth): ?>
            <tr>
                <td id='noelContainer' colspan="2"><div id='noel'><div class='productSubCat'><p>SELECTION DE NOEL</p></div></div></td>
            </tr>
            <? endif; ?>
            <tr>
                <td <? echo($auth? "height='50%'" : "height='100%'") ?> id='marcherContainer'><div id='marcher'><div class='productSubCat'><p>LE MARCHER</p></div></div></td>
                <td <? echo($auth? "height='50%'" : "height='100%'") ?>  id='famContainer'><div id='fam'><div class='productSubCat'><p>EVENEMENT FAMILLIAUX</p></div></div></td>
            </tr>
        </table>

    </div>
    <div class='magasinArea hide'>
        <div id='fond'>
            <div id='textMagasin'>
                <h1> LA BOULANGERIE</h1>
                <p>
                    Quis enim aut eum diligat quem metuat, aut eum a quo se metui putet? Coluntur tamen simulatione dumtaxat ad tempus. Quod si forte, ut fit plerumque, ceciderunt, tum intellegitur quam fuerint inopes amicorum. Quod Tarquinium dixisse ferunt, tum exsulantem se intellexisse quos fidos amicos habuisset, quos infidos, cum iam neutris gratiam referre posset.
    
    Haec igitur Epicuri non probo, inquam. De cetero vellem equidem aut ipse doctrinis fuisset instructior est enim, quod tibi ita videri necesse est, non satis politus iis artibus, quas qui tenent, eruditi appellantur aut ne deterruisset alios a studiis. quamquam te quidem video minime esse .
    Accedat huc suavitas quaedam oportet sermonum atque morum, haudquaquam mediocre condimentum amicitiae. Tristitia autem et in omni re severitas habet illa quidem gravitatem, sed amicitia remissior esse debet et liberior et dulcior et ad omnem comitatem facilitatemque proclivior.
    
    Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.
    
    Haec subinde Constantius audiens et quaedam referente Thalassio doctus, quem eum odisse iam conpererat lege communi, scribens ad Caesarem blandius adiumenta paulatim illi subtraxit, sollicitari se simulans ne, uti est militare otium fere tumultuosum, in eius perniciem conspiraret, solisque scholis iussit esse contentum palatinis delem nirum ates dentiri et protectorum cum Scuta
    
    Haec igitur Epicuri non probo, inquam. De cetero vellem equidem aut ipse doctrinis fuisset instructior est enim, quod tibi ita videri necesse est, non satis politus iis artibus, quas qui tenent, eruditi appellantur aut ne deterruisset alios a studiis. quamquam te quidem video minime esse .
    Accedat huc suavitas quaedam oportet sermonum atque morum, haudquaquam mediocre condimentum amicitiae. Tristitia autem et in omni re severitas habet illa quidem gravitatem, sed amicitia remissior esse debet et liberior et dulcior et ad omnem comitatem facilitatemque proclivior.
                </p>
            </div>
            <div id='button'>
            	<div class='buttonLign'>
                    <div class='boutonMagasin'>
                        <p>NOUS LOCALISER</p>
                    </div>
                    <div class='boutonMagasin'>
                        <p>NOUS CONTACTER</p>
                    </div>
                 </div>
             </div>
        </div>
        <div class='magasinDesc1' style='display:none;'>
        </div>
        <div class='magasinDesc2'>
        </div>
    </div>
</div>

