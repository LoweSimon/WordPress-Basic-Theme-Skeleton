<?php

if (have_rows('pagebuilder')) {

    while (have_rows('header')) {
        the_row();

        if (get_row_layout() == 'header') {
            $data = [
                'header' => get_field('header')
            ];

            include get_stylesheet_directory() . '/template/header.php';
        }
    }
}

?>