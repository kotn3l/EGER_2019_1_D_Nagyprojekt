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
				          <li class="menu-active"><a href="?P=home">Kezdőlap</a></li>
				          <li class="menu-active"><a href="?P=game">Játék</a></li>
				          <li class="menu-active"><a href="?P=info">Játékleírás</a></li>
				          <li class="menu-active"><a href="?P=toplist">Toplisták</a></li>
				          <li class="menu-active"><a href="?P=team">Fejlesztők</a></li>
				          <?php
							if ( IsUserLoggedIn() ) {
							    echo '<li class="menu-active"><a href="?P=logout">Kijelentkezés</a></li>';
							}
						  ?>
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
								JÁTÉK			
							</h1>	
						</div>											
					</div>
				</div>
			</section>


			<section class="team-area section-gap team-page-teams">
				<center><h1 class="text-black" id="point"></h1></center>
				<div class="container" id="game">
					<div class="row justify-content-left d-flex align-items-center">
						<div class="col-md-6 single-team">
							<div class="meta-text mt-30 text-center">
							<div class="button" id="button1" class="jatek-gomb" onclick="ellenorzes(this)">1</div>
							<div class="button" id="button2" class="jatek-gomb" onclick="ellenorzes(this)">2</div>
							<div class="button" id="button3" class="jatek-gomb" onclick="ellenorzes(this)">3</div>
							<div class="button" id="button4" class="jatek-gomb" onclick="ellenorzes(this)">4</div>
							</div>
						</div>
						<div class="col-md-6 single-team">
							<div class="meta-text mt-30 text-center">
								<div class="button2" id="buttonQuestion">ebben a gombban lesz a kérdés</div>
							</div>
						</div>

					</div>
				</div>
				<div class="container" id="endgame" style="display:none;">
					<form method="post">
						<input type="text" name="points" id="points" value="0" style="display:none">
						<input class="button" type="submit" name="submit" value="Vége">
					</form>
				</div>
			</section>

<?php 
	if(array_key_exists('submit', $_POST)) {
		$name = getUserName();
		$points = $_POST['points'];

		$query = "INSERT INTO `toplist` (`name`, `points`) VALUES (:name, :points)";
		$params = [
			':points' => $points,
			':name' => $name
		];
		require_once PROTECTED_DIR.'database.php';
			$success = executeDML($query, $params);
			if($success) {
				echo("<script>location.href = '?P=toplist';</script>");
			} else echo 'Error during insert';
	}
?>


			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Fejlesztők</h6>
								<ul>
									<li><a href="?P=team">Front End</a></li>
									<li><a href="?P=team">Back End</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>A játék</h6>
								<ul>
									<li><a href="?P=info">Játékleírás</a></li>
									<li><a href="?P=game">Játék</a></li>
									<li><a href="?P=toplist">Toplisták</a></li>
								</ul>								
							</div>
						</div>												
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Kövess minket</h6>
								<p>a közösségi oldalakon</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
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
			<script src="js/game.js"></script>
		</body>

	</html>