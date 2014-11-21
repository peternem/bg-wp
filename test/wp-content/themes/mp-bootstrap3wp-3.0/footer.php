<?php
/**
 * **
 * The template for displaying the footer.
 * The Footer template file.
 * @author Mpeternell | http://mpeternell.com
 * @package MP Bootstrap3WP 3.0
 */
?>
      <hr>
	<div class="container">
      <footer id="colophon" class="row site-footer" role="contentinfo">
        <div class="site-info col-md-12">
			<?php do_action( 'upbootwp_credits' ); ?> &copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?>
			<span class="sep"> | </span>
			<?php printf(__('Theme: %1$s by %2$s.', 'MP Bootstrap3WP 3.0' ), 'MP Bootstrap3WP 3.0', '<a href="'.get_site_url().'" rel="designer">mPeternell.com</a>'); ?>
		</div><!-- .site-info -->
      </footer>
    </div> <!-- /container -->
	<?php wp_footer(); ?>
  </body>
</html>