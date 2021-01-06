<?php
if ( is_front_page() ){
	get_header('home');
}
// elseif ( is_404() ) {
// 	get_header('404');
// }
else {
	get_header();
}
?>
<section class="advantages">
	<div class="container">
		<div class="advantages__inner">
			<div class="advantages__img"><img src="<?php the_field('advantages_img') ?>" alt=""></div>
			<div class="advantages__info">
				<div class="advantages__info-top">
					<h2 class="advantages__title title-h2">Разработано<br>для <span>малого бизнеса</span></h2>
					<img class="advantages__infoimg" src="<?php the_field('advantages_img') ?>" alt="">
				</div>
				<?php
				$posts = get_field('advantages_items');
				if( $posts ): ?>
					<div class="advantages__items">
						<?php foreach( $posts as $post ): 
							setup_postdata($post); ?>
							<a class="advantages__item" href="<?php the_field('advantages_item_link') ?>">
								<img class="advantages__item-img" src="<?php the_field('advantages_item_img') ?>" alt="">
								<div class="advantages__item-top">
									<h4 class="advantages__item-title title-h4"><?php the_field('advantages_item_title') ?></h4>
									<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle class="advantages-svg__color" cx="12.002" cy="12.0001" r="12"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.002 12.0001L9.93533 18.0001L9.00195 17.2076L15.1352 12.0001L9.00195 6.79261L9.93533 6.00012L17.002 12.0001Z" fill="white"/></svg>
								</div>
								<p class="advantages__item-text"><?php the_field('advantages_item_text') ?></p>
							</a>
						<?php endforeach; ?>
					</div>
					<?php 
					wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<section class="decision">
	<img class="decision__bg" src="<?php bloginfo('template_url'); ?>/assets/images/decision-bg.webp" alt="">
	<div class="container">
		<div class="decision__inner">
			<div class="decision__video">
				<?php the_field('decision_video') ?>
			</div>
			<div class="decision__main">
				<h2 class="decision__title title-h2">
					<?php the_field('decision_title') ?>
				</h2>
				<div class="decision__items">
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
									</div>
									<svg class="decision-svg" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="23.0769" y="46.1538" width="3.84615" height="3.84615"/><rect x="34.6155" y="46.1538" width="3.84615" height="3.84615"/><rect x="46.1538" y="46.1538" width="3.84615" height="3.84615"/><rect y="46.1538" width="3.84615" height="3.84615"/><rect x="11.5386" y="46.1538" width="3.84615" height="3.84615"/><rect x="23.0769" y="34.6155" width="3.84615" height="3.84615"/><rect x="34.6155" y="34.6155" width="3.84615" height="3.84615"/><rect x="46.1538" y="34.6155" width="3.84615" height="3.84615"/><rect y="34.6155" width="3.84615" height="3.84615"/><rect x="11.5386" y="34.6155" width="3.84615" height="3.84615"/><rect x="23.0769" y="23.0769" width="3.84615" height="3.84615"/><rect x="34.6155" y="23.0769" width="3.84615" height="3.84615"/><rect x="46.1538" y="23.0769" width="3.84615" height="3.84615"/><rect y="23.0769" width="3.84615" height="3.84615"/><rect x="11.5386" y="23.0769" width="3.84615" height="3.84615"/><rect x="23.0769" y="11.5386" width="3.84615" height="3.84615"/><rect x="34.6155" y="11.5386" width="3.84615" height="3.84615"/><rect x="46.1538" y="11.5386" width="3.84615" height="3.84615"/><rect y="11.5386" width="3.84615" height="3.84615"/><rect x="11.5386" y="11.5386" width="3.84615" height="3.84615"/><rect x="23.0769" width="3.84615" height="3.84615"/><rect x="34.6155" width="3.84615" height="3.84615"/><rect x="46.1538" width="3.84615" height="3.84615"/><rect width="3.84615" height="3.84615"/><rect x="11.5386" width="3.84615" height="3.84615"/></svg>
								</div>
							<?php endforeach; ?>
						</div>
						<?php 
						wp_reset_postdata(); ?>
					<?php endif; ?>

				</div>
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
<section class="better">
	<div class="container">
		<h2 class="better__title title-h2">ИТ-направления для<br><span>малого бизнеса</span></h2>
		<div class="better__items">

			<?php
			$posts = get_field('better_items');
			if( $posts ): ?>
				<div class="better__items">
					<?php foreach( $posts as $post ): 
						setup_postdata($post); ?>
						<div class="better__item">
							<div class="better__item-info">
								<h3 class="better__item-title title-h3"><?php the_field('better_item_title') ?></h3>
								<p class="better__item-text"><?php the_field('better_item_text') ?></p>
								<a href="#" class="better__item-more btn"><?php the_field('better_item_btn') ?></a>
							</div>
							<div class="better__item-img"><img src="<?php the_field('better_item_img') ?>" alt=""></div>
						</div>
					<?php endforeach; ?>
				</div>
				<?php 
				wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<section class="work">
	<div class="container">
		<div class="work__inner">
			<h2 class="work__title title-h2"><?php the_field('work_title') ?></h2>
			<?php
			$posts = get_field('work_items');
			if( $posts ): ?>
				<div class="work__items">
					<?php foreach( $posts as $post ): 
						setup_postdata($post); ?>
						<div class="work__item">
							<h4 class="work__item-title title-h4"><?php the_field('work_item_text') ?></h4>
						</div>
					<?php endforeach; ?>
				</div>
				<?php 
				wp_reset_postdata(); ?>
			<?php endif; ?>
			<div class="work__main">
				<img class="work__main-img" src="images/work-img.svg" alt="">
				<div class="work__main-formwrap form">
					<form action="#" id="form2" method="POST">
						<div class="work__form-title title-h3"><?php the_field('work__form_title') ?></div>
						<div class="work__form-inputwrap inputwrap"><input class="work__form-input input" name="name" type="text" placeholder="Ваше имя"></div>
						<div class="work__form-inputwrap inputwrap"><input class="work__form-input input" name="email" type="text" placeholder="E-mail"></div>
						<div class="work__form-inputwrap inputwrap"><input class="work__form-input input" name="tel" type="text" placeholder="Телефон"></div>
						<div class="work__form-inputwrap inputwrap"><textarea class="work__form-input input" name="ask" placeholder="Вопрос"></textarea></div>
						<p class="work__form-agree formagree"><?php the_field('work__form_agree') ?></p>
						<label class="work__form-btn formbtn btn">
							<input type="submit">
							<?php the_field('work__form_btn') ?>
						</label>
					</form>
				</div>
			</div>
			<div class="work__review">
				<h2 class="work__review-title title-h2"><?php the_field('work_item_text') ?></span></h2>
				<div class="work__review-items">
					<div class="review-container">
						<?php
						$posts = get_field('work_review_items');
						if( $posts ): ?>
							<div class="review-wrapper">
								<?php foreach( $posts as $post ): 
									setup_postdata($post); ?>
									<div class="review-slide">
										<div class="work__review-item review-item">
											<div class="review-item__top"><img src="<?php the_field('work_review_item_img') ?>" alt="">
												<svg class="decision-svg" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="23.0769" y="46.1538" width="3.84615" height="3.84615"/><rect x="34.6155" y="46.1538" width="3.84615" height="3.84615"/><rect x="46.1538" y="46.1538" width="3.84615" height="3.84615"/><rect y="46.1538" width="3.84615" height="3.84615"/><rect x="11.5386" y="46.1538" width="3.84615" height="3.84615"/><rect x="23.0769" y="34.6155" width="3.84615" height="3.84615"/><rect x="34.6155" y="34.6155" width="3.84615" height="3.84615"/><rect x="46.1538" y="34.6155" width="3.84615" height="3.84615"/><rect y="34.6155" width="3.84615" height="3.84615"/><rect x="11.5386" y="34.6155" width="3.84615" height="3.84615"/><rect x="23.0769" y="23.0769" width="3.84615" height="3.84615"/><rect x="34.6155" y="23.0769" width="3.84615" height="3.84615"/><rect x="46.1538" y="23.0769" width="3.84615" height="3.84615"/><rect y="23.0769" width="3.84615" height="3.84615"/><rect x="11.5386" y="23.0769" width="3.84615" height="3.84615"/><rect x="23.0769" y="11.5386" width="3.84615" height="3.84615"/><rect x="34.6155" y="11.5386" width="3.84615" height="3.84615"/><rect x="46.1538" y="11.5386" width="3.84615" height="3.84615"/><rect y="11.5386" width="3.84615" height="3.84615"/><rect x="11.5386" y="11.5386" width="3.84615" height="3.84615"/><rect x="23.0769" width="3.84615" height="3.84615"/><rect x="34.6155" width="3.84615" height="3.84615"/><rect x="46.1538" width="3.84615" height="3.84615"/><rect width="3.84615" height="3.84615"/><rect x="11.5386" width="3.84615" height="3.84615"/></svg>
											</div>
											<h4 class="review-item__title title-h4"><?php the_field('work_review_item_title') ?></h4>
											<p class="review-item__text">
												<?php the_field('work_review_item_text') ?>
											</p>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
							<?php 
							wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
					<div class="review-pagination"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="work__bg">
		<img class="work__bg-bluewh" src="<?php bloginfo('template_url'); ?>/assets/images/work-bg1.svg" alt="">
		<img class="work__bg-blue" src="<?php bloginfo('template_url'); ?>/assets/images/work-bg2.svg" alt="">
	</div>
	<img class="work__bg-circle" src="<?php bloginfo('template_url'); ?>/assets/images/work-bg3.svg" alt="">
</div>

</section>
<section class="about" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/about-bg.svg);">
	<div class="container">
		<div class="about__inner">
			<h2 class="about__title title-h2"><?php the_field('about_title') ?></h2>
			<div class="about__text">
				<?php the_field('about_text') ?>
			</div>
			<div class="about__description">
				<?php the_field('about_description') ?>
			</div>
		</div>
	</div>
	<img class="about__img" src="<?php the_field('about_logo') ?>" alt="">
</section>

<?php
if ( is_front_page() ){
	get_footer('home');
}
// elseif ( is_404() ) {
// 	get_footer('404');
// }
else {
	get_footer();
}
?>