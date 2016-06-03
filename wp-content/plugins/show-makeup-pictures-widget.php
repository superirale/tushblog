<?php 
/*Plugin Name: Show Make up Faces Widget
Description: This widget checks if the current page has parent or child pages and if so, outputs a list of the highest ancestor page and its descendants. This file supports part 1 of the series to create the widget and doesn't give you a functioning widget.
Version: 0.1
Author: Rachel McCollin
Author URI: http://rachelmccollin.com
License: GPLv2
*/
?>
<?php
class Tutsplus_List_Pages_Widget extends WP_Widget {
     
    function __construct() {
    }
     
    function form( $instance ) {
    }
     
    function update( $new_instance, $old_instance ) {       
    }
     
    function widget( $args, $instance ) {
         
    }
     
}
?>
<?php
function tutsplus_register_list_pages_widget() {
 
    register_widget( 'Tutsplus_List_Pages_Widget' );
 
}
add_action( 'widgets_init', 'tutsplus_register_list_pages_widget' );
?>