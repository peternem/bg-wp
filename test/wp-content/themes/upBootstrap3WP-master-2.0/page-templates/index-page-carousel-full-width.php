<?php

/**
 * Template Name: Index Page - Carousel Full Width
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<div class="jumbotron bgwp_home">
	<div class="wp_content">
		<h1><?php the_title(); ?></h1>
		<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
		<?php the_content(); ?>
		<!-- .entry-content -->
		<?php edit_post_link( __( 'Edit', 'upbootwp' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

	</div>
</div>
<!-- Carousel ================================================== -->
<!-- <div class="container">
	<img class="visible-xs img-responsive" src="http://beta.modedistributing.com/wp-content/uploads/2013/10/bmw_news_aufmacher_1_3_2-crop.jpg" alt="First slide" class="img-responsive">

    <div id="myCarousel" class="hidden-xs carousel slide container" data-ride="carousel" data-interval="false">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://beta.modedistributing.com/wp-content/uploads/2013/11/CIEH9-242-SS-1770x600.jpg" alt="First slide" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Skate ipsum dolor sit amet, frontside air opposite footed hurricane axle gnarly half-cab. Gap hospital flip nose grab late Tracker Steve Caballero dude.</p>
              <p><a class="btn btn-default btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://beta.modedistributing.com/wp-content/uploads/2013/11/CWEH9-46-SS-Kitchen-1770x600.jpg" alt="Second slide" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-default btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://beta.modedistributing.com/wp-content/uploads/2013/11/61RF-BS-F-R-Inset-1770x600.jpg" alt="Third slide" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-default btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div> -->

	<div id="mrktg-content" class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
			</div>
		</div>
		<!-- <div class="container marketing"> -->
		
		<div class="entry-content container marketing">
					<?php //the_content(); ?>
					<?php endwhile; // end of the loop. ?>
					<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
							'after'  => '</div>',
						));
					?>
					
				</div>
				
					
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
<?php get_footer(); ?>