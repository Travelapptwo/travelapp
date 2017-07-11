<?php
/* Smarty version 3.1.30, created on 2017-07-09 05:12:16
  from "E:\sahd\wamp\www\php\mvc\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59619f10e30989_34197102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af729f9fe43d9fc42d4f4c5a0630a13bee7f36a3' => 
    array (
      0 => 'E:\\sahd\\wamp\\www\\php\\mvc\\template\\index\\login.html',
      1 => 1499569911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59619f10e30989_34197102 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">

    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/basic.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <style>
        body, html {
            width: 100%;
            height: 100%;
        }

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

        .box {
            width: 5.4rem;
            height: 1rem;
            background: #3B3738;
            position: absolute;
            right: 0;
            left: 0;
            margin: auto;
            bottom: 1.5rem;
            border-radius: 0.5rem;
            border: 0.01rem solid #3080E6;
            font-size: 0.2rem;

            padding: 0.1rem;
        }

        .dl {
            color: #FFFFFF;
            width: 45%;
            display: inline-block;
            height: 0.8rem;
            text-align: center;
            line-height: 0.3rem;
            background: #3284ED;
            padding: 0.1rem;
            border-radius: 0.8rem;
        }

        .zc {
            color: #FFFFFF;
            width: 45%;
            display: inline-block;
            float: right;
            height: 0.8rem;
            text-align: center;
            line-height: 0.3rem;
            background: #3284ED;
            padding: 0.1rem;
            border-radius: 0.8rem;
        }
    </style>
</head>
<body>
<div class="bigbox">
    <div class="box">
        <a href="index.php?f=index&a=logins">
            <div class="dl">
                <p>登陆</p>
                <p>DENGLU</p>
            </div>
        </a>
        <a href="index.php?f=index&a=register">
            <div class="zc">
                <p>注册</p>
                <p>REGISTER</p>
            </div>
        </a>
    </div>
</div>
</body>
</html><?php }
}
