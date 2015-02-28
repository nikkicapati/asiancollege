<?php
// echo get_template_directory().'/'.get_page_template_slug();

    if ( get_option( 'show_on_front' ) == 'posts' ) {
        get_template_part( 'index' );
    } elseif ( 'page' == get_option( 'show_on_front' ) ) {
			$template = get_template_directory().'/'.get_page_template_slug();

get_header(); ?>
<?php dazzling_first_layer(); ?>
<?php dazzling_second_layer(); ?>
<?php dazzling_featured_slider(); ?>
<?php dazzling_call_for_action(); ?>
<?php
	include($template);
?>
<?php
	get_footer();
}
?>
