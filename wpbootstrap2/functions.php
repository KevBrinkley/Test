<?php 
/**
 * Enqueues scripts and styles for front end.
 *
 * @since Wp Bootstrap 1.0
 *
 * @return void
 */
function cwd_wp_bootstrap_scripts_styles() {
  // Loads Bootstrap minified JavaScript file.
  wp_enqueue_script('bootstrapjs', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js', array('jquery'),'3.0.0', true );
  // Loads Bootstrap core CSS
  wp_enqueue_style('bootstrapcore', get_template_directory_uri() . '/css/bootstrap.css', false ,'3.0.0');
  // Loads Bootstrap minified CSS file.
  wp_enqueue_style('bootstrapwp', get_template_directory_uri() . '/css/landing-page.css', false ,'3.0.0');
  // Loads our main stylesheet.
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array('bootstrapwp') ,'1.0');
}
add_action('wp_enqueue_scripts', 'cwd_wp_bootstrap_scripts_styles');

if ( ! function_exists( 'cwd_wp_bootstrapwp_theme_setup' ) ):
  function cwd_wp_bootstrapwp_theme_setup() {
    // Adds the main menu
    register_nav_menus( array(
      'main-menu' => __( 'Main Menu', 'cwd_wp_bootstrapwp' ),
    ) );
  }
endif;
add_action( 'after_setup_theme', 'cwd_wp_bootstrapwp_theme_setup' );

require_once 'inc/nav.php';