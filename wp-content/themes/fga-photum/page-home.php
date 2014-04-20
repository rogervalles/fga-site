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
			<?php 
           $content_post = get_page_by_title( 'Home images', OBJECT, 'post' );
               if($content_post)
               {
                   $content = $content_post->post_content;
                   // do whatever you want
                   echo $content;
               }
        ?>

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
            <?php get_sidebar(''); ?>
		</div><!-- #container -->

	<script src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.all.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.maximage.min.js"></script> 
			
	<script type="text/javascript" charset="utf-8">
			$(function(){
				// Trigger maximage

	$('#maximage').maximage({
		cycleOptions: {

			timeout: 5000,
			fit: 1,
			width: 750,
		},
		
	});
		
	});
	</script>

	<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
    ?>


