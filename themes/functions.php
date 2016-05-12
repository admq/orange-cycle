<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 16/5/10
 * Time: 下午6:40
 */

/**
 * 获取文章图片
 * @param $soContent
 */
function thumb_img($soContent) {
    $soImags = '~<img [^\>]*\/>~';
    preg_match_all($soImags, $soContent, $thePics);
//    $allPics =
}


/*获取主题活动(只取最新的三个活动)*/
function getEvents($limit=3) {
    $rule  = '/\b(([\w-]+:\/\/?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|\/)))/';
    $events=array();
    if (have_posts()) {
        while (have_posts() && $limit>0)  {
            the_post();
            if('event' == get_the_category()[0]->slug) {
                $item = array();
                preg_match($rule,get_the_content(),$result);

                array_push($item, get_the_permalink()); //文章链接地址
                array_push($item, $result[0]); //图片链接
                array_push($item, get_field('event_type')); //项目名称
                array_push($item, get_field('event_start_time')); //开始时间
                array_push($item, get_field('event_stop_time')); //结束时间
                array_push($item, get_field('event_day_start')); //当日开始时间
                array_push($item, get_field('event_teacher')); //老师
                array_push($item, get_field('event_desc')); //宣传语句

                array_push($events, $item);
            }
            $limit --;
        }
    }
    return $events;
}

function getSlideImgs() {
    $rule  = '/\b(([\w-]+:\/\/?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|\/)))/';
    $slides=array();
    if (have_posts()) {
        while (have_posts())  {
            the_post();
            if('homeslide' == get_the_category()[0]->slug) {
                $item = array();
                preg_match($rule,get_the_content(),$result);
                array_push($item, $result[0]);
                array_push($item, get_the_permalink());
                array_push($slides, $item);
            }
        }
    }
    return $slides;
}
















/**
 * 工具函数
 */
function getImgPath() {
    return get_home_url().'/wp-content/themes/orange-cycle';
}

