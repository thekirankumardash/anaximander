<?php

/* Front page (index / blog page) template */

get_header(); ?>

		<section id="content-container">
			<div id="content" role="main">
				
				<!-- Flexslider demo content -->

			

			<!-- Flexslider featured content -->

			

				<?php

				// Check if this is the front page and that it is not page 2 or higher

				if ( is_front_page() && !is_paged() ) {

					// Add featured content slider

					get_template_part( 'featureflexslider' );

				}

				?>

				

			<!-- END Flexslider featured -->				

				

				<!-- END Flexslider demo content -->
                
			<?php if ( have_posts() ) : ?>
				<section id="masonry-index" class="group">
				<!-- <div id="regular-content"> -->
				
				
				
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>
				
				<!--  </div>#regular-content -->

				</section><!-- #masonry-index -->
				
                <div class="paginationBox group">	
					<?php kriesi_pagination($pages = '', $range = 3); ?>
				</div>
			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'anaximander' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'anaximander' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
			
			
				<?php //get_sidebar();  ?>
			</div><!-- #content -->
		</section><!-- #content-container -->


<?php get_footer(); ?>