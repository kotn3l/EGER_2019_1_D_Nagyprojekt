<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Menü			
							</h1>	
							<p class="text-white link-nav"><a href="<?=site_url()?>">Kezdőlap </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?=site_url('menu')?>"> Menü</a></p>
						</div>											
					</div>
				</div>
            </section>
			
			<section class="home-about-area" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img src="<?=site_url('assets/img/b3.jpg')?>">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
						<h1>Eladó autója van?</h1>
						<p>
							<span>Hirdesse meg nálunk!</span>
						</p>
							<a class="text-uppercase primary-btn" href="<?=site_url('add/car')?>">
								
								<p>Autó hirdetése</p>
							</a>
						</div>
					</div>
				</div>	
			</section>
			
			<section class="home-about-area" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img src="<?=site_url('assets/img/bike1.jpg')?>">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
						<h1>Eladná szeretett motorját?</h1>
						<p>
							<span>Velünk egyszerűen hirdethet!</span>
						</p>
							<a class="text-uppercase primary-btn" href="<?=site_url('add/bike')?>">
								
								<p>Motor hirdetése</p>
							</a>
						</div>
					</div>
				</div>	
			</section>
			
    
    <?php if ($user->username == 'administrator') {?>
    <section class="home-about-area" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img src="<?=site_url('assets/img/bloghd.jpg')?>">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
						<h1>A felhasználók az elsők</h1>
						<p>
							<span>Legyen érdekes a napjuk</span>
						</p>
							<a class="text-uppercase primary-btn" href="<?=site_url('add/blog')?>">
								
								<p>Blogbejegyzés írása</p>
							</a>
						</div>
					</div>
				</div>	
			</section>
    <?php } ?>
</div>
            