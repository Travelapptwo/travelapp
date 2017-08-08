<?php
/* Smarty version 3.1.30, created on 2017-08-07 05:52:22
  from "E:\sahd\wamp\www\5.26\mvc\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5987e3f640c0f3_26178856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1337319bb704615d7dbfdd19e34349ded642ceae' => 
    array (
      0 => 'E:\\sahd\\wamp\\www\\5.26\\mvc\\template\\admin\\main.html',
      1 => 1502077940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5987e3f640c0f3_26178856 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/iframe.js"><?php echo '</script'; ?>
>
    <style>
        a {
            text-decoration: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        body, html {
            width: 100%;
            height: 100%;
            background-image: url("/imgs/body-bg.png");
            color: #838383;
        }

        header {
            width: 100%;
            background: #00ba8b;
            overflow: hidden;
            box-shadow: 0px 1px 1px #888888;

        }

        header p {
            float: left;
            padding: 30px 20px 20px;
            font-size: 20px;
            line-height: 1;
            color: #ffffff;
        }

        .headRight {
            float: right;
            padding: 2px 10px;
            margin-top: 24px;
            background: #008866;
            border: 0;
            color: #fff;
            border-radius: 20px;
        }

        .ssbtn {
            background: #008866;
            border: 0;
            outline: none;

        }

        ::-webkit-input-placeholder { /* WebKit browsers */
            color: #686868;
        }

        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color: #686868;
        }

        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            color: #686868;
        }

        :-ms-input-placeholder { /* Internet Explorer 10+ */
            color: #686868;
        }

        header span {
            float: right;
            margin-right: 40px;
            margin-top: 28px;
            font-size: 16px;
            margin-left: 20px;
            color: whitesmoke;
        }

        header span a {
            color: whitesmoke;
        }

        nav {
            width: 100%;
            border-left: 1px solid #d6d6d6;
            background: #FFFFFF;
        }

        nav ul {
            list-style: none;
            box-sizing: border-box;
            margin: 0;
            padding-left: 100px;
        }

        nav ul li {

            display: inline-block;
            min-width: 90px;
            height: 60px;
            padding-top: 5px;
            margin: 0;
            text-align: center;
            list-style: none;
            border-left: 1px solid #d9d9d9;

        }

        nav ul li:nth-child(1) {
            border-bottom: 3px solid #ff7f74;
        }

        nav ul li a {
            display: block;
            height: 100%;
            padding: 0 15px;
            font-size: 12px;
            font-weight: bold;
            color: #b2afaa;
        }

        nav ul li a:hover {
            color: #726f6a;
        }

        nav ul li a span {
            display: inline-block;
            width: 100%;
            font-size: 12px;

        }

        .icon {
            font-family: 'iconfont';
            font-size: 20px;

        }

        footer {
            width: 100%;
            padding: 20px;
            border-top: 1px solid #292929;
            background: #111;
            color: #999;

        }

        footer p {
            margin: 0;
        }

        footer p a {
            color: #999;

        }

        iframe {
            width: 90%;
            min-height: 500px;
            margin-left: 5%;

        }
    </style>

</head>
<body>
<header>
    <p><strong>欢迎来到 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 来到后台管理系统</strong></p>
    <span><a href="index.php?m=admin&f=login&a=logout" class="out">安全退出</a></span>
    <div class="headRight">
        <input type="text" class="ssbtn" placeholder="search">
    </div>
</header>
<nav>
    <ul>
        <li>
            <a href="index.php?m=admin&f=user&a=add" target="iframe"><span class="icon">&#xe6b3;</span>
                <span>添加用户</span></a>
        </li>
        <li>
            <a href="index.php?m=admin&f=user&a=chakan" target="iframe"><span class="icon">&#xe6b3;</span>
                <span>查看用户</span></a>
        </li>
        <li>
            <a href="index.php?m=admin&f=shop&a=add" target="iframe"><span class="icon">&#xe6b3;</span>
                <span>添加分类</span></a>
        </li>
        <li>
            <a href="index.php?m=admin&f=shop&a=lookfl" target="iframe"><span class="icon">&#xe6b3;</span>
                <span>查看分类</span></a>
        </li>
        <li>
            <a href="index.php?m=admin&f=shop&a=addshop" target="iframe"><span class="icon">&#xe6b3;</span>
                <span>添加商品</span></a>
        </li>
        <li>
            <a href="index.php?m=admin&f=shop&a=lookshop" target="iframe"><span class="icon">&#xe6b3;</span>
                <span>查看商品</span></a>
        </li>
        <li>
            <a href="index.php?m=admin&f=position&a=add" target="iframe"><span class="icon">&#xe6b3;</span>
                <span>添加位置</span></a>
        </li>
        <li>
            <a href="index.php?m=admin&f=lists&a=add" target="iframe"><span class="icon">&#xe6b3;</span>
                <span>查看位置</span></a>
        </li>
    </ul>
</nav>
<iframe src="index.php?m=admin&f=user&a=add" frameborder="0" name="iframe" id="iframeid"></iframe>
<footer>
    <p>如果有什么意见或建议请联系管理员QQ : <a href="#">1026583651</a></p>
</footer>
</body>
<?php echo '<script'; ?>
>
    $('nav ul li').click(function () {
        $('nav ul li').css("border-bottom", "0px");
        $(this).css("border-bottom", "3px solid #ff7f74");
    })


<?php echo '</script'; ?>
>
</html><?php }
}
