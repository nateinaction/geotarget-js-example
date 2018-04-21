<?php
/**
 * Plugin Name: Simple GeoTarget JS Example
 * Version: 1.0
 * Description: Example of using GeoTarget data with JavaScript
 * Author: Nate Gay
 *
 * Test by appending ?geoip&country=IE to any page
 */

function simple_geotarget_js_example() {
    $geo = \WPEngine\GeoIp::instance();
    $country_code = $geo->country();
    wp_enqueue_script( 'simpleGeoTargetJs', plugin_dir_url(__FILE__) . 'SimpleGeoTargetJsExample.js' );
    wp_localize_script( 'simpleGeoTargetJs', 'geoTarget', array(
        'countryCode' => $country_code,
        'country' => $geo->countries[$country_code]['country'],
    ));
}
add_action( 'the_content', 'simple_geotarget_js_example' );
