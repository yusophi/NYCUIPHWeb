<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin:0!important">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />

<!--<html <?php //language_attributes(); ?> style="margin:0!important; >
    <head>
    <meta charset="<?php bloginfo('charset');?>" />-->
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
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href="<?php bloginfo('template_directory') ?>/style.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <div class="header">
            <nav id="main-nav">
                <div class="cf nav-disappearable">
                    <div id="upper-nav">
                        <a id="logo" href="<?php echo site_url(); ?>/homepage/">
                           <span>iPH.</span>
                        </a>
                        <a class="web_name" href="<?php echo site_url(); ?>/homepage/">
                            <span class="Name">國立陽明交通大學<br>公共衛生研究所<br></span>
                            <span class="enName">Institute of Public Health, NYCU</span>
                        </a>
                    </div>
                    <div id="nav-toolbar">
                        <div id="icon-en"><img src="<?php bloginfo('template_url')?>/images/icon/icon-en.png"></div>
                        <div id="icon-search"><img src="<?php bloginfo('template_url')?>/images/icon/icon-search.png"></div>
                        <div id="icon-calendar"><img src="<?php bloginfo('template_url')?>/images/icon/icon-calendar.png"></div>
                    </div>
                </div>
                 
                <div id="nav-hr" class="nav-disappearable"></div>
                <div class="nav-container">
                <ul id="nav-menu">
                    <li id="nav-main-list-item-1">
                        <a class="menu-list nav-list-item-1">關於我們</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-1"><a href="<?php echo site_url(); ?>/about/">系所簡介</a></li>
                                <li class="nav-list-item-1"><a href="<?php echo site_url(); ?>/member/">系所成員</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="nav-main-list-item-2">
                        <a class="menu-list nav-list-item-2">最新消息</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-2"><a href="<?php echo site_url(); ?>/news/">總覽</a></li>
                                <li class="nav-list-item-2"><a href="<?php echo site_url(); ?>/news/">公告</a></li>
                                <li class="nav-list-item-2"><a href="<?php echo site_url(); ?>/news/">獎學金</a></li>
                                <li class="nav-list-item-2"><a href="<?php echo site_url(); ?>/news/">COVID-19</a></li>
                            </ul>
                        </div>
                    </li>   
                    <li id="nav-main-list-item-4">
                        <a class="menu-list nav-list-item-4">學術活動</a>
                        <div class="dropdown-menu">
                            <ul>
                                <!--<li class="nav-list-item-4"><a href="">學術資源</a></li>-->
                                <li class="nav-list-item-4"><a href="<?php echo site_url(); ?>/events/">學術演講</a></li>
                                <li class="nav-list-item-4"><a href="<?php echo site_url(); ?>/events/">讀書會</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="nav-main-list-item-5">
                        <a class="menu-list nav-list-item-5">課程規劃</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-5"><a href="<?php echo site_url(); ?>/course_architecture/">修課架構</a></li>
                                <li class="nav-list-item-5"><a href="<?php echo site_url(); ?>/degree_regulation/">修業規定</a></li>
                                <li class="nav-list-item-5"><a href="<?php echo site_url(); ?>/course_schedule/">學期課表</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="nav-main-list-item-6">
                        <a class="menu-list nav-list-item-6">學生園地</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-6"><a href="<?php echo site_url(); ?>/applications/">各類申請</a></li>
                                <li class="nav-list-item-6"><a href="<?php echo site_url(); ?>/scholarships/">獎助學金</a></li>
                                <li class="nav-list-item-6"><a href="<?php echo site_url(); ?>/honor/">榮譽榜單</a></li>
                                <li class="nav-list-item-6"><a href="<?php echo site_url(); ?>/past_papers/">歷屆論文</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="nav-main-list-item-3">
                        <a class="menu-list nav-list-item-3" href="<?php echo site_url(); ?>/admission/">招生訊息</a>
                        <!--<div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-3"><a href="">博士班招生(不分組)</a></li>
                                <li class="nav-list-item-3"><a href="">碩士班招生考試</a></li>
                                <li class="nav-list-item-3"><a href="">碩博班甄試入學考試</a></li>
                            </ul>
                        </div>-->
                    </li>
                    <li id="nav-main-list-item-8">
                        <a class="menu-list nav-list-item-8">公衛學科</a>
                        <div class="dropdown-menu">
                        </div>
                    </li>
                    <li id="nav-main-list-item-9">
                        <a class="menu-list nav-list-item-9">醫人暨教育學科</a>
                        <div class="dropdown-menu"></div>
                    </li>
                    <li id="nav-main-list-item-7">
                        <a class="menu-list nav-list-item-7">相關資源</a>
                        <div class="dropdown-menu">
                            <ul>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
                </div>
            </nav>
        </div>
    </div>
    
            
    <head>
    <?php
        /*if(is_page('homepage')){ 
            echo '<link rel="stylesheet" href="';bloginfo('template_url');
            echo '/css/homepage.css" type="text/css" media="screen and (min-width: 701px)" />';
            echo '<script src="';bloginfo('template_url');
            echo '/js/homepage.js" type="text/javascript" media="screen and (min-width: 701px)"></script>';
            echo '<link rel="stylesheet" href="';bloginfo('template_url');
            echo'/mobile-css/homepage-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
        }*/
        if(is_page('news')){ /*首頁*/
            echo '<link rel="stylesheet" href="';bloginfo('template_url');
            echo '/css/news.css" type="text/css" media="screen and (min-width: 701px)" />';
            /*************/
            echo '<script src="';bloginfo('template_url');
            echo '/js/news.js" type="text/javascript" media="screen and (min-width: 701px)"></script>';
            /*************/
            echo '<link rel="stylesheet" href="';bloginfo('template_url');
            echo'/mobile-css/news-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
        }
        /*if(is_page('events')){
            echo '<link rel="stylesheet" href="';bloginfo('template_url');
            echo '/css/events.css" type="text/css" media="screen and (min-width: 701px)" />';
            echo '<script src="';bloginfo('template_url');
            echo '/js/events.js" type="text/javascript" media="screen and (min-width: 701px)"></script>';
            echo '<link rel="stylesheet" href="';bloginfo('template_url');
            echo'/mobile-css/events-mobile.css" type="text/css" media="screen and (max-width: 700px)" />';
        }*/
        if(is_page_template( 'page-templates/template-epid.php' ) || is_page_template( 'page-templates/template-bios.php' ) || is_page_template( 'page-templates/template-law.php' )){ /*流行病學模板*/
        echo '<link rel="stylesheet" href="';bloginfo('template_url');
        echo '/css/pro_division.css" type="text/css" />';
        /*************/
        }
    ?>
    </head>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/header.js"></script>

    