<?php
/**
 * The Header template file.
 * @author Mpeternell | http://mpeternell.com
 * @package MP Bootstrap3WP 3.0
 */
?>
<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title><?php wp_title( '|', true, 'right' ); ?></title>
			<!-- <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title> -->
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
			
					<?php wp_head(); ?>
			
			<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/ico/apple-touch-icon-144-precomposed.png">
			<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/ico/apple-touch-icon-114-precomposed.png">
			<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/ico/apple-touch-icon-72-precomposed.png">
			<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/ico/apple-touch-icon-57-precomposed.png">
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/ico/favicon.png">
		    
		    <!-- WordPress core CSS -->
			<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
				
		    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		    <!--[if lt IE 9]>
		      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		    <![endif]-->
		</head>
	
		<body <?php body_class(); ?>>
			<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
				<div class="container">
				    <div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
	  					<a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
				    </div>

					<div class="collapse navbar-collapse">
						<?php 
						$args = array('theme_location' => 'primary', 
									  'container_class' => 'navbar-collapse collapse', 
									  'menu_class' => 'nav navbar-nav',
									  'fallback_cb' => '',
			                          'menu_id' => 'main-menu',
			                          'walker' => new Bootwp_Walker_Nav_Menu()); 
						wp_nav_menu($args);
						?>
			  
			        	</ul>
			    	</div><!-- /.nav-collapse -->
				</div><!-- /.container -->
			</div><!-- /.navbar -->