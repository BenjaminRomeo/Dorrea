<?php
class M_translator extends CI_Model
{
	function writeFile($data, $file)
	{
		ftruncate($file,0);
			$i=1;
			foreach($data as $value)
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
}
?>