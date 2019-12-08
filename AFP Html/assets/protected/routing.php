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
			case 'game': require_once PROTECTED_DIR.'game.php'; break;
			case 'home': require_once PROTECTED_DIR.'index.php'; break;
			case 'info': require_once PROTECTED_DIR.'info.php'; break;
			case 'toplist': require_once PROTECTED_DIR.'top.php'; break;
			case 'team': require_once PROTECTED_DIR.'team.php'; break;

			case 'insert': require_once PROTECTED_ADMIN_DIR.'insert.php'; break;
			case 'list': require_once PROTECTED_ADMIN_DIR.'list.php'; break;
			case 'modify': require_once PROTECTED_ADMIN_DIR.'modify.php'; break;

			case 'delete': 
			if(array_key_exists('d', $_GET) && !empty($_GET['d'])) {
				$query = "DELETE FROM `question` WHERE id = :id";
				$params = [ ':id' => $_GET['d'] ];
				require_once PROTECTED_DIR.'database.php';
				executeDML($query, $params);

			} header("Location: ?P=admin");
				break;

			default: require_once PROTECTED_DIR.'index.php'; break;
		}
		
	} else {	
		switch ($_GET['P']) {
			case 'register': require_once PROTECTED_DIR.'register.php'; break;
			case 'login': require_once PROTECTED_DIR.'login.php'; break;
			case 'home': require_once PROTECTED_DIR.'index.php'; break;
			case 'info': require_once PROTECTED_DIR.'info.php'; break;
			case 'toplist': require_once PROTECTED_DIR.'top.php'; break;
			case 'team': require_once PROTECTED_DIR.'team.php'; break;
			default: require_once PROTECTED_DIR.'index.php'; break;
		}
	}


?>