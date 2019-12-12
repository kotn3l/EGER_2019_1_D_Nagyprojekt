<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php require_once 'protected/config.php'; ?>
<?php require_once PROTECTED_DIR.'userManager.php'; ?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/elements/fav.png">
		<meta name="author" content="colorlib">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<title>AFP Nagyprojekt</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="?P=home"><img src="img/logo.png" alt="AFP Nagyprojekt" title="AFP Nagyprojekt" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				        	<?php
							if ( IsUserAdmin() ) {
							    echo '<li class="menu-active"><a href="?P=admin">Admin menü</a></li>';
							}
						  ?>
				          <li class="menu-active"><a href="./">Kezdőlap</a></li>
				        </ul>
				      </nav>		    		
			    	</div>
			    </div>
			</header>
			
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">		
								Bejelentkezés
							</h1>	
						</div>											
					</div>
				</div>
			</section>
			
			<section class="login-area section-gap login-page-login" id="login">
				<div class="container" align="center">
						<form method="post">
							<table>
								<tr>
									<?php		
									if(array_key_exists('login', $_POST)) {
									    $username = $_POST['username'];
									    $password = $_POST['password'];

									    if(empty($username) || empty($password))
									        echo '<td colspan="4" align="center"  style="font-size:26px">Hiányzó bejelentkezési adatok!</td>';
									    else if(!UserLogin($username, $password))
									        echo '<td colspan="4" align="center"  style="font-size:26px">Helytelen bejelentkezési adatok!</td>';
									}
									?>
									
								</tr>
							    <tr>
							    	<td colspan="4" align="center">
										<input type="text" name="username" placeholder="Felhasználónév" style="height:70px; width:300px; font-size:20px; text-align-last:center;">
									</td>
								</tr>
								<tr>
									<td colspan="4" align="center">
										<input type="password" name="password" placeholder="Jelszó" style="height:70px; width:300px; font-size:20px; text-align-last:center;">
									</td>
							    </tr>
							    <tr>
							    	<td>
							    		<input type="submit" name="login" value="Bejelentkezés" class="genric-btn primary" style="height:70px; width:200px; font-size:20px;">
							    	</td>
							    	<td></td>
							    	<td>
							    		<a href="?P=register"><input type="button" value="Regisztráció" class="genric-btn primary" style="height:70px; width:200px; font-size:20px;"></a>
							    	</td>
							    </tr>
						    </table>
						</form>
						<br>
						
						
				</div>	
			</section>
			
			<footer class="footer-area section-gap">
				<div class="container"></div>
			</footer>
			
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>
