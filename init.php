<?php
	header('Content-Type:text/html;charset=utf-8');
	
	// BDD
	include('./asset/includes/database.inc.php')
	
	// Infos site
	define('URL_SITE', 'http://localhost/puissance-4/index.php');
	define('URL_MEDIA', 'asset/images/avatar');
	define('URL_PROFIL', 'https://www.google.fr/?q=');
	define('PATH_SITE', 'chat.php');
	
	// Connexion BDD

	
	// Session
	session_start();
?>