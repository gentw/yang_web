<?php get_header(); 

$page = $wp_query->query['pagename'];
showCoverPage($page);
?>

		<section class="press latest-news section-padding">
			
			<div class="main-container-80">
				<div class="latest-news__content">
					<div class="news--cols">
						<!-- WOW ADDED, It need to have the same animations for all of the other cords. -->

						<?php showLatestPosts(9); ?>


						
					</div>
				</div>
			</div>
		</section><!-- ./latest-news -->		

<?php get_footer(); ?>