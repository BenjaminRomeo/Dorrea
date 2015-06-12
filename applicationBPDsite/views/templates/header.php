<html>
    <head>
        <title> <?=$title?></title>
        <link rel="icon" href="<?php echo base_url(); ?>favicon.gif" type="image/gif">
        <?
			foreach ($css as $value)
			{
				?><link rel="stylesheet" type="text/css" media="screen" href="<?=css_url($value) ?>" /><?};?>
            <script src="https://code.jquery.com/jquery-latest.min.js"></script> 
            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
            <?
			foreach ($jsLib as $value2)
			{
				?><script src="<?= js_lib_url($value2) ?>"></script><?
			};
			foreach ($js as $value2)
			{
				?><script src="<?= js_url($value2) ?>"></script><?
			};
			?>
			<?php if($_SERVER['HTTP_HOST']=='www.user.boulangerie-patisserie-dorrea.fr'):?> 
				<script src="https://www.google.com/recaptcha/api.js?hl=<?=$this->lang->line('lang_spec')?>" async defer></script>
			<?php endif;?>
    </head>
    <body class='overflow'>
    	<?php if($_SERVER['HTTP_HOST']!='admin.boulangerie-patisserie-dorrea.fr'):?> 
    	<noscript style='width:100%; position: fixed;z-index: 1000000000000000000;font-size: 30;background-color: red;text-align: center;top: 82;'><?=$this->lang->line('alert_jsDisable')?></noscript>
        <?php endif;?>
		
