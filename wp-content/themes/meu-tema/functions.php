<?php

function wp_theme_registrando_menu() {
    register_nav_menu(
        'menu-navegacao',
        'Menu navegação'
    );
}

add_action('init', 'wp_theme_registrando_menu');

function wp_theme_registrando_taxonomia(){
    register_taxonomy(
        'paises',
        'empresas',
        array(
            'labels' => array('name' => 'Países'),
            'hierarchical' => true
        )
    );
}
add_action('init','wp_theme_registrando_taxonomia');

function wp_theme_adicionando_recursos_ao_tema(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'wp_theme_adicionando_recursos_ao_tema');

function wp_theme_registrando_post_customizado() {
    register_post_type('empresas',
    array(
        'labels' => array('name' => 'Empresas'),
        'public' => true,
        'menu_position' => 0,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicon-admin-site'
    )
    );
}
add_action('init', 'wp_theme_registrando_post_customizado');