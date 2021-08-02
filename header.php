<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo('charset');?>" />
    <title><?php
        if (is_home()) {
        bloginfo('name');
        echo ' - ';
        bloginfo('description');
        } else {
        wp_title(' - ', true, 'right');
        bloginfo('name');
        } ?>
    </title>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="<?php bloginfo('template_directory') ?>/style.css" media="screen" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <div class="container">
        <header class="header">
        <div class="title">
            <div class="logo"></div>
            <a class="web_name" href="<?php bloginfo('url'); ?>">
                <div>國立陽明交通大學<br>公共衛生研究所<br><span class="enName">Institute of Public Health, NYCU</span></div>
            </a>
        </div>
        </header>