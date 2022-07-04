<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin:0!important">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <!--<meta http-equiv="Content-Security-Policy" content="default-src https:">-->
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
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url')?>/images/logo2.png">
    <?php wp_head(); ?>
    <!--<link href="<?php //bloginfo('template_directory') ?>/style.css" media="screen" rel="stylesheet" type="text/css" />-->
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
                        <botton id="icon-en"><img src="<?php bloginfo('template_url')?>/images/icon/icon-en.png"></botton>
                        <botton id="icon-search">
                            <img claee="icon_toolbar" id="site_search" width="25" height="25" alt="放大鏡" src="<?php bloginfo('template_url')?>/images/icon/icon-search.png">
                            <img class="icon_toolbar_hover" id="site_search_hover" width="25" height="25" alt="藍色放大鏡" src="<?php bloginfo('template_url')?>/images/header/site_search/search_hover.svg">
                        </botton>
                        <botton id="icon-calendar">
                            <img class="icon_toolbar" id="calendar" width="25" height="25" src="<?php bloginfo('template_url')?>/images/icon/icon-calendar.png">
                            <img class="icon_toolbar_hover" id="calendar_hover" width="25" height="25" src="<?php bloginfo('template_url')?>/images/header/calendar_hover.svg">
                        </botton>
                        <botton id="icon-alumni_entry">
                            <img claee="icon_toolbar" id="alumni_entry" width="29" height="29" alt="校友系統連結" src="<?php bloginfo('template_url')?>/images/header/alumni_entry.svg">
                            <img class="icon_toolbar_hover" id="alumni_entry_hover" width="29" height="29" alt="校友系統連結" src="<?php bloginfo('template_url')?>/images/header/alumni_entry_hover.svg">
                        </botton>
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
                        <a class="menu-list nav-list-item-8" href="<?php echo site_url(); ?>/dep_ph/">公衛學科</a>
                        <div class="dropdown-menu">
                        </div>
                    </li>
                    <li id="nav-main-list-item-9">
                        <a class="menu-list nav-list-item-9" href="<?php echo site_url(); ?>/dep_mhe/">醫人暨教育學科</a>
                        <div class="dropdown-menu"></div>
                    </li>
                    <li id="nav-main-list-item-7">
                        <a class="menu-list nav-list-item-7" href="<?php echo site_url(); ?>/links/">相關資源</a>
                        <div class="dropdown-menu">
                            <ul>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
                </div>
            </nav>
        </div>
        <div id="search_overlay">
            <img id="search_overlay_closebtn" alt="關閉式搜尋視窗的按鈕" src="<?php bloginfo('template_url')?>/images/icon/ESC.svg" width="50" height="90">
                <form role="search" method="get" id="search_request_form" action="<?php echo home_url( '/' ); ?>">
                    <img id="search_svg" alt="放大鏡" src="<?php bloginfo('template_url')?>/images/header/site_search/search.svg">
                    <input type="text" value="" name="s" class="site_search_input" id="site_search_keyword" placeholder="全站搜尋"/>
                    <input type="submit" id="searchsubmit"/>
                    <button id="yellow_search_btn">
                        <img alt="搜尋按鈕" src="<?php bloginfo('template_url')?>/images/header/site_search/yellow_arrow.svg">
                    </button>
                </form>
            <div id="site_search_result"></div>
        </div> 
    </div>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/header.js"></script>

    