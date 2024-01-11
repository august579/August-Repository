<?php
/**
 * Plugin Name: Custom Timer
 * Plugin URI: https://yourwebsite.com/
 * Description: This is a simple plugin that creates a visible timer that counts down or up from a user specified time.
 * Version: 1.0
 * Author: Your Name
 * Author URI: https://yourwebsite.com/
 */

function custom_timer_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'time' => '00:00:00',
        ), 
        $atts, 
        'custom_timer'
    );

    wp_enqueue_script('custom_timer_script');

    return '<div id="custom-timer" data-time="' . esc_attr($atts['time']) . '"></div>';
}

add_shortcode('custom_timer', 'custom_timer_shortcode');

function custom_timer_scripts() {
    wp_register_script('custom_timer_script', plugins_url('timer.js', __FILE__), array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'custom_timer_scripts');