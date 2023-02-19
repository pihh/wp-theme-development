<?php

$PIHH_THEME_VERSION = wp_get_theme()->get('Version');

$PIHH_THEME_NAME = 'pihh-theme-development';
$PIHH_THEME_PREFFIX = $PIHH_THEME_NAME . '__';


function pihh_register_styles()
{
    global $PIHH_THEME_PREFFIX;
    global $PIHH_THEME_VERSION;
    $PIHH_THEME_STYLE_PREFFIX = $PIHH_THEME_PREFFIX . 'bootstrap_stylesheet__';
    wp_enqueue_style($PIHH_THEME_STYLE_PREFFIX . 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), $PIHH_THEME_VERSION, 'all');
    wp_enqueue_style($PIHH_THEME_STYLE_PREFFIX . 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), $PIHH_THEME_VERSION, 'all');
    wp_enqueue_style($PIHH_THEME_STYLE_PREFFIX . 'style', get_template_directory_uri() . '/style.css', array(), $PIHH_THEME_VERSION, 'all');
}

function pihh_register_scripts()
{
    global $PIHH_THEME_PREFFIX;
    global $PIHH_THEME_VERSION;
    $PIHH_THEME_SCRIPT_PREFFIX = $PIHH_THEME_PREFFIX . 'bootstrap_script__';
    wp_enqueue_script($PIHH_THEME_SCRIPT_PREFFIX . 'jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), $PIHH_THEME_VERSION, true);
    wp_enqueue_script($PIHH_THEME_SCRIPT_PREFFIX . 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), $PIHH_THEME_VERSION, true);
    wp_enqueue_script($PIHH_THEME_SCRIPT_PREFFIX . 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), $PIHH_THEME_VERSION, true);
    wp_enqueue_script($PIHH_THEME_SCRIPT_PREFFIX . 'main', get_template_directory_uri() . '/assets/js/main.js', array(), $PIHH_THEME_VERSION, true);

}

function pihh_add_menus()
{
    $locations = array(
        "primary" => "Desktop Primary Left Sidebar",
        "footer" => "Footer Menu Items"
    );
    register_nav_menus($locations);
}

function pihh_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

function pihh_widget_bars()
{
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-social-networks',
            'description' => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'sidebar-footer',
            'description' => 'Footer Widget Area'
        )
    );
}

add_action('wp_enqueue_scripts', 'pihh_register_styles');
add_action('wp_enqueue_scripts', 'pihh_register_scripts');
add_action('after_setup_theme', 'pihh_theme_support');
add_action('init', 'pihh_add_menus');
add_action('widgets_init', 'pihh_widget_bars')

    ?>