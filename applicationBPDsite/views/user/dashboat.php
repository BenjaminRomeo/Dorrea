<div id='mainContainer'>
	DASHBOAT
    <?php
	echo $this->session->logged_in['email'];
	?>
    <FORM class="connect" action="/<?=strtolower($this->lang->line('lang_spec'))?>/logout" method="post" enctype="multipart/form-data">
    	<input type='submit' value='logout'/>
    </FORM>
</div>