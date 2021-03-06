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
								SÚGÓ			
							</h1>	
							<p class="text-white link-nav"><a href="?P=home">Kezdőlap</a>  <span class="lnr lnr-arrow-right"></span>  <a href="?P=info">Játékleírás</a></p>
						</div>											
					</div>
				</div>
			</section>
			<section class="team-area section-gap team-page-teams row" id="team">
				<div class="container">
					<div class="text-black float-left text-heading">
						<b>Regisztráció</b><br><br>
						<p class="sugo-text">
							Amennyiben még újak vagyunk ezen az oldalon és nem rendelkezünk semmilyen felhasználónévvel illetve hozzá tartozó jelszóval, így kötelező számunkra regisztrálni, hogy a későbbiekben el tudjuk érni a játék oldalát és tudjunk játszani a várva várt játékkal is.<br><br>
							A regisztrációhoz nem kell túl sok mindent megadnunk csupán az elengedhetetlen és szükséges dolgokat, ezek alatt értetendő a játékunk során általunk látható illetve a globális toplistában mások által is látható és elérhető felhasználónevünk, ami nem muszáj, hogy kifejezetten a saját nevünkkel kapcsolatos legyen, elég ha valamilyen kitalált anonim felhasználó név amit választani szeretnénk.<br><br>
							Ezen kivűl szükségünk lesz a felhasználónevünkön kívül egy jelszóra is amit csak mi tudunk és biztosítja azt, hogy más felhasználó ne tudjon belelépni a mi felhasználói fiókunkba. Mint más webes oldalakon így itt is van némi megszorítás arra, hogy jelszavunknak milyennek kell lenni, ez alatt lehet érteni a jelszó hosszúságát például ami a regisztrációnál le lesz írva.<br><br>
							Ezen kívül az utolsó dolog amire még szükségünk van a regisztrációhoz az a saját email címünk, amire később megérkezik az üzenetünk, hogy sikeresen be tudtunk regisztrálni az adott oldalra, azaz ez is egy biztonsági lépés, hogy biztosan tudjuk mi léptünk be a felhasználónkkal és a jelszavunkkal.<br><br>
							Ezek után ha a felhasználó nevünk illetve a jelszavunk megfelelt az előírott megszorításoknak akkor sikeresen tudunk regisztrálni, illetve ha valami probléma lépett fel a regisztrációval, akkor egy hibaüzenet formájában megkapjuk, hogy mit nem írtunk be helyesen amit ki tudunk javítani és ezek után a helyes felhasználói nevünkkel, illetve jelszavunkkal be tudunk már sikeresen regisztrálni az oldalra.<br><br>
							Későbbiekben a bejelentkezéshez már csak a felhasználói nevünkre és a jelszavunkra lesz szükség az email címünkre már nem.
						</p><br><br><br>
						<b>Bejelentkezés</b><br><br>
						<p class="sugo-text">
							A játék elindításához be kell lépnünk a már korábban beregisztrált felhasználói fiókunkkal.<br><br>
							A bejelentkezéshez szükségünk van a felhasználónevünkhöz, és a jelszavunkhoz. Elfelejtett jelszó esetén az "elfelejtett jelszó" linkre kattintva új jelszót kérhetünk.<br><br>
							Sikertelen bejelentkezés esetén, azaz ha rosszul írjuk be a felhasználói nevünket vagy a jelszavunkat akkor újra kell próbálkoznunk.
						</p><br><br><br>
						<b>Játék indítása</b><br><br>
						<p class="sugo-text">
							Ha sikeresen írtuk be felhasználónevünket illetve a jelszavunkat, azaz sikeresen be tudtunk jelentkezni, akkor ezek után egyszerűen a játékot a Játék indítása gombbal tudjuk elindítani és automatikusan már is a játék kezdőlapján találhatjuk magunkat.<br><br>
							Itt, a játék kezdőlapján későbbiekben több beállítást is meg tudunk változtatni a játék nehézsége illetve a kérdések témakörével kapcsolatban.
						</p><br><br><br>
						<b>Játék nehézség beállítása</b><br><br>
						<p class="sugo-text">
							Ha a sikeresen eltudtunk indítani a játékot, akkor a kezdőoldalon, a beállítások menüpontban két beállítási lehetőség közül tudunk választani, ezek közül az egyik a játékban szereplő kérdések nehézségi szintjének beállítása, illetve megváltoztatása.<br><br>
							A kérdések nehézségi szintjei 1-től, azaz a legkönnyebb kérdésektől a 13-ig, azaz a legnehezebb kérdésekig terjednek és ezek közül bármelyiket ki tudjuk választani.<br><br>
							Ha esetleg úgy érezzük nem tudunk olyan sokat egy adott témakörből, akkor inkább a könyebb kérdéseket válasszuk a nagyobb sikerélményért. Illetve, ha úgy érezzük egy adott témát igazán jól tudunk vagy esetleg csak úgy érezzük többet szeretnénk tanulni a választott témából vagy csak úgy általánosságban mindenről, akkor számunkra jobb választásnak számítanak már a nehezebb kérdések.
						</p><br><br><br>
						<b>Játék témakörök beállíása</b><br><br>
						<p class="sugo-text">
							Ha a sikeresen eltudtunk indítani a játékot, akkor a kezdőoldalon, a beállítások menüpontban két beállítási lehetőség közül tudunk választani, ezek közül az egyik a játékban szereplő kérdések témakörének a beállítása, illetve megváltoztatása.<br><br>
							A kérdések kiválasztható témaköreibe tartoznak például a Biológiai, Földrajzi, Történelmi, Irodalmi, Tudományos, Technikai, Sport, Általános, Zenei, Vallási, Gasztronómiai illetve sok más témájú kérdések is.<br><br>
							A játékban alapértelmezetten minden témakörből vegyesen lesz majd kérdés, így ha nem választottunk ki specifikusan csak egy féle témát akkor a játék magától random ad nekünk kérdéseket mindegyik témakörből.
						</p><br><br><br>
						<b>A játék menete</b><br><br>
						<p class="sugo-text">
							A játék menete egyszerű, és könnyen értelmezhető. A játékban először is lehetőségünk van témaköröket beállítani, az alapján, hogy milyen témájú kérdéseket szeretnénk kapni, vagy esetleg milyen témákban vagyunk jobbak.<br><br>
							Ezen kívül játék nehézséget is tudunk beállítani könnyebbtől a nehezebb kérdésekig ha szeretnénk magunkat egy kicsit megmérettetni vagy jobban fejleszteni magunkat.<br><br>
							A játék célja az, hogy minél több kérdésre helyesen tudjunk választ adni és minél több pontunk legyen a játék végére. A játék közben lehetőségünk van segítséget is felhasználni, ha esetleg megakadtunk volna egy kérdésnél, de nem akarjuk azt, hogy esetleges rossz válaszunkkal pontot veszítsünk.<br><br>
							A játék során, ha jól adjuk meg a válaszunkat akkor a helyes és csak is a helyes válaszunk fog zöldre váltani, viszont ha a kérdésünkre a rossz választ adjuk meg, akkor a 4 válaszlehetőség közül az aminek helyesnek kellett volna lennie az vált zöldre és a többi helytelen válasz pedig pirosra vált, hogy biztosan meg tudjuk különböztetni a helyes és helytelen válaszokat.<br><br>
							A játéknak akkor vagy vége, ha az összes pontunkat elveszítettük azaz, 0 vagy az alá ment volna a pontszámlálónk, illetve akkor ha a játék az adott kérdésmennyiséget elérte és az adott körben nincs több kérdés.
						</p><br><br><br>
						<b>Segítség felhasználása</b><br><br>
						<p class="sugo-text">
							Mint a legtöbb játékban, így ebben a játékban is lehet olyan rész, illetve kérdés amikor megakadunk és nem tudunk továbbjutni akármennyire is gondolkozunk a helyes válaszon, főleg ha esteleg a kérdéseink nehézségi szintjét a legmagasabb vagy közel a legmagasabb szintre állítottuk, így valószínűleg azért, hogy tovább tudjunk haladni, segítséget fogunk inkább kérni, minthogy esetleg rosszul válaszoljuk meg az adott kérdést ami kifogott rajtunk.<br><br>
							Fontos tudni, hogy játékunk során a segítségek felhasználási lehetősége nem végtelen, azaz, ha egyszer már az egyik kérdésünknél felhasználtunk egy segítséget hogy tovább tudjunk jutni, a későbbiekben erre már nem lesz lehetőségünk a játékunk során, így ha egy segítséget felhasználunk annyival kevesebb lesz utána játékunk során amíg teljesen le nem nullázzuk a segítségeink lehetőségeit.<br><br>
							Pont ezért fontos átgondolni hogy a segítségeinket mikor szeretnénk felhasználni, mert a játék vége felé esetleg több olyan nehezebb kérdést is kaphatunk amit nem tudunk és nem tudjuk rá a választ, amíg az elején a könnyebb kérdéseknél valószínűleg inkább csak bizonytalanságunkat szeretnénk megerősíteni egy segítség felhasználásával, ezért fontos átgondolni ténylegesen mikor is akarjuk felhasználni igazán értékes segítségeinket.
						</p><br><br><br>
						<b>Toplista</b><br><br>
						<p class="sugo-text">
							Játékunk során pontszámokat érünk el helyesen megválaszolt kérdés esetén, amely pontokat kesőbb a játék toplistába gyűjt ki.<br>
							Két féle toplistát különböztethetünk meg, az egyik a Globális Toplista, illetve a másik egy saját toplista.<br><br>
							Kettő között csupán annyi különbség van, hogy amíg a saját toplistában csak és kizárólag a mi általunk elért pontokat tekinthetjük meg, addig a Globális Toplistában más játékosok által elért pontszámokat is láthatjuk, így összehasonlíthatkjuk saját pontjainkat másokéval, mint ahogy a toplistákban szokott lenni legelől áll a legtöbbet elért játékos neve és pontszáma és így lefelé csökkenve a végén a legkevesebbet elérő játékos és az ő pontja.
						</p><br><br><br>
						<b>Kijelentkezés</b><br><br>
						<p class="sugo-text">
							Ha úgy érezzük mára elég volt az internetből, és már nem szeretnénk több kört játszani a játékunkban, úgy lehetőségünk van az oldalon már bejelentkezett felhasználói fiókunkból kijelentkezni.<br><br>
							A kijelentkezésünket követően egy másik fiókba is be tudunk jelentkezni. Ez azt is lehetővé teszi, hogy más-más játékosok is be tudjanak jelenkezni a felhasználói fiókjukba ugyanazon az eszközön.
						</p><br><br><br>
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
