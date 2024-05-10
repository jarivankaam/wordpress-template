<?php
require_once('functions/get_content_blocks.php');
require_once('functions/get_button.php');
function register_my_menus() {
    register_nav_menus(
      array(
        'primary' => 'Primary Menu'
      )
    );
  }
  add_action( 'init', 'register_my_menus' );
  

define( 'MY_PLUGIN_DIR_PATH', untrailingslashit(get_template_directory_uri( __FILE__ ) ) );

function my_acf_json_save_point( $path ) {

    // Update path
    // Return path
    return get_stylesheet_directory() . '/acf-json';

}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');


?>