<?php
// echo get_template_directory().'/'.get_page_template_slug();

    if ( get_option( 'show_on_front' ) == 'posts' ) {
        get_template_part( 'index' );
    } elseif ( 'page' == get_option( 'show_on_front' ) ) {
			$template = get_template_directory().'/'.get_page_template_slug();

get_header(); ?>
<?php //dazzling_first_layer();
  query_posts( array ( 'category_name' => 'home-page-section') . '&meta_key=section_sort&orderby=meta_value&order=ASC' );
  // echo "<pre>";
  // print_r($sections);
  // echo "</pre>";
  while (have_posts()) : the_post();
    echo '<div class="col-md-12" style="padding:0;">';
      the_content();
    echo '</div>';
  endwhile;
?>

<?php
	get_footer();
}
?>

