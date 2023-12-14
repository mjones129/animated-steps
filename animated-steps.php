<?php
/*
 * Plugin Name: Animated Steps
 * Plugin URI: https://www.google.com/search?q=escilator
 * Description: Generate animated steps sliders with ease.
 * Version: 1.0.0
 * Requires at least: 6.4.2
 * Requires PHP: 8.2
 * Author: Matt Jones
 * Author URI: https://mattjones.tech
 * License: GPL v2 or later
 * License URI: https://gnu.org/licenses/gpl-2.0.html
 * Text Domain: animated-steps
 */

 //Register Animated Steps Shortcode


 function as_shortcode() {
    $as_template_file = plugin_dir_url(__FILE__) . 'as/main.php';
    $animated_steps = file_get_contents($as_template_file);
    return $animated_steps;
 }
 add_shortcode('as', 'as_shortcode');


 //register shortcode on activation
 function as_activate() {
    as_shortcode();
 }
 register_activation_hook(__FILE__, 'as_activate');
 
function as_check_for_shortcodes() {
    if(shortcode_exists('as')) {
        wp_enqueue_script('glidejs', plugin_dir_url(__FILE__) . 'node_modules/@glidejs/glide/dist/glide.min.js', array(), null, true);
        wp_enqueue_style('glide_core', plugin_dir_url(__FILE__) . 'node_modules/@glidejs/glide/dist/css/glide.core.min.css', array(), null, 'all');
        wp_enqueue_style('slide_theme', plugin_dir_url(__FILE__) . 'css/as-style.css', array(), null, 'all');
        wp_enqueue_script('glide_config', plugin_dir_url(__FILE__) . 'js/slideshowConfig.js', array(), null, true);
    }
}
 add_action('wp_loaded', 'as_check_for_shortcodes');