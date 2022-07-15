<?php
add_action('wp_enqueue_scripts', 'hospice_scripts');

function hospice_scripts(){
    wp_enqueue_style( 'hospice_style', get_stylesheet_uri());
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
    wp_enqueue_script('jquery');
};


add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args){
    if($args->menu === 'Main'){
    $atts['class'] = 'menu__link ';

        if($item->current){
            $atts['class'] .= 'selected';
        }
    };
    if($args->menu === 'Footer-Menu'){
    $atts['class'] = 'footer__rightside-link ';
    };
    if($args->menu === 'Sidebar-menu'){
    $atts['class'] = 'side-menubar__link';
    };
    return $atts;
}
?>
