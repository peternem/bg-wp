<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>


<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://mattpeternell.com/wp-content/uploads/2013/10/apple-touch-icon-144x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://mattpeternell.com/wp-content/uploads/2013/10/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://mattpeternell.com/wp-content/uploads/2013/10/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://mattpeternell.com/wp-content/uploads/2013/10/apple-touch-icon-57x57-precomposed.png">
<link rel="shortcut icon" href="http://mattpeternell.com/wp-content/uploads/2013/10/favicon.png">
</head>

<body <?php body_class(); ?>>
<div id="page" class="container hfeed site">
	<?php do_action( 'before' ); ?>
	<div id="masthead" class="row site-content" role="banner">
		<div class="navbar navbar-inverse" role="navigation">
			
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
					</button>
		         <?php  $url = home_url(); ?> 
		            <!-- <a href="<?php //echo esc_url( home_url( '/' ) ); ?>" title="<?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"  class="navbar-brand"><?php //bloginfo( 'name' ); ?></a> -->
		            <a href="<?php echo $url; ?>/" rel="home" class="navbar-brand"><img src="http://test.bgwp.net/wp-content/uploads/2014/05/bgwp_logo_new.jpg" alt="BGWP.net" title="BGWP.net" /></a>

				</div>
				
				<?php 
				$args = array('theme_location' => 'primary', 
							  'container_class' => 'navbar-collapse collapse', 
							  'menu_class' => 'nav navbar-nav',
							  'fallback_cb' => '',
	                          'menu_id' => 'main-menu',
	                          'walker' => new Upbootwp_Walker_Nav_Menu()); 
				wp_nav_menu($args);
				?>
			
		</div>
	</div><!-- #masthead -->
	<div id="content" class="row site-content">
