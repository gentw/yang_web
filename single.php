<?php
	get_header();
	
?>

		<section class="single-news-section section-padding">
			<div class="single-news-section__cover">
				<div class="main-container">

					<div class="single-news-section__cover__date">
						<span class="single-news-section__cover__date--day"><?php echo get_date('d'); ?></span>
						<span class="single-news-section__cover__date--month-year"><?php echo get_date('m-y'); ?></span>
					</div>
					<img class="single-news-section__cover--img" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'yang_cover_image') ?>">
				</div>

				<div class="main-container-80">
					<div class="heading-general">
					<div class="row">
						<div class="col-md-6">
							<h3 class="single-news-section__cover--title heading-title"><?php the_title(); ?></h3>
						</div>
						<div class="col-md-6">
							<p class="single-news-section__cover--description paragraph-primary">
						<?php the_excerpt(); ?> 
						</p>
						</div>
					</div>				
				</div>
			</div>
			</div>
			<div class="single-news-section__text">
				<div class="main-container-80">
					<div class="row">
					<div class="col-md-2">
					<ul class="socials">							
							<li><a href="#"><i class="fab fa-facebook"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul>
					</div>
					<div class="col-md-10">
					<p class="paragraph-primary">
					
						<?php echo zi_content(); ?>
					</p>
					</div>
					</div>
				</div>
			</div>
		</section>

		<?php
		$post_type = $wp_query->query['post_type'];

		if($post_type != 'services') {
		?>

		<section class="related-news latest-news section-padding">
			<div class="latest-news__heading heading-general">
				<div class="main-container-80">
				
					<h3 class="title-left-line">Related</h3>
					
				</div>
			</div>
			<div class="main-container-80">
				<div class="latest-news__content">
					<div class="news--cols">
						
						<?php
						 $post = get_the_ID();
						 showRelatedPosts($post); ?>
						
						
					</div>
				</div>
			</div>
		</section><!-- ./latest-news -->
		<?php } ?>

<?php
	get_footer();
?>