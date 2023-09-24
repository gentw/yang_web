<?php 
	get_header();
?>
		<!-- start carousel -->
		<div id="homeSlider" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    
		    <?php 
					$maxId = dealWithSlider()['max_id'];
					$mainArray = dealWithSlider()['slider_info'];
					$index = 1;
					foreach($mainArray as $k => $v) {
						$id = $v['id'];
						$title = $v['title'];
						$excerpt = $v['excerpt'];
						$image = $v['image'];
						$get_in_touch = $v['get_in_touch'];
						$learn_more	= $v['learn_more'];

			?>	

		    <div class="carousel-item <?php if($maxId == $id){echo "active";}?>">
		        <div class="carousel__image" style="background-image: linear-gradient(0deg, rgba(10,12,37,1) 0%, rgba(176,177,181,0) 80%, rgba(216,216,216,0) 100%), url(<?php echo $image; ?>);"></div>
		        <div class="carousel__content">
		        	<div class="container-fluid">
		        	<p class="carousel__content--above-title"><?php echo $title; ?></p>
		        	<h2 class="heading-slider">
		        		<?php echo $excerpt; ?>
		        	</h2>
		        	<div class="btns">
			        	<?php if(!empty($get_in_touch) && !empty($learn_more)): ?>
			        	<a href="<?php echo $learn_more; ?>" class="btn btn--transparent hvr-sweep-to-right_transparent">Learn more</a>
			        	<a href="<?php echo $get_in_touch; ?>" class="carousel__content--get-in-touch btn btn--red hvr-sweep-to-right">Get in touch</a>
			        	<?php endif; ?>
		        	</div>
		        	</div>
		        </div><!-- ./carousel-content-->
		    </div>
			<?php } wp_reset_postdata(); ?>
		    

		   	<ol class="carousel-indicators">
			    <li data-target="#homeSlider" data-slide-to="0" class="active"></li>
			    <li data-target="#homeSlider" data-slide-to="1"></li>
			    <li data-target="#homeSlider" data-slide-to="2"></li>
		  	</ol>
		  </div>
		</div>
		<!-- ./carousel -->

		<section class="about-us section-padding">
			<?php 
				$about_image = get_field('about_image')['sizes']['yang_about_image']; 
				$about_title = get_field('about_title');
				$about_description = get_field('about_description');
			?>
			<div class="main-container">
				<div class="row">
					<div class="about-us__image col-md-6">						
						<div class="full-width-height-img" style="background: url(<?php echo $about_image; ?>)"></div>
					</div>

					<div class="about-us__info col-md-6">
						<span class="above-title-right-line wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".2s">About Us</span>
						<h3 class="heading-title wow fadeInUp" data-wow-duration="0.6s" data-wow-delay=".3s"><?php echo $about_title; ?></h3>
						<p class="paragraph-primary wow fadeInUp" data-wow-duration="0.6s" data-wow-delay=".35s">
							<?php echo $about_description; ?> 
						</p>
						<a class="btn btn--red hvr-sweep-to-right wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".4s" href="/about-us">Read More</a>
					</div>
				</div>
			</div>
		</section><!-- ./about-us -->

		<section class="our-companies section-padding">
		


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
					<div class="content">
						<h5 class="title-left-line">Our Vision</h5>
						<p class="paragraph-primary">
							<?php echo $our_vision_text; ?> 
						</p>
					</div>
				</div>
				<div class="item">
					<div class="full-width-height-img vision_mission_img" style="background: url(<?php echo $our_mission_image; ?>)"></div>
				</div>
				<div class="item item-txt wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
					<div class="content">
						<h5 class="title-left-line">Our Mission</h5>
						<p class="paragraph-primary">
							<?php echo $our_mission_text; ?>  
						</p>
					</div>
				</div>
				<div class="item">
					<div class="full-width-height-img vision_mission_img" style="background: url(<?php echo $our_history_image; ?>)"></div>
				</div>
				<div class="item item-txt wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
					<div class="content">
						<h5 class="title-left-line">Our History</h5>
						<p class="paragraph-primary">
							<?php echo $our_history_text; ?> 
						</p>
					</div>
				</div>
			</div>
		</section> <!-- ./our-companies -->

		<section class="team section-padding">
			<?php 
				$team_description = get_field('team_description');
			?>
			<div class="team__heading heading-general">
				<div class="container-fluid">
					<span class="above-title-left-right-line wow fadeInUp">Our strategy</span>
					<h3 class=" heading-title wow fadeInUp">Meet Our Leadership Team</h3>
					<p class="paragraph-primary wow fadeInUp">
						<?php echo $team_description; ?> 
					</p>
				</div>
			</div>

			<div class="main-container">
				<div class="team__members owl-carousel owl-theme">
				<?php 
					$teamMembers = new WP_Query(array(
						'posts_per_page' => 10,
						'post_type'		 => 'team',
						'orderby'		 => 'ID',
						'order'			 => 'ASC'
					));

					while ($teamMembers->have_posts()) {
						$teamMembers->the_post();		
						
						$fullname 	= get_the_title();
						$position 	= get_field('position');
						$excerpt 	= get_the_excerpt();
						$image 		= get_the_post_thumbnail_url(get_the_ID(), 'yang_team_image');
						$facebook 	= get_field('facebook_url');
						$instagram 	= get_field('instagram_url');
						$twitter 	= get_field('twitter_url');
						$linkedin 	= get_field('linkedin_url');
				?>


				  <div class="item">
				  	<img class="img-fluid" src="<?php echo $image; ?>" alt="team member">

				  	<div class="team__members__info-block">
				  		<h5 class="team__members__info-block--title"><?php echo $fullname; ?></h5>
				  		<p class="team__members__info-block--position"><?php echo $position; ?></p>
				  		<p class="team__members__info-block--description">
				  			<?php echo $excerpt; ?>
				  		</p>
				  		<ul class="team__members__info-block--socials">
				  			<?php if(!empty($facebook)): ?>
				  			<li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook"></i></a></li>
				  			<?php endif; ?>

							<?php if(!empty($instagram)): ?>
				  			<li><a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a></li>
				  			<?php endif; ?>

							<?php if(!empty($twitter)): ?>
				  			<li><a href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a></li>
				  			<?php endif; ?>

							<?php if(!empty($linkedin)): ?>
				  			<li><a href="<?php echo $linkedin; ?>"><i class="fab fa-linkedin"></i></a></li>
				  			<?php endif; ?>
				  		</ul>
				  	</div>
				  	<div class="box-shadow"></div>
				  </div> <!-- ./team-item -->
				  <?php
					} wp_reset_postdata();
				  ?>			  
				
				</div>
			</div>
		</section>

		<section class="latest-news section-padding">
			<?php 
				$latest_news_description = get_field('latest_news_description');
			?>
			<div class="latest-news__heading heading-general">
				<div class="container-fluid">
					<span class="above-title-left-right-line wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">Recent News</span>
					<h3 class="heading-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".4s">Our Latest Insights</h3>
					<p class="paragraph-primary wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".6s">
						<?php echo $latest_news_description; ?> 
					</p>
				</div>
			</div>
			<div class="main-container-80">
				
				<div class="latest-news__content">
					<div class="news--cols">
						<?php 
							
								showLatestPosts(3);
							
						?>						
					</div>
				</div>
			</div>
		</section><!-- ./latest-news -->

<?php
	get_footer();
?>