<?php
/* Smarty version 3.1.30, created on 2017-06-29 05:13:20
  from "E:\wamp\www\php\mvc\template\admin\addRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595470502af997_10788101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e15081419febff074d6c606ebc4411ed32ddf8f0' => 
    array (
      0 => 'E:\\wamp\\www\\php\\mvc\\template\\admin\\addRole.html',
      1 => 1498705958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595470502af997_10788101 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
<form class="form-horizontal" action="index.php?m=admin&f=role&a=addCon" method="post">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">增加角色</label>
        <div class="col-sm-10">
            <input type="text" name="rname" class="form-control" id="inputEmail3"  placeholder="角色">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加角色</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
