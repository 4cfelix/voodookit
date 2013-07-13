<?php

#------------------------------#
# Lade Favicons
#------------------------------#

function load_favicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('template_url').'/images/favicon.ico" />';
    echo '<link rel="Shortcut Icon" type="image/png" href="'.get_bloginfo('template_url').'/images/favicon.png" />';
}

add_action('wp_head', 'load_favicon');



#------------------------------#
# LADE CSS & SCRIPTS
#------------------------------#

function load_Scripts() {

    $url = 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js';
    wp_deregister_script('jquery');
    if (get_transient('google_jquery') == true) {
        wp_register_script('jquery', $url, array(), null, true);
    }
    else {
        $resp = wp_remote_head($url);
        if (!is_wp_error($resp) && 200 == $resp['response']['code']) {
            set_transient('google_jquery', true, 60 * 5);
            wp_register_script('jquery', $url, array(), null, true);
        }
        else {
            set_transient('google_jquery', false, 60 * 5);
            $url = get_bloginfo('wpurl') . '/wp-includes/js/jquery/jquery.js';
            wp_register_script('jquery', $url, array(), '1.8.3', true);
        }
    }
    // Lade Javascript
    $baseURL = get_template_directory_uri();

    wp_deregister_script('l10n');
    wp_enqueue_script('jquery');
    wp_enqueue_script('flexslider', $baseURL . '/js/jquery.flexslider-min.js', array('jquery'), '1.0', true );
    wp_enqueue_script('init', $baseURL . '/js/cc_init.js', array('jquery'), '1.0', true );

    // Lade CSS
    wp_register_style('global', $baseURL . '/less/all.less', array() , false, 'all' );
    wp_enqueue_style('global');
}

add_action('wp_enqueue_scripts', 'load_Scripts');



#------------------------------#
# Entferne die aktiven Links aus den Navigationen
#------------------------------#

function no_link_current_page( $p ) {
    return preg_replace( '%((current_page_item|current-menu-item)[^<]+)[^>]+><span>([^<]+)</span></a>%', '$1<span class="active">$3</span>', $p, 1 );
}

add_filter( 'wp_list_pages', 'no_link_current_page' );
add_filter( 'wp_nav_menu',   'no_link_current_page' );