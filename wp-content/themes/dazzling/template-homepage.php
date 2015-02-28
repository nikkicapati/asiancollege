<?php
/**
 * Template Name: Custom Homepage
 *
 * Description: A home page with featured slider and widgets.
 *
 * @package dazzling
 */
 get_header(); ?>
 <div class="top-section">
 	<?php get_sidebar( 'home' ); ?>
 </div>

	<div id="content" class="site-content container">
		<div id="primary" class="content-area col-sm-12">
			<main id="main" class="site-main" role="main">
				<div class="col-sm-12">
	        <!-- Where other homepage content goes -->
	      </div>
			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_footer(); ?>
