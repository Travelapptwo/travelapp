<?php
/* Smarty version 3.1.30, created on 2017-06-28 03:18:36
  from "E:\wamp\www\php\mvc\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595303ecac6028_05354000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1854691d92df145f7c44396aab2d90f6df1de463' => 
    array (
      0 => 'E:\\wamp\\www\\php\\mvc\\template\\admin\\index.html',
      1 => 1498612716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595303ecac6028_05354000 (Smarty_Internal_Template $_smarty_tpl) {
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
        <input name="code" type="text" class="form-control"  placeholder="CODE">
        <img src="index.php?m=admin&f=login&a=code" alt="" onclick="this.src='index.php?m=admin&f=login&a=code&code='+Math.random()" style="margin-top: 10px">

    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</body>
</html><?php }
}
