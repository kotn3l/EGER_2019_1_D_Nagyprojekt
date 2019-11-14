<section class="banner-area relative" id="home">    
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Blog               
                            </h1>   
                            <p class="text-white link-nav"><a href="<?=site_url()?>">Kezdőlap</a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?=site_url('blog')?>">Blog</a></p>
                        </div>                                          
                    </div>
                </div>
            </section>
			<section class="blog-posts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 post-list blog-post-list">
							
						<?php if($items != null && !empty($items)): ?>
								<?php foreach($items as $item): ?>

							<div class="single-post">
								<img class="img-fluid" src="<?=$item['kep']?>" alt="">
								<a href="<?=site_url('blog/'.$item['slug'])?>">
									<h1><?=$item['title']?></h1>
								</a>
									<p><?=$item['leírás']?></p>
								<div class="bottom-meta">
									<div class="user-details row align-items-center">
										<div class="comment-wrap col-lg-6">
											<ul>
												<li><?=$item['datum']?></li>
												<li><a href="#"><span class="lnr lnr-heart"></span>35</a></li>
											</ul>
										</div>
										<div class="social-wrap col-lg-6">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											</ul>
											
										</div>
									</div>
								</div>
							</div>
								<?php endforeach;?>
							<?php else: ?>
								<p><?php echo lang('no_news_in_list');?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>	
			</section>