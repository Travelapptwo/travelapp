<?php
/* Smarty version 3.1.30, created on 2017-07-25 03:05:49
  from "E:\sahd\wamp\www\5.26\mvc\template\index\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5976996d0d7701_98125401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15c33796517a6bfcd5b4a4b56f5502dc98b306aa' => 
    array (
      0 => 'E:\\sahd\\wamp\\www\\5.26\\mvc\\template\\index\\register.html',
      1 => 1500894178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5976996d0d7701_98125401 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/basic.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/register.css">
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
/register.js"><?php echo '</script'; ?>
>
    <style>

        body, html {
            width: 100%;
            height: 100%;
            background-image: url("<?php echo IMG_PATH;?>
/zj-bj.png");
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .nr {
            padding: 0.5rem;
            padding-bottom: 0.9rem;
            width: 6rem;
            height: 7.4rem;
            position: absolute;
            left: 0;
            right: 0;
        }

        .nr {
            padding: 0.5rem;
            padding-bottom: 0.9rem;
            width: 6rem;
            height: 7.4rem;
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            bottom: 2rem;
            border-radius: 5px;
            background-color: white;
            background-image: url("<?php echo IMG_PATH;?>
/zj-xbj.png");
            background-size: cover;
            background-repeat: no-repeat;
        }

    </style>
</head>
<body>
<div class="nr">
    <form class="form">
        <div class="unametishi">
            <img src="<?php echo IMG_PATH;?>
/dyl_gantanhao.png" alt="">
            <p></p>
        </div>
        <div class="top">..Username</div>
        <div class="bottom">
            <div class="left">
                <img src="<?php echo IMG_PATH;?>
/dyl_username.png" alt="">
            </div>
            <div class="right">
                <input type="text" placeholder="请输入用户名" name="uname">
            </div>
        </div>
        <div class="top">..Phone number</div>
        <div class="bottom">
            <div class="left">
                <img src="<?php echo IMG_PATH;?>
/dyl_phone.png" alt="">
            </div>
            <div class="right">
                <input type="text" placeholder="请输入手机号" name="uphonenum">
            </div>
            <div class="top">..Password</div>
        </div>
        <div class="top">..Password</div>
        <div class="bottom">
            <div class="left">
                <img src="<?php echo IMG_PATH;?>
/dyl_password.png" alt="">
            </div>
            <div class="right">
                <input type="password" placeholder="请输入密码" name="upass">
            </div>
        </div>
        <div class="top">..Password Again</div>
        <div class="bottom">
            <div class="left">
                <img src="<?php echo IMG_PATH;?>
/dyl_password.png" alt="">
            </div>
            <div class="right">
                <input type="password" placeholder="请再次输入密码" name="upass2">
            </div>
        </div>
    </form>
    <div class="xyb">
        <span>下一步</span>
        <span>NEXT</span>
    </div>
</div>
<a href="JavaScript:history.go(-1)">
    <div class="back"><img src="<?php echo IMG_PATH;?>
/dyl_fanhui.png" alt=""></div>
</a>
</body>
</html><?php }
}
