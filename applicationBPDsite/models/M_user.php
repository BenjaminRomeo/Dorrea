<?php
class M_user extends CI_Model
{
	function login($mail, $password)
	{
		$query = $this->db->query('SELECT user_pw, user_mail, user_pseudo, user_id FROM user WHERE user_mail="'.$mail.'"');
		if ($query->num_rows() > 0)
		{
			$row = $query->row_array(1);
			if ($this->encryption->decrypt($row['user_pw'])==$password)
			{
				return $row;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;	
		}
	}
	
	function register($userData)
	{	
		/*
		1:  	ID			|		Auto		
		2:  	Pseudo		|		[0]
		3: 		Mail		|		[1]
		4:  	PW			|		[2]
		5:  	Civ			|		[3]
		6:  	Name		|		[4]
		7:  	Surname		|		[5]
		8:  	Birth		|		[6]
		9:  	Age			[		Calcul
		10: 	Tel			|		[7]
		11: 	Addresse	|		[8]	
		12: 	CP			|		[9]
		13: 	City		|		[10]
		14: 	Pays		|		[11]
		15: 	LgPrf		|		[12]
		
		1:  	News		|		[1][13]
		*/
		$request='';
		//pw encode
		$userData[2]=$this->encryption->encrypt($userData[2]);
		for($i=0; $i != 7; $i++)
		{
			$request=$request.'"'.$userData[$i].'",';
		}
		$request=$request.(int)((time() - strtotime($userData[6],date_default_timezone_set('Europe/Paris'))) / 3600 / 24 / 365);
		for($i=7; $i != 13; $i++)
		{
			$request=$request.',"'.$userData[$i].'"';
		}
		$this->db->query('INSERT INTO user VALUES("NULL","1",'.$request.')');
	}
}
?>