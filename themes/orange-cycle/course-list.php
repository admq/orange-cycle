<?php
/**
 * Created by PhpStorm.
 * Template Name: 课程表
 * User: larry
 * Date: 16/4/18
 * Time: 下午8:56
 */
?>

    <!--页头-->
<?php get_header(); ?>
    <style>
        #course-home {
            width: 100%;
            margin-bottom: 120px;
        }

        .week {
            height: 60px;
            background-color: #ff7143;
            width: 100%;
        }
        .week-fixed {
            position: fixed;
            left: 0;
            top: 0;
        }

        .week-pack {
            margin: 0 auto;
            width: 80%;
            height: 60px;
            line-height: 60px;
        }

        .triangle-left {
            width: 0;
            height: 0;
            border-radius: 2px;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-right: 10px solid #FFFFFF;
            margin-left: 10px;
            margin-top: 10px;
            position: absolute;
            left: 7%;
        }

        .triangle-right {
            width: 0;
            height: 0;
            border-radius: 2px;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-left: 10px solid #FFFFFF;
            margin-left: 16px;
            margin-top: 10px;
        }
        .pack {
            height: 40px;
            width: 40px;
            border-radius: 20px;
            cursor: pointer;
            float: left;
            margin-top: 10px;
            text-align: center;
        }
        .pack-left {
            position: absolute;
            left: 7%;
        }
        .pack-right {
            position: absolute;
            right: 7%;
        }

        .pack:hover {
            background-color: #df5a31;
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            -o-transition: all 0.4s;
        }

        .week-item {
            font-size: 25px;
            color: #ffc0ac;
            text-align: center;
            width: 13%;
            height: 100%;
            float: left;
            margin: 0 5px;
        }
        .week-item .tex {
            line-height: 20px;
            height: 100%;
            margin-top: 10px
        }
        .heightlight {
            background-color: #e96b3c;
        }

        .course {
            margin: 0 auto;
            width: 80%;
        }
        .course .course-item {
            width: 13%;
            height: 100%;
            float: left;
            text-align: center;
            margin: 0 5px;
        }
        .course .course-item .course-item-li {
            width: 100%;
            height: 180px;
            background-color: #e3e3e2;
            margin: 8px 0 8px 0;
        }

    </style>

    <!------- 内容 ---------->
    <div id="course-home" class="section">
        <div class="title">你的课程</div>
        <div id="week" class="week">
            <div class="pack pack-left">
                <div class="triangle-left"></div>
            </div>
            <div class="pack pack-right">
                <div class="triangle-right"></div>
            </div>
            <div class="week-pack">
                <div class="week-item">
                    <div class="tex">
                        <span>4.18</span><br><span style="font-size: 12px;">星期一</span>
                    </div>
                </div>
                <div class="week-item">
                    <div class="tex">
                        <span>4.19</span><br><span style="font-size: 12px;">星期二</span>
                    </div>
                </div>
                <div class="week-item">
                    <div class="tex">
                        <span>4.20</span><br><span style="font-size: 12px;">星期三</span>
                    </div>
                </div>
                <div class="week-item">
                    <div class="tex">
                        <span>4.21</span><br><span style="font-size: 12px;">星期四</span>
                    </div>
                </div>
                <div class="week-item">
                    <div class="tex">
                        <span>4.22</span><br><span style="font-size: 12px;">星期五</span>
                    </div>
                </div>
                <div class="week-item heightlight">
                    <div class="tex">
                        <span>4.23</span><br><span style="font-size: 12px;">星期六</span>
                    </div>
                </div>
                <div class="week-item">
                    <div class="tex">
                        <span>4.24</span><br><span style="font-size: 12px;">星期日</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="course">
            <?php do_action('oc_do_db'); ?>
            <!--<div class="course-item">
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
            </div>
            <div class="course-item">
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
            </div>
            <div class="course-item">
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
            </div>
            <div class="course-item">
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
            </div>
            <div class="course-item">
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
            </div>
            <div class="course-item">
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
            </div>
            <div class="course-item">
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
            </div>-->
            <div style="clear: both;display: block"> </div>
        </div>

    </div>


    <!------- 结束 ---------->

<script>
    function changePos(id,height){
        var obj = document.getElementById(id);
        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        if(scrollTop < height){
            $(obj).removeClass("week-fixed");
        }else{
            $(obj).addClass("week-fixed");
        }
    }
    var height = document.getElementById("week").offsetTop;



    $(document).ready(function() {
        window.onscroll = function(){
            changePos("week", height);
        };
    });

</script>

<?php get_footer(); ?>