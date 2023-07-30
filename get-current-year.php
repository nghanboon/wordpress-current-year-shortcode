<?php
/*
Plugin Name: Current Year Shortcode
Version: 1.0
Description: Expose current year as a shortcode.
Author: Enchant Pte Ltd
Author URI: https://enchant.sg
*/

// Register the shortcode.
add_shortcode('current_year', 'get_current_year');

// Function to get the current year.
function get_current_year() {
    // Get the current year.
    $current_year = date('Y');
    
    // Return the current year.
    return $current_year;
}
