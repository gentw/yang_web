<?php 
	get_header();

	
	$page = $wp_query->query['pagename'];
	showCoverPage($page);
?>
		<!-- ./carousel -->
		<section class="about-boxes">
			<div class="item item-img">
				<?php 
						$our_vision_text = get_field('our_vision_text');
						$our_vision_image = get_field('our_vision_image')['sizes']['medium_large'];
						$our_vision_btn   = get_field('our_vision_button_link');
					?>
					<div class="full-width-height-img" style="background: url(<?php echo $our_vision_image; ?>)"></div>
				</div>				
				<div class="item item-txt wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".2s">
				<div class="content">	
					<h5 class="title-left-line">Our Vision</h5>
					<p class="paragraph-primary">
						<?php echo $our_vision_text; ?> 
					</p>

					<?php if(!empty($our_vision_btn)): ?>
					<a class="btn btn--red hvr-sweep-to-right" href="<?php echo $our_vision_btn; ?>">Get in touch</a>
					<?php endif; ?>
				</div>
				</div>
				
				<div class="item item-txt wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".2s">
					<?php 
						$our_mission_text = get_field('our_mission_text');
						$our_mission_image = get_field('our_mission_image')['sizes']['medium_large'];
						$our_mission_btn   = get_field('our_mission_button_link');
					?>
					<div class="content">
						<h5 class="title-left-line">Our Mission</h5>
						<p class="paragraph-primary">
							<?php echo $our_mission_text; ?>  
						</p>
						<?php if(!empty($our_mission_btn)): ?>
						<a class="btn btn--red hvr-sweep-to-right" href="<?php echo $our_mission_btn; ?>">Get in touch</a>
						<?php endif; ?>
					</div>
				</div>
				<div class="item item-img">
					<div class="full-width-height-img" style="background: url(<?php echo $our_mission_image; ?>)"></div>
				</div>
		</section>

		<section class="features section-padding">
			<div class="main-container-80">
				<div class="row features__content">
					<?php 
					for($i=1; $i<=3; $i++) {
						$feature_title = "feature_".$i."_title";
						$feature_description = "feature_".$i."_description";
						$feature_icon = "feature_".$i."_icon";

						$feature_title = get_field($feature_title);
						$feature_description = get_field($feature_description);
						$feature_icon = get_field($feature_icon);
					?>
					<div class="col-md-3">
						<div class="features__content--icon"><img class="img-fluid" src="<?php echo $feature_icon ?>" alt="icon"></div>
						<h5 class="features__content--title"><?php echo $feature_title; ?></h5>
						<p class="features__content--description paragraph-primary">
							<?php echo $feature_description; ?>
						</p>
					</div>
					<?php 
					}
					?>

				</div>
			</div>
			
		</section>


		<section class="what-make-us-unique section-padding">
			<?php
				$array = array('pagename' => 'home');

				$query = new WP_Query($array);

				while($query->have_posts()) { 
					$query->the_post();

					$about_txt = get_field('about_description');
				} wp_reset_postdata();

				$about_us_photo = get_field('about_us_photo_in_right')['sizes']['yang_about_image'];
			
			?>

			<div class="main-container-80">
				<div class="row">
					<div class="col-md-6">
						<span class="above-title-right-line wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".2s">About</span>
						<h3 class="heading-title wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".3s">What make us unique</h3>
						<p class="paragraph-primary wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".4s">
							<?php echo $about_txt; ?>
						</p>
						<br>
						<a class="btn btn--red hvr-sweep-to-right wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".4s" href="/about">Read More</a>
					</div>
					<div class="col-md-6">
						<img class="img-fluid" src="<?php echo $about_us_photo; ?>" alt="person">
					</div>
				</div>
			</div>
		</section>

<?php
	get_footer();
?>



