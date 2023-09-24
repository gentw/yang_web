<?php 
	get_header();

	$page = $wp_query->query['pagename'];
	showCoverPage($page);
?>

		<section class="our-services section-padding">
			<?php 
				$heading_description = get_field('heading_description');
			?>
			<div class="our-services__heading heading-general">
				<div class="container-fluid">
					<span class="above-title-left-right-line">Our services</span>
					<h3 class=" heading-title">What We Offer For You</h3>
					<p class="paragraph-primary">
						<?php echo $heading_description; ?>
					</p>
				</div>
			</div>


			<div class="our-services__list">
				<div class="main-container">
					<div class="services">
						<?php 
							$services = new WP_Query(array(
								'posts_per_page' 	=> 9,
								'post_type'			=> 'services',
								'orderby'			=> 'ID',
								'order'				=> 'DESC'
							));

							while($services->have_posts()) {
								$services->the_post();
								$title 			= get_the_title();
								$description 	= substr(zi_content(),0, 200);
								$image 			= get_the_post_thumbnail_url(get_the_ID(), 'yang_service_image');

							
						?>
						<div class="service">
							<div class="our-services__list__content">
								<a href="<?php the_permalink(); ?>"><img class="img-fluid our-services__list--img" src="<?php echo $image; ?>" alt="service"></a>
								<div class="our-services__list__content--white-box">
									<h3><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h3>
									<p class="paragraph-primary"><?php echo $description; ?>...</p>
									<a class="btn btn--red hvr-sweep-to-right" href="<?php the_permalink(); ?>">Read more</a>	
								</div>						
							</div>
						</div>
						<?php } wp_reset_postdata(); ?>
						
					</div>				
				</div>
			</div>
		</section>	

<?php 
	get_footer();
?>