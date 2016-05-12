<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 16/4/18
 * Time: 下午8:40
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php if ( is_home() ) {
            bloginfo('name'); echo " - "; bloginfo('description');
        } elseif ( is_category() ) {
            single_cat_title(); echo " - "; bloginfo('name');
        } elseif (is_single() || is_page() ) {
            single_post_title();
        } elseif (is_search() ) {
            echo "搜索结果"; echo " - "; bloginfo('name');
        } elseif (is_404() ) {
            echo '页面未找到!';
        } else {
            wp_title('',true);
        } ?>
    </title>
<!--    <link rel='icon' href="--><?php //bloginfo('template_url')?><!--/img/footerLogo.png" type='image/x-ico' />-->
    <link href="<?php bloginfo('template_url')?>/css/common.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url')?>/css/font-awesome.min.css" rel="stylesheet">

    <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />

    <script src="<?php bloginfo('template_url')?>/js/jquery-1.10.2.min.js"></script>
<!--    <script src="--><?php //bloginfo('template_url')?><!--/js/jquery.mousewheel.js"></script>-->
    <script src="<?php bloginfo('template_url')?>/js/raphael.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/raphael.export.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/main.js"></script>

    <?php wp_head(); ?>
</head>



<body>
<?php include "login.php"?>
<div class="container">
<div id="header">
    <div id="logo">
        <a href="<?echo home_url();?>"><img src="<?php bloginfo('template_url')?>/imgs/newlogo.png" /></a>
    </div>
    <div id="menu">
        <ul>
            <?php wp_list_pages('depth=1&title_li=0&sort_column=menu_order'); ?>
            <!--<li><a href="about.php">品牌介绍</a></li>
            <li><a href="#">新手上路</a></li>
            <li><a href="#">主题活动</a></li>
            <li><a href="#">课程表</a></li>
            <li><a href="#">师  资</a></li>
            <li><a href="#">公司介绍</a></li>-->
            <?php do_action('oc_get_loginstate');?>
        </ul>
    </div>
    <div class="menu_button">
        <div class="menu_button-bar"></div>
        <div class="menu_button-bar"></div>
        <div class="menu_button-bar"></div>
    </div>
</div>