<div id='mainContainer'>
	<div id='areaCenter'>
    	<div id='coArea'>
        	 <?=validation_errors()?>
             <FORM class="registerForm" action="/<?=strtolower($this->lang->line('lang_spec'))?>/registerSucess" method="post" enctype="multipart/form-data">
                <h1 class='title'><?=$this->lang->line('accounInfo')?></h1>
                <div class='blocRegisterLarge left tracker'>
                	<div class='st_1 run current done'><div class='step'><p><?=$this->lang->line('step1')?></p></div></div>
                    <div class='st_2 run'><div class='step'><p><?=$this->lang->line('step2')?></p></div></div>
                    <div class='st_3 run'><div class='step'><p><?=$this->lang->line('step3')?></p></div></div>
                </div>
                <div id='placeHolder'>
                    <div class='p1'>
                        <div class='blocRegisterLarge left'>
                            <p class='titleInput'><?=$this->lang->line('pseudo')?>* :</p>
                            <input class="true" type="text" name="pseudo" value=""/>
                            <p class='errorVoid error hide'><?=$this->lang->line('voidPseudo')?></p>
                        </div>
                        <div class='blocRegister left'>
                            <p class='titleInput'><?=$this->lang->line('your_id')?>* :</p>
                            <input class="true" type="email" name="email" value=""/>
                            <p class='errorSyntax error hide'><?=$this->lang->line('loggin_errorForm')?></p>
                            <p class='errorVoid error hide'><?=$this->lang->line('void_your_id')?></p>
                        </div>
                        <div class='blocRegister right'>
                            <p class='titleInput'><?=$this->lang->line('confirm_your_id')?>* :</p>
                            <input class="true" type="email" name="emailConfirm" value=""/>
                            <p class='errorSyntax error hide'><?=$this->lang->line('diff_confirm_your_id')?></p>
                             <p class='errorVoid error hide'><?=$this->lang->line('void_confirm_your_id')?></p>
                         </div>
                         <div class='blocRegister left'>
                             <p class='titleInput '><?=$this->lang->line('your_pw')?>* :</p>
                            <input class="true" type="password" name="pw" value=""/>
                            <p class='errorVoid error hide'><?=$this->lang->line('void_your_pw')?></p>
                         </div>
                         <div class='blocRegister right'>
                             <p class='titleInput'><?=$this->lang->line('confirm_your_pw')?>* :</p>
                            <input class="true" type="password" name="pwConfirm" value=""/>
                            <p class='error hide'><?=$this->lang->line('diff_confirm_your_pw')?></p>
                            <p class='errorVoid error hide'><?=$this->lang->line('void_confirm_your_pw')?></p>
                         </div>
                     </div>
                     <div class='p2'>
                     	<div class='blocRegisterLarge left'>
                            <p class='titleInput'><?=$this->lang->line('civility')?>** :</p>
                            <select name="civ">
                                 <option value="0"><?=$this->lang->line('default')?></option>
                                 <option value="1"><?=$this->lang->line('civ_mrs')?></option>
                                 <option value="2"><?=$this->lang->line('civ_mss')?></option>
                                 <option value="3"><?=$this->lang->line('civ_mr')?></option>
                            </select> 
                            <p class='errorVoid error hide'><?=$this->lang->line('void_civ')?></p>
                        </div>
                        <div class='blocRegister left'>
                            <p class='titleInput'><?=$this->lang->line('name')?>** :</p>
                            <input class="true" type="text" name="name" value=""/>
                            <p class='error hide'><?=$this->lang->line('void_name')?></p>
                        </div>
                        <div class='blocRegister right'>
                            <p class='titleInput'><?=$this->lang->line('surname')?> :</p>
                            <input class="true" type="text" name="surName" value=""/>
                            <p class='error hide'><?=$this->lang->line('void_surname')?></p>
                        </div>
                        <div class='blocRegister left'>
                            <p class='titleInput'><?=$this->lang->line('birthdate')?> :</p>
							<input class="true" type="date" name="birth" value=""/>
                            <p class='error hide'><?=$this->lang->line('void_birthdate')?></p>
                        </div>
                        <div class='blocRegister right'>
                            <p class='titleInput'><?=$this->lang->line('phone')?>** :</p>
                            <input class="true" type="text" name="tel" value=""/>
                            <p class='error hide'><?=$this->lang->line('void_phone')?></p>
                        </div>
                        <div class='blocRegister left'>
                            <p class='titleInput'><?=$this->lang->line('adress')?> :</p>
                            <input class="true" type="text" name="addr" value=""/>
                            <p class='error hide'><?=$this->lang->line('void_adress')?></p>
                        </div>
                        <div class='blocRegister right'>
                            <p class='titleInput'><?=$this->lang->line('postal')?>:</p>
                            <input class="true" type="text" name="cp" value=""/>
                            <p class='error hide'><?=$this->lang->line('void_postal')?></p>
                        </div>
                        <div class='blocRegister left'>
                            <p class='titleInput'><?=$this->lang->line('city')?> :</p>
                            <input class="true" type="text" name="ville" value=""/>
                            <p class='error hide'><?=$this->lang->line('void_city')?></p>
                        </div>
                        <div class='blocRegister right'>
                            <p class='titleInput'><?=$this->lang->line('country')?> :</p>
                            <input class="true" type="text" name="pays" value=""/>
                            <p class='error hide'><?=$this->lang->line('void_country')?></p>
                        </div>
                     </div>
                     <div class='p3'>
                     	<div class='blocRegisterNote left'>
                            <p class='titleInput'><?=$this->lang->line('languagePref')?>:<br/>
                                <div class='note'><?=$this->lang->line('languagePrefDetails')?>
                                </div>
                            </p>
                            <select name='lgPrf'>
                                 <option value="0"><?=$this->lang->line('default')?></option>
                                 <option value="1"><?=$this->lang->line('frenchFullName')?></option>
                                 <option value="2"><?=$this->lang->line('englishFullName')?> <?=$this->lang->line('runingTraduction')?>  </option>
                                 <option value="3"><?=$this->lang->line('spanishFullName')?> <?=$this->lang->line('runingTraduction')?> </option>
                                 <option value="4"><?=$this->lang->line('basqueFullName')?> <?=$this->lang->line('runingTraduction')?> </option>
                            </select> <br/>
                            <input class="true" type="checkbox" name="nwsL" checked="checked"/> <?=$this->lang->line('wantRegisterNewsLetter')?>
                            <div class='note'>
                                <?=$this->lang->line('wantRegisterNewsLetterDetails')?>
                            </div>
                            <input class="true" type="checkbox" name="cond"/><?=$this->lang->line('acceptCondition')?> 
                            <div class="g-recaptcha" data-sitekey="6LeTDQgTAAAAAG8LTogQdjVnQt8OR8ZRaMmHJUMO"></div>
                        </div>
                     </div>
                 </div>
                 <div id='leg'>
                     <div class='note'>*<?=$this->lang->line('force_area')?></div>
                     <div class='note'>**<?=$this->lang->line('ops_area')?></div>
                 </div>
                 <div class='buttonValid'><p><?=$this->lang->line('nextStep')?></p></div>
             </FORM>
     	</div>
     </div>
     <div id='back'></div>
</div>