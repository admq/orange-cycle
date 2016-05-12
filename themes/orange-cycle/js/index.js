/**
 * Created by larry on 16/4/23.
 */

$(function(){
    if($("#home-imgs").length > 0){
        $("#home-imgs .photoList").show().css({"display":"table"});
    }
});

$(window).scroll(function(event) {
    var scrolltop1 = $(this).scrollTop();

    if(scrolltop1 > ($("#home-star").position().top - $("#home-star").height() + 300) && !$("#statistics").hasClass("show")){
        $("#statistics").addClass("show");
        var r = Raphael("holder", 540, 278),
            e = [],
            c = r.path("M0,0").attr({fill: "none", "stroke-width": 4, "stroke-linecap": "round"});

        var defOBJ = "#day",
            clr = "#FF693A";
        values = points(defOBJ);
        c.attr({path: values, stroke: clr});
        c.node.setAttribute("class","move");
        r.customAttributes.progress = function (v) {
            var len = c.getTotalLength();
            var point = c.getPointAtLength(v * len);
            return {
                transform: "t" + [point.x, point.y]
            };
        }
    }
});

function points(obj){
    var path = "",
        x = 0,
        pointsY = [];
    var range = $(obj).find(".bar-Chart").attr("data-range");

    $(obj).addClass("show");
    $(obj).find(".bar").each(function(index, element) {
        var watt = parseInt($(this).attr("data-watt"));
        var calories = parseInt($(this).attr("data-calories"));
        var avgwatt = parseInt($(this).attr("data-avgwatt"));
        var distance = parseInt($(this).attr("data-distance"));
        var avgrpm = parseInt($(this).attr("data-avgrpm"));
        var highrpm = parseInt($(this).attr("data-highrpm"));

        var showcalories = 0;
        if(calories < 0){
            showcalories = 0;
        }else{
            showcalories = calories;
        }

        // range = (height - 20) / 600;
        var point = parseInt(278 - (calories * range));
        pointsY[index] = point;

        $(this).find("span").animate({
            "height": (watt * range)
        },1300);

        if($(this).hasClass('disable')){
            $(".point-list").append('<div class="point disable" style="left:' + (index * 45 + 88) + 'px;" data-top="' + (point - 25) + '"></div>');
        }else{
            $(".point-list").append('<div class="point" style="left:' + (index * 45 + 88) + 'px;" data-top="' + (point - 25) + '"></div>');
        }

        if($(this).find("span").hasClass('current')){
            $(".data").append('<div class="block" style="left:' + (index * 45 - 10 + 88) + 'px; top: ' + (point - 80) + 'px; display: block"><div><strong>' + showcalories + '</strong>Calories</div></div>');
        }
    });

    $(".data").find(".point").not(".disable").hover(function() {
        $(obj).find(".bar").find('span.current').removeClass("current");
        $(obj).find(".day-list").find('.current').removeClass("current");

        var pointIndex = parseInt($(this).index());
        var hoverobj = $(obj).find(".bar:eq(" + pointIndex + ")");
        var showcalories = hoverobj.attr("data-calories");
        var watt1 = parseInt(hoverobj.attr("data-watt"));
        var avgwatt1 = parseInt(hoverobj.attr("data-avgwatt"));
        var distance1 = parseInt(hoverobj.attr("data-distance"));
        var avgrpm1 = parseInt(hoverobj.attr("data-avgrpm"));
        var highrpm1 = parseInt(hoverobj.attr("data-highrpm"));

        if(showcalories < 0){
            showcalories = 0;
        }
        var top = parseInt($(this).attr("data-top"));
        $(".block").remove();

        if(showcalories > 0){
            if(showcalories > 0){
                $(".data").append('<div class="block" style="left:' + (pointIndex * 45 - 10 + 88) + 'px; top: ' + (top - 60) + 'px"><div><strong>' + showcalories + '</strong>Calories</div></div>');
            }
        }

        $(".data").find(".block").fadeIn(300);
        $(obj).find(".day-list").find(".day:eq(" + pointIndex + ")").addClass("current");
        $(obj).find(".bar:eq(" + pointIndex + ")").find('span').addClass("current");

        $(obj).find(".number-wrap").find(".day-highwatt").html(watt1);
        $(obj).find(".number-wrap").find(".day-svgwatt").html(avgwatt1);
        $(obj).find(".number-wrap").find(".day-calories").html(showcalories);
        $(obj).find(".number-wrap").find(".day-distance").html(distance1);
        $(obj).find(".number-wrap").find(".day-maxrpm").html(highrpm1);
        $(obj).find(".number-wrap").find(".day-avgrpm").html(avgrpm1);

    }, function() {
        $(".block").remove();
    });

    pointsY[12] = pointsY[11];
    for (var i = -1; i < pointsY.length; i++) {
        if(i == -1){
            path += "M" + [x, pointsY[0] + 5] + "R";
        }else if(i == 0){
            x += 22;
            y = pointsY[i];
            path += "," + [x, y];
        }else if(i == 12){
            x += 22;
            y = pointsY[i];
            path += "," + [x, y];
        }else{
            x += 45;
            y = pointsY[i];
            path += "," + [x, y];
        }
    }
    return path;
}
