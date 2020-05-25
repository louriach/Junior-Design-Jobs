<?php
/**
 * Template part for displaying jobs
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package juniordesignjobs
 */

?>

<?php
//echo filter_input( INPUT_GET, 'location', FILTER_SANITIZE_URL );
?>

<?php 
//	echo do_shortcode('[ajax_load_more post_type="post" category="jobs" category_not_in="68" pause="true" scroll="false" transition="fade" transition_container="false" progress_bar="true" progress_bar_color="ed7070" button_label="More!"]');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php echo get_permalink(); ?>?ref=juniordesignjobs" target="_blank" class="card">
		<header class="entry-header">
			<?php
			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php juniordesignjobs_posted_on(); ?> ~ 
					<?php
						$posttags = get_the_tags();
						if ($posttags) {
						$taglist = "";
						foreach($posttags as $tag) {
							$taglist .=  $tag->name . ', '; 
						}
						echo rtrim($taglist, ", ");
						}
					?>
				</div>
			<?php 
			endif;
				the_title( '<h2 class="entry-title">', '</h2>' );
			?>
		</header><!-- .entry-header -->
	</a>
</article>
