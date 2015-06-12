<?php
if (!$file = fopen('assets/language/keyText.txt',"r+")) {
        echo "Echec de l'ouverture du fichier";
        exit;
    }
    else 
    {
        ftruncate($file,0);
		$i=1;
		foreach($_POST as $value)
		{
			fputs ($file, $value);
			if($i == 5)
			{
				$error = fputs ($file, "\n");
				$i=1;
			}
			else
			{
				fputs ($file, ';');	
				$i++;	
			}
		}
		fclose($file);
	}
?>