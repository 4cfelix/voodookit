<?php

#------------------------------#
# Adminbereich aufräumen
#------------------------------#

function cleanup_admin_head() {
    // Entferne Links zu den Extra feed (z.B. Kategorie Feed)
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    // Entfernen Linsk zu den Hauptfeeds (z.B. Beiträge und Kommentare)
    remove_action( 'wp_head', 'feed_links', 2 );
    // Remove link to the RSD service endpoint, EditURI link
    remove_action( 'wp_head', 'rsd_link' );
    // Remove link to the Windows Live Writer manifest file
    remove_action( 'wp_head', 'wlwmanifest_link' );
    // Remove index link
    remove_action( 'wp_head', 'index_rel_link' );
    // Remove prev link
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
    // Remove start link
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
    // Display relational links for adjacent posts
    remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
    // Remove XHTML generator showing WP version
    remove_action( 'wp_head', 'wp_generator' );
}

add_action('init', 'cleanup_admin_head');



#------------------------------#
# Footer in Adminbereich anpassen
#------------------------------#

function change_footer_admin() {
    echo 'Konzeption & Realisierung: <a href="http://www.cat-ia.de" title="Catalyst Interactive">Catalyst Interactive</a>, Email: <a href="mailto:dv@cat-ia.de" title="Schreiben Sie uns">dv@cat-ia.de</a>';
}
add_filter('admin_footer_text', 'change_footer_admin');


// Ab hier kann's los gehen
function adjust_admin_bar() {
    // Global
    global $wp_admin_bar;

    // Aktiv und Admin?
    if ( !is_admin_bar_showing() or !is_admin() ) {
        return;
    }

    // Einträge löschen
    $wp_admin_bar->remove_menu('view');
    //$wp_admin_bar->remove_menu('updates');
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('appearance');
    // $wp_admin_bar->remove_menu('view-site');
    // $wp_admin_bar->remove_menu('new-content');
    // $wp_admin_bar->remove_menu('my-account')

    // Suche definieren
    $form  = '<form action="' .esc_url( admin_url('edit.php') ). '" method="get" id="adminbarsearch">';
    $form .= '<input class="adminbar-input" name="s" tabindex="1" type="text" value="" maxlength="50" />';
    $form .= '<input type="submit" class="adminbar-button" value="' .__('Search'). '"/>';
    $form .= '</form>';

    // Suche einbinden
    $wp_admin_bar->add_menu(
        array(
            'parent' => 'top-secondary',
            'id'     => 'search',
            'title'  => $form,
            'meta'   => array(
                'class' => 'admin-bar-search'
            )
        )
    );
}

// Funktionsaufruf
add_action(
    'wp_before_admin_bar_render',
    'adjust_admin_bar'
);


