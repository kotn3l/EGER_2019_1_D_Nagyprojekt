<?php

$_GET['P'] = (!array_key_exists('P', $_GET)) ? "home" : $_GET['P'];	
	if(IsUserLoggedIn()) {
		switch ($_GET['P']) {
			case 'logout': UserLogout(); break;
			case 'home': require_once PROTECTED_DIR.'index.php'; break;
			case 'game': require_once PROTECTED_DIR.'game.html'; break;
			case 'admin': require_once PROTECTED_ADMIN_DIR.'index.php'; break;
			default: require_once PROTECTED_DIR.'index.php'; break;
		}
		
	} else {	
		switch ($_GET['P']) {
			case 'register': require_once PROTECTED_ADMIN_DIR.'register.php'; break;
			case 'login': require_once PROTECTED_ADMIN_DIR.'login.php'; break;
			default: require_once PROTECTED_DIR.'index.php'; break;
	}
}

?>