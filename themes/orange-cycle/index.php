<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 16/4/18
 * Time: 下午8:56
 */
?>

<!--页头-->
<?php get_header(); ?>
    <!------- 内容 ---------->
    <!-- home_slide -->
    <?php $slides = getSlideImgs(); $sum = count($slides);?>
    <div id="home-slide" class="section">
        <?php foreach ($slides as $item) {?>
        <a href="<?php echo $item[1]; ?>"><img src="<?php echo $item[0]; ?>"/></a>
        <?}?>
        <div id="banner-slide-pager" class="slide-pager">
            <ul>
                <?php for($i=1;$i<=$sum;$i++) {?>
                <li><a href="javascript:void(0)"><?php echo $i;?></a></li>
                <?php }?>
            </ul>
        </div>
    </div>


<?php $events = getEvents(); count($events);?>
    <div id="home-event" class="section">
        <div class="title">主题活动</div>
        <a href="<?php echo get_home_url()?>/index.php/event/" class="more">更多主题活动</a>
        <a href="#prev" class="slide-nav-prev arrow"><span></span></a>
        <a href="#next" class="slide-nav-next arrow"><span></span></a>
        <div id="event-cycle">
            <div class="event-item">
                <div class="item-left">
                    <a href="<?php echo $events[0][0]; ?>">
                        <img src="<?php echo $events[0][1]; ?>"/>
                        <div class="info">
                            <h2>生命不息,运动不止</h2>
                            <div class="feature">
                                <span class="tag"><?php echo $events[0][2]; ?></span>
                                <span class="date">
                                    <i class="fa fa-calendar-o"></i>
                                    <?php echo $events[0][3]; ?> ~ <?php echo $events[0][4]; ?>
                                </span>
                                <span class="time">
                                    <i class="fa fa-clock-o"></i>
                                    <?php echo $events[0][5]; ?>
                                </span><span class="pin">
                                    <i class="fa fa-map-marker"></i>
                                    <?php echo $events[0][6]; ?>
                                </span>
                            </div>
                            <p>
                                <?php echo $events[0][7]; ?>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="item-right">
                    <div class="item-right-list">
                        <a href="<?php echo $events[1][0]; ?>">
                            <img src="<?php echo $events[1][1]; ?>"/>
                            <div class="feature">
                                <span class="tag"><?php echo $events[1][2]; ?></span>
                                <span class="date"><i class="fa fa-calendar-o"></i><?php echo $events[1][3]; ?></span>
                                <span class="time"><i class="fa fa-clock-o"></i><?php echo $events[1][5]; ?></span>
                                <br>
                                <span class="pin"><i class="fa fa-map-marker"></i><?php echo $events[1][6]; ?></span>
                            </div>
                            <h2>[LIVE DJ] 4/22 DJ AL x Toy</h2>
                        </a>
                    </div>
                    <div class="item-right-list">
                        <a href="<?php echo $events[2][0]; ?>">
                            <img src="<?php echo $events[2][1]; ?>"/>
                            <div class="feature">
                                <span class="tag"><?php echo $events[2][2]; ?></span>
                                <span class="date"><i class="fa fa-calendar-o"></i><?php echo $events[2][3]; ?></span>
                                <span class="time"><i class="fa fa-clock-o"></i><?php echo $events[2][5]; ?></span>
                                <br>
                                <span class="pin"><i class="fa fa-map-marker"></i><?php echo $events[2][6]; ?></span>
                            </div>
                            <h2>[LIVE DJ] 4/22 DJ AL x Toy</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="event-item">
                <div class="item-left">
                    <a href="#">
                        <img src="<?php bloginfo('template_url'); ?>/imgs/event1.jpg"/>
                        <div class="info">
                            <h2>Hi,运动不止</h2>
                            <div class="feature">
                                <span class="tag">Cycle</span>
                                <span class="date">
                                    <i class="fa fa-calendar-o"></i>
                                    2016-04-26 ~ 2016-04-30
                                </span>
                                <span class="time">
                                    <i class="fa fa-clock-o"></i>
                                    19:45
                                </span><span class="pin">
                                    <i class="fa fa-map-marker"></i>
                                    SPACE CYCLE Ming Yao
                                </span>
                            </div>
                            <p>运动，一种涉及体力和技巧的由一套规则或习惯所约束的活动，通常具有竞争性。物布时空永不均产生了普遍运动，
                                普遍的运动生灭着万事万物。没有不运动的物件，也没有能离开物件的运动。运动具守恒性，即运动既不能创造又不能消灭，
                                其具体形式则是多样的并且能互相转化，在转化中运动总量不变。
                            </p>
                        </div>
                    </a>
                </div>
                <div class="item-right">
                    <div class="item-right-list">
                        <a href="#">
                            <img src="<?php bloginfo('template_url') ?>/imgs/event2.jpg"/>
                            <div class="feature">
                                <span class="tag">Cycle</span>
                                <span class="date"><i class="fa fa-calendar-o"></i>2016-04-22</span>
                                <span class="time"><i class="fa fa-clock-o"></i>21:00</span>
                                <br>
                                <span class="pin"><i class="fa fa-map-marker"></i>SPACE CYCLE Ming Yao</span>
                            </div>
                            <h2>[LIVE DJ] 4/22 DJ AL x Toy</h2>
                        </a>
                    </div>
                    <div class="item-right-list">
                        <a href="#">
                            <img src="<?php bloginfo('template_url') ?>/imgs/event3.jpg"/>
                            <div class="feature">
                                <span class="tag">Cycle</span>
                                <span class="date"><i class="fa fa-calendar-o"></i>2016-04-23</span>
                                <span class="time"><i class="fa fa-clock-o"></i>20:00</span>
                                <br>
                                <span class="pin"><i class="fa fa-map-marker"></i>SPACE CYCLE Ming Yao</span>
                            </div>
                            <h2>[LIVE DJ] 4/23 DJ力仁 x Heng</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pager">
            <ul>
                <li class="current"><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
            </ul>
        </div>
    </div>

    <div id="home-star" class="section">
        <div class="title">SPACE STAR</div>
        <div id="statistics" class="data">
            <div id="holder">
                <!--<svg height="278" version="1.1" width="540" xmlns="http://www.w3.org/2000/svg"
                     style="overflow: hidden; position: relative; left: -0.5px;">
                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc>
                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                    <path fill="none" stroke="#ff693a"
                          d="M0,197C3.6666666666666665,196.16666666666666,10.833333333333334,193.16666666666666,22,192C33.166666666666664,190.83333333333334,52,194.16666666666666,67,190C82,185.83333333333334,97,166.33333333333334,112,167C127,167.66666666666666,142,189.5,157,194C172,198.5,187,194.5,202,194C217,193.5,232,191.16666666666666,247,191C262,190.83333333333334,277,196.5,292,193C307,189.5,322,172.83333333333334,337,170C352,167.16666666666666,367,174.5,382,176C397,177.5,412,178.83333333333334,427,179C442,179.16666666666666,457,176.5,472,177C487,177.5,505.8333333333333,181.16666666666666,517,182C528.1666666666666,182.83333333333334,535.3333333333334,182,539,182"
                          stroke-width="4" stroke-linecap="round"
                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linecap: round;"
                          class="move"></path>
                </svg>-->
            </div>
            <div id="day" class="statistics show">
                <!-- 248 / 800 = 0.31 -->
                <div class="bar-Chart" data-range="0.31">
                    <div class="bar " data-watt="126" data-calories="275" data-avgwatt="31" data-distance="10"
                         data-avgrpm="60" data-highrpm="125"><span class="" style="height: 39.06px;"></span></div>
                    <div class="bar " data-watt="97" data-calories="282" data-avgwatt="35" data-distance="10"
                         data-avgrpm="64" data-highrpm="124"><span class="" style="height: 30.07px;"></span></div>
                    <div class="bar " data-watt="173" data-calories="357" data-avgwatt="69" data-distance="14"
                         data-avgrpm="68" data-highrpm="112"><span class="" style="height: 53.63px;"></span></div>
                    <div class="bar " data-watt="125" data-calories="270" data-avgwatt="32" data-distance="9"
                         data-avgrpm="78" data-highrpm="145"><span class="" style="height: 38.75px;"></span></div>
                    <div class="bar " data-watt="99" data-calories="269" data-avgwatt="35" data-distance="8"
                         data-avgrpm="49" data-highrpm="100"><span class="" style="height: 30.69px;"></span></div>
                    <div class="bar " data-watt="92" data-calories="279" data-avgwatt="33" data-distance="10"
                         data-avgrpm="58" data-highrpm="106"><span class="" style="height: 28.52px;"></span></div>
                    <div class="bar " data-watt="103" data-calories="274" data-avgwatt="33" data-distance="10"
                         data-avgrpm="55" data-highrpm="105"><span class="" style="height: 31.93px;"></span></div>
                    <div class="bar " data-watt="193" data-calories="346" data-avgwatt="64" data-distance="13"
                         data-avgrpm="58" data-highrpm="112"><span class="" style="height: 59.83px;"></span></div>
                    <div class="bar " data-watt="145" data-calories="326" data-avgwatt="52" data-distance="13"
                         data-avgrpm="56" data-highrpm="99"><span class="" style="height: 44.95px;"></span></div>
                    <div class="bar " data-watt="121" data-calories="318" data-avgwatt="51" data-distance="12"
                         data-avgrpm="55" data-highrpm="95"><span class="" style="height: 37.51px;"></span></div>
                    <div class="bar " data-watt="143" data-calories="323" data-avgwatt="54" data-distance="12"
                         data-avgrpm="61" data-highrpm="117"><span class="" style="height: 44.33px;"></span></div>
                    <div class="bar current" data-watt="134" data-calories="309" data-avgwatt="45" data-distance="12"
                         data-avgrpm="64" data-highrpm="119"><span class="current" style="height: 41.54px;"></span>
                    </div>
                    <hr class="clear">
                </div>

                <div class="day-list">
                    <div class="day">11/07</div>
                    <div class="day">11/14</div>
                    <div class="day">12/03</div>
                    <div class="day">12/05</div>
                    <div class="day">12/12</div>
                    <div class="day">12/22</div>
                    <div class="day">12/24</div>
                    <div class="day">01/03</div>
                    <div class="day">01/10</div>
                    <div class="day">01/17</div>
                    <div class="day">01/21</div>
                    <div class="day current">01/29</div>
                    <hr class="clear">
                </div> <!-- /day-list -->

                <div class="unit-list">
                    <div class="unit">800 watts
                        <hr class="">
                    </div>
                    <div class="unit">700 watts
                        <hr class="">
                    </div>
                    <div class="unit">600 watts
                        <hr class="">
                    </div>
                    <div class="unit">500 watts
                        <hr class="">
                    </div>
                    <div class="unit">400 watts
                        <hr class="">
                    </div>
                    <div class="unit">300 watts
                        <hr class="">
                    </div>
                    <div class="unit">200 watts
                        <hr class="">
                    </div>
                    <div class="unit">100 watts
                        <hr class="">
                    </div>
                    <div class="unit">0 watt
                        <hr class="">
                    </div>
                </div> <!-- /unit-list -->

                <div class="number-wrap">
                    <div class="column">
                        <h4>Power</h4>
                        <div class="part">
                            <strong class="number bold day-highwatt" data-number="173">134</strong>
                            <p>HIGH POWER</p>
                        </div> <!-- /part -->
                        <div class="part">
                            <strong class="number day-svgwatt" data-number="41">45</strong>
                            <p>AVG POWER</p>
                        </div> <!-- /part -->
                        <hr class="clear">
                    </div> <!-- /column -->
                    <div class="column">
                        <h4>Calories</h4>
                        <strong class="number day-calories" data-number="1184">309</strong>
                        <p>BURNED</p>
                    </div> <!-- /column -->
                    <div class="column">
                        <h4>Distance</h4>
                        <strong class="number day-distance" data-number="45">12</strong>
                        <p>KILOMETER</p>
                    </div> <!-- /column -->
                    <div class="column">
                        <h4>Speed</h4>
                        <div class="part">
                            <strong class="number day-maxrpm" data-number="145">119</strong>
                            <p>MAX RPM</p>
                        </div>
                        <div class="part">
                            <strong class="number day-avgrpm" data-number="67">64</strong>
                            <p>AVG RPM</p>
                        </div>
                        <hr class="clear">
                    </div> <!-- /column -->
                </div> <!-- /number-wrap -->
            </div> <!-- /day -->
            <div class="point-list">
            </div> <!-- /point-list -->
        </div>

        <div class="person">
            <div class="img"><img src="<?php bloginfo('template_url') ?>/imgs/star1.jpg" alt=""></div>
            <h2>Muriel</h2>
            <!-- <strong>I Love SpaceCycle!</strong> -->
            <p>肌肉不用，身體會衰弱。<br>心，也是一樣</p>
        </div>

    </div>

    <div id="home-imgs" class="section">
        <div class="title">图片分享区</div>
        <div class="photoList" style="display: table;">
            <div class="photo-item">
                <a href="https://www.instagram.com/p/BEVbcrFk4aU/" target="_blank">
                        <span class="text">現正上映：冥想飛輪#movedbymusic #spacecycle</span>
                        <span class="mask"></span>
                    <img
                        src="<?php bloginfo('template_url')?>/imgs/imgs1.jpg"
                        width="306" height="306" alt="">
                </a>
            </div>
            <div class="photo-item">
                <a href="https://www.instagram.com/p/BEQNF5PE4Se/" target="_blank">
                    <span class="text">用腳尖輕輕點地～👯#movedbymusic #spacebarre</span>
                    <span class="mask"></span>
                    <img
                        src="<?php bloginfo('template_url')?>/imgs/imgs2.jpg"
                        width="306" height="306" alt="">
                </a>
            </div>
            <div class="photo-item">
                <a href="https://www.instagram.com/p/BEOdgOFk4cx/" target="_blank">
                    <span class="text">用
                        熱情盛裝，盡情舞動!
                        最好玩的派對就在 SPACE CYCLE ! [週末夜。現場] 4/16 Sat 20:00
                        紐約 DJ Andrew Ford X 拉丁型男 SPACE CYCLE / Luis
                        Let's Party and have fun!

                        搶先預訂:
                        https://www.spacecycle.com/event.php?cms_event_id=46

                        #spacecycle #movedbymusic #LiveDJ #DJAndrew
                    </span>
                    <span class="mask"></span>
                    <img
                        src="<?php bloginfo('template_url')?>/imgs/imgs3.jpg"
                        width="306" height="306" alt="">
                </a>
            </div>
            <div class="photo-item">
                <a href="https://www.instagram.com/p/BEKdOTYE4Vd/" target="_blank">
                    <span class="text">
                        準備好強心臟接受音浪重擊嗎? [週末夜。現場] 4/15 Fri 19:00
                        DJ DinPei X 百變SPACE CYCLE / TINA
                        召喚你內心的渴望和爆發力!
                        一起釋放你的力量吧!

                        搶先預約:
                        https://www.spacecycle.com/event.php?cms_event_id=43

                        #spacecycle #movedbymusic #LiveDJ #DJDinPei
                    </span>
                    <span class="mask"></span>
                    <img
                        src="<?php bloginfo('template_url')?>/imgs/imgs4.jpg"
                        width="306" height="306" alt="">
                </a>
            </div>
            <div class="photo-item">
                <a href="https://www.instagram.com/p/BEDoL28k4aK/" target="_blank">
                    <span class="text">
                        ［會館一角］流動的身體。藝術家/吳耿禎
                        #spacecycle
                    </span>
                    <span class="mask"></span>
                    <img
                        src="<?php bloginfo('template_url')?>/imgs/imgs5.jpg"
                        width="306" height="306" alt="">
                </a>
            </div>
            <div class="photo-item">
                <a href="https://www.instagram.com/p/BD3DnUUE4Vd/" target="_blank">
                    <span class="text">
                        最熱的現場! 準備跟著LIVE DJ一起飆音浪! [週末夜。現場] 4/8 Fri 21:00
                        DJ Alex36 X SPACE CYCLE / Marcus Thomsen
                        Let's sweat and have fun!

                        搶先預訂:
                        https://www.spacecycle.com/event.php?cms_event_id=11

                        #spacecycle #movedbymusic #LiveDJ #DJAlex36
                    </span>
                    <span class="mask"></span>
                    <img
                        src="<?php bloginfo('template_url')?>/imgs/imgs6.jpg"
                        width="306" height="306" alt="">
                </a>
            </div>
        </div>
    </div>

    <div id="home-icons" class="section">
        <div class="icons">
            <div class="inline">
                <a href="brand-desc.php?lang=cht" class="icon-item">
                    <div class="icon"></div>
                    <h3>品牌介紹</h3>
                    <p>從音樂出發</p>
                </a> <!-- /icon -->
                <a href="new_user.php?lang=cht" class="icon-item">
                    <div class="icon"></div>
                    <h3>新手指南</h3>
                    <p>完美準備<br>以創造美好的第一次</p>
                </a> <!-- /icon -->
                <a href="free.php?lang=cht" class="icon-item">
                    <div class="icon"></div>
                    <h3>免費體驗</h3>
                    <p>跨出第一步可以很容易<br>歡迎預約免費體驗</p>
                </a> <!-- /icon -->
                <a href="app.php?lang=cht" class="icon-item">
                    <div class="icon"></div>
                    <h3>行動APP</h3>
                    <p>無論您在哪裡<br>隨時隨地預訂您的課程</p>
                </a> <!-- /icon -->
            </div> <!-- /inline -->
        </div>
    </div>


    <script src="<?php bloginfo('template_url')?>/js/index.js"></script>
    <!------- 结束 ---------->

<script>
    $(document).ready(function() {
        $.homeSlide();
        $.homeEvent();
    });
</script>

<?php
//页尾
include "footer.php";
?>