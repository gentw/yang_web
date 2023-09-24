<footer class="footer">
	<?php 
		global $ffl_options;
	?>
	<div class="main-container-80">			
		<div class="footer__content row">
			<div class="col-lg-4 col-sm-6 col-12">
				<a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/yang/dist/images/logo.png" class="footer__content--img" alt="logo"></a>
				<p class="footer__content--description paragraph-primary">
					<?php echo $ffl_options['about_text']; ?>
				</p>
			</div>
			<div class="col-lg-4 col-sm-6 col-12 margin-phone">
				<h5 class="footer__content--title heading-above-title">Quick links</h5>
				<ul class="footer__content--menu">
					<li><a href="<?php echo site_url(); ?>/home">Home</a></li>
					<li><a href="<?php echo site_url(); ?>/about-us">About us</a></li>
					<li><a href="<?php echo site_url(); ?>/our-investments">Our Investments</a></li>
					<li><a href="<?php echo site_url(); ?>/press">Press</a></li>
					<li><a href="<?php echo site_url(); ?>/contact-us">Contact us</a></li>
					<li><a href="<?php echo site_url(); ?>/careers">Careers</a></li>
				</ul>
			</div>
			<div class="col-lg-2 contact-us col-sm-6 margin-768 col-6">
				<h5 class="footer__content--title heading-above-title">Contact us</h5>
				<ul>
					<li><a href="#"><i class="fa fa-phone"></i><span><?php echo $ffl_options['phone']; ?></span></a></li>
					<li><a href="#"><i class="fa fa-fax"></i><span><?php echo $ffl_options['fax']; ?></span></a></li>
					<li><a href="mailto:<?php echo $ffl_options['email']; ?>"><i class="fa fa-envelope"></i><span><?php echo $ffl_options['email']; ?></span></a></li>
					<li><a href="#"><i class="fa fa-location-arrow"></i><span><?php echo $ffl_options['location']; ?></span></a></li>
				</ul>
			</div>
			<div class="col-lg-2 col-sm-6 margin-768 col-6">
				<h5 class="footer__content--title heading-above-title">Social media</h5>
				<ul class="socials">
					<li><a href="<?php echo $ffl_options['facebook_url']; ?>"><i class="fab fa-facebook"></i></a></li>
					<li><a href="<?php echo $ffl_options['instagram_url']; ?>"><i class="fab fa-instagram"></i></a></li>
					<li><a href="<?php echo $ffl_options['twitter_url']; ?>"><i class="fab fa-twitter"></i></a></li>
					<li><a href="<?php echo $ffl_options['linkedin_url']; ?>"><i class="fab fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>