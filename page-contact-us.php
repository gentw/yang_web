<?php 
	get_header();

?>

		<section class="contact-us-section section-padding">
				<?php 
					$our_address 	= get_field('our_address');
					$phone_no 		= get_field('phone_number');
					$email			= get_field('email');
					$support_phone	= get_field('support_phone');
					$support_email	= get_field('support_email');
				?>
				<div class="main-container">

					<div class="contact-us-section__get-in-touch">
						
						<div class="contact-heading">
							<h3 class="above-title-right-line">Have a question?</h3>
							<h2 class="heading-title">Get in touch</h2>
						</div>

						<div class="contact-grid">
							<div class="info wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".2s">
								<h4 class="contact-us-section__get-in-touch--address-heading">Our Address</h4>
								<ul class="contact-us-section__get-in-touch--address-text paragraph-primary">
									<?php echo '<pre class="paragraph-primary">' . $our_address . '</pre>'; ?>
								</ul>
							</div>
							<div class="info wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".3s">
								<h4 class="contact-us-section__get-in-touch--address-heading">Contact Info</h4>
								<ul class="contact-us-section__get-in-touch--address-text paragraph-primary">
									<li>
									<?php echo $phone_no; ?></li>
									<li>
									<?php echo $email; ?>
									</li>
								</ul>
							</div>
							<div class="info wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".4s">
								<h4 class="contact-us-section__get-in-touch--address-heading">Our Support</h4>
								<ul class="contact-us-section__get-in-touch--address-text paragraph-primary">
									<li>
									<?php echo $support_phone; ?></li>
									<li>
									<?php echo $support_email; ?>
									</li>
								</ul>
							</div>
						</div>

						<div class="contact-us-section__contact-form">
							<?php echo zi_content(); ?>
						</div>

						

					</div>
				
				</div>
				<div class="contact-us-section__map">
					 <div class="map"></div>
				</div>

			
		</section>

		
<?php 
	get_footer();
?>