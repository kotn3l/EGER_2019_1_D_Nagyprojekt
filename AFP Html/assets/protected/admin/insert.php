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

			<div class="page">
				<?php require_once PROTECTED_DIR.'routing.php'; ?>
			</div>

			<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="AFP Nagyprojekt" title="AFP Nagyprojekt" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="?P=insert">Hozzáadás</a></li>
						  <li class="menu-active"><a href="?P=delete">Törlés</a></li>
				          <li class="menu-active"><a href="?P=logout">Kijelentkezés</a></li>
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
								ADMIN MENÜ			
							</h1>	
						</div>											
					</div>
				</div>
			</section>
			
				<?php 
				if(array_key_exists('submit', $_POST)) {

					$question = $_POST['question'];
					$choice_a = $_POST['choice_a'];
					$choice_b = $_POST['choice_b'];
					$choice_c = $_POST['choice_c'];
					$choice_d = $_POST['choice_d'];
					$answer = $_POST['answer'];


					$query = "INSERT INTO `question` (`question`) VALUES (:question)";
					$params = [
						':question' => $question,
					];
					require_once PROTECTED_DIR.'database.php';
					$success = executeDML($query, $params);
					if($success) echo 'Successfull insert';
					else echo 'Error during insert';

					$query = "SELECT `id` FROM `question` WHERE `question` = :question";
					$params = [
						':question' => $question
					];
					require_once PROTECTED_DIR.'database.php';
					$record = getRecord($query, $params);
					$question_id = $record['id'];

					if ($answer == 1) {$is_right_choice = 1;} else {$is_right_choice = 0;}
					$query = "INSERT INTO `question_choices` (`question_id`, `is_right_choice`, `choice`) VALUES (:question_id, :is_right_choice, :choice)";
					$params = [
						':question_id' => $question_id,
						':is_right_choice' => $is_right_choice,
						':choice' => $choice_a
					];
					require_once PROTECTED_DIR.'database.php';
					executeDML($query, $params);

					if ($answer == 2) {$is_right_choice = 1;} else {$is_right_choice = 0;}
					$query = "INSERT INTO `question_choices` (`question_id`, `is_right_choice`, `choice`) VALUES (:question_id, :is_right_choice, :choice)";
					$params = [
						':question_id' => $question_id,
						':is_right_choice' => $is_right_choice,
						':choice' => $choice_b
					];
					require_once PROTECTED_DIR.'database.php';
					executeDML($query, $params);

					if ($answer == 3) {$is_right_choice = 1;} else {$is_right_choice = 0;}
					$query = "INSERT INTO `question_choices` (`question_id`, `is_right_choice`, `choice`) VALUES (:question_id, :is_right_choice, :choice)";
					$params = [
						':question_id' => $question_id,
						':is_right_choice' => $is_right_choice,
						':choice' => $choice_c
					];
					require_once PROTECTED_DIR.'database.php';
					executeDML($query, $params);

					if ($answer == 4) {$is_right_choice = 1;} else {$is_right_choice = 0;}
					$query = "INSERT INTO `question_choices` (`question_id`, `is_right_choice`, `choice`) VALUES (:question_id, :is_right_choice, :choice)";
					$params = [
						':question_id' => $question_id,
						':is_right_choice' => $is_right_choice,
						':choice' => $choice_d
					];
					require_once PROTECTED_DIR.'database.php';
					$success = executeDML($query, $params);
					if($success) echo 'Successfull insert';
					else echo 'Error during insert';
				}
				?>

				<form method="post">
					<input type="text" name="question" placeholder="Kérdés"><br>
					<input type="text" name="choice_a" placeholder="Válasz 1"><input type="radio" name="answer" value="1"><br>
					<input type="text" name="choice_b" placeholder="Válasz 2"><input type="radio" name="answer" value="2"><br>
					<input type="text" name="choice_c" placeholder="Válasz 3"><input type="radio" name="answer" value="3"><br>
					<input type="text" name="choice_d" placeholder="Válasz 4"><input type="radio" name="answer" value="4"><br>
					<input type="submit" name="submit" value="Insert">
				</form>
			
			
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
									<li><a href="?P=toplistlist">Toplisták</a></li>
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
