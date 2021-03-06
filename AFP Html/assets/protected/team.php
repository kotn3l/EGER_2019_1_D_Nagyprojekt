﻿	<!DOCTYPE html>
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
				          <li class="menu-active"><a href="?P=home">Kezdőlap</a></li>
				          
						  <?php
							if ( IsUserLoggedIn() ) {
							    echo '<li class="menu-active"><a href="?P=game">Játék</a></li>';
							} else {
							    echo '<li class="menu-active"><a href="?P=login">Bejelentkezés</a></li>';
							 }
							?>
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
								FEJLESZTŐK			
							</h1>	
							<p class="text-white link-nav"><a href="?P=home">Kezdőlap</a>  <span class="lnr lnr-arrow-right"></span>  <a href="?P=team">Fejlesztők</a></p>
						</div>											
					</div>
				</div>
			</section>

			<section class="team-area section-gap team-page-teams" id="team">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Fejlesztők</h1>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center d-flex align-items-center">
						<div class="col-md-3 single-team">
						    <div class="meta-text mt-30 text-center">
							    <h4>Bozó Tamás Dániel - J7Y3U4</h4>
							    <p>btd2k17@gmail.com</p>
								<h7>Frontend</h7>
						    </div>
						</div>
						<div class="col-md-3 single-team">
						    <div class="meta-text mt-30 text-center">
							    <h4>Bokodi Máté - DVUDH3</h4>
							    <p>bokodimate@gmail.com</p>
								<h7>Backend</h7>
						    </div>
						</div>
						<div class="col-md-3 single-team">
						    <div class="meta-text mt-30 text-center">
							    <h4>Mirkovszki Kornél - BK13MO</h4>
							    <p>kotn3l@gmail.com</p>	
								<h7>Frontend</h7>
						    </div>
						</div>
						<div class="col-md-3 single-team">
						    <div class="meta-text mt-30 text-center">
							    <h4>Bognár Viktória - PMSVKX</h4>
							    <p>apalosaa4@gmail.com</p>			    
								<h7>Frontend</h7>
						    </div>
						</div>
						<div class="col-md-3 single-team">
						    <div class="meta-text mt-30 text-center">
							    <h4>Antal Soma - AD0DBG</h4>
							    <p>antal.soma@gmail.com</p>
								<h7>Frontend</h7>
						    </div>
						</div>
						<div class="col-md-3 single-team">
						    <div class="meta-text mt-30 text-center">
							    <h4>Pelle Marcell - NK</h4>
							    <p>E-mail</p>	
								<h7>Backend</h7>
						    </div>
						</div>
					</div>
				</div>	
			</section>
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
									<?php
										if ( IsUserLoggedIn() ) {
										    echo '<li><a href="?P=game">Játék</a></li>';
										}
										?>
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
		</body>
	</html>
