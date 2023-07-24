<?php

function wp_enq_script(...$args) {
    wp_enqueue_script(...$args);
}

if (!function_exists('load_css')) {
    function load_css() {
        wp_register_script('tailwind', "https://cdn.tailwindcss.com");
        wp_enq_script('tailwind');
    }
}

add_action('wp_enqueue_scripts', 'load_css');