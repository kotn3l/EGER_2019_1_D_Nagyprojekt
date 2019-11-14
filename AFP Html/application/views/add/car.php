<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Új autó hírdetés	
							</h1>	
                            <p class="text-white link-nav"><a href="<?=site_url()?>">Kezdőlap </a>  <span class="lnr lnr-arrow-right"></span>
                              <a href="<?=site_url('menu')?>"> Menü</a>  <span class="lnr lnr-arrow-right"></span>
                                <a href="<?=site_url('add/car')?>">Autó</a></p>
						</div>											
					</div>
				</div>
            </section>
            
<div class="container">
    <div class="row">
        <div class="col-lg-12">        
            <h2>Új autó hozzáadása</h2> 

            <?php echo form_open_multipart('add/car'); ?>

                <label for="nev">Név</label>
                <input type="text" id="nev" name="nev"><br>

                <label for="leírás">Leírás</label>
                <input type="text" id="leírás" name="leírás"><br>

                <label for="ules">Ülés szám</label>
                <input type="number" id="ules" name="ules"><br>

                <label for="ajto">Ajto szám</label>
                <input type="number" id="ajto" name="ajto"><br>

                <label for="hengerurtartalom">Hengerurtartalom</label>
                <input type="number" id="hengerurtartalom" name="hengerurtartalom"><br>

                <label for="meghajtas">Meghajtas</label>
                <input type="text" id="meghajtas" name="meghajtas"><br>

                <label for="ar">ár</label>
                <input type="number" id="ar" name="ar"><br>

                <label for="kep">Kép az autóról</label><br>
                <input type="file" id="kep" name="kep"><br>

                <br>
                <button name="submit" type="submit">Mentés</button>
                
            <?php echo form_close(); ?>
            <br>
        </div>
    </div>
    <?php if ($user->username == 'administrator'): ?>

            <h2>Feltöltött hírdetések</h2>
    <div class="row">
    <?php if($items != null && !empty($items)): ?>
                <?php foreach($items as $item): ?>

            <div class="col-md-3">
                  <h3><?=$item['nev']?></h3>
                  <p><?=$item['leírás']?></p>
                  <p>Hengerurtartalom: <?=$item['hengerurtartalom']?><br>
                      Ára: <?=$item['ar']?>M
                    </p>
                  <a href="<?=site_url('add/delete/car/'.$item['id'])?>">Hírdetés törlése</a>
            </div>
                <?php endforeach;?>
            <?php else: ?>
                <p><?php echo "Nincs feltöltve hírdetés autókról"?></p>
            <?php endif; ?>
    </div>
            <?php endif; ?>
</div>