<?php
/**
 * Plugin Name: PreClick
 * Description: A plugin that makes your site extremely fast by prefetching the next URL that a user plans to click
 * Version: 1.2.0
 * Author: Trey Copeland
 * Author URI: https://www.treycopeland.com
 * License: GPL2
 */
 
add_action('wp_enqueue_scripts','preclick_script');

function preclick_script() {
    wp_enqueue_script( 'preclick', plugins_url( 'preclick.js', __FILE__ ));
}