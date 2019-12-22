<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_enqueue_style( 'app', get_stylesheet_uri() ); ?>
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?= (get_template_directory_uri() . '/assets/js/app.js'); ?>"></script>
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="body">
