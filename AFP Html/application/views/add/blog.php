<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Blog szerkesztése	
							</h1>	
                            <p class="text-white link-nav"><a href="<?=site_url()?>">Kezdőlap </a>  <span class="lnr lnr-arrow-right"></span>
                              <a href="<?=site_url('menu')?>"> Menü</a>  <span class="lnr lnr-arrow-right"></span>
                                <a href="<?=site_url('add/blog')?>">Blog</a></p>
						</div>											
					</div>
				</div>
            </section>
            
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Blog bejegyzés írás</h2>

            <?php echo form_open_multipart('add/blog'); ?>

            <label for="title">Cím</label>
            <input type="text" id="title" name="title"><br>

            <label for="slug">Rovid cím, hivatkozáshoz</label>
            <input type="text" id="slug" name="slug"><br>

            <label for="leírás">Leírás</label>
            <input type="text" id="leírás" name="leírás"><br>

            <label for="text">Szöveg</label>
            <input type="text" id="text" name="text"><br>

            <label for="kep">Kép</label><br>
            <input type="file" id="kep" name="kep"><br>

            <br>
            <button name="submit" type="submit">Mentés</button>
                
            <?php echo form_close(); ?>
            <br>
        </div>
    </div>
    <div class="row">
    <?php if($items != null && !empty($items)): ?>
                <?php foreach($items as $item): ?>

            <div class="col-md-12">
              <div>
                  <h3><?=$item['title']?></h3>
                  <p><?=$item['text']?></p>
                  <h5><a href="<?=site_url('add/delete/blog/'.$item['id'])?>">Delete</a></h5>
              </div>
            </div>            
                <?php endforeach;?>
            <?php else: ?>
                <p><?php echo "Nincs még blog bejegyzés"?></p>
            <?php endif; ?>
    </div>


</div>