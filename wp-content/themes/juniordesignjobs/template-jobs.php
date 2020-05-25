<?php
/**
 * Template name: Jobs
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package juniordesignjobs
 */
 

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main posts-wrapper">

		<div class="sidebar-menu">
			<?php get_template_part( 'template-parts/content', 'sidebar-menu' );?>
		</div> <!-- .sidebar-menu -->

		<div class="jobs-list">
		<?php

		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

		$query = new WP_Query( array( 'category_name' => 'jobs' ) );
	if ( $query->have_posts() ) ;

			/* Start the Loop */
    while ( $query->have_posts() ) : $query->the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'jobs' );

			endwhile;

			get_the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'previous' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'next' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );?>

		<?php else :

			get_template_part( 'template-parts/content', 'none' );

endif; ?>

			</div><!-- .jobs-list -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
