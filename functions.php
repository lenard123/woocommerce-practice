<?php

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});


add_action('wp_enqueue_scripts', function() {
    wp_enqueue_script('alpine', '//unpkg.com/alpinejs@3.x.x/dist/cdn.min.js', null, null, true);
    wp_enqueue_script('alpine-collapse', '//unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js', null, null, true);

    wp_enqueue_style('poppins-font', '//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    wp_enqueue_style('main', get_theme_file_uri('assets/css/main.css'));

});


add_action('init', function () {

    register_nav_menus([
        'header-menu' => __('Header Menu'),
    ]);

});