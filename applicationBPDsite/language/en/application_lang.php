<?php
//EN
defined('BASEPATH') OR exit('No direct script access allowed');

if (!$file = fopen('assets/language/keyText.txt',"r+")) {
	echo "Echec de l'ouverture du fichier";
	exit;
}
else 
{
	while(!feof($file))
	{
		$lign = fgets($file);
		$elem = explode(';',$lign);
		if($elem[0]!='')
		{
			$lang[$elem[0]]=$elem[2];
		}
	}
	fclose($file); 
}
?>