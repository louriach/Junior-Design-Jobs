<?php
/**
 * Template part for menu
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package juniordesignjobs
 */

?>

<header id="masthead" class="site-header">
    <div class="site-branding">
        <?php
            the_custom_logo();
        ?>
    </div><!-- .site-branding -->

     <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'juniordesignjobs' ); ?></button>
        <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            ) );
        ?>
    </nav> 
<!-- #site-navigation -->
</header><!-- #masthead -->