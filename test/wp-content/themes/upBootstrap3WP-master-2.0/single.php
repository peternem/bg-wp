<?php
/**
 * The Template for displaying all single posts.
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div id="primary" class="content-area col-md-12">
				<main id="main" class="site-main" role="main">
					<?php while ( have_posts() ) : the_post(); ?>
			
						<?php get_template_part( 'content', 'single' ); ?>
					<div class="row">
						<div class="col-md-12">
							<?php upbootwp_content_nav( 'nav-below' ); ?>
						</div>
					</div>
					<div class="row">
						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() )
								comments_template();
						?>
					</div>
					<?php endwhile; // end of the loop. ?>			
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row -->
		<div class="row">
			<div class="col-md-12">
				<?php get_sidebar(); ?>
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div>
<?php get_footer(); ?>