<?php
/**
 * Plugin Name: GeoTarget JS Example
 * Version: 1.0
 * Description: Example of using GeoTarget data with JavaScript
 * Author: Nate Gay
 *
 * Test by appending ?geoip&country=IE to any page
 */

function geotarget_js_example() {
    $geo = \WPEngine\GeoIp::instance();
    $country_code = $geo->country();
    wp_enqueue_script( 'geotargetJsExample', plugin_dir_url(__FILE__) . 'geotargetJsExample.js' );
    wp_localize_script( 'geotargetJsExample', 'geotarget', array(
        'countryCode' => $country_code,
        'country' => $geo->countries[$country_code]['country'],
    ));
}
add_action( 'the_content', 'geotarget_js_example' );
