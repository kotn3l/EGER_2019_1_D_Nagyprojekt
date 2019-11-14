			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
							<h1 class="text-white text-uppercase">
								Használt autók és motorok olcsón				
							</h1>
							<p class="pt-20 pb-20 text-white">
								Válogasson sokszínű ajánlataink közül és vegye fel a kapcsolatot a hirdetőkkel még ma!
							</p>
							<a href="<?=site_url('car')?>" class="primary-btn text-uppercase">Autók</a>
							<a href="<?=site_url('bike')?>" class="primary-btn text-uppercase">Motorok</a>
						</div>
										
					</div>
				</div>					
			</section>

			<section class="feature-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Mire számíthatnak azok akik minket választanak?</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-user"></span>Kapcsolattartás</h4>
								<p>
									Minden hónapban a feladott hirdetések tulajdoinosaival egyeztetünk a hirdetés meglétével kapcsolatban.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-license"></span>Részletesség</h4>
								<p>
									A hirdetések képeket, illetve részletes leírást tartalmaznak az adott járműről.
								</p>								
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-phone"></span>Segítség és biztonság</h4>
								<p>
									Bármilyen csalás felmerülése esetén a felhasználótámogatás naprakész és egy üzenettel elérhető.
								</p>								
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-bubble"></span>Pozitív visszajelzések</h4>
								<p>
									Ügyfeleink elégedettsége számunkra az első és észrevételeiket szívesen fogadjuk.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section>

			<section class="home-about-area" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img class="img-fluid" src=<?=site_url("assets/img/about-img.jpg")?> alt="">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
							<h1>Böngésszen<br>meghirdetett autóink között.</h1>
							<p>
								<span>Sokszínű ajánlatok, megbízhatő hirdetők.</span>
							</p>
							<a class="text-uppercase primary-btn" href="<?=site_url('car')?>">Autók keresése</a>
						</div>
					</div>
				</div>	
			</section>
			
			<section class="home-about-area" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img class="img-fluid" src=<?=site_url("assets/img/bike1.jpg")?> alt="">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
							<h1>Válogasson<br>motoraink közül</h1>
							<p>
								<span>Gyorsaság, nyomaték, hang. Mi kell még?</span>
							</p>
							<a class="text-uppercase primary-btn" href="<?=site_url('bike')?>">Motorok keresése</a>
						</div>
					</div>
				</div>	
			</section>

			<section class="callaction-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1 class="text-white">Segítőkész munkatársak</h1>
							<p>
								Esetleges probléma bekövetkeztével, illetve álhirdetés észlelése esetén kérjük vegye fel velünk a kapcsolatot.
							</p>
							<a class="callaction-btn text-uppercase" href="<?=site_url('about')?>">Csapatunk elérhetősége</a>	
						</div>
					</div>
				</div>
			</section>

			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Legfrissebb blogbejegyzések</h1>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-6 col-md-6 single-blog">
							<div class="thumb">
								<a href="<?=site_url('blog/'.$items[0]['slug'])?>">
									<img class="img-fluid" src=<?=$items[0]['kep']?> alt="">
								</a>							
							</div>
							<p class="date"><?=$items[0]['datum']?></p>
							<a href="<?=site_url('blog/'.$items[0]['slug'])?>">
								<h4><?=$items[0]['title']?></h4>
							</a>
							<p>
								<?=$items[0]['leírás']?>
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p></p>
								<p><span class="lnr lnr-eye"></span> 15 megtekintés</p>
							</div>									
						</div>

						<div class="col-lg-6 col-md-6 single-blog">
							<div class="thumb">
								<a href="<?=site_url('blog/'.$items[1]['slug'])?>">
									<img class="img-fluid" src=<?=$items[1]['kep']?> alt="">
								</a>					
							</div>
							<p class="date"><?=$items[1]['datum']?></p>
							<a href="<?=site_url('blog/'.$items[1]['slug'])?>"><h4><?=$items[1]['title']?></h4></a>
							<p>
								<?=$items[1]['leírás']?>
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p></p>
								<p><span class="lnr lnr-eye"></span> 15 megtekintés</p>
							</div>									
						</div>
					</div>
				</div>	
			</section>
