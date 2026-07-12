<?php

function estate_enqueue_assets()
{

    // Tailwind CDN
    wp_enqueue_script(
        'tailwind',
        'https://cdn.tailwindcss.com?plugins=forms,container-queries',
        [],
        null,
        false
    );

    // Tailwind Config
    wp_enqueue_script(
        'tailwind-config',
        get_template_directory_uri() . '/assets/js/tailwind-config.js',
        ['tailwind'],
        '1.0',
        false
    );

    // Google Fonts
    wp_enqueue_style(
        'estate-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Manrope:wght@300;400;500;600;700&display=swap',
        [],
        null
    );

    // Material Symbols
    wp_enqueue_style(
        'material-symbols',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap',
        [],
        null
    );

    // Your custom CSS
    wp_enqueue_style(
        'estate-style',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        '1.0'
    );

    // Your custom JavaScript
    wp_enqueue_script(
        'estate-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'estate_enqueue_assets');
