<?php
/* Smarty version 3.1.30, created on 2017-07-12 03:27:38
  from "F:\wamp\www\travelapp\mvc\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59657b0a9854e9_78972325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a86d28c1138beb699e1b862ee8fe5941be011d9' => 
    array (
      0 => 'F:\\wamp\\www\\travelapp\\mvc\\template\\index\\login.html',
      1 => 1499768272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59657b0a9854e9_78972325 (Smarty_Internal_Template $_smarty_tpl) {
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
/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
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
<?php if ($_smarty_tpl->tpl_vars['indexLogin']->value) {
echo '<script'; ?>
>
    alert("您已登录");location.href="index.php"
<?php echo '</script'; ?>
>
<?php } else { ?>
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
<?php }?>
</html><?php }
}
