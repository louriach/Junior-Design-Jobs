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
	echo do_shortcode('[ajax_load_more post_type="post" category="articles" pause="true" scroll="false" transition="fade" transition_container="false" progress_bar="true" progress_bar_color="ed7070" button_label="More!"]');
?>
