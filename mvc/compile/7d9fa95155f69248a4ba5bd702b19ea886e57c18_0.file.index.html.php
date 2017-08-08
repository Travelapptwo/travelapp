<?php
/* Smarty version 3.1.30, created on 2017-08-07 05:48:51
  from "E:\sahd\wamp\www\5.26\mvc\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5987e3235fc6b5_25695037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d9fa95155f69248a4ba5bd702b19ea886e57c18' => 
    array (
      0 => 'E:\\sahd\\wamp\\www\\5.26\\mvc\\template\\admin\\index.html',
      1 => 1502077664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5987e3235fc6b5_25695037 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/iframe.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <style>
        body,html{
            width:100%;
            height:100%;
            background-image: url("/imgs/body-bg.png");
            color: #838383;
        }
        header{
            width:100%;
            background: #00ba8b;
            overflow: hidden;
            box-shadow: 0px 1px 1px #888888;

        }
        header p{
            float: left;
            padding: 30px 20px 20px;
            font-size: 20px;
            line-height: 1;
            color: #ffffff;
        }
        form{
            width: 380px;
            display: block;
            margin: 60px auto 0 auto;
            background: #f9f9f9;
            border: 1px solid #d5d5d5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            box-shadow: 0px 0px 2px #dadada, inset 0px -3px 0px #e6e6e6;
            padding:20px;
        }
        h2{
            margin-top: 0;
        }
        label{
            font-size: 13px;
            font-family: 'Open Sans';
            color: #838383;
        }
        .button{
            margin-left: 80%;
        }
    </style>
</head>
<body>
<header>
    <p><strong>欢迎来到 My Work 后台管理系统</strong></p>
</header>
<form action="index.php?m=admin&f=login&a=check" method="post">
    <h2>Administrators login</h2>
    <div class="form-group">
        <label >用户名：</label>
        <input name="username" type="text" class="form-control" id="exampleInputEmail1" placeholder="USER">
    </div>
    <div class="form-group">
        <label >密    码：</label>
        <input name="userpass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label>验证码</label>
        <input name="code" type="text" class="form-control"  placeholder="验证码">
        <img src="index.php?m=admin&f=login&a=code" alt="" onclick="this.src='index.php?m=admin&f=login&a=code&code='+Math.random()" style="margin-top: 10px">
    </div>

    <button type="submit" class="button btn btn-success btn-large">提  交</button>
</form>
</body>
</html><?php }
}
