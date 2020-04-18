<?php

$url =  $_SERVER['REQUEST_URI'];

switch ($url){
	case '/login': $filename = 'Log.php';
		require $filename;
	    break;

	case '/register': $filename = 'Reg.php';
		require $filename;
	    break;

	case '/logout': $filename = 'Logout.php';
		require $filename;
	    break;

	case '/loremipsum': $filename = 'LorIps.php';
		require $filename;
	    break;

	default : $filename = '404.php';
		require $filename;
		break;
}

