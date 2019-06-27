<?php
require '../private/functions.php';
require '../private/model.php';
require '../private/controllers.php';


/**
 * Deze code werkend maken is de laatste stap in de opdracht, volg eerste alle andere stappen
 * https://hiddebraun-ma.github.io/bap-md1-plantjes/
 */


if ( ! isset( $_GET['page'] ) ) {
	header( 'Status: 404' );
	echo '404 Page Not Found';
	exit;
}

switch ( $_GET['page'] ) {
	case 'homepage':
		homepage();
		break;
	case 'historypage':
		historypage();
		break;
	case 'contactpage':
		contactpage();
		break;
	case 'searchpage':
	  searchpage();
		break;
	case 'video':
		video();
		break;
	case 'login':
		login();
		break;
	case 'signup':
		signup();
		break;
}
