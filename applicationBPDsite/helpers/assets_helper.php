<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('css_url'))
{
	function css_url($nom)
	{
		return base_url() . 'assets/css/' . $nom . '.css';
	}
}

if ( ! function_exists('js_url'))
{
	function js_url($nom)
	{
		return base_url() . 'assets/javascript/' . $nom . '.js';
	}
}

if ( ! function_exists('js_lib'))
{
	function js_lib_url($nom)
	{
		return base_url() . 'assets/javascript/jqueryLib/' . $nom . '.js';
	}
}

if ( ! function_exists('img_url'))
{
	function img_url($nom)
	{
		return base_url() . 'assets/images/' . $nom;
	}
}

if ( ! function_exists('img'))
{
	function img($nom, $alt = '')
	{
		return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';
	}
}

if ( ! function_exists('langPrefix'))
{
	function langPrefix()
	{
		$urlbase = explode('.',$_SERVER['SERVER_NAME']);
		$urlExt = explode('/',$_SERVER['REQUEST_URI']);

		$i=0;
		$lang = $urlbase[$i];
		if($lang == 'www')
		{
			$i++;
		}
			$lang = $urlbase[$i];
			if($lang == 'user')
			{
				$i++;
				$lang = $urlExt[1];
			}
			if(($lang != 'fr') &&( $lang != 'en') && ($lang != 'es') && ($lang != 'eus'))
			{
				$lang='fr';
			}
		return $lang;
	}
}

if ( ! function_exists('URLPrefix'))
{
	function URLPrefix($lang)
	{
		$url = explode('.',$_SERVER['SERVER_NAME']);
		$urlExt = explode('/',$_SERVER['REQUEST_URI']);
		$urlCC = explode('/'.$urlExt[1],$_SERVER['REQUEST_URI']);
		
		$i=0; $part1=''; $part2=''; $part3=''; $prefix='http://';$lprefix='';$lsuffix='/';$urlLG='';
		if($url[$i]=='www')
		{
			$part1=$url[$i].'.';
			$i++;
		}
		if($url[$i]=='user')
		{
			$part2=$url[$i].'.';
			$i++;
			$part1='www.';
			$prefix='https://';
			$lsuffix='/'.$lang;
			$urlLG=$urlCC[1];
		}
		else
		{
			$lprefix=$lang.'.';
		}
		return $prefix.$lprefix.$part1.$part2.'boulangerie-patisserie-dorrea.fr'.$lsuffix.$urlLG;
	}
}

function anti_injection( $user, $pass ) {
    $banlist = array (
        "insert", "select", "update", "delete", "distinct", "having", "truncate",
        "replace", "handler", "like", "procedure", "limit", "order by", "group by" ,"or" , "and", "where", "drop", "table", "from"
        );

	foreach($banlist as $value)
	{
		if (in_array($value ,explode(" ",strtolower($user))) && preg_match("/[a-zA-Z0-9@.-_]+/i", $user )) {
			$user = NULL;
		}
	}

	foreach($banlist as $value)
	{
		if (in_array($value ,explode(" ",strtolower($pass))) && preg_match("/[a-zA-Z0-9@.-_]+/i", $user )) {
			$pass = NULL;
		}
	}

    $array = array ( 'user' => $user, 'pass' => $pass);
    if ( in_array ( NULL, $array ) ) 
	{
        return false;
    } 
	else 
	{
        return $array;
    }
} 
?> 