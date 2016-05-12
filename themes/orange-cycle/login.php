<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 16/4/30
 * Time: 下午11:46
 */
?>
<style>
    .popLogin .left {
        float: left;
        width: 444px;
        height: 400px;
        margin-top: 50px;
        border-right: 1px solid #b3b3b3;
    }

    .popLogin .right {
        float: right;
        width: 445px;
        height: 400px;
        margin-top: 50px;
    }

    .popLogin span {
        font-size: 18px;
        color: #555555
    }
</style>
<!-- 登录/注册 弹窗 -->
<div id="popBg" class="popBg"></div>
<div class="popLogin">
    <div class="left">
        <div class="title">登录</div>
        <span>Welcome Back</span>
        <form id="login_form" action="<?php echo home_url()?>/index.php/new-user/register" method="post">
            <input name="submit_type" value="login" hidden="hidden"/>
            <div>
                <input type="text" name="user_name" placeholder="输入手机号码或者邮箱"/>
            </div>
            <div>
                <input type="password" name="user_pass" placeholder="输入密码"/>
            </div>
            <div>
                <input type="submit" value="Sign In"/>
            </div>
        </form>
    </div>
    <div class="right">
        <div class="title">注册</div>
        <span>Join Us</span>
        <form id="register_form" action="<?php echo home_url()?>/index.php/new-user/register" method="post">
            <input name="submit_type" value="register" hidden="hidden"/>
            <div>
                <input type="text" name="user_tel" placeholder="输入手机号码"/>
            </div>
            <div>
                <input type="text" name="user_email" placeholder="输入邮箱地址"/>
            </div>
            <div>
                <input type="password" name="user_pass" placeholder="输入密码"/>
            </div>
            <div>
                <input type="submit" value="Sign Up"/>
            </div>
        </form>
    </div>
</div>