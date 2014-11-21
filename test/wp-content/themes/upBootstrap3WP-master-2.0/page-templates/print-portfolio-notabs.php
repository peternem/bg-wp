<?php
/**
 * Template Name: Page - Print Portfolio No Tabs
 * The template used for displaying page content in page.php
 *
 * @author revised code: mPETERnell.com - original code:Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
					<header class="entry-header page-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>');?>

					</header><!-- .entry-header -->
					
					<div class="entry-content row">
						<?php the_content(); ?>
						<?php endwhile; // end of the loop. ?>
						<?php
							wp_link_pages(array(
								'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
								'after'  => '</div>',
							));
						?>
					</div><!-- .entry-content -->
					<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
		
				</div><!-- .col-md-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div>
	<div class="jumbotron site-tabs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>A sample of my Print Work.</h2>
				</div>
			</div>
			<?php
			$args = array( 'category' => 3, 'posts_per_page' => 20, 'offset'=> 1, 'orderby' => 'post_date', 'order' => 'DESC' );
			$lastposts = get_posts($args);
			foreach($lastposts as $post) : setup_postdata($post);?>
			<div class="row">
				<header class="col-md-12">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</header>
			</div>
			<div class="row">
				<?php 
				the_content();
				?>
			</div>
			<div class="row">
				<div class="col-md-12">
						<!-- <p><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></p> -->
						<p><a class="btn btn-primary btn-xs" href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>">View details »</a></p>
				</div>
			</div>
			
			
			<?php endforeach; ?>
		</div>
	</div>
	<div class="jumbotron site-footer">
		<div class="container nobackground ">
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