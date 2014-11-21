<?php
/**
 * Template Name: Page - Attorney Overview - Associates
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="row">
		<div class="col-md-12">	
			<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<header class="entry-header page-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>');?>
			</header>
			<?php
			// Advanced Custom Fieldset - Featurette
			if(get_field('text_left'))
			{
				echo '<div class="entry-content">' . get_field('text_left') . '</div>';
			}
			 
			?>
			<h2>BGWP Associate Attorneys Include:</h2>
			
			<ul>
			  <?php
			  wp_list_pages('title_li=&child_of='.$post->ID.''); ?>
			  </ul>
			
		</div>
		<?php
		// Advanced Custom Fieldset - Featurette
		if(get_field('image_right'))
		{
			echo '<div class="col-md-5"><img class="img-thumbnail" src="'.get_field('image_right').'"/></div>';
		}
		 
		?>
	</div>
	<div class="row">
		<div class="col-md-12">				
	<?php endwhile; // end of the loop. ?>
	<?php
		wp_link_pages(array(
			'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
			'after'  => '</div>',
		));
	?>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	
		</div>
	</div>

	<?php get_footer(); ?>