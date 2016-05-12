<?php
/**
 * Plugin Name: orange-cycle register
 * Description: 用户注册插件
 * Plugin URI: http://www.orange-cycle.com
 * Author URI: http://www.orange-cycle.com
 * License: GPL
 * Version: 1.0
 * User: larry
 * Date: 16/5/1
 * Time: 上午9:48
 */

// =============================================

/**
 * 用户行为分发函数
 */
add_action('oc_register', 'orange_cycle_dispatch');

/**
 * 登录页面打印用户登录状态
 */
add_action('oc_get_loginstate', 'orange_cycle_get_loginstate');


/**
 * 数据库操纵
 */
add_action('oc_do_db', 'orange_cycle_course_list');

function orange_cycle_course_list() {
    global $wpdb;
    $res = $wpdb->get_results("select * from wp_oc_course");

    /*
     *  <div class="course-item">
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
                <div class="course-item-li"></div>
            </div>
     * */

    echo '<div class="course-item">';
    foreach ($res as $item) {
        echo '<div class="course-item-li">';
            echo $item->courseName.'<br>';
            echo the_time($item->startTime).' - '.the_time($item->endTime).'<br>';
//            echo $item->endTime.'<br>';
            echo $item->teacher.'<br>';
        echo '</div>';
    }
    echo '</div>';
}

function orange_cycle_current_week() {

}


function orange_cycle_dispatch() {
    $type = $_POST['submit_type'];
    if(!$type) $type = $_GET['submit_type'];
    switch ($type) {
        case 'register':
            orange_cycle_register();
            break;
        case 'login':
            orange_cycle_login();
            break;
        case 'logout':
            orange_cycle_logout();
            break;
        default:
            echo 'default';
            break;
    }
}

function orange_cycle_get_loginstate() {
    @session_start();
    if(!$_SESSION['user']) {
        echo '<li><a id="login_btn" href="#">登  录</a></li>';
    } else {
        echo '<li style="font-size: 14px;">';
        echo '<a href="#"><b>' . $_SESSION['user']['user_login'] . '</b></a>&nbsp;';
        echo '<a href="'.home_url().'/index.php/new-user/register?submit_type=logout">注销</a>';
        echo '</li>';
    }
}

function orange_cycle_logout() {
    session_start();
    $_SESSION['user'] = null;
    wp_redirect(get_home_url());
}

function orange_cycle_login() {
    $name = $_POST['user_name'];
    $pass = $_POST['user_pass'];

    $val = orange_cycle_login_validation($name, $pass);
    if($val != '') {
        echo $val;
    } else {
        $user_data = get_user_by('login', $name);
        if(!$user_data) $user_data = get_user_by('tel', $name);
        if(!$user_data) $user_data = get_user_by('email', $name);
        if (!$user_data) {
            echo '没有此用户';
            return;
        }
        require_once('./wp-includes/class-phpass.php');
        $oc_hasher = new PasswordHash(8, TRUE);
        $re = $oc_hasher->CheckPassword($pass,$user_data->user_pass);
        if ($re) {
            $user = array(
                'user_login'    =>   $name,
                'user_email'    =>   $user_data->user_email,
                'user_tel'     =>   $user_data->user_tel
            );

            session_start();
            $_SESSION[session_id()] = true;
            $_SESSION['user'] = $user;
            wp_redirect(get_home_url());
        } else {
            echo '密码错误';
        }
    }
}

function orange_cycle_login_validation($username, $password) {
    $msg = '';
    if(!$username || '' === $username) {
        $msg = '账户不能为空';
    }
    if(!$password || '' === $password) {
        $msg = '密码不能为空';
    }
    return $msg;
}

function orange_cycle_register() {
    $username = $_POST['user_login'];
    $email = $_POST['user_email'];
    $password = $_POST['user_pass'];
    $tel = $_POST['user_tel'];

    $userdata = array(
        'user_login'    =>   $tel,
        'user_email'    =>   $email,
        'user_pass'     =>   $password,
        'user_tel'      =>   $tel
    );
    if(orange_cycle_register_validation($tel,$password,$email,$tel)) {
        $user = wp_insert_user($userdata);
        wp_redirect(home_url());
    } else {
        echo 'user_login: ' . $username . '</br>' .
            'user_email: ' . $email . '</br>' .
            'user_pass: ' . $password . '</br>' .
            'user_tel: ' . $tel . '</br>';
    }
}

function orange_cycle_register_validation( $tel, $password, $email)  {
    global $reg_errors;
    $reg_errors = new WP_Error;
    $flag = true;

    if ( empty( $tel ) || empty( $password ) || empty( $email ) ) {
        $reg_errors->add('field', '请填写完整');
        $flag = false;
    }


    $temp = get_user_by('tel', $tel);

    if ( $temp ) {
        $reg_errors->add('user_tel', '抱歉, 该号码已经注册!');
        $flag = false;
    } else if(strlen($tel) !== 11) {
        $reg_errors->add('user_tel_invalid', '该号码无效!');
        $flag = false;
    } else if(strpos($tel, '1') !== 0) {
        $reg_errors->add('user_tel_invalid', '该号码无效!');
        $flag = false;
    }

    if ( !validate_username( $tel ) ) {
        $reg_errors->add('username_invalid', '抱歉, 用户名不合法!');
        $flag = false;
    }

    if ( strlen( $password ) < 5 ) {
        $reg_errors->add('password', '密码不得少于5个字符');
        $flag = false;
    }

    if ( !is_email( $email ) ) {
        $reg_errors->add('email_invalid', '邮箱不合法!');
        $flag = false;
    }

    if ( email_exists( $email ) ) {
        $reg_errors->add('email', '抱歉, 改邮箱已经被使用');
        $flag = false;
    }

    if ( is_wp_error( $reg_errors ) ) {

        foreach ( $reg_errors->get_error_messages() as $error ) {
            echo '<div>';
            echo '<strong>ERROR</strong>:';
            echo $error . '<br/>';
            echo '</div>';
        }
    }
    return $flag;
}


/**
 * 首页操作
 */
add_action('oc_index_list_img','orange_cycle_index_list_img');
/*读取首页轮播图片操作*/
function orange_cycle_index_list_img() {
    $home_slide =
        '<div id="home-slide" class="section">' .
            '<a href="#"><img src="'.getImgPath().'/img/1.jpg"/></a>' .
            '<a href="#"><img src="'.getImgPath().'/img/2.jpg"/></a>' .
            '<a href="#"><img src="'.getImgPath().'/img/3.jpg"/></a>' .
            '<div id="banner-slide-pager" class="slide-pager">' .
                '<ul>' .
                    '<li><a href="javascript:void(0)">1</a></li>' .
                    '<li><a href="javascript:void(0)">2</a></li>' .
                    '<li><a href="javascript:void(0)">3</a></li>' .
                '</ul>' .
            '</div>' .
        '</div>';

    echo $home_slide;
}