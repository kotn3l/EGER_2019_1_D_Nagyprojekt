<section class="banner-area relative" id="home">    
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Blog               
                            </h1>   
                            <p class="text-white link-nav"><a href="<?=site_url()?>">Kezdőlap</a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?=site_url('blog')?>">Blog</a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?=site_url('blog/'.$item['slug'])?>"><?=$item['slug']?></a></p>
                        </div>                                          
                    </div>
                </div>
            </section>
			<section class="blog-posts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 post-list blog-post-list">
							<div class="single-post">
								<img class="img-fluid" src="<?=site_url($item['kep'])?>" alt="" width=100%>
								<a href="#">
									<h1><?=$item['title']?></h1>
								</a>
								<div class="content-wrap">
									<blockquote class="generic-blockquote">
                                        <?=$item['leírás']?>
                                    </blockquote>
									
									<p>
                                        <?=$item['text']?>
									</p>
								</div>
								<div class="bottom-meta">
									<div class="user-details row align-items-center">
										<div class="comment-wrap col-lg-6 col-sm-6">
											<ul>
												<li><a href="#"><span class="lnr lnr-heart"></span>35</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span>2</a></li>
												<li><a href="<?=site_url('blog/pdf/'.$item['slug'])?>"><span class="lnr lnr-bubble"></span>PDF</a></li>
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

                            <section class="nav-area pt-50 pb-100">
                                <div class="container">
                                    <div class="row justify-content-between">
                                        <div class="col-sm-6 nav-left justify-content-start d-flex">
                                            <div class="post-details">
                                                <p>Előző</p>
                                                <h4 class="text-uppercase"><a href="#">Autó az ŰRBEN</a></h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 nav-right justify-content-end d-flex">
                                            <div class="post-details">
                                                <p>Következő</p>
                                                <h4 class="text-uppercase"><a href="#">Autó az ŰRBEN</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </section>
                            <section class="comment-sec-area pt-80 pb-80">
                                <div class="container">
                                    <div class="row flex-column">
                                        <h5 class="text-uppercase pb-80">2 hozzászólás</h5>
                                        <br>
                                        <div class="comment-list">
                                            <div class="single-comment justify-content-between d-flex">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="desc">
                                                        <h5><a href="#">Emilly Blunt</a></h5>
                                                        <p class="date">2019.07.20. 11:20</p>
                                                        <p class="comment">
                                                            Mostmár végre mindenki el fogja hinni, hogy a Föld nem lapos!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="reply-btn">
                                                       <a href="" class="btn-reply text-uppercase">reply</a> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-list left-padding">
                                            <div class="single-comment justify-content-between d-flex">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="desc">
                                                        <h5><a href="#">Emilly Blunt</a></h5>
                                                        <p class="date">2019.07.20. 11:32</p>
                                                        <p class="comment">
                                                            A Föld lapos! Ez csak egy propaganda, hogy elrejtsék az igazságot előlünk.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="reply-btn">
                                                       <a href="" class="btn-reply text-uppercase">reply</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </section>
                            <section class="commentform-area pt-80">
                                <div class="container">
                                    <h5 class="pb-50">Írj hozzásazólást.</h5>
                                    <div class="row flex-row d-flex">
                                        <div class="col-lg-8 col-md-6">
                                            <textarea class="form-control mb-10" name="message" placeholder="Üzenet" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                            <a class="primary-btn mt-20" href="#">Hozzászólok</a>
                                        </div>
                                    </div>
                                </div>    
                            </section>


							</div>																		
						</div>
						   
                    </div>
				</div>
			</section>