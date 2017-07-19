<?php
/* Smarty version 3.1.30, created on 2017-07-19 12:06:12
  from "D:\wamp\www\travelapp\mvc\template\index\logins.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596f2f1497a457_18565133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92799f07ac145f0836912d797ced5fd1c7713d22' => 
    array (
      0 => 'D:\\wamp\\www\\travelapp\\mvc\\template\\index\\logins.html',
      1 => 1500458766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596f2f1497a457_18565133 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/basic.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/logins.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/logins.js"><?php echo '</script'; ?>
>
    <style>
        .bigbox {
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: fixed;
            background-image: url("<?php echo IMG_PATH;?>
/dlbeijing.png");
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
<div class="bigbox">
    <div class="dl" id="Username">
        <div class="dltop">
            <div class="dlname">&#xe616;</div>
            <div class="dlpass">&#xe7bd;</div>
        </div>
        <div class="dlzhong">
            <div class="zTop">·· Username</div>
            <div class="zBottom">
                <input type="text" placeholder="您可以输入手机号或者邮箱号" name="uname">
                <div class="line"></div>
            </div>
            <div class="tishi">
                <img src="<?php echo IMG_PATH;?>
/sy_tishi.png" alt="">
                <p>请输入用户名！</p>
            </div>
        </div>
        <div class="zhmm">··找回密码</div>
        <div class="dlCon">下一步<br>NEXT</div>
        <a class="resCon" href="index.php?m=index&f=index&a=register">
            <p>注册</p>
            <p>REGIST</p>
        </a>
    </div>
    <div class="dl" id="Userpassword">
        <div class="dltop">
            <div class="dlname" style="background: #40e94c">&#xe616;</div>
            <div class="dlpass" style="background: #4063e9">&#xe7bd;</div>
        </div>
        <div class="dlzhong">
            <div class="zTop">·· Userpassword</div>
            <div class="zBottom">
                <input type="password" placeholder="您可以输入您的密码" name="upass">
                <div class="line"></div>
                <img src="<?php echo IMG_PATH;?>
/dyl_dlcg.png" alt="">
            </div>
            <div class="tishi">
                <img src="<?php echo IMG_PATH;?>
/sy_tishi.png" alt="">
                <p>请输入密码！</p>
            </div>
        </div>
        <div class="zhmm">··找回密码</div>
        <div class="dlbtn">登陆<br>LOGIN</div>
        <a class="resCon" href="index.php?m=index&f=index&a=register">
            <p>注册</p>
            <p>REGIST</p>
        </a>
    </div>
    <!--第三方登录-->
    <div class="dsf">
        <p>
            <span class="xian"></span>
            使用第三方登陆
            <span class="xian"></span>
        </p>
        <div class="wx">
            <div class="wxleft">&#xe63d;</div>
            <div class="wxrifht">
                <div class="wxtop">微信</div>
                <div class="wxbottom">WECHAT</div>
            </div>
        </div>
        <div class="qq">
            <div class="wxleft">&#xe635;</div>
            <div class="wxrifht">
                <div class="wxtop">QQ</div>
                <div class="wxbottom">DENQLO</div>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }
}
