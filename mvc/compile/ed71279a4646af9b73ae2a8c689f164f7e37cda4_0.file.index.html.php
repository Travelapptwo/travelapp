<?php
/* Smarty version 3.1.30, created on 2017-07-19 09:58:01
  from "D:\wamp\www\travelapp\mvc\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596f11092180e4_66251588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed71279a4646af9b73ae2a8c689f164f7e37cda4' => 
    array (
      0 => 'D:\\wamp\\www\\travelapp\\mvc\\template\\admin\\index.html',
      1 => 1500449186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596f11092180e4_66251588 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <style>
        .box{
            width: 500px;
            height: 300px;
            margin: 100px auto;
        }
    </style>
</head>
<body>
<div class="box">
<form action="index.php?m=admin&f=login&a=check" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">用户名</label>
        <input name="username" type="text" class="form-control" id="exampleInputEmail1" placeholder="USER">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">密码</label>
        <input name="userpass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label>验证码</label>
        <input name="code" type="text" class="form-control"  placeholder="验证码">
        <img src="index.php?m=admin&f=login&a=code" alt="" onclick="this.src='index.php?m=admin&f=login&a=code&code='+Math.random()" style="margin-top: 10px">

    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</body>
</html><?php }
}
