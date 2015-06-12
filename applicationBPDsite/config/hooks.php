<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// switch from or to https if necessary
$hook['post_controller_constructor'][] = array(
	'class' => '',
	'function' => 'trigger_https',
	'filename' => 'https.php',
	'filepath' => 'hooks'
	);

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/
