<?php

/*   
Theme Name: Name
Theme URI: the-theme's-homepage
Description: a-brief-description
Author: your-name
Author URI: your-URI
Template: use-this-to-define-a-parent-theme--optional
Version: a-number--optional
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: any, tags, that, tickle, your, imagination
Text Domain: theme-name
*/

function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'theme-style' for the Theme Name theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
