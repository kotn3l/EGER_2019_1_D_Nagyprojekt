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
				        	<li class="menu-active"><a href="?P=admin">Admin menü</a></li>
				          <li class="menu-active"><a href="?P=home">Kezdőlap</a></li>
				          <li class="menu-active"><a href="?P=insert">Hozzáadás</a></li>
				          <li class="menu-active"><a href="?P=list">Módosítás</a></li>
						  <li class="menu-active"><a href="?P=list">Törlés</a></li>
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
			
				

				<section class="team-insert section-gap team-page-insert" id="insert">
					<div class="container">
						<form method="post">
							<table>
								<tr>
									<?php 
										if(array_key_exists('submit', $_POST)) {

											$question = $_POST['question'];
											$choice_a = $_POST['choice_a'];
											$choice_b = $_POST['choice_b'];
											$choice_c = $_POST['choice_c'];
											$choice_d = $_POST['choice_d'];
											$answer = $_POST['answer'];
											$difficulty = $_POST['difficulty'];


											$query = "INSERT INTO `questions` (`question`, `choice_a`, `choice_b`, `choice_c`, `choice_d`, `answer`, `difficulty`) VALUES (:question, :choice_a, :choice_b, :choice_c, :choice_d, :answer, :difficulty)";
											$params = [
												':question' => $question,
												':choice_a' => $choice_a,
												':choice_b' => $choice_b,
												':choice_c' => $choice_c,
												':choice_d' => $choice_d,
												':answer' => $answer,
												':difficulty' => $difficulty
											];
											require_once PROTECTED_DIR.'database.php';
											$success = executeDML($query, $params);
											if($success) echo '<td colspan="7" align="center"  style="font-size:26px">Sikeres beillesztés!</td>';
											else echo '<td colspan="7" align="center" style="font-size:26px">Hiányzó adatok!</td>';

										}
										?>
								</tr>
								<tr align="center">
									<th>Kérdés</th>
									<th>Válasz 1</th>
									<th>Válasz 2</th>
									<th>Válasz 3</th>
									<th>Válasz 4</th>
									<th width="125">Helyes válasz</th>
									<th  width="125">Nehézség</th>
								</tr>
								<tr>
									<td><input type="text" name="question" placeholder="" style="text-align:center;"></td>
								    <td><input type="text" name="choice_a" placeholder="" style="text-align:center;"></td>
								    <td><input type="text" name="choice_b" placeholder="" style="text-align:center;"></td>
								    <td><input type="text" name="choice_c" placeholder=""  style="text-align:center;"></td>
								    <td><input type="text" name="choice_d" placeholder=""  style="text-align:center;"></td>
									<td align="center">
									<select name="answer"  style="width:50px; text-align-last:center;">
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="C">C</option>
										<option value="D">D</option>
									</select>
									</td>
									<td align="center">
									<select name="difficulty" style="width:50px;  text-align-last:center;">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
									</td>
								</tr>
								<tr style="height:100px;">
									<td colspan="7" align="center">
										<input class="genric-btn primary" type="submit" name="submit" value="Hozzáadás" style="height:70px; width:300px; font-size:20px;">
									</td>
								</tr>
							</table>
							
						</form>
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
