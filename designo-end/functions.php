<?php 

// Disable Gutenberg -------------------------------------

  // for all posts & pages
  add_filter('use_block_editor_for_post', '__return_false', 10);

  // for all post types
  add_filter('use_block_editor_for_post_type', '__return_false', 10);




// Menu --------------------------------------------------
function register_theme_menus() {
  register_nav_menus(
    array(
      'menu-header' => __('Header'),
      'menu-footer' => __('Footer'),
    )
  );
}

add_action('init', 'register_theme_menus');




// Images ------------------------------------------------
$size_name = 'home_top';
  $w = 1100; $h = 640;   
  $do_crop = false; 
  add_image_size( $size_name, $w, $h, $do_crop);


$size_name = 'cpt';
  $w = 350; $h = 320;   
  $do_crop = false; 
  add_image_size( $size_name, $w, $h, $do_crop);

$size_name = 'projects_back';
  $w = 540; $h = 640;   
  $do_crop = false; 
  add_image_size( $size_name, $w, $h, $do_crop);