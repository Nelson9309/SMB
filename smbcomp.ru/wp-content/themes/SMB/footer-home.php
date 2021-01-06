<footer class="footer" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/footer-bg.svg);">
	<div class="footer__items-wrap">
		<div class="container">
			<div class="footer__items">
				<div class="footer__item">
					<a href="#" class="logo">
						<img src="<?php the_field('logo') ?>" alt="">
					</a>
					<div class="footer__item-contact">
						<p class="footer__communication-tel"><?php the_field('tel') ?></p>
						<a class="footer__communication-email"><?php the_field('email') ?></a>
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
				</div>
				<?php
				$posts = get_field('footer_nav');
				if( $posts ): ?>
					<?php foreach( $posts as $post ): 
						setup_postdata($post); ?>
						<div class="footer__item">
							<ul class="header-dropdown__item-list">
								<a class="footer__item-title title-h4" href="#"><?php the_field('list_name') ?></a>
								<ul class="footer__item-list">
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_1') ?>" class="footer__item-link"><?php the_field('list_child_1') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_2') ?>" class="footer__item-link"><?php the_field('list_child_2') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_3') ?>" class="footer__item-link"><?php the_field('list_child_3') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_4') ?>" class="footer__item-link"><?php the_field('list_child_4') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_5') ?>" class="footer__item-link"><?php the_field('list_child_5') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_6') ?>" class="footer__item-link"><?php the_field('list_child_6') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_7') ?>" class="footer__item-link"><?php the_field('list_child_7') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_8') ?>" class="footer__item-link"><?php the_field('list_child_8') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_9') ?>" class="footer__item-link"><?php the_field('list_child_9') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_10') ?>" class="footer__item-link"><?php the_field('list_child_10') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_11') ?>" class="footer__item-link"><?php the_field('list_child_11') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_12') ?>" class="footer__item-link"><?php the_field('list_child_12') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_13') ?>" class="footer__item-link"><?php the_field('list_child_13') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_14') ?>" class="footer__item-link"><?php the_field('list_child_14') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_15') ?>" class="footer__item-link"><?php the_field('list_child_15') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_16') ?>" class="footer__item-link"><?php the_field('list_child_16') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_17') ?>" class="footer__item-link"><?php the_field('list_child_17') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_18') ?>" class="footer__item-link"><?php the_field('list_child_18') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_19') ?>" class="footer__item-link"><?php the_field('list_child_19') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_20') ?>" class="footer__item-link"><?php the_field('list_child_20') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_21') ?>" class="footer__item-link"><?php the_field('list_child_21') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_22') ?>" class="footer__item-link"><?php the_field('list_child_22') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_23') ?>" class="footer__item-link"><?php the_field('list_child_23') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_24') ?>" class="footer__item-link"><?php the_field('list_child_24') ?></a>
									</li>
									<li class="footer__item-item">
										<a href="<?php the_field('list_child_link_25') ?>" class="footer__item-link"><?php the_field('list_child_25') ?></a>
									</li>
								</ul>
							</ul>
						</div>
					<?php endforeach; ?>
					<?php 
					wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="footer__bottom">
		<div class="container">
			<div class="footer__bottom-inner">
				<p class="footer__bottom-copyright"><?php the_field('footer_copyright') ?></p>
				<div class="footer__bottom-links">
					<a href="<?php the_field('footer_cookie_link') ?>" class="footer__bottom-link"><?php the_field('footer_cookie') ?></a>
					<a href="<?php the_field('footer_polity_link') ?>" class="footer__bottom-link"><?php the_field('question_form_agree') ?></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<a class="scroll" href="#top"><img src="<?php bloginfo('template_url'); ?>/assets/images/scroll.svg" alt=""></a>
