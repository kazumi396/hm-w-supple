<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="SUPPLEはコーヒー好きのスタッフによるコーヒー好きのためのコーヒーだけを提供するこだわりのカフェです。" />
    <meta name="format-detection" content="telephone=no" />

    <!-- favicon/webclipicon -->
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/favicon.ico' ); ?>" />
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/webclip.png' ); ?>" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />

    <!-- js -->
    <?php
    wp_enqueue_style('google-web-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP&display=swap');
    wp_enqueue_script('supple-main', get_template_directory_uri() . '/js/main.js');
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- header -->
    <header class="header">
        <h1 class="header-logo">
            <a href="<?php echo esc_url( home_url( '' ) ); ?>">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo.svg' ); ?>" width="200"
                    height="26" alt="supple" />
            </a>
        </h1>

        <a href="https://www.google.com/" class="header-onlineshop" target="_blank" rel="noopener noreferrer">online
            shop</a>

        <nav class="header-nav">
            <ul class="header-list">
                <li class="header-item">
                    <a href="consept.html" class="header-link">concept</a>
                </li>

                <li class="header-item">
                    <a href="menu.html" class="header-link">menu</a>
                </li>

                <li class="header-item">
                    <a href="shoplist.html" class="header-link">shoplist</a>
                </li>

                <li class="header-item">
                    <a href="blog.html" class="header-link">blog&news</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- end header -->