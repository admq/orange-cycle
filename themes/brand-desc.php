<?php
/**
 * Created by PhpStorm.
 * Template Name: 品牌介绍
 * User: larry
 * Date: 16/4/18
 * Time: 下午8:56
 */
?>

<!--页头-->
<?php get_header(); ?>


    <!------- 内容 ---------->

    <div id="brand-slide" class="section">
        <div class="title">邀你跟著音樂動 更被音樂感動</div>
    </div>

    <div id="desc-content" class="section">
        <div class="section1">
            <div class="title">品牌使命</div>
            <strong>以音樂出發 帶動身心靈感受的全身運動<br>創造出超越體能訓練的正向力量</strong>
            <img src="<?php bloginfo('template_url')?>/imgs/brand-desc-1.jpg" width="950" height="230" alt="">
            <blockquote>SPACE CYCLE 標誌是單車、卡帶、音響、音符的整體精神縮影，也是品牌承諾：<br>以熱愛音樂的初衷，不斷製造出音樂主題課程，更新你的生活風格筆記</blockquote>
            <p>品牌以音樂為靈魂，延續 SPACE YOGA 創立 10 年來堅持的內涵與文化<br>創造出 SPACE CYCLE  一個時尚 X 社交 X 健身 X 藝術 的全新概念空間<br>全天候提供 CYCLE / BARRE / YOGA 課程</p>
        </div>
        <div class="section2">
            <div class="title">课程简介</div>
            <ul class="tab">
                <li><a href="#cycle" class="active"><span>CYCLE</span></a></li>
                <li><a href="#barre" class=""><span>BARRE</span></a></li>
            </ul>

            <div class="caption" style="width: 288px; height: 204px; overflow: hidden;">
                <div class="slide-item" style="position: absolute; top: 0px; left: -288px; display: none; z-index: 2; opacity: 1;">
                    <h2>Cycle</h2>
                    <p>結合室內單車 ／ 重量訓練 ／ 瑜珈延展</p>
                </div>
                <div class="slide-item" style="position: absolute; top: 0px; left: 0px; display: block; z-index: 3; opacity: 1;">
                    <h2>BARRE</h2>
                    <p>結合芭蕾/ 皮拉提斯/ 流行音樂 </p>
                </div>
            </div>

            <div class="about-cycle" style="position: relative; width: 980px; height: 900px;">
                <section class="cycle-item" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 2; opacity: 0;">
                    <div class="img"><img src="http://spacecycle.blob.core.windows.net/web/gyVWty4PA5X8jS4fK7TxNzPYu9bbxg5Tr2T5rU8u.jpg" width="980" height="450" alt=""></div>
                    <div class="text">
                        <strong>4D 劇場環境裡 每堂課都是一場 live show 更是你專注投入毫無保留的自我 PK 戰</strong>

                        <p>音樂捧著你的手你的腿，同步呼吸在節拍旋律裡，一場 PK 一次超越<br>燃燒的 800 卡路里比不上內心的滿足及暢快感<br>流了半堂課的汗遠不及眼角的 happy tears 美好<br>最棒的是，數著節拍便忘卻了時間感，45 &amp; 60 分鐘裡 快速修復身心<br>音樂太美、運動太迷人，踩踏開始，便是一場不會結束的旅行</p>
                    </div>
                </section>
                <section class="cycle-item" style="position: absolute; top: 0px; left: 0px; display: block; z-index: 3; opacity: 1;">
                    <div class="img"><img src="http://spacecycle.blob.core.windows.net/web/OgKKXb3YSXbdqHdUctddMxdTAhUxEGOgEPkEDFJe.jpg" width="980" height="450" alt=""></div>
                    <div class="text">
                        <strong>美國、澳洲女性紛紛投入這項練習 熱潮正開  SPACE 獨家引進 Xtend Barre 課程</strong>

                        <p>手扶把杆進行芭蕾動作延展身體線條，<br>運用彈力球訓練核心肌群並釋放身體壓力<br>60 &amp; 75 分鐘課程中，可放鬆心情與穩定情緒<br>找回內心的自在感，同時將兒時芭蕾夢轉化為健康練習</p>
                    </div>
                </section>
            </div>

            <a href="#prev" class="slide-nav-prev arrow"><span></span></a>
            <a href="#next" class="slide-nav-next arrow"><span></span></a>

            <div class="control">
                <a href="free.php?lang=cht" class="btn">立即预约体验</a>
                <a href="member_info.php?lang=cht" class="btn">了解会员制度</a>
            </div>
        </div>
    </div>

    <!------- 结束 ---------->



<?php get_footer(); ?>