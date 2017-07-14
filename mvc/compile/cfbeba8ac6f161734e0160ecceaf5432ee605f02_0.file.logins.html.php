<?php
/* Smarty version 3.1.30, created on 2017-07-12 05:40:18
  from "F:\wamp\www\travelapp\mvc\template\index\logins.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59659a22eb1748_32940089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfbeba8ac6f161734e0160ecceaf5432ee605f02' => 
    array (
      0 => 'F:\\wamp\\www\\travelapp\\mvc\\template\\index\\logins.html',
      1 => 1499827038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59659a22eb1748_32940089 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="dlzhong" >
            <div class="zTop">·· Username</div>
            <div class="zBottom">
                <input type="text" placeholder="您可以输入手机号或者邮箱号" name="uname">
            </div>
            <div class="tishi">
                <p>请输入用户名！</p>
            </div>
        </div>
        <div class="zhmm">··找回密码</div>
        <div class="dlCon">下一步<br>LOGIN</div>
        <a class="resCon" href="index.php?m=index&f=index&a=register">
            <p>注册</p>
            <p>REGIST</p>
        </a>
    </div>

    <div class="dl" id="Userpassword">
        <div class="dltop">
            <div class="dlname">&#xe616;</div>
            <div class="dlpass">&#xe7bd;</div>
        </div>
        <div class="dlzhong" >
            <div class="zTop">·· Userpassword</div>
            <div class="zBottom">
                <input type="password" placeholder="您可以输入您的密码" name="upass">
            </div>
            <div class="tishi">
                <p>密码不能为空！</p>
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
