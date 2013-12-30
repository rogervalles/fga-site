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

	<script type="text/javascript">
        $(document).ready(function() {
            $('body').css('background-image', 'url(http://homeklondike.com/wp-content/uploads/2013/01/3-house-in-athens-by-314-architecture-studio.jpg)');
            $('body').css('background-repeat', 'no-repeat');
        });
    </script>


