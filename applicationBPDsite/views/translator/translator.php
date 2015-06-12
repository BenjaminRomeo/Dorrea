<FORM name="loadfile" action="/translator/rewrite" method="post" enctype="multipart/form-data">
<div id='header'>
	<div id='title'>
    	CMS LANGUAGE EDITOR 
         <button class='validButton' type='submit'>SEND</button>
         <button class='addButton' type='button'>ADD</button>
    </div>
    <div id='subMenu'>
    	<span> KEY </span>
        <span> FR </span>
        <span> EN </span>
        <span> ES </span>
        <span> EUS </span>
        <span> ACTION </span>
    </div>
</div>

<table>
	<?php 
    if (!$file = fopen('assets/language/keyText.txt',"r")) {
        echo "Echec de l'ouverture du fichier";
        exit;
    }
    else 
    {
        while(!feof($file))
        {	
			$lign = explode(';',fgets($file));
			if($lign[0]!='')
			{
				?>
				<tr class='lign'>
				<td><input class="tar key" type="text" name="key_<?=$lign[0]?>" value="<?=$lign[0]?>"/></td>
				<td><input class="tar fr" type="text" name="fr_<?=$lign[0]?>"  value="<?=$lign[1]?>"/></td>
				<td><input class="tar en" type="text" name="en_<?=$lign[0]?>" value="<?=$lign[2]?>"/></td>
				<td><input class="tar es" type="text" name="es_<?=$lign[0]?>" value="<?=$lign[3]?>"/></td>
				<td><input class="tar eus" type="text" name="eus_<?=$lign[0]?>" value="<?=$lign[4]?>"/></td>
				<td>
						  <button class='deleteButton' type='button'>DELETE</button>
						  <button class='restaureButton' style='display: none;' type='button'>RESTAURE</button>
					</td>
				</tr>
                <?php
			}
        }
        fclose($file);
    }
    ?>
    <tr id='space'>
        <td colspan="6"></td>
    </tr>
</table>
</FORM>