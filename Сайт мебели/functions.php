<?php
    // Регистрация стиля и скриптов WordPress
add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
add_action('after_setup_theme', 'add_features');

function add_scripts_and_styles() {
    // Подключение основного CSS-файла темы
    wp_enqueue_style('style', get_stylesheet_uri());
}

function  add_features () {
    add_theme_support('custom-logo', [
        'height'      => 50,
        'width'       => 100,
        'flex-height' => false,
        'flex-width'  => false,
        'header-text' => '',
        'unlink-homepage-logo' => false, // wp 5.5
    ]);
}
?>