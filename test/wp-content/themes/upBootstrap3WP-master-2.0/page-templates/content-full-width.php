<?php
/**
 * Template Name: Page - Full width
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); 
?>

<?php while (have_posts()) : the_post(); ?>
		<div class="jumbotron main-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
					</div>
				</div>
				<div class="row">
					<header class="entry-header page-header col-md-12">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
					</header><!-- .entry-header -->
				</div>
				<div class="entry-content row">
					<?php //if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>');?>
					<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
					<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
							'after'  => '</div>',
						));
					?>
				</div><!-- .entry-content -->
				<footer class="entry-meta row">
					<div class="col-md-12">
				<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<span class="edit-link">', '</span>' ); ?>
					</div>
				</footer>
			</div><!-- .container -->
		</div><!-- .jumbotron main-content -->
		<div class="jumbotron site-footer">
			<div class="container nobackground">
				<div class="row">
					<?php
					/* Global footer sidebar */
					if ( ! is_404() ) : ?>
						<div id="footer-widgets" class="widget-area four">
							<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
								<?php dynamic_sidebar( 'sidebar-7' ); ?>
								
							<?php endif; ?>
			
							<?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
								<?php dynamic_sidebar( 'sidebar-8' ); ?>
								
							<?php endif; ?>
			
							<?php if ( is_active_sidebar( 'sidebar-9' ) ) : ?>
								<?php dynamic_sidebar( 'sidebar-9' ); ?>
								
							<?php endif; ?>
						</div><!-- #footer-widgets -->
				<?php endif; ?>
				</div>
			</div>
		</div>
<?php get_footer(); ?>