<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div id="primary" class="widget-area" role="complementary">
<div id="site-title">
                  <?php if (get_option('of_logo')) { ?>
		         <div class="logo"><center><a href="<?php echo get_option('home'); ?>"><img style="float:left;" src="<?php echo stripslashes(stripslashes(get_option('of_logo')));?>" alt="<?php bloginfo('name'); ?>" /></a></center>
                 <br />
                 <p><?php bloginfo('description'); ?></p></div>
        <?php } else { ?>
        <div class="logo2">
			<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
			<p><?php bloginfo('description'); ?></p>
			</div>
         <?php } ?>
                
                 
				</div>
<div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container' => 'nav', 'container_class' => 'menu-header', 'theme_location' => 'primary', 'depth' => 	-1 ) ); ?>
				
			</div><!-- #access -->


           		<div id="site-info">
			    </div><!-- #site-info -->
	

			<ul class="xoxo">

			</ul>
		</div><!-- #primary .widget-area -->


