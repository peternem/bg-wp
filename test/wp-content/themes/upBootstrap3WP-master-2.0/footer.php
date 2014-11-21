<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
?>
	</div><!-- #content -->


</div><!-- #page -->
<div class="container site-footer" role="contentinfo">
	<div class="row">
		<div class="col-md-12">
			<h3>Blog Links or Social Media Content</h3>
			<div id="footer-widgets" class="widget-area four">
				<aside id="wp_my_plugin-2" class="col-lg-4 center-block widget my_widget_class">
					<div class="widget-text wp_widget_plugin_box">
						<header>
						<h3 class="widget-title">Blog Link</h3>
						</header>
						<p class="wp_widget_plugin_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec velit tempor, suscipit turpis ut, pulvinar mauris. Nam volutpat rutrum est in tristique. Praesent interdum scelerisque neque</p>
						<div class="moreInfoLink">
							<div class="btn-group">
								<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Learn More »</button>
							</div>
						</div>
					</div>
				</aside>
				<aside id="wp_my_plugin-2" class="col-lg-4 center-block widget my_widget_class">
					<div class="widget-text wp_widget_plugin_box">
						<header>
						<h3 class="widget-title">Blog Link</h3>
						</header>
						<p class="wp_widget_plugin_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec velit tempor, suscipit turpis ut, pulvinar mauris. Nam volutpat rutrum est in tristique. Praesent interdum scelerisque neque</p>
						<div class="moreInfoLink">
							<div class="btn-group">
								<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Learn More »</button>
							</div>
						</div>					
					</div>
				</aside>	
				<aside id="wp_my_plugin-2" class="col-lg-4 center-block widget my_widget_class">
					<div class="widget-text wp_widget_plugin_box">
						<header>
						<h3 class="widget-title">Blog Link</h3>
						</header>
						<p class="wp_widget_plugin_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec velit tempor, suscipit turpis ut, pulvinar mauris. Nam volutpat rutrum est in tristique. Praesent interdum scelerisque neque</p>
						<div class="moreInfoLink">
							<div class="btn-group">
								<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Learn More »</button>
							</div>
						</div>
					</div>
				</aside>			
			</div><!-- #footer-widgets -->
			
		</div><!-- .col-md-12 -->
	</div><!-- .row -->
</div><!-- #colophon -->
<footer id="colophon" class="container site-footer" role="contentinfo"c>
	<div class="row">
		<div class="col-md-12">
			<h3>Office Locations</h3>
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
		</div><!-- .col-md-12 -->
	</div><!-- .row -->
</footer><!-- #colophon -->
<div class="site-info">
	<?php do_action( 'upbootwp_credits' ); ?>
	&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?>
	<span class="sep"> | </span>
	<?php printf(__('Theme: %1$s by %2$s.', 'ImpBootstrap 3.0' ), 'ImpBootstrap 3.0', '<a href="'.get_site_url().'" rel="designer">mPeternell.com</a>'); ?>
	
</div><!-- .site-info -->

<?php wp_footer(); ?>

</body>
</html>