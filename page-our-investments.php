<?php 
get_header();

$page = $wp_query->query['pagename'];

showCoverPage($page);
?>

		<section class="about-boxes investment-boxes">
			<?php
				$our_strategy_text = get_field('our_strategy_text');
				$our_strategy_image	= get_field('our_strategy_image')['sizes']['medium_large'];

				$our_investment_style_text = get_field('our_investment_style_text');
				$our_investment_image = get_field('our_investment_image')['sizes']['medium_large'];
			?>
				<div class="item item-img">
					<div class="full-width-height-img" style="background: url(<?php echo $our_strategy_image; ?>)"></div>
				</div>		

				<div class="item item-img">
					<div class="full-width-height-img" style="background: url(<?php echo $our_investment_image; ?>)"></div>
				</div>

				<div class="item item-txt">
					<div class="content">
						<h5 class="title-left-line wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".2s">Our Strategy</h5>
						<p class="paragraph-primary wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".3s">
							<?php echo $our_strategy_text; ?>
						</p>
						<a class="btn btn--red hvr-sweep-to-right wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".4s" href="/contact-us">Get in touch</a>
					</div>
				</div>
				
				<div class="item item-txt">
					<div class="content">
						<h5 class="title-left-line wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".2s">Our Investment Style</h5>
						<p class="paragraph-primary wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".3s">
							<?php echo $our_investment_style_text; ?>
						</p>
						<a class="btn btn--red hvr-sweep-to-right wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".4s" href="/contact-us">Get in touch</a>
					</div>
				</div>
				
		</section>

		<!-- start carousel -->
		<section class="investment-sector carousel  our-companies-carousel">
			<?php 
				$investments_sectors_image = get_field('investments_sectors_image')['sizes']['yang_slider_image'];
				$investments_sectors_title = get_field('investments_sectors_title');
				$investments_sectors_description = get_field('investments_sectors_description');
				$investments_sectors_btn = get_field('investments_sectors_button_link');
			?>

		    <div class="active">
		        <div class="carousel__image" style="background-image: linear-gradient(0deg, rgba(10,12,37,1) 0%, rgba(176,177,181,0) 80%, rgba(216,216,216,0) 100%), url(<?php echo $investments_sectors_image; ?>);"></div>
		        <div class="carousel__content">
		        	<div class="">
		        	<p class="carousel__content--above-title wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".2s">Investments Company</p>
		        	<h2 class="heading-slider wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".2s">
		        		<?php echo $investments_sectors_title; ?>
		        	</h2>
		        	<p class="paragraph-primary wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".3s">
		        		<?php echo $investments_sectors_description; ?>
					</p>
					<?php if(!empty($investments_sectors_btn)) { ?>
					<a class="btn btn--red" href="<?php echo $investments_sectors_btn; ?>">Get In Touch</a>
					<?php } ?>
		        	</div>
		        </div><!-- ./carousel-content-->
		    </div>
		</section>

<?php 
get_footer();
?>