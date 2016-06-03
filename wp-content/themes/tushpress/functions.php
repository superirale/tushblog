<?php 
add_theme_support( 'post-thumbnails' ); 
the_post_thumbnail(array(150,100));
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
 
function posts_link_attributes() {
    return 'class="btn btn-artist"';
}


function tushblog_register_theme_menu() {
    register_nav_menu( 'primary', 'Header Menu' );
}
add_action( 'init', 'tushblog_register_theme_menu' );

function add_query_vars_filter( $vars ){
  $vars[] = "my_var";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );

// Changing excerpt length
// function new_excerpt_length($length) {
// return 100;
// }
// add_filter('excerpt_length', 'new_excerpt_length');

// // Changing excerpt more
// function new_excerpt_more($more) {
// return '...';
// }
// add_filter('excerpt_more', 'new_excerpt_more');
 ?>
