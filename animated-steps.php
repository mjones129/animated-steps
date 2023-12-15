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

function as_custom_shortcode($atts = []) {
    //normalize attribute keys, lowercase
    $atts = array_change_key_case((array) $atts, CASE_LOWER);

    //override default attributes with user attributes
    $as_atts = shortcode_atts(
        array(
            'img1' => 'https://source.unsplash.com/random',
            'img2' => 'https://source.unsplash.com/random',
            'img3' => 'https://source.unsplash.com/random',
            'btn1' => 'Button 1',
            'btn2' => 'Button 2',
            'btn3' => 'Button 3',
        ), $atts);

$o = '<div class="as-container">';
$o .= '<div class="glide">';
$o .= '<div class="glide__bullets" data-glide-el="controls[nav]">';
$o .= '<button class="glide__bullet" data-glide-dir="=0">' . $as_atts['btn1'] . '</button>';
$o .= '<button class="glide__bullet" data-glide-dir="=1">' . $as_atts['btn2'] . '</button>';
$o .= '<button class="glide__bullet" data-glide-dir="=2">' . $as_atts['btn3'] . '</button>';
$o .= '</div>';
$o .= '<div class="glide_track" data-glide-el="track">';
$o .= '<ul class="glide__slides">';
$o .= '<li>';
$o .= '<img class="glide__slide" src="' . $as_atts['img1'] . '" />';
$o .= '</li>';
$o .= '<li>';
$o .= '<img class="glide__slide" src="' . $as_atts['img2'] . '" />';
$o .= '</li>';
$o .= '<li>';
$o .= '<img class="glide__slide" src="' . $as_atts['img3'] . '" />';
$o .= '</li>';
$o .= '</ul>';
$o .= '</div>';
$o .= '</div>';
$o .= '</div>';
return $o;
}
add_shortcode( 'as', 'as_custom_shortcode');


 //register shortcode on activation
 function as_activate() {
    as_custom_shortcode();
 }
 register_activation_hook(__FILE__, 'as_activate');
 
// only load JS and styles if the shortcode is called
function as_check_for_shortcodes() {
    if(shortcode_exists('as') && !is_admin()) {
        wp_enqueue_script('glidejs', plugin_dir_url(__FILE__) . 'node_modules/@glidejs/glide/dist/glide.min.js', array(), null, true);
        wp_enqueue_style('glide_core', plugin_dir_url(__FILE__) . 'node_modules/@glidejs/glide/dist/css/glide.core.min.css', array(), null, 'all');
        wp_enqueue_style('slide_theme', plugin_dir_url(__FILE__) . 'css/as-style.css', array(), null, 'all');
        wp_enqueue_script('glide_config', plugin_dir_url(__FILE__) . 'js/slideshowConfig.js', array( 'glidejs' ), null, true);
    }
}
 add_action('wp_loaded', 'as_check_for_shortcodes');