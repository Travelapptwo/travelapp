<?php
/* Smarty version 3.1.30, created on 2017-08-07 05:47:58
  from "E:\sahd\wamp\www\5.26\mvc\template\admin\addPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5987e2ee94ae14_46131157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0560ec3f9bd3f9dbbbd28d43eb51eb5c656f6c69' => 
    array (
      0 => 'E:\\sahd\\wamp\\www\\5.26\\mvc\\template\\admin\\addPos.html',
      1 => 1502077664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5987e2ee94ae14_46131157 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/iframe.js"><?php echo '</script'; ?>
>
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
