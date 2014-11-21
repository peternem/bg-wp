<?php
/**
 * Template Name: Page - Full width Portfolio No Tabs
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
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
					</header><!-- .entry-header -->
					
					<div class="entry-content">
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
			<h2>A Sample of my Web UI/UX and Development Work.</h2>
			<?php
			$args = array( 'category' => 'websites', 'posts_per_page' => 30, 'offset'=> 1 );
			$lastposts = get_posts($args);
			foreach($lastposts as $post) : setup_postdata($post);
			
			?>
			<?php 
			the_content();
			?>
			<p><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></p>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="jumbotron site-footer">
		<div class="container nobackground ">
			<div class="row">
				<section class="col-md-4">
					<img class="img-thumbnail pull-right" src="http://www.mattpeternell.comweb-thumb-1.jpg">
					<header>
						<h2>Web</h2>
					</header>
					<p>Specialize in all aspects of building a website.</p>
					<footer>
						<p><a class="btn btn-primary btn-xs" href="http://www.mattpeternell.com/websites/" title="Web">Visit &raquo;</a></p>
					</footer>
				</section>
				<section class="col-md-4">
					<img src="http://www.mattpeternell.com/print-thumb-1.jpg" alt="Print" class="img-thumbnail pull-right">
					<header>
						<h2>Print</h2>
					</header>
					<p>A little bit about my print work and capabilities.</p>
					<footer>
						<p><a class="btn btn-primary btn-xs" href="http://www.mattpeternell.com/print/">View &raquo;</a></p>
					</footer>
				</section>
				<section class="col-md-4">
					<img src="http://www.mattpeternell.com/contact-thumb-1.jpg" alt="Contact" class="img-thumbnail pull-right">
					<header>
						<h2>Contact</h2>
					</header>
					<p>Interested in my work. Get in touch with me!</p>
					<footer>
						<p><a class="btn btn-primary btn-xs" href="http://www.mattpeternell.com/contact/">View &raquo;</a></p>
					</footer>
				</section>
			</div>
		</div>
	</div>
<?php get_footer(); ?>