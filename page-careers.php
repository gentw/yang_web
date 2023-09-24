<?php get_header();
$page = $wp_query->query['pagename'];
	showCoverPage($page);

 ?>

		

		<section class="your-passion section-padding">
			<?php
				$heading_text = get_field('heading_text');
			?>
			<div class="your-passion__heading heading-general">
				<div class="container-fluid">
					<h3 class="your-passion__heading--title heading-title">What's Your Passion?</h3>
					<p class="your-passion__description paragraph-primary">
						<?php echo $heading_text; ?> 
					</p>
				</div>
			</div>

			<div class="your-passion__content">
				<div class="container">
					<div class="row">
					<?php 
						$careers = new WP_Query(array(
							'post_type' => 'careerpositions',
							'posts_per_page' => 12,
							'order'	=> 'DESC',
							'orderby' => 'ID'
						));

						while($careers->have_posts()) {
						$careers->the_post();

						$image = get_the_post_thumbnail_url(get_the_ID(), 'yang_service_image');	
						$title = get_the_title();
						$no_position = get_field('no_position');
					?>



					 <div class="col-md-3">
					 	<a href="/contact-us">
					 	<img class="your-passion__content--position-img img-fluid wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".2s" src="<?php echo $image; ?>" alt="photo">
					 	<div class="info">
						 	<h5 class="your-passion__content--position-name"><?php echo $title; ?></h5>
						 	<p class="your-passion__content--position-remaining"><?php echo $no_position ?> positions</p>
					 	</div>
					 	</a>
					 </div>
					 <?php } ?>
					
					</div>
				</div>
			</div>
			

		</section>

<?php get_footer(); ?>