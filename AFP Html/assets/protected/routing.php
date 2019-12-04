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
			case 'game': require_once PROTECTED_DIR.'?P=game'; break;
			case 'home': require_once PROTECTED_DIR.'index.php'; break;
			case 'info': require_once PROTECTED_DIR.'?P=info'; break;
			case 'toplist': require_once PROTECTED_DIR.'?P=toplist'; break;
			case 'team': require_once PROTECTED_DIR.'?P=team'; break;
			default: require_once PROTECTED_DIR.'index.php'; break;
		}
		
	} else {	
		switch ($_GET['P']) {
			case 'register': require_once PROTECTED_DIR.'register.php'; break;
			case 'login': require_once PROTECTED_DIR.'login.php'; break;
			case 'home': require_once PROTECTED_DIR.'index.php'; break;
			case 'info': require_once PROTECTED_DIR.'?P=info'; break;
			case 'toplist': require_once PROTECTED_DIR.'?P=toplist'; break;
			case 'team': require_once PROTECTED_DIR.'?P=team'; break;
			default: require_once PROTECTED_DIR.'index.php'; break;
		}
	}


?>