/**
 * Created by larry on 16/4/21.
 */

(function($){

    $.extend({
        /**
         * 图片轮播
         */
        homeSlide: function () {
            var imgNum = 0;
            var imgs = $("#home-slide img");
            $(imgs[0]).show();
            var currentImg = $(imgs[imgNum]);
            $("#banner-slide-pager li:eq("+imgNum+")").addClass("current");
            imgNum++;

            (function slide () {
                setTimeout(function () {
                    currentImg.slideUp(function() {
                        currentImg.hide();
                    });
                    $(imgs[imgNum]).slideDown(function() {
                        currentImg = $(imgs[imgNum]);

                        $("#banner-slide-pager li").removeClass("current");
                        $("#banner-slide-pager li:eq("+imgNum+")").addClass("current");

                        imgNum++;
                        if(imgNum >= imgs.length) imgNum = 0;
                        slide();
                    });
                }, 3000);
            }());

            //右侧按钮点击事件
            $("#banner-slide-pager li a").click(function() {
                imgNum = parseInt($(this).text()) - 1;
            });
        },
        /**
         * 主题活动
         */
        homeEvent: function() {
            var currentItem = $("#event-cycle .event-item:eq(0)");
            currentItem.show();
            $("#home-event .pager a").click(function() {
                var num = parseInt($(this).text()) - 1;
                currentItem.slideUp(function() {
                    currentItem.hide();
                });
                $("#event-cycle .event-item:eq("+num+")").slideDown(function() {
                    currentItem = $("#event-cycle .event-item:eq("+num+")");
                    $("#home-event .pager li").removeClass("current");
                    $("#home-event .pager li:eq("+num+")").addClass("current");
                });
            });
        },

        /**
         * 登录/注册
         */
        popLogin: function() {
            $("#login_btn").click(function() {
                $(".popBg").show();
                $(".popLogin").show();

                $(".popBg").click(function() {
                    $(".popBg").hide();
                    $(".popLogin").hide();
                });
            });
        }
    });
})(jQuery);

/**
 * 全局生效
 */
$(document).ready(function() {
    $.popLogin();
});
