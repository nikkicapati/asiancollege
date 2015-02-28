<?php
/**
 * Template Name: Page Content (related pages on sidebar)
 *
 * This is the template that displays page content with the child pages listed on the side bar
 *
 * @package dazzling
 */

get_header(); ?>
<div id="content" class="site-content container">
  <div id="primary" class="content-area col-sm-12 col-md-12">
    <main id="main" class="site-main" role="main">
      <div class="col-sm-8">
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content', 'page' ); ?>

          <?php
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || '0' != get_comments_number() ) :
              comments_template();
            endif;
          ?>

        <?php endwhile; // end of the loop. ?>
      </div>
      <div class="col-sm-4">
        <h3 class="widget-title">Related Pages</h3>
        <?php
          $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
          if ($children) { ?>
          <ul>
          <?php echo $children; ?>
          </ul>
        <?php } ?>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>
