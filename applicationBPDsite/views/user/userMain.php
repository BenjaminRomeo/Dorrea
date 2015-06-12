<div id='mainContainer'>
	<div id='centerer'>
    	<div id='areaCenter'>
            <div id='coArea'>
   				<FORM class="connect" action="/<?=strtolower($this->lang->line('lang_spec'))?>/" method="post" enctype="multipart/form-data">
                    <h1 class='title'><?=$this->lang->line('space_login')?></h1>
                    <p class='text'>
                        <?=$this->lang->line('loggin_mess')?>
                    </p>
                    <div class='blocRegisterLarge left'>
						<p class='titleInput'><?=$this->lang->line('your_id')?>* :</p>
                        <input class='true' type='text' name='email' value='<?php echo set_value('email'); ?>'/><br/>
                        <div class='errorText hide'><?=$this->lang->line('loggin_errorForm')?></div>
                        <?php echo form_error('email', '<div class="errorText">', '</div>'); ?>
                    </div>
                    
                     <div class='blocRegisterLarge left'>
						<p class='titleInput'><?=$this->lang->line('your_pw')?>* :</p>
                        <input class='true' type='password' name='password' value='<?php echo set_value('password'); ?>'/>
                        <?php echo form_error('password', '<div class="errorText">', '</div>'); ?>
                    </div>
                    
                    <input class='rememberCB' type='checkbox' name='remember'> 
                    <div id='infoSup'>
                        <?=$this->lang->line('loggin_remember')?>
                        <a id='forgot' href=''><?=$this->lang->line('forgot_pw')?></a>
                    </div>
                    <div id='note'>*<?=$this->lang->line('force_area')?></div>
                    <div class='buttonValid'><p><?=strtoupper($this->lang->line('connexion_button'))?></p></div>
                </FORM>
                
                <div class='inscription'>
                    <h1 class='title'><?=$this->lang->line('space_register')?></h1>
                    <p class='text'>
                        <?=$this->lang->line('register_mess')?>
                    </p>
                    <ul>
                        <li><?=$this->lang->line('adv1_register')?></li>
                        <li><?=$this->lang->line('adv2_register')?></li>
                        <li><?=$this->lang->line('adv3_register')?></li>
                        <li><?=$this->lang->line('adv4_register')?></li>
                    </ul>
                    <div class='buttonRegister register'><p><?=strtoupper($this->lang->line('register_button'))?></p></div>
                </div>
            </div>
         </div>
     </div>
     <div id='back'></div>
</div>