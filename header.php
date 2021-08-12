<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
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
        <header class="header">
            <nav id="main-nav">
                <div class="cf nav-disappearable">
                    <div id="upper-nav">
                        <div id="logo"><img src="asset/LOGO.png" width="72" /></div>
                        <div id="mark"><img src="asset/MARK.png" width="205.5" /></div>
                    </div>
                    <div id="nav-toolbar">
                        <div id="icon-en"><img src="asset/icon-en.png"></div>
                        <div id="icon-search"><img src="asset/icon-search.png"></div>
                        <div id="icon-calendar"><img src="asset/icon-calendar.png"></div>
                    </div>
                </div>
                <div id="nav-hr" class="nav-disappearable"></div>
                <ul id="nav-menu">
                    <li id="nav-main-list-item-1">
                        <a class="menu-list nav-list-item-1">關於我們</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-1"><a href="">系所簡介</a></li>
                                <li class="nav-list-item-1"><a href="">師資陣容</a></li>
                                <li class="nav-list-item-1"><a href="">行政助教</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="nav-main-list-item-2">
                        <a class="menu-list nav-list-item-2">最新消息</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-2"><a href="">系所公告</a></li>
                                <li class="nav-list-item-2"><a href="">公衛所新聞</a></li>
                                <li class="nav-list-item-2"><a href="">COVID-19</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="nav-main-list-item-3">
                        <a class="menu-list nav-list-item-3">招生專區</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-3"><a href="">博士班招生(不分組)</a></li>
                                <li class="nav-list-item-3"><a href="">碩士班招生考試</a></li>
                                <li class="nav-list-item-3"><a href="">碩博班甄試入學考試</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="nav-main-list-item-4">
                        <a class="menu-list nav-list-item-4">學術活動</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-4"><a href="">學術演講</a></li>
                                <li class="nav-list-item-4"><a href="">學術資源</a></li>
                                <li class="nav-list-item-4"><a href="">讀書會</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="nav-main-list-item-5">
                        <a class="menu-list nav-list-item-5">課程規劃</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-5"><a href="">修課架構</a></li>
                                <li class="nav-list-item-5"><a href="">修業規定</a></li>
                                <li class="nav-list-item-5"><a href="">課表及大綱</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="nav-main-list-item-6">
                        <a class="menu-list nav-list-item-6">學生園地</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-6"><a href="">相關申請與辦法</a></li>
                                <li class="nav-list-item-6"><a href="">獎助學金</a></li>
                                <li class="nav-list-item-6"><a href="">行政資源</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id="nav-main-list-item-7">
                        <a class="menu-list nav-list-item-7">相關資源</a>
                        <div class="dropdown-menu">
                            <ul>
                            </ul>
                        </div>
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
                </ul>
            </nav>
        </header>