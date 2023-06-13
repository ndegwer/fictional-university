<?php

function fictional_university_files() {
    wp_enqueue_style('fictional_university_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','fictional_university_files');

