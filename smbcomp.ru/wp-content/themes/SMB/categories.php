<!-- Template Name: SMB -->
<?php
get_header('categories');
?>
<section class="solutions" style="background-color: #fff;">
	<div class="container">
		<div class="solutions__inner">
			<?php
			$posts = get_field('solutions_blocks');
			if( $posts ): ?>
				<?php foreach( $posts as $post ):	 
					setup_postdata($post); ?>
					<div class="solutions__block">
						<h2 class="solutions__block-title title-h2"><?php the_field('solutions_block_title') ?></h2>
						<div class="solutions__block-items">
							<?php
							$posts = get_field('solutions_items');
							if( $posts ): ?>
								<?php foreach( $posts as $post ):	 
									setup_postdata($post); ?>
									<a href="#ift<?php the_field('solutions_item_number') ?>" class="solutions__block-item solutions-item">
										<div class="solutions-item__top">
											<img class="solutions-item__img" src="<?php the_field('solutions_item_img') ?>" alt="">
											<p class="solutions-item__price price"><?php the_field('solutions_item_price') ?></p>
										</div>
										<h5 class="solutions-item__title title-h5"><?php the_field('solutions_item_title') ?></h5>
										<div class="solutions-item-text"><?php the_field('solutions_item_text') ?></div>
									</a>
								<?php endforeach; ?>
								<?php 
								wp_reset_postdata(); ?>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
				<?php 
				wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<section class="decision decision-category">
	<img class="decision-category__bg" src="<?php bloginfo('template_url'); ?>/assets/images/decision-bg2.webp" alt="">
	<div class="container">
		<div class="decision__inner">
			<h2 class="decision-category__title title-h2"><?php the_field('decision_title') ?></h2>
			<div class="decision__main">
				<?php
				$posts = get_field('decision_items');
				if( $posts ): ?>
					<div class="decision__items">
						<?php foreach( $posts as $post ): 
							setup_postdata($post); ?>
							<div class="decision__item">
								<div class="decision__item-info">
									<img class="decision__item-img" src="<?php the_field('decition_item_img') ?>" alt="">
									<h4 class="decision__item-title title-h4"><?php the_field('decition_item_title') ?></h4>
									<div class="decision__item-text"><?php the_field('decition_item_text') ?></div>
								</div>
								<svg class="decision-svg" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="23.0769" y="46.1538" width="3.84615" height="3.84615"/><rect x="34.6155" y="46.1538" width="3.84615" height="3.84615"/><rect x="46.1538" y="46.1538" width="3.84615" height="3.84615"/><rect y="46.1538" width="3.84615" height="3.84615"/><rect x="11.5386" y="46.1538" width="3.84615" height="3.84615"/><rect x="23.0769" y="34.6155" width="3.84615" height="3.84615"/><rect x="34.6155" y="34.6155" width="3.84615" height="3.84615"/><rect x="46.1538" y="34.6155" width="3.84615" height="3.84615"/><rect y="34.6155" width="3.84615" height="3.84615"/><rect x="11.5386" y="34.6155" width="3.84615" height="3.84615"/><rect x="23.0769" y="23.0769" width="3.84615" height="3.84615"/><rect x="34.6155" y="23.0769" width="3.84615" height="3.84615"/><rect x="46.1538" y="23.0769" width="3.84615" height="3.84615"/><rect y="23.0769" width="3.84615" height="3.84615"/><rect x="11.5386" y="23.0769" width="3.84615" height="3.84615"/><rect x="23.0769" y="11.5386" width="3.84615" height="3.84615"/><rect x="34.6155" y="11.5386" width="3.84615" height="3.84615"/><rect x="46.1538" y="11.5386" width="3.84615" height="3.84615"/><rect y="11.5386" width="3.84615" height="3.84615"/><rect x="11.5386" y="11.5386" width="3.84615" height="3.84615"/><rect x="23.0769" width="3.84615" height="3.84615"/><rect x="34.6155" width="3.84615" height="3.84615"/><rect x="46.1538" width="3.84615" height="3.84615"/><rect width="3.84615" height="3.84615"/><rect x="11.5386" width="3.84615" height="3.84615"/></svg>
							</div>
						<?php endforeach; ?>
					</div>
					<?php 
					wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			<div class="decision__video">
				<?php the_field('decision_video') ?>
			</div>
		</div>
	</div>
	<img class="decision-paralax paralax" src="<?php bloginfo('template_url'); ?>/assets/images/paralax2.svg" alt="">
</section>
<section class="question" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/question-bg.webp);">
	<div class="container">
		<div class="question__inner">
			<div class="question__img">
				<img src="<?php the_field('question_img') ?>" alt="">
				<div class="question__img-text"><?php the_field('question__img_text') ?></div>
			</div>
			<div class="question__form-wrap form">
				<form action="#" id="form-question" method="POST">
					<h2 class="question__title title-h2"><?php the_field('question__img_title') ?></h2>
					<div class="question__form-inputwrap inputwrap"><input class="question__form-input input" name="name" type="text" placeholder="Ваше имя"></div>
					<div class="question__form-inputwrap inputwrap"><input class="question__form-input input" name="email" type="text" placeholder="E-mail"></div>
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
	</div>
	<img src="<?php bloginfo('template_url'); ?>/assets/images/question-bg2.webp" alt="" class="question-bg">
	<img src="<?php bloginfo('template_url'); ?>/assets/images/paralax3.webp" alt="" class="question-paralax paralax">
