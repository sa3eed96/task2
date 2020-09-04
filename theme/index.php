	<?php get_header(); ?>
	
	<div class="container">
		<div class="h-600x h-sm-auto">
			<div class="h-2-3 h-sm-auto oflow-hidden">
			<?php if(have_posts()): the_post(); ?>
				<!-- big post -->
				<div class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">

						<div style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center; background-size: cover;" class="img-bg bg-grad-layer-6"></div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h3 class="mb-15 mb-sm-5 font-sm-13"><b><?php the_title(); ?></b></h3>
							<ul class="list-li-mr-20">
								<li>by <span class="color-primary"><b><?php the_author(); ?></b></span><?php the_time('F j, Y g:i a'); ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?= gt_get_post_view(); ?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php comments_number('0','1','%'); ?></li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
			<?php endif; ?>
				<div class="float-left float-sm-none w-1-3 w-sm-100 h-100 h-sm-600x">
					<!-- right 2 -->
					<?php if(have_posts()): the_post(); ?>
					<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" href="#">
						
							<div style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center; background-size: cover;"  class="img-bg bg-grad-layer-6"></div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b><?php the_title(); ?></b></h4>
								<ul class="list-li-mr-20">
									<li><?php the_time('F j, Y g:i a'); ?></li>
									<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?= gt_get_post_view(); ?></li>
									<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php comments_number('0','1','%'); ?></li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					<?php endif; ?>
					
					<?php if(have_posts()): the_post(); ?>
					<div class="pl-5 ptb-5 pl-sm-0 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" href="#">

							<div style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center; background-size: cover;" class="img-bg bg-grad-layer-6"></div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b><?php the_title(); ?></b></h4>
								<ul class="list-li-mr-20">
									<li><?php the_time('F j, Y g:i a'); ?></li>
									<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?= gt_get_post_view(); ?></li>
									<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php comments_number('0','1','%'); ?></li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
						</div><!-- w-1-3 -->
					<?php endif; ?>	
				</div><!-- float-left -->

			</div><!-- h-2-3 -->
			
			<div class="h-1-3 oflow-hidden">
				<!-- down 3 -->	
				<?php if(have_posts()): the_post(); ?>
				<div class="pr-5 pr-sm-0 pt-5 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<div style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center; background-size: cover;" class="img-bg bg-grad-layer-6"></div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b><?php the_title(); ?></b></h4>
							<ul class="list-li-mr-20">
								<li><?php the_time('F j, Y g:i a'); ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?= gt_get_post_view(); ?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php comments_number('0','1','%'); ?></li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->

				<?php endif; ?>
				<?php if(have_posts()): the_post(); ?>				
					<div class="plr-5 plr-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
						<a class="pos-relative h-100 dplay-block" href="#">
						
							<div style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center; background-size: cover;" class="img-bg bg-grad-layer-6"></div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b><?php the_title(); ?></b></h4>
								<ul class="list-li-mr-20">
									<li><?php the_time('F j, Y g:i a'); ?></li>
									<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?= gt_get_post_view(); ?></li>
									<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php comments_number('0','1','%'); ?></li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->

				<?php endif; ?>
				<?php if(have_posts()): the_post(); ?>
				<div class="pl-5 pl-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<div style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center; background-size: cover;" class="img-bg bg-grad-layer-6"></div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b><?php the_title(); ?></b></h4>
							<ul class="list-li-mr-20">
								<li><?php the_time('F j, Y g:i a'); ?></li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><?= gt_get_post_view(); ?></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><?php comments_number('0','1','%'); ?></li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				<?php endif; ?>
			</div><!-- h-2-3 -->
		</div><!-- h-100vh -->
	</div><!-- container -->
	
	
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					<h4 class="p-title"><b>FINANCIAL NEWS</b></h4>
					<div class="row">
					
						<div class="col-sm-6">
							<img src="wp-content/themes/theme/images/recent-news-1-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: <br/>Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 pb-20">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><b>30,190</b></li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><b>47</b></li>
							</ul>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
								doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="wp-content/themes/theme/images/polular-1-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="wp-content/themes/theme/images/polular-2-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="wp-content/themes/theme/images/polular-3-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="wp-content/themes/theme/images/polular-4-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
					<h4 class="p-title mt-30"><b>CRYPTO MINING NEWS</b></h4>
					<div class="row">
					
						<div class="col-sm-6">
							<img src="wp-content/themes/theme/images/crypto-news-6-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: <br/>Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="wp-content/themes/theme/images/crypto-news-5-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: <br/>Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
					
						<div class="col-sm-6">
							<img src="wp-content/themes/theme/images/crypto-news-4-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: <br/>Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="wp-content/themes/theme/images/crypto-news-3-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: <br/>Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="wp-content/themes/theme/images/crypto-news-2-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: <br/>Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="wp-content/themes/theme/images/crypto-news-1-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b>2017 Market Performance: Crypto vs.Stock</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>Olivia Capzallo,</b></a>
								Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>47</li>
							</ul>
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
					<a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="#"><b>VIEW MORE CRYPTO MINING EVENTS</b></a>
				</div><!-- col-md-9 -->
				
				<div class="d-none d-md-block d-lg-none col-md-3"></div>
				<div class="col-md-6 col-lg-4">
					<div class="pl-20 pl-md-0">
						<ul class="list-block list-li-ptb-15 list-btm-border-white bg-primary text-center">
							<li><b>1 BTC = $13,2323</b></li>
							<li><b>1 BCH = $13,2323</b></li>
							<li><b>1 ETH = $13,2323</b></li>
							<li><b>1 LTC = $13,2323</b></li>
							<li><b>1 DAS = $13,2323</b></li>
							<li><b>1 BCC = $13,2323</b></li>
						</ul>
						
						<div class="mtb-50">
							<h4 class="p-title"><b>POPULAR POSTS</b></h4>
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="wp-content/themes/theme/images/polular-1-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="wp-content/themes/theme/images/polular-2-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="wp-content/themes/theme/images/polular-3-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="wp-content/themes/theme/images/polular-4-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
						</div><!-- mtb-50 -->
						
						<div class="mtb-50 pos-relative">
							<img src="wp-content/themes/theme/images/banner-1-600x450.jpg" alt="">
							<div class="abs-tblr bg-layer-7 text-center color-white">
								<div class="dplay-tbl">
									<div class="dplay-tbl-cell">
										<h4><b>Available for mobile & desktop</b></h4>
										<a class="mt-15 color-primary link-brdr-btm-primary" href="#"><b>Download for free</b></a>
									</div><!-- dplay-tbl-cell -->
								</div><!-- dplay-tbl -->
							</div><!-- abs-tblr -->
						</div><!-- mtb-50 -->
						
						<div class="mtb-50 mb-md-0">
							<h4 class="p-title"><b>NEWSLETTER</b></h4>
							<p class="mb-20">Subscribe to our newsletter to get notification about new updates,
								information, discount, etc..</p>
							<form class="nwsltr-primary-1">
								<input type="text" placeholder="Your email"/>
								<button type="submit"><i class="ion-ios-paperplane"></i></button>
							</form>
						</div><!-- mtb-50 -->
						
					</div><!--  pl-20 -->
				</div><!-- col-md-3 -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section>
	
	
	<?php get_footer(); ?>