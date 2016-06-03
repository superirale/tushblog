<?php 
add_theme_support( 'post-thumbnails' ); 
the_post_thumbnail(array(150,100));

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}


function tushblog_register_theme_menu() {
    register_nav_menu( 'primary', 'Header Menu' );
}
// add_action( 'init', 'tushblog_register_theme_menu' );

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


add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1($output) {
    $injection = 'class="load-more next-nav button"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}

function posts_link_attributes_2($output) {
    $injection = 'class="load-more prev-nav button"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

 ?>
