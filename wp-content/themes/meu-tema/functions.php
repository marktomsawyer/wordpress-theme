<?php

function wp_theme_registrando_menu()
{
    register_nav_menu(
        'menu-navegacao',
        'Menu navegação'
    );
}

add_action('init', 'wp_theme_registrando_menu');

function wp_theme_registrando_taxonomia()
{
    register_taxonomy(
        'paises',
        'empresas',
        array(
            'labels' => array('name' => 'Países'),
            'hierarchical' => true
        )
    );
}

add_action('init', 'wp_theme_registrando_taxonomia');

function wp_theme_adicionando_recursos_ao_tema()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'wp_theme_adicionando_recursos_ao_tema');

function wp_theme_registrando_post_customizado()
{
    register_post_type('empresas',
        array(
            'labels' => array('name' => 'Empresas'),
            'public' => true,
            'menu_position' => 0,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-admin-site'
        )
    );
}

add_action('init', 'wp_theme_registrando_post_customizado');

function wp_theme_registrando_post_customizado_banner()
{
    register_post_type(
        'banners',
        array(
            'labels' => array('name' => 'Banner'),
            'public' => true,
            'menu_position' => 1,
            'menu_icon' => 'dashicons-format-image',
            'supports' => array('title', 'thumbnail')
        )
    );
}

add_action('init', 'wp_theme_registrando_post_customizado_banner');

function wp_theme_registrando_metabox()
{
    add_meta_box(
        'mts_registrando_metabox',
        'Texto para a home',
        'mts_funcao_callback',
        'banners'
    );
}

add_action('add_meta_boxes', 'wp_theme_registrando_metabox');

function mts_funcao_callback($post)
{
    $texto_home_1 = get_post_meta($post->ID, '_texto_home_1', true);
    $texto_home_2 = get_post_meta($post->ID, '_texto_home_2', true);
    ?>
    <label for="texto_home_1">Texto 1</label>
    <input type="text" name="texto_home_1" style="width: 100%" value="<?= $texto_home_1 ?>"/>
    <br>
    <br>
    <label for="texto_home_2">Texto 2</label>
    <input type="text" name="texto_home_2" style="width: 100%" value="<?= $texto_home_2 ?>"/>
    <?php
}

function wp_theme_salvando_dados_metabox($post_id)
{
    foreach ($_POST as $key => $value) {
        if ($key !== 'texto_home_1' && $key !== 'texto_home_2') {
            continue;
        }

        update_post_meta(
            $post_id,
            '_' . $key,
            $_POST[$key]
        );
    }
}

add_action('save_post', 'wp_theme_salvando_dados_metabox');