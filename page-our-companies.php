<?php 
	get_header();
?>
		<!-- start carousel -->
		<div id="homeSlider" class="carousel slide our-companies-carousel" data-ride="carousel">
		  <div class="carousel-inner">
		 

		  	<?php
			  	$companies = iterateThroughAttributes();
				$data_db = getDataFromDB($companies);		
				$showCompanies = iterateAndShowNotEmpty($data_db);	 
				$minId = companiesFindMinId($showCompanies); 
		  		for($i=1; $i<=count($showCompanies); $i++) {
		  			if(!empty($showCompanies['company_'.$i]['cover']) && !empty($showCompanies['company_'.$i]['title'])) {
		  				$id = $showCompanies['company_'.$i]['id'];
		  	?>

		    <div class="carousel-item <?php if($minId == $id): echo 'active'; endif;?>">
		        <div class="carousel__image" style="background-image: linear-gradient(0deg, rgba(10,12,37,1) 0%, rgba(176,177,181,0) 80%, rgba(216,216,216,0) 100%), url(<?php echo $showCompanies['company_'.$i]['cover']; ?>); "></div>
		        <div class="carousel__content">
		        	<div class="">
		        	<p class="carousel__content--above-title"><?php echo $showCompanies['company_'.$i]['type']; ?></p>
		        	<h2 class="heading-slider">
		        		<?php echo $showCompanies['company_'.$i]['title']; ?>
		        	</h2>
		        	</div>
		        </div><!-- ./carousel-content-->
		    </div>
		    <?php
					}
		    	}
		    ?>

		    
		  


		    <div class="carousel__content--crs-indicators">
					   	<ul class="carousel-indicators">
					   		<?php
					   			$dataslide=-1;
						  		for($i=1; $i<=count($showCompanies); $i++) {
						  			if(!empty($showCompanies['company_'.$i]['cover']) && !empty($showCompanies['company_'.$i]['title'])) {
						  				$id = $showCompanies['company_'.$i]['id'];
						  				$dataslide++;
						  	?>
						    <li data-target="#homeSlider" data-slide-to="<?php echo $dataslide; ?>" class="<?php if($minId == $id): echo 'active'; endif;?>">
						    <img class="icon" src="<?php echo $showCompanies['company_'.$i]['icon_img'] ?>" alt="icon">
						    <h5><?php echo $showCompanies['company_'.$i]['icon_txt'] ?></h5>
							</li>
							 <?php
									}
						    	}
						    ?>
					  	</ul>
			</div>

		  </div>
		</div>
		<!-- ./carousel -->


		<section class="gallery-page section-padding our-companies">
			<?php 
				$heading_main = get_field('heading_main_text');
				$heading_second = get_field('heading_second_text');
			?>
			<div class="our-companies__heading heading-general">
				<div class="row">
					<div class="col-md-6">
						<h3 class="our-companies__heading--title heading-title wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".2s"><?php echo $heading_main; ?></h3>
					</div>
					<div class="col-md-6">
						<p class="our-companies__description paragraph-primary wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".3s">
					<?php echo $heading_second; ?> 
					</p>
					</div>
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
		</section>

		

<?php 
	get_footer();
?>