</section>
<section class="tabprice main-tabprice" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/price-bg.webp);">
	<div class="container">
		<h2 class="tabprice__title title-h2"><?php the_field('table_title') ?></h2>
		<div class="tabprice__table">
			<div class="tabprice__table-item tabprice__table-top">
				<div class="tabprice__table-name"><?php the_field('table_item_main_title') ?></div>
				<div class="tabprice__table-tarifs">
					<div class="tabprice__table-tarif tabprice__table-tarif-top"><?php the_field('table_tarif_1') ?></div>
					<div class="tabprice__table-tarif tabprice__table-tarif-top"><?php the_field('table_tarif_2') ?></div>
					<div class="tabprice__table-tarif tabprice__table-tarif-top"><?php the_field('table_tarif_3') ?></div>
				</div>
			</div>
			<?php
			$posts = get_field('table_items');
			if( $posts ): ?>
				<?php foreach( $posts as $post ): 
					setup_postdata($post); ?>
					<div class="tabprice__table-item">
						<div class="tabprice__table-name"><?php the_field('table_item_title') ?></div>
						<div class="tabprice__table-tarifs">
							<div class="tabprice__table-tarif"><span>Эконом</span><span><?php the_field('table_item_tarif_1') ?></span></div>
							<div class="tabprice__table-tarif"><span>Стандарт</span><span><?php the_field('table_item_tarif_2') ?></span></div>
							<div class="tabprice__table-tarif"><span>Премиум</span><span><?php the_field('table_item_tarif_3') ?></span></div>
						</div>
					</div>
				<?php endforeach; ?>
				<?php 
				wp_reset_postdata(); ?>
			<?php endif; ?>
			<button class="tabprice__table-btn btn">показать полностью</button>
		</div>
	</div>
</section>
<section class="infrastructure">
	<div class="infrastructure__blocks">
		<div class="infrastructure__block">
			<div class="container">
				<h2 class="infrastructure__block-title title-h2">ИТ-<span>инфраструктура</span>:</h2>
			</div>
			<div class="infrastructure__block-items">
				<div class="infrastructure-item__wrap" id="ift1">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-home.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Организация удаленной работы</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Организация удаленной работы</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="infrastructure-item__wrap" id="ift2">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img2.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Компьютеры для сотрудников</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Компьютеры для сотрудников</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="infrastructure-item__wrap" id="ift3">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img3.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Надежное хранение и удаленный доступ</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Надежное хранение и удаленный доступ</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="infrastructure-item__wrap" id="ift4">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img4.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Корпоративная WiFi сеть</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Корпоративная WiFi сеть</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="infrastructure-item__wrap" id="ift5">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img5.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Печать и сканирование</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Печать и сканирование</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="infrastructure-item__wrap" id="ift6">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img6.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Электронная почта</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Электронная почта</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="infrastructure-item__wrap" id="ift7">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img7.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Телефония</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Телефония</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="infrastructure-item__wrap" id="ift8">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img8.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Конференцсвязь</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Конференцсвязь</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="infrastructure__block">
			<div class="container">
				<h2 class="infrastructure__block-title title-h2">Безопасность</h2>
			</div>
			<div class="infrastructure__block-items">
				<div class="infrastructure-item__wrap" id="ift9">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img9.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Видеонаблюдение</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Видеонаблюдение</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="infrastructure-item__wrap" id="ift10">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img10.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Контроль доступа</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Контроль доступа</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="infrastructure__block">
			<div class="container">
				<h2 class="infrastructure__block-title title-h2">Автоматизация бизнес-процессов</h2>
			</div>
			<div class="infrastructure__block-items">
				<div class="infrastructure-item__wrap" id="ift11">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img11.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">1С Бухгалтерия</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">1С Бухгалтерия</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="infrastructure-item__wrap" id="ift12">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img12.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Управление задачами</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Управление задачами</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="infrastructure-item__wrap" id="ift13">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img13.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">НБаза клиентов (CRM): </h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">НБаза клиентов (CRM): </h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="infrastructure-item__wrap" id="ift14">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img14.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Складской учет</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Складской учет</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="infrastructure-item__wrap" id="ift15">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img15.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Контроль за передвижением</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Контроль за передвижением</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="infrastructure__block">
			<div class="container">
				<h2 class="infrastructure__block-title title-h2">Привлечение клиентов из Интернета:</h2>
			</div>
			<div class="infrastructure__block-items">
				<div class="infrastructure-item__wrap" id="ift16">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img16.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Продающий сайт</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Продающий сайт</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												</div><div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget 
												dolor. Aenean massa.</div>
												<div class="infrastructure-product__btn btn3">Подробнее</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="infrastructure-item__wrap" id="ift17">
					<div class="container">
						<div class="infrastructure__block-item infrastructure-item">
							<div class="infrastructure-item__main">
								<img class="infrastructure-item__img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions-img17.svg" alt="">
								<h3 class="infrastructure-item__title title-h3">Социальные сети</h3>
								<div class="infrastructure-item__info">
									<h3 class="infrastructure-item__title title-h3">Социальные сети</h3>
									<div class="infrastructure-item__text">Все для эффективной, удобной и безопасной удаленной работы. Подготовка рабочих мест, организация совместной работы с данными и офисными программами, обеспечение безопасного доступа, программы для постановки и контроля за выполнением задач, и IT сопровождение.</div>
									<a class="infrastructure-item__btn btn" href="#">К услуге</a>
								</div>
							</div>
							<div class="infrastructure-item__products">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="infrastructure-item__product infrastructure-product">
												<img class="infrastructure-product__img" src="<?php bloginfo('template_url'); ?>/assets/images/infrastructure-img.webp" alt="">
												<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
												<div class="infrastructure-product__info">
													<h4 class="infrastructure-product__title title-h4">Товар 2: стандарт</h4>
													<div class="infrastructure-product__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</div>
													<div class="infrastructure-product__btn btn3">Подробнее</div>
												</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer('categories');
?>
