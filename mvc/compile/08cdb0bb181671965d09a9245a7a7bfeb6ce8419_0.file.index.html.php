<?php
/* Smarty version 3.1.30, created on 2017-06-27 13:31:59
  from "E:\wamp\www\php\mvc\template\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5952422f692535_12581376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08cdb0bb181671965d09a9245a7a7bfeb6ce8419' => 
    array (
      0 => 'E:\\wamp\\www\\php\\mvc\\template\\index.html',
      1 => 1498563118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5952422f692535_12581376 (Smarty_Internal_Template $_smarty_tpl) {
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
<form action="index.html?m=admin&f=login&a=code">
    <div class="form-group">
        <label for="exampleInputEmail1">用户名</label>
        <input name="username" type="email" class="form-control" id="exampleInputEmail1" placeholder="USER">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">密码</label>
        <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label>验证码</label>
        <input name="code" type="code" class="form-control"  placeholder="CODE">
        <img src="libs/demo.png" alt="" onclick="this.src=this.src+'?'+Math.random();">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</body>
</html><?php }
}
