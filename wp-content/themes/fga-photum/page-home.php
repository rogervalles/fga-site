<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: home page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

		<div id="maximage">
			<img src="<?php bloginfo('template_url'); ?>/images/maximage/coalesse.jpg" alt="Coalesse" width="1400" height="1050" />
			<img src="<?php bloginfo('template_url'); ?>/images/maximage/coffee_shop.jpg" alt="" width="2048" height="1536" />
			<img src="<?php bloginfo('template_url'); ?>/images/maximage/gas_station.jpg" alt="" width="2048" height="1536" />
			<img src="<?php bloginfo('template_url'); ?>/images/maximage/golf_sunset.jpg" alt="" width="2048" height="1536" />

		</div>
	

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
                        <div class="clr"></div>
              	
			</div><!-- #content -->
            <?php get_sidebar(); ?>
		</div><!-- #container -->

	<script src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.all.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.maximage.min.js"></script> 
			
	<script type="text/javascript" charset="utf-8">
			$(function(){
				// Trigger maximage

	$('#maximage').maximage({
		cycleOptions: {

			timeout: 5000,
		},
		
	});
		
	});
	</script>


