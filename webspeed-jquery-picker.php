<?php
/*
Plugin Name: Webspeed jQuery picker
Version: 1.0
Plugin URI: https://www.web.dk
Description: Add jQuery Date picker to WordPress
Author: Morten Andersen
Text Domain: websepeed-picker-domain
Author URI: https://www.web.dk.dk
*/

function webspeed_jquery_enqueue_datepicker() {
    // Load the datepicker script (pre-registered in WordPress).
    wp_enqueue_script( 'jquery-ui-datepicker' );
    wp_enqueue_script( 'webspeed-picker-js', plugins_url( '/js/webspeed-picker.js', __FILE__ ));

    // You need styling for the datepicker. For simplicity I've linked to the jQuery UI CSS on a CDN.
    wp_register_style( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css' );
    wp_enqueue_style( 'jquery-ui' );  
}
add_action( 'wp_enqueue_scripts', 'webspeed_jquery_enqueue_datepicker' );


add_action('wp_enqueue_scripts','ava_test_init');
