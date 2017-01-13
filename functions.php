<?php

/*   
Theme Name: Ianua Child Theme
Theme URI: https://ianua.imagewize.com
Description: Ianua Child Theme 
Author: Jasper Frumau
Author URI: https://represent.io/jasper
Template: use-this-to-define-a-parent-theme--optional
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: multo purpose, responsive, black, white
Text Domain: ianua
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
