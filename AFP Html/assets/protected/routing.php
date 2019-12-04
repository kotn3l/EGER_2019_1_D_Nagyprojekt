<?php

$_GET['P'] = (!array_key_exists('P', $_GET)) ? "home" : $_GET['P'];	
	if(IsUserLoggedIn()) {
		switch ($_GET['P']) {
			case 'admin': 	if (IsUserAdmin()) {
								require_once PROTECTED_ADMIN_DIR.'index.php'; 
							} else {
								require_once PROTECTED_DIR.'index.php';
							} break;
			case 'logout': UserLogout(); break;
			case 'game': require_once PROTECTED_DIR.'game.html'; break;
			case 'home': require_once PROTECTED_DIR.'index.php'; break;
			case 'info': require_once PROTECTED_DIR.'info.html'; break;
			case 'toplist': require_once PROTECTED_DIR.'top.html'; break;
			case 'team': require_once PROTECTED_DIR.'team.html'; break;
			default: require_once PROTECTED_DIR.'index.php'; break;
		}
		
	} else {	
		switch ($_GET['P']) {
			case 'register': require_once PROTECTED_DIR.'register.php'; break;
			case 'login': require_once PROTECTED_DIR.'login.php'; break;
			case 'home': require_once PROTECTED_DIR.'index.php'; break;
			case 'info': require_once PROTECTED_DIR.'info.html'; break;
			case 'toplist': require_once PROTECTED_DIR.'top.html'; break;
			case 'team': require_once PROTECTED_DIR.'team.html'; break;
			default: require_once PROTECTED_DIR.'index.php'; break;
		}
	}


?>