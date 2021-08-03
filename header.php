<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin:0!important; >
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
    <?php
        if(is_page('homepage')){ /*首頁*/
            echo '<link rel="stylesheet" href="';bloginfo('template_url');
            echo '/css/homepage.css" type="text/css" media="screen and (min-width: 701px)" />';
            /*************/
            echo '<script src="';bloginfo('template_url');
            echo '/js/homepage.js" type="text/javascript" media="screen and (min-width: 701px)"></script>';
            /*************/
            echo '<link rel="stylesheet" href="';bloginfo('template_url');
            echo'/mobile-css/homepage-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
        }

    ?>
    <body>
    <div class="container">
        <header class="header">
        <div class="title">
            <div class="logo"></div>
            <a class="web_name" href="<?php bloginfo('url'); ?>">
                <span class="Name">國立陽明交通大學<br>公共衛生研究所<br></span>
                <span class="enName">Institute of Public Health, NYCU</span>
            </a>
        </div>
        </header>