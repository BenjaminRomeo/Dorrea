<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$url = explode('.', $_SERVER['HTTP_HOST']);
$urlHash = explode('/', $_SERVER['REQUEST_URI']);
if(($url[0] == 'admin') || ($url[1] == 'admin'))
{
	$route['default_controller'] = "Translator";
	$route['translator'] = 'Translator';
}
else
{
	if(($url[0] == 'user') || ($url[1] == 'user'))
	{
		$route['default_controller'] = "User";
		$route[$urlHash[1].'/register'] = 'User/register';
		$route[$urlHash[1].'/logout'] = 'User/logout';
		$route[$urlHash[1].'/registerSucess'] = 'User/registerSucess';
		$route[$urlHash[1]] = 'User';
	}
	else
	{
		$route['default_controller'] = 'Accueil';
		$route['magasin'] = 'Accueil';
	}
}
$route['404_override'] = 'Error';