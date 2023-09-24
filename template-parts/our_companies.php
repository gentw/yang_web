<section class="our-companies section-padding">
			<?php 
				$our_companies_description = get_field('our_companies_description');
			?>
			<div class="our-companies__heading heading-general">
				<div class="container-fluid">
					<h3 class="our-companies__heading--title heading-title wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".2s">Our Companies</h3>
					<p class="our-companies__description paragraph-primary wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".4s">
						<?php echo $our_companies_description; ?> 
					</p>
				</div>
			</div>

			<div class="our-companies__first-section">
				<div class="container-grid-gallery">
					<?php 
						$index = 0;
						$our_companies = new WP_Query(array(
							'posts_per_page' 	=> 8,
							'post_type'			=> 'ourcompanies',
							'order'				=> 'DESC',
							'orderby'			=> 'ID'
						));

						while ($our_companies->have_posts()) {
							$index++;
							$our_companies->the_post();

							$title = get_the_title();
							$category = get_the_category()[0]->name;
							$image 	= get_the_post_thumbnail_url(get_the_ID(), 'yang_slider_image');

						
					?>

					<div class="item item--<?php echo $index; ?>">
						<div class="over-image"></div>
						<a href="#">
							<div class="our-companies__first-section--content">
								<h3><?php echo $title; ?></h3>
								<p><?php echo $category; ?></p>
							</div>
						</a>
						
						<img src="<?php echo $image; ?>">
					</div>
					<?php } wp_reset_postdata(); ?>
					
					
				</div>
			</div>

			<div class="our-companies__second-section">
				<?php 
					$our_vision_text = get_field('our_vision_text');
					$our_vision_image = get_field('our_vision_image')['sizes']['medium_large']; 
					$our_mission_text = get_field('our_mission_text');
					$our_mission_image = get_field('our_mission_image')['sizes']['medium_large']; 
					$our_history_text = get_field('our_history_text');
					$our_history_image = get_field('our_history_image')['sizes']['medium_large']; 

				?>
				<div class="item">
					<div class="full-width-height-img vision_mission_img" style="background: url(<?php echo $our_vision_image; ?>)"></div>
				</div>				
				<div class="item item-txt wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
					<h5 class="title-left-line">Our Vision</h5>
					<p class="paragraph-primary">
						<?php echo $our_vision_text; ?> 
					</p>
				</div>
				<div class="item">
					<div class="full-width-height-img vision_mission_img" style="background: url(<?php echo $our_mission_image; ?>)"></div>
				</div>
				<div class="item item-txt wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
					<h5 class="title-left-line">Our Mission</h5>
					<p class="paragraph-primary">
						<?php echo $our_mission_text; ?>  
					</p>
				</div>
				<div class="item">
					<div class="full-width-height-img vision_mission_img" style="background: url(<?php echo $our_history_image; ?>)"></div>
				</div>
				<div class="item item-txt wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
					<h5 class="title-left-line">Our History</h5>
					<p class="paragraph-primary">
						<?php echo $our_history_text; ?> 
					</p>
				</div>
			</div>
		</section> <!-- ./our-companies -->