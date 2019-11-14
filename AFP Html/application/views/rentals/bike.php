<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Motorok			
							</h1>	
							<p class="text-white link-nav"><a href="<?=site_url()?>">Kezdőlap </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?=site_url('bike')?>"> Motorok</a></p>
						</div>											
					</div>
				</div>
			</section>
			<section class="model-area section-gap" id="cars">
				<div class="container">
					<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h1 class="text-center pb-10">Válogasson színes kínálatunkból.</h1>
						</div>
					</div>				
					<div class="active-model-carusel">

						<?php if($items != null && !empty($items)): ?>
								<?php foreach($items as $item): ?>

						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20"><?=$item['nev']?></h4>
								</div>
								<p><?=$item['leírás']?></p>
								<p>
									Sebesség: <?=$item['sebesség']?><br>
									Hengerűrtartalom: <?=$item['hengerurtartalom']?>ccm <br>
									Hengerek: <?=$item['hengerek']?><br>
									Ár: <?=$item['ar']?> Ft<br>
									Feltöltő neve: <?=$item['feltolto']?><br>
									Telefonszám: <?=$item['telefonszam']?><br>
									E-mail: <?=$item['email']?><br>
								</p>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="<?=$item['kep']?>" alt="">
							</div>
						</div>
							<?php endforeach;?>
						<?php else: ?>
							<p><?php echo lang('no_news_in_list');?></p>
						<?php endif; ?>
					</div>
				</div>	
			</section>

			<section class="callaction-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1 class="text-white">Problémát észlelt?</h1>
							<p>
								Segítünk
							</p>
							<a class="callaction-btn text-uppercase" href="<?=site_url('about')?>">Kapcsolatfelvétel</a>	
						</div>
					</div>
				</div>	
			</section>	