</div>
<div class="popup" id="popup">
	<div class="question__form-wrap form">
		<form action="#" id="form" method="POST">
			<h2 class="question__title title-h2"><?php the_field('question__img_title') ?></h2>
			<div class="question__form-inputwrap inputwrap _req"><input class="question__form-input input" name="name" type="text" placeholder="Ваше имя"></div>
			<div class="question__form-inputwrap inputwrap _req"><input class="question__form-input input" name="email" type="text" placeholder="E-mail"></div>
			<div class="question__form-inputwrap inputwrap"><input class="question__form-input input" name="tel" type="text" placeholder="Телефон"></div>
			<div class="question__form-inputwrap inputwrap"><textarea class="question__form-input input" name="ask" placeholder="Вопрос"></textarea></div>
			<div class="question__form-agree formagree"><?php the_field('question_form_agree') ?></div>
			<label class="question__form-btn formbtn btn">
				<input type="submit">
				<?php the_field('question_form_btn') ?>
			</label>
		</form>
	</div>
</div>



<?php wp_footer(); ?>
<script>
		// First screen slider
		var swiper = new Swiper(".swiper-container", {
			loop: true,
			speed: 800,
			autoplay: true,
			autoplay: {
				delay: 10000,
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 10,
					slidesPerGroup: 1,
					pagination: {
						el: ".swiper-pagination",
						clickable: true,
						type: 'fraction',
					}
				},
				680: {
					slidesPerView: 2,
					spaceBetween: 20,
					slidesPerGroup: 2,
					pagination: {
						el: ".swiper-pagination",
						clickable: true,
						type: 'fraction',
					}
				},
				980: {
					slidesPerView: 3,
					spaceBetween: 30,
					slidesPerGroup: 3,
					pagination: {
						el: ".swiper-pagination",
						clickable: true,
						type: 'bullets',
					}
				},
				1280: {
					slidesPerView: 4,
					spaceBetween: 20,
					slidesPerGroup: 4,
					pagination: {
						el: ".swiper-pagination",
						clickable: true,
						type: 'bullets',
					}
				},
			},
		});

		// Block reviews slider
		var swiper = new Swiper('.review-container', {
			slideClass: 'review-slide',
			wrapperClass: 'review-wrapper',
			slidesPerView: 2,
			spaceBetween: 40,
			loop: true,
			autoplay: true,
			autoplay: {
				delay: 10000,
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 10,
					slidesPerGroup: 1,
				},
				700: {
					slidesPerView: 2,
					spaceBetween: 20,
					slidesPerGroup: 1,
				},
				980: {
					autoplay: false,
					slidesPerView: 3,
					spaceBetween: 30,
					slidesPerGroup: 3,
				},
			},
		});
	</script>

	<!-- THIS ALL PARALAXS -->
	<script>let didScroll=!1,paralaxTitles=document.querySelectorAll(".header-paralax");const scrollInProgress=()=>{didScroll=!0},raf=()=>{didScroll&&(paralaxTitles.forEach((r,e)=>{r.style.transform="translateY(-"+window.scrollY/30+"%)"}),didScroll=!1),requestAnimationFrame(raf)};function offset(r){var e=r.getBoundingClientRect(),l=window.pageYOffset||document.documentElement.scrollTop;return{top:e.top+l}}requestAnimationFrame(raf),window.addEventListener("scroll",scrollInProgress);let didScrollA=!1,paralaxTitlesA=document.querySelectorAll(".decision-paralax");var div=document.querySelector(".decision"),divOffset=offset(div).top;const scrollInProgressA=()=>{didScrollA=!0},rafA=()=>{didScrollA&&(paralaxTitlesA.forEach((r,e)=>{r.style.transform="translateY(-"+(window.pageYOffset-divOffset+700)/15+"%)"}),didScrollA=!1),requestAnimationFrame(rafA)};requestAnimationFrame(rafA),window.addEventListener("scroll",scrollInProgressA);let didScrollB=!1,paralaxTitlesB=document.querySelectorAll(".question-paralax");var divB=document.querySelector(".question"),divOffsetB=offset(divB).top;const scrollInProgressB=()=>{didScrollB=!0},rafB=()=>{didScrollB&&(paralaxTitlesB.forEach((r,e)=>{r.style.transform="translateY(-"+(window.pageYOffset-divOffsetB+700)/40+"%)"}),didScrollB=!1),requestAnimationFrame(rafB)};requestAnimationFrame(rafB),window.addEventListener("scroll",scrollInProgressB);</script>
	<script>

	</script>
</body>

</html>