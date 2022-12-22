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
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url')?>/images/logo2.png">
    <?php wp_head(); ?>
</head>

<body>
    <?php $hd_locale = get_locale();?>
    <div class="container">
        <div class="header">
            <nav id="main-nav">
                <div class="cf nav-disappearable">
                    <div class="upper-nav-flex">
                        <div id="upper-nav">
                            <a id="logo" href="<?php echo site_url(); ?><?php if($hd_locale == "zh_TW"){echo '/homepage/';}else{echo '/homepage-en/';}?>">
                            <span>iPH.</span>
                            </a>
                            <a class="web_name" title="國立陽明交通大學公共衛生研究所"href="<?php echo site_url(); ?><?php if($hd_locale == "zh_TW"){echo '/homepage/';}else{echo '/homepage-en/';}?>">
                                <span class="Name">國立陽明交通大學<br>公共衛生研究所<br></span>
                                <span class="enName">Institute of Public Health, NYCU</span>
                            </a>
                        </div>
                        <div id="nav-toolbar">
                            <a id="NYCU" title="陽明交大首頁" href="https://www.nycu.edu.tw/" target="blank">NYCU</a>
                            <div id="icon-en"><ul><?php pll_the_languages(array('hide_current' => 1 )); ?> </ul></div>
                            <div id="icon-search" title="全站搜尋" type="button">
                                <img claee="icon_toolbar" id="site_search" width="25" height="25" alt="放大鏡" src="<?php bloginfo('template_url')?>/images/header/search.svg">
                                <img class="icon_toolbar_hover" id="site_search_hover" width="25" height="25" alt="藍色放大鏡" src="<?php bloginfo('template_url')?>/images/header/site_search/search_hover.svg">
                            </div>
                            <div id="icon-calendar" title="行事曆" type="button">
                                <img class="icon_toolbar" id="calendar" width="25" height="25" src="<?php bloginfo('template_url')?>/images/header/calendar.svg">
                                <img class="icon_toolbar_hover" id="calendar_hover" width="25" height="25" src="<?php bloginfo('template_url')?>/images/header/calendar_hover.svg">
                            </div>
                            <a id="icon-alumni_entry" title="校友E化系統" type="button" href="http://iphalumni.iph.nycu.edu.tw/">
                                <img class="icon_toolbar" id="alumni_entry" width="29" height="29" alt="校友系統連結" src="<?php bloginfo('template_url')?>/images/header/alumni_entry.svg">
                                <img class="icon_toolbar_hover" id="alumni_entry_hover" width="29" height="29" alt="校友系統連結" src="<?php bloginfo('template_url')?>/images/header/alumni_entry_hover.svg">
                            </a>
                        </div>
                        <div id="nav-hamburger">
                            <img width="25" height="20" alt="校友系統連結" src="<?php bloginfo('template_url')?>/images/header/menu.svg">
                        </div>
                    </div>  
                </div>
        
                <div id="nav-hr" class="nav-disappearable"></div>
                <div class="nav-container">
                <ul id="nav-menu">
                    <li id="nav-main-list-item-1" class="nav-item">
                        <?php if($hd_locale == "zh_TW"): ?>
                        <a class="menu-list nav-list-item-1">關於我們</a>
                        <div class="nav-arrow"><img class="nav-arrow-down" src="<?php bloginfo('template_url')?>/images/header/arrow_down.webp"></div>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-1"><a href="<?php echo site_url(); ?>/about/">系所簡介</a></li>
                                <li class="nav-list-item-1"><a href="<?php echo site_url(); ?>/member/">系所成員</a></li>
                                <li class="nav-list-item-1"><a href="<?php echo site_url(); ?>/administration_staff/">行政助教</a></li>
                            </ul>
                        </div>
                        <?php else: ?>
                        <a class="menu-list nav-list-item-1" class="nav-item">About IPH</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-1"><a href="<?php echo site_url(); ?>/about-en/">Introduction</a></li>
                                <li class="nav-list-item-1"><a href="<?php echo site_url(); ?>/member-en/">Faculty</a></li>
                                <li class="nav-list-item-1"><a href="<?php echo site_url(); ?>/administration_staff-en/">Administration</a></li>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </li>
                    <li id="nav-main-list-item-2" class="nav-item">
                        <?php if($hd_locale == "zh_TW"): ?>
                        <a class="menu-list nav-list-item-2">最新消息&nbsp;&nbsp;&nbsp;</a>
                        <div class="nav-arrow"><img class="nav-arrow-down" src="<?php bloginfo('template_url')?>/images/header/arrow_down.webp"></div>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-2"><a href="<?php echo site_url(); ?>/news/">總覽</a></li>
                                <li class="nav-list-item-2"><a href="<?php echo site_url(); ?>/announcement/">公告</a></li>
                                <li class="nav-list-item-2"><a href="<?php echo site_url(); ?>/scholarship/">獎學金</a></li>
                                <li class="nav-list-item-2"><a href="<?php echo site_url(); ?>/covid19/">COVID-19</a></li>
                            </ul>
                        </div>
                        <?php else: ?>
                        <a class="menu-list nav-list-item-2">News</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-2"><a href="<?php echo site_url(); ?>/news-en/">All</a></li>
                                <li class="nav-list-item-2"><a href="<?php echo site_url(); ?>/announcement-en/">General</a></li>
                                <li class="nav-list-item-2"><a href="<?php echo site_url(); ?>/covid19-en/">COVID-19</a></li>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </li>   
                    <li id="nav-main-list-item-4" class="nav-item">
                        <?php if($hd_locale == "zh_TW"): ?>
                        <a class="menu-list nav-list-item-4">學術活動</a>
                        <div class="nav-arrow"><img class="nav-arrow-down" src="<?php bloginfo('template_url')?>/images/header/arrow_down.webp"></div>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-4"><a href="<?php echo site_url(); ?>/events/">所有活動</a></li>
                                <li class="nav-list-item-4"><a href="<?php echo site_url(); ?>/seminars/">學術演講</a></li>
                                <li class="nav-list-item-4"><a href="<?php echo site_url(); ?>/study_group/">讀書會</a></li>
                            </ul>
                        </div>
                        <?php else: ?>
                        <a class="menu-list nav-list-item-4">Events</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-4"><a href="<?php echo site_url(); ?>/events-en/">All</a></li>
                                <li class="nav-list-item-4"><a href="<?php echo site_url(); ?>/seminars-en/">Seminars</a></li>
                                <li class="nav-list-item-4"><a href="<?php echo site_url(); ?>/study_group-en/">Study groups</a></li>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </li>
                    <li id="nav-main-list-item-5" class="nav-item">
                        <?php if($hd_locale == "zh_TW"): ?>
                        <a class="menu-list nav-list-item-5">課程規劃</a>
                        <div class="nav-arrow"><img class="nav-arrow-down" src="<?php bloginfo('template_url')?>/images/header/arrow_down.webp"></div>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-5"><a href="<?php echo site_url(); ?>/course_architecture/">修課架構</a></li>
                                <li class="nav-list-item-5"><a href="<?php echo site_url(); ?>/degree_regulation/">修業規定</a></li>
                                <li class="nav-list-item-5"><a href="<?php echo site_url(); ?>/course_schedule/">學期課表</a></li>
                            </ul>
                        </div>
                        <?php else: ?>
                        <a class="menu-list nav-list-item-5">Academics</a>
                        <div class="dropdown-menu">
                        <ul>
                            <li class="nav-list-item-5"><a href="<?php echo site_url(); ?>/degree_regulation-en/">Regulation</a></li>
                            <li class="nav-list-item-5"><a href="<?php echo site_url(); ?>/course_schedule-en/">Timetable</a></li>
                        </ul>
                        </div>
                        <?php endif; ?>  
                    </li>
                    <?php if($hd_locale == "zh_TW"): ?>
                    <li id="nav-main-list-item-6" class="nav-item">
                        <a class="menu-list nav-list-item-6">學生園地</a>
                        <div class="nav-arrow"><img class="nav-arrow-down" src="<?php bloginfo('template_url')?>/images/header/arrow_down.webp"></div>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="nav-list-item-6"><a href="<?php echo site_url(); ?>/applications/">各類申請</a></li>
                                <li class="nav-list-item-6"><a href="<?php echo site_url(); ?>/scholarships/">獎助學金</a></li>
                                <li class="nav-list-item-6"><a href="<?php echo site_url(); ?>/honor/">榮譽榜單</a></li>
                                <li class="nav-list-item-6"><a href="<?php echo site_url(); ?>/past_papers/">歷屆論文</a></li>
                            </ul>
                        </div>
                    </li>
                    <?php else: ?>
                    <li id="nav-main-list-item-6" class="nav-item">
                        <a class="menu-list nav-list-item-6" href="https://oia.nycu.edu.tw/en/degree-seeking/international-students/scholarship/">Scholarships</a>
                    </li>
                    <?php endif; ?>

                    <li id="nav-main-list-item-3" class="nav-item">
                        <?php if($hd_locale == "zh_TW"): ?> 
                        <a class="menu-list nav-list-item-3" href="<?php echo site_url(); ?>/admission/">招生訊息</a>
                        <?php else: ?>
                        <a class="menu-list nav-list-item-3" href="<?php echo site_url(); ?>/admission-en/">Admission</a>
                        <?php endif; ?>
                    </li>

                    <li id="nav-main-list-item-8" class="nav-item">
                        <?php if($hd_locale == "zh_TW"): ?>
                        <a class="menu-list nav-list-item-8" href="<?php echo site_url(); ?>/dep_ph/">公衛學科</a>
                        <?php else: ?>
                        <a class="menu-list nav-list-item-8" href="<?php echo site_url(); ?>/dep_ph-en/">About DPH</a>
                        <?php endif;?>
                    </li>

                    <li id="nav-main-list-item-9" class="nav-item">
                        <?php if($hd_locale == "zh_TW"): ?>
                        <a class="menu-list nav-list-item-9" href="<?php echo site_url(); ?>/dep_mhe/">醫人暨教育學科</a>
                        <?php else: ?>
                        <a class="menu-list nav-list-item-9" href="<?php echo site_url(); ?>/dep_mhe-en/">About MH&E</a>
                        <?php endif; ?>
                    </li>

                    <?php if($hd_locale == "zh_TW"): ?>
                    <li id="nav-main-list-item-7" class="nav-item">
                        <a class="menu-list nav-list-item-7" href="<?php echo site_url(); ?>/links/">相關資源</a>
                        <div class="dropdown-menu">
                            <ul>
                            </ul>
                        </div>
                    </li>
                    <?php else: ?>
                    <li id="nav-main-list-item-7" class="nav-item"></li>
                    <?php endif; ?>
                </ul>
                </div>
            </nav>
        </div>
        <div class="overlay" id="search_overlay">
            <img id="search_overlay_closebtn" alt="關閉式搜尋視窗的按鈕" src="<?php bloginfo('template_url')?>/images/icon/ESC.svg" width="50" height="90">
                <?php
                    $nonce= wp_create_nonce('test-nonce1');
                    $home_url = home_url( '/' );
                    $nonce_url = wp_nonce_url( $home_url, 'get_site_search' );
                    //echo $nonce_url;
                ?>
                <form role="search" method="POST" id="search_request_form" action="<?php echo home_url( '/' ); ?>">
                    <img id="search_svg" alt="放大鏡" src="<?php bloginfo('template_url')?>/images/header/site_search/search.svg">
                    <input type="text" value="" name="s" class="site_search_input" id="site_search_keyword" placeholder="全站搜尋"/>
                    <input type="submit" id="searchsubmit"/>
                    <input name="csrf_token" type="hidden" value="<?php echo wp_create_nonce('test-nonce');?>"/>
                    <button id="yellow_search_btn" type="button">
                        <img alt="搜尋按鈕" src="<?php bloginfo('template_url')?>/images/header/site_search/yellow_arrow.svg">
                    </button>
                </form>
        </div>
        <div class="overlay" id="calendar_overlay">
            <img id="calendar_overlay_closebtn" alt="關閉式搜尋視窗的按鈕" src="<?php bloginfo('template_url')?>/images/icon/ESC.svg" width="50" height="90">
            <iframe id="calendar_iframe" src="https://calendar.google.com/calendar/embed?src=99ka1mnam4of6bmd74erjbbs9s%40group.calendar.google.com&ctz=Asia%2FTaipei" scrolling="no"></iframe>
        </div>  
    </div>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/header.js"></script>
        
    