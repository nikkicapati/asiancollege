<?php
/**
 * @package dazzling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">

		<?php the_post_thumbnail( 'dazzling-featured', array( 'class' => 'thumbnail' )); ?>

		<h1 class="entry-title "><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php dazzling_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<div class="robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing">
			<h3 class="sd-title">Share this:</h3>
			<div class="sd-content">
				<ul>
					<li class="share-facebook">
						<a data-href="<?php echo get_permalink(); ?>" class="share-facebook sd-button share-icon" target="_blank" title="Click to share on Facebook">
							<span>Facebook</span>
						</a>
					</li>
					<li class="share-twitter">
						<a data-href="<?php echo get_permalink(); ?>" class="share-twitter sd-button share-icon" target="_blank" title="Click to share on Twitter">
							<span>Twitter</span>
						</a>
					</li>
					<li class="share-google-plus-1">
						<a data-href="<?php echo get_permalink(); ?>" class="share-google-plus-1 sd-button share-icon" target="_blank" title="Click to share on Google+">
							<span>Google</span>
						</a>
					</li>
					<li class="share-pinterest">
						<a data-href="<?php echo get_permalink(); ?>" class="share-pinterest sd-button share-icon" target="_blank" title="Click to share on Pinterest">
							<span>Pinterest</span>
						</a>
					</li>
					<li class="share-end">
					</li>
				</ul>
			</div>
		</div> <!-- social buttons -->

		<?php
			wp_link_pages( array( 
				'before'            => '<div class="page-links">'.__( 'Pages:', 'dazzling' ),
				'after'             => '</div>',
				'link_before'       => '<span>',
				'link_after'        => '</span>',
				'pagelink'          => '%',
				'echo'              => 1 
       		) );
    	?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'dazzling' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'dazzling' ) );

			if ( ! dazzling_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = '<i class="fa fa-folder-open-o"></i> %2$s. <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
				} else {
					$meta_text = '<i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = '<i class="fa fa-folder-open-o"></i> %1$s <i class="fa fa-tags"></i> %2$s. <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
				} else {
					$meta_text = '<i class="fa fa-folder-open-o"></i> %1$s. <i class="fa fa-link"></i> <a href="%3$s" rel="bookmark">permalink</a>.';
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'dazzling' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>
		<?php dazzling_setPostViews(get_the_ID()); ?>
		<hr class="section-divider">
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
