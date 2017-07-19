<?php
/* Smarty version 3.1.30, created on 2017-07-19 09:58:33
  from "D:\wamp\www\travelapp\mvc\template\admin\addPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596f1129118398_04126042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f2c5982694d7932767690de6de2b6532ebd4bab' => 
    array (
      0 => 'D:\\wamp\\www\\travelapp\\mvc\\template\\admin\\addPos.html',
      1 => 1500449186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596f1129118398_04126042 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php?m=admin&f=position&a=addCon" method="post">
    名称: <input type="text" name="posname"><br>
    <input type="submit" value="添加">
</form>
</body>
</html><?php }
}
