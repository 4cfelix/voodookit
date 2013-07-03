<?php

#------------------------------#
# Registriere Sidebars
#------------------------------#

if (function_exists('register_sidebar'))
    register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 id="%1$s" class="widgettitle">',
        'after_title' => '</h2>',
    ));



#------------------------------#
# Registriere Navigationen
#------------------------------#

$defaults = array(
    'theme_location'  => '',
    'menu'            => '',
    'container'       => 'false',
    'container_class' => '',
    'container_id'    => '',
    'menu_class'      => 'menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul></ul>',
    'depth'           => 0,
    'walker'          => ''
);

if (function_exists('register_nav_menus'))
    register_nav_menus(array(
        'main-nav' => 'Hauptnavigation',
        'sub-nav' => 'Footernavigation'
    ));


#------------------------------#
# Aktiviere Thumbnail Support
#------------------------------#

add_theme_support( 'post-thumbnails' );