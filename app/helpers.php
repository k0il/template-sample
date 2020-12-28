<?php

/**
 * Theme helpers.
 */

namespace App;

function site_brand() {

    $output = get_bloginfo( 'name' );
    if ( has_custom_logo() ) {
        $logo_url = wp_get_attachment_url(get_theme_mod( 'custom_logo' ));
        $logo   = '<img src="' . $logo_url . '">';
        $output = '<span class="sr-only">' . get_bloginfo( 'name' ) . '</span>';
        $output .= $logo;
    }
    return $output;
}
