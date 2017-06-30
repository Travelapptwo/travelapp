<?php
/* Smarty version 3.1.30, created on 2017-06-30 09:23:04
  from "E:\wamp\www\php\mvc\template\admin\addPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5955fc5831a2c8_51605504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbc064206a2112c51fe771ee2de2846f507b912d' => 
    array (
      0 => 'E:\\wamp\\www\\php\\mvc\\template\\admin\\addPos.html',
      1 => 1498804087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5955fc5831a2c8_51605504 (Smarty_Internal_Template $_smarty_tpl) {
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
