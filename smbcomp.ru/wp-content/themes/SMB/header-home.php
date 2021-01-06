<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo( 'description' ); ?></title> 
	<?php wp_head(); ?>	
</head>

<body>
	<div class="page">
		<div class="header-hide">
			<div class="container">
				<div class="header-hide__inner">
					<div class="header__top-start">
						<div class="burger-btn">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<a href="#" class="logo"><img src="<?php the_field('logo_hide') ?>" alt=""></a>
					</div>
					<nav class="header__menu">
						<ul class="header__menu-list">
							<li class="header__menu-item">
								<p class="header__menu-link">
									<?php the_field('header_hide_nav1'); ?>
								</p>
							</li>
							<li class="header__menu-item">
								<p class="header__menu-link header__menu-res"><?php the_field('header_hide_nav2') ?><img src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt=""></p>
							</li>
							<li class="header__menu-item">
								<a class="header__menu-link" href="<?php bloginfo('template_url'); ?>/support.php"><?php the_field('header_hide_nav3') ?></a>
							</li>
							<li class="header__menu-item">
								<a class="header__menu-link" href="<?php bloginfo('template_url'); ?>/blog.php"><?php the_field('header_hide_nav4') ?></a>
							</li>
							<li class="header__menu-item">
								<a class="header__menu-link" href="<?php bloginfo('template_url'); ?>/contacts.php"><?php the_field('header_hide_nav5') ?></a>
							</li>
						</ul>
					</nav>
					<div class="social">
						<a class="social__item" href="<?php the_field('link_facebook') ?>">
							<img src="<?php the_field('img_facebook') ?>" alt="">
						</a>
						<a class="social__item" href="<?php the_field('link_instagram') ?>">
							<img src="<?php the_field('img_instagram') ?>" alt="">
						</a>
						<a class="social__item" href="<?php the_field('link_youtube') ?>">
							<img src="<?php the_field('img_youtube') ?>" alt="">
						</a>
						<a class="social__item" href="<?php the_field('link_telegram') ?>">
							<img src="<?php the_field('img_telegram') ?>" alt="">
						</a>
					</div>
					<a href="<?php the_field('tel_link') ?>" class="header__callback header__calltel"><img src="<?php the_field('tel_img') ?>" alt=""></a>
				</div>
			</div>
		</div>
		<header class="header main-header" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/main-bg.webp);">
			<div class="container">
				<div class="header-topwrap">
					<div class="header__top">
						<div class="header__top-start">
							<div class="burger-btn">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<p href="#" ref="#" class="logo">
								<img src="<?php the_field('logo') ?>" alt="">
							</p>
						</div>
						<div class="header__communication">
							<p class="header__communication-tel"><?php the_field('tel') ?></p>
							<p class="header__communication-email"><?php the_field('email') ?></p>
							<p class="header__communication-time"><?php the_field('graph_time') ?></p>
						</div>
						<div class="header__search">
							<form role="search" method="get" id="searchform" action="#" >
								<input class="header__search-input" type="text" placeholder="<?php the_field('search_text') ?>">
								<label class="header__search-btn">
									<input type="submit">
									<img src="<?php bloginfo('template_url'); ?>/assets/images/search.svg" alt="">
								</label>
							</form>
						</div>
						<div class="social">
							<a class="social__item" href="#">
								<img src="<?php the_field('img_facebook2') ?>" alt="">
							</a>
							<a class="social__item" href="#">
								<img src="<?php the_field('img_instagram2') ?>" alt="">
							</a>
							<a class="social__item" href="#">
								<img src="<?php the_field('img_youtube2') ?>" alt="">
							</a>
							<a class="social__item" href="#">
								<img src="<?php the_field('img_telegram2') ?>" alt="">
							</a>
						</div>
						<a href="<?php the_field('tel_link') ?>" class="header__callback header__calltel"><img src="<?php the_field('tel_img') ?>" alt=""></a>
					</div>
					<div class="header__bottom">
						<nav class="header__menu">
							<ul class="header__menu-list">
								<li class="header__menu-item"><a class="header__menu-link header__menu-other active" href="#"><?php the_field('header_hide_nav1') ?></a>
								</li>
								<li class="header__menu-item"><p class="header__menu-link header__menu-res"><?php the_field('header_hide_nav2') ?><img src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt=""></p></li>
								<li class="header__menu-item"><a class="header__menu-link header__menu-other" href="#"><?php the_field('header_hide_nav3') ?></a>
								</li>
								<li class="header__menu-item"><a class="header__menu-link header__menu-other" href="#"><?php the_field('header_hide_nav4') ?></a>
								</li>
								<li class="header__menu-item"><a class="header__menu-link header__menu-other" href="#"><?php the_field('header_hide_nav5') ?></a>
								</li>
							</ul>
						</nav>
						<a class="header__callback mfp-with-zoom" href="#popup" data-mfp-src="#popup"><?php the_field('head_question_btn') ?></a>
					</div>
				</div>
				<div class="header__main">
					<div class="header__main-top">
						<h1 class="header__main-title title-h1"><?php the_field('main_screen_title') ?></h1>
						<img src="<?php the_field('main_screen_img') ?>" alt="">
					</div>
					<div class="header__main-slider main-slider">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php
								$posts = get_field('header_slider');
								if( $posts ): ?>
									<?php foreach( $posts as $post ): 
										setup_postdata($post); ?>
										<div class="swiper-slide">
											<div class="main-slider__slide <?php $field = get_field('header_slider_popular',get_the_ID());if($field == '1'){echo 'popular';}else{}?>">
												<div class="main-slider__slide-info">
													<div class="main-slider__slide-name title-h4"><?php the_field('header_slider_title') ?></div>
													<p class="main-slider__slide-category"><?php the_field('header_slider_category') ?></p>
												</div>
												<div class="main-slider__slide-btns">
													<p class="main-slider__slide-price price"><?php the_field('header_slider_price') ?></p>
													<a class="main-slider__slide-btn" href="#"><?php the_field('header_slider_btn') ?></a>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
									<?php 
									wp_reset_postdata(); ?>
								<?php endif; ?>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
			<img class="header-paralax paralax" src="<?php bloginfo('template_url'); ?>/assets/images/header-paralax.webp" alt="">
		</header>
		<!-- An important thing for the menu -->
		<div class="header-dropdown-vis vis hide"></div>
		<!-- Drop-down menu -->
		<nav class="header-dropdown menu-dropdownres header-drop">
			<div class="header-dropdown__mobile">
				<div class="header__search hide">
					<form role="search" method="get" id="searchform" action="#" >
						<input class="header__search-input" type="text" placeholder="Поиск по сайту">
						<label class="header__search-btn">
							<input type="submit">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/search.svg" alt="">
						</label>
					</form>
				</div>
				<div class="header__communication hide">
					<p class="header__communication-tel"><?php the_field('tel') ?></p>
					<p class="header__communication-email"><?php the_field('email') ?></p>
					<p class="header__communication-time"><?php the_field('graph_time') ?></p>
				</div>
				<a class="header__callback mfp-with-zoom hide" href="#popup" data-mfp-src="#popup"><?php the_field('head_question_btn') ?></a>
				<div class="header__menu">
					<ul class="header__menu-list">
						<li class="header__menu-item">
							<a class="header__menu-link hide" href="<?php bloginfo('template_url'); ?>/support.php"><?php the_field('header_hide_nav1') ?></a>
						</li>
						<li class="header__menu-item">
							<p class="header__menu-link header__menu-res hide"><?php the_field('header_hide_nav2') ?><img src="<?php bloginfo('template_url'); ?>/assets/images/arrow.svg" alt=""></p>
						</li>
						<div class="header-dropdown__inner">
							<div class="header-dropdown__items">
								<div class="header-dropdown__item">
									<?php
									$posts = get_field('menu_list_1');
									if( $posts ): ?>
										<?php foreach( $posts as $post ): 
											setup_postdata($post); ?>
											<ul class="header-dropdown__item-list">
												<li>
													<h5 class="header-dropdown__item-categorytitle title-h5">
														<a href="#"><?php the_field('list_name') ?></a>
														<img src="images/arrow.svg" alt="">
													</h5>
												</li>
												<div class="header-dropdown__item-dr">
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_1') ?>">
															<?php the_field('list_child_1') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_2') ?>">
															<?php the_field('list_child_2') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_3') ?>">
															<?php the_field('list_child_3') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_4') ?>">
															<?php the_field('list_child_4') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_5') ?>">
															<?php the_field('list_child_5') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_6') ?>">
															<?php the_field('list_child_6') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_7') ?>">
															<?php the_field('list_child_7') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_8') ?>">
															<?php the_field('list_child_8') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_9') ?>">
															<?php the_field('list_child_9') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_10') ?>">
															<?php the_field('list_child_10') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_11') ?>">
															<?php the_field('list_child_11') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_12') ?>">
															<?php the_field('list_child_12') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_13') ?>">
															<?php the_field('list_child_13') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_14') ?>">
															<?php the_field('list_child_14') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_15') ?>">
															<?php the_field('list_child_15') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_16') ?>">
															<?php the_field('list_child_16') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_17') ?>">
															<?php the_field('list_child_17') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_18') ?>">
															<?php the_field('list_child_18') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_19') ?>">
															<?php the_field('list_child_19') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_20') ?>">
															<?php the_field('list_child_20') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_21') ?>">
															<?php the_field('list_child_21') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_22') ?>">
															<?php the_field('list_child_22') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_23') ?>">
															<?php the_field('list_child_23') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_24') ?>">
															<?php the_field('list_child_24') ?>
														</a>
													</li>
													<li class="header-dropdown__item-category">
														<a href="<?php the_field('list_child_link_25') ?>">
															<?php the_field('list_child_25') ?>
														</a>
													</li>
												</div>
											</ul>
										<?php endforeach; ?>
										<?php 
										wp_reset_postdata(); ?>
									<?php endif; ?>
								</div>
								<div class="header-dropdown__item">
									<?php
									$posts = get_field('menu_list_2');
									if( $posts ): ?>
										<?php foreach( $posts as $post ): 
											setup_postdata($post); ?>
											<div class="header-dropdown__item-list">
												<li class="header-dropdown__item-category title-h5">
													<a href="#"><?php the_field('list_name') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_1') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_2') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_3') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_4') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_5') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_6') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_7') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_8') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_9') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_10') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_11') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_12') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_13') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_14') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_15') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_16') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_17') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_18') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_19') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_20') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_21') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_22') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_23') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_24') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_25') ?>
													</a>
												</li>
											</div>
										<?php endforeach; ?>
										<?php 
										wp_reset_postdata(); ?>
									<?php endif; ?>
								</div>
								<div class="header-dropdown__item">
									<?php
									$posts = get_field('menu_list_3');
									if( $posts ): ?>
										<?php foreach( $posts as $post ): 
											setup_postdata($post); ?>
											<div class="header-dropdown__item-list">
												<li class="header-dropdown__item-category title-h5">
													<a href="#"><?php the_field('list_name') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_1') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_2') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_3') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_4') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_5') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_6') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_7') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_8') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_9') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_10') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_11') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_12') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_13') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_14') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_15') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_16') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_17') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_18') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_19') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_20') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_21') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_22') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_23') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_24') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_25') ?>
													</a>
												</li>
											</div>
										<?php endforeach; ?>
										<?php 
										wp_reset_postdata(); ?>
									<?php endif; ?>
								</div>
								<div class="header-dropdown__item">
									<?php
									$posts = get_field('menu_list_4');
									if( $posts ): ?>
										<?php foreach( $posts as $post ): 
											setup_postdata($post); ?>
											<div class="header-dropdown__item-list">
												<li class="header-dropdown__item-category title-h5">
													<a href="#"><?php the_field('list_name') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_1') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_2') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_3') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_4') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_5') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_6') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_7') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_8') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_9') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_10') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_11') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_12') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_13') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_14') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_15') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_16') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_17') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_18') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_19') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_20') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_21') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_22') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_23') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_24') ?>
													</a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="#">
														<?php the_field('list_child_25') ?>
													</a>
												</li>
											</div>
										<?php endforeach; ?>
										<?php 
										wp_reset_postdata(); ?>
									<?php endif; ?>
								</div>
							</div>
							<div class="header-dropdown__blocks">
								<?php
								$posts = get_field('menu_list_bottom_1');
								if( $posts ): ?>
									<div class="header-dropdown__block">
										<?php foreach( $posts as $post ): 
											setup_postdata($post); ?>
											<ul class="header-dropdown__item-list">
												<li class="header-dropdown__item-category title-h5"><a><?php the_field('list_name') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_1') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_2') ?>"><?php the_field('list_child_2') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_3') ?>"><?php the_field('list_child_3') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_4') ?>"><?php the_field('list_child_4') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_5') ?>"><?php the_field('list_child_5') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_6') ?>"><?php the_field('list_child_6') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_7') ?>"><?php the_field('list_child_7') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_8') ?>"><?php the_field('list_child_8') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_9') ?>"><?php the_field('list_child_9') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_10') ?>"><?php the_field('list_child_10') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_11') ?>"><?php the_field('list_child_11') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_12') ?>"><?php the_field('list_child_12') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_13') ?>"><?php the_field('list_child_13') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_14') ?>"><?php the_field('list_child_14') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_15') ?>"><?php the_field('list_child_15') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_16') ?>"><?php the_field('list_child_16') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_17') ?>"><?php the_field('list_child_17') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_18') ?>"><?php the_field('list_child_18') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_19') ?>"><?php the_field('list_child_19') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_20') ?>"><?php the_field('list_child_20') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_21') ?>"><?php the_field('list_child_21') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_22') ?>"><?php the_field('list_child_22') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_23') ?>"><?php the_field('list_child_23') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_24') ?>"><?php the_field('list_child_24') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_25') ?>"><?php the_field('list_child_25') ?></a>
												</li>
											</ul>
										<?php endforeach; ?>
									</div>
									<?php 
									wp_reset_postdata(); ?>
								<?php endif; ?>

								<?php
								$posts = get_field('menu_list_bottom_2');
								if( $posts ): ?>
									<div class="header-dropdown__block">
										<?php foreach( $posts as $post ): 
											setup_postdata($post); ?>
											<ul class="header-dropdown__item-list">
												<li class="header-dropdown__item-category title-h5"><a><?php the_field('list_name') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_1') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_2') ?>"><?php the_field('list_child_2') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_3') ?>"><?php the_field('list_child_3') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_4') ?>"><?php the_field('list_child_4') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_5') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_6') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_7') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_8') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_9') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_10') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_11') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_12') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_13') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_14') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_15') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_16') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_17') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_18') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_19') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_20') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_21') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_22') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_23') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_24') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_25') ?></a>
												</li>
											</ul>
										<?php endforeach; ?>
									</div>
									<?php 
									wp_reset_postdata(); ?>
								<?php endif; ?>

								<?php
								$posts = get_field('menu_list_bottom_3');
								if( $posts ): ?>
									<div class="header-dropdown__block">
										<?php foreach( $posts as $post ): 
											setup_postdata($post); ?>
											<ul class="header-dropdown__item-list">
												<li class="header-dropdown__item-category title-h5"><a><?php the_field('list_name') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_1') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_2') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_3') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_4') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_5') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_6') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_7') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_8') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_9') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_10') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_11') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_12') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_13') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_14') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_15') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_16') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_17') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_18') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_19') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_20') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_21') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_22') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_23') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_24') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_25') ?></a>
												</li>
											</ul>
										<?php endforeach; ?>
									</div>
									<?php 
									wp_reset_postdata(); ?>
								<?php endif; ?>

								<?php
								$posts = get_field('menu_list_bottom_4');
								if( $posts ): ?>
									<div class="header-dropdown__block">
										<?php foreach( $posts as $post ): 
											setup_postdata($post); ?>
											<ul class="header-dropdown__item-list">
												<li class="header-dropdown__item-category title-h5"><a><?php the_field('list_name') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_1') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_2') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_3') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_4') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_5') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_6') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_7') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_8') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_9') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_10') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_11') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_12') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_13') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_14') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_15') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_16') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_17') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_18') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_19') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_20') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_21') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_22') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_23') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_24') ?></a>
												</li>
												<li class="header-dropdown__item-category">
													<a href="<?php the_field('list_child_link_1') ?>"><?php the_field('list_child_25') ?></a>
												</li>
											</ul>
										<?php endforeach; ?>
									</div>
									<?php 
									wp_reset_postdata(); ?>
								<?php endif; ?>
							</div>
						</div>
						<li class="header__menu-item">
							<a class="header__menu-link header__menu-res hide" href="<?php bloginfo('template_url'); ?>/support.php"><?php the_field('header_hide_nav3') ?></a>
						</li>
						<li class="header__menu-item">
							<a class="header__menu-link header__menu-res hide" href="<?php bloginfo('template_url'); ?>/blog.php"><?php the_field('header_hide_nav4') ?></a>
						</li>
						<li class="header__menu-item">
							<a class="header__menu-link header__menu-res hide" href="<?php bloginfo('template_url'); ?>/contacts.php"><?php the_field('header_hide_nav5') ?></a>
						</li>
					</ul>
				</div>
				<div class="social hide">
					<a class="social__item" href="#">
						<img src="<?php the_field('img_facebook2') ?>" alt="">
					</a>
					<a class="social__item" href="#">
						<img src="<?php the_field('img_instagram2') ?>" alt="">
					</a>
					<a class="social__item" href="#">
						<img src="<?php the_field('img_youtube2') ?>" alt="">
					</a>
					<a class="social__item" href="#">
						<img src="<?php the_field('img_telegram2') ?>" alt="">
					</a>
				</div>
			</div>
		</nav